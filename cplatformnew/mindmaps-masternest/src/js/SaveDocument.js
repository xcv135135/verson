/**
* Creates a new SaveDocumentView. This view renders a dialog where the user can
* save the mind map.
* 
* @constructor
*/
mindmaps.SaveDocumentView = function() {
  var self = this;

  var $dialog = $("#template-save").tmpl().dialog({
    autoOpen : false,
    modal : true,
    zIndex : 5000,
    width : 550,
    close : function() {
      // remove dialog from DOM
      $(this).dialog("destroy");
      $(this).remove();
    }
  });


  var $saveCloudStorageButton = $("#button-save-cloudstorage").button().click(
    function() {
      if (self.cloudStorageButtonClicked) {
        self.cloudStorageButtonClicked();
      }
    });

  var $localSorageButton = $("#button-save-localstorage").button().click(
    function() {
      if (self.localStorageButtonClicked) {
        self.localStorageButtonClicked();
      }
    });

  var $autoSaveCheckbox = $("#checkbox-autosave-localstorage").click(
    function() {
      if (self.autoSaveCheckboxClicked) {
        self.autoSaveCheckboxClicked($(this).prop("checked"));
      }
    });

  var $hddSaveButton = $("#button-save-hdd").button().downloadify({
    filename : function() {
      if (self.fileNameRequested) {
        return self.fileNameRequested();
      }///////////downloadify是一個client-side generation file的tool based on JavaScript and Flash ActionScript code
    },
    data : function() {
      if (self.fileContentsRequested) {
        return self.fileContentsRequested();
      }
    },
    onComplete : function() {
      if (self.saveToHddComplete) {
        self.saveToHddComplete();
      }
    },
    onError : function() {
      console.log("error while saving to hdd");
    },
    swf : 'media/downloadify.swf',
   downloadImage : 'img/transparent.png',
    width : 65,
    height : 29,
    append : true
   
  });

  this.setAutoSaveCheckboxState = function(checked) {
    $autoSaveCheckbox.prop("checked", checked);
  }

  this.showSaveDialog = function() {
    $dialog.dialog("open");
  };

  this.hideSaveDialog = function() {
    $dialog.dialog("close");
  };

  this.showCloudError = function(msg) {
    $dialog.find('.cloud-error').text(msg);
  }
};

/**
* Creates a new SaveDocumentPresenter. The presenter can store documents in the
* local storage or to a hard disk.
* 
* @constructor
* @param {mindmaps.EventBus} eventBus
* @param {mindmaps.MindMapModel} mindmapModel
* @param {mindmaps.SaveDocumentView} view
* @param {mindmaps.AutoSaveController} autosaveController
* @param {mindmaps.FilePicker} filePicker
*/
mindmaps.SaveDocumentPresenter = function(eventBus, mindmapModel, view, autosaveController, filePicker) {

  /**
  * Save in cloud button was clicked.
  */
  view.cloudStorageButtonClicked = function() {
    mindmaps.Util.trackEvent("Clicks", "cloud-save");

    filePicker.save({
      success: function() {
        view.hideSaveDialog();
      },
      error: function(msg) {
        view.showCloudError(msg);
      }
    });
  };

  /**
  * View callback when local storage button was clicked. Saves the document
  * in the local storage.
  * 
  * @ignore
  */
  view.localStorageButtonClicked = function() {
    mindmaps.Util.trackEvent("Clicks", "localstorage-save");

    var success = mindmapModel.saveToLocalStorage();
    if (success) {
      view.hideSaveDialog();
    } else {
      eventBus.publish(mindmaps.Event.NOTIFICATION_ERROR, "Error while saving to local storage");
    }
  };


  /**
  * View callback: Enables or disables the autosave function for localstorage.
  *
  * @ignore
  */
  view.autoSaveCheckboxClicked = function(checked) {
    if (checked) {
      autosaveController.enable();
    } else {
      autosaveController.disable();
    }
  }

  /**
  * View callback: Returns the filename for the document for saving on hard
  * drive.
  * 
  * @ignore
  * @returns {String}
  */
  view.fileNameRequested = function() {
    mindmaps.Util.trackEvent("Clicks", "hdd-save");

    return mindmapModel.getMindMap().getRoot().getCaption() + ".json";//jsontotxt
  };

  /**
  * View callback: Returns the serialized document.
  * 
  * @ignore
  * @returns {String}
  */
  view.fileContentsRequested = function() {
    var doc = mindmapModel.getDocument();
    var str="";
    str=doc.prepareSave().serialize();
    //alert(str);//////////////////////////顯示所傳送的json檔內容

var idarray="";

$( ".node-container" ).each(function( index ) {
 // alert($("#node-caption-"+this.id).text());
  
  var newid=(this.id).replace("node" , "node-caption")  ;
  idarray+=newid+",";
});

//alert(idarray);
     $.ajax({
          type: "POST",
          url: "jsontoArraynew.php",
          dataType : "json",
          data: ( { "json" : str} ),
          success: function(msg) {console.log(msg);savejson(msg)},
          complete: function(){},
          error: function(xhr,exception){//alert(xhr.responseText);
              alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);alert("responseText: "+xhr.responseText);
              }
          
             
            } );
  

     function savejson(x)
     { 
      console.log();
      $.ajax({
            type: "POST",
            url: "savemind.php",
            dataType : "json",
            data: ( { "mindmap" : doc.prepareSave().serialize()} ),
            success: function(msg) {console.log(msg);window.location.href = "cmapapp-bootstrap-master/index.php?json="+encodeURI(JSON.stringify(x));},
            complete: function(){},
            error: function(xhr,exception){//alert(xhr.responseText);
                alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);alert("responseText: "+xhr.responseText);
                }
            
               
              } );
      }
       // return doc.prepareSave().serialize();///就是這個王八蛋(儲存),不return值回去就不會執行儲存的指令(不會有另存新檔的視窗跳出)!!!
  };

  /**
  * View callback: Saving to the hard drive was sucessful.
  * 
  * @ignore
  */
  view.saveToHddComplete = function() {
    var doc = mindmapModel.getDocument();
    eventBus.publish(mindmaps.Event.DOCUMENT_SAVED, doc);
    view.hideSaveDialog();
  };

  this.go = function() {
    view.setAutoSaveCheckboxState(autosaveController.isEnabled());
    view.showSaveDialog();
  };
};
