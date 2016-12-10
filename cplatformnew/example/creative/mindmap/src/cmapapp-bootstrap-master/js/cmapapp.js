var count;
var nodeidarray;
var nodeparentidarray;
var nodecaptionarray;
var a=window.location.toString().split('=')[1];


jsPlumb.ready(function() {
					
	// setup some defaults for jsPlumb.	
	var instance = jsPlumb.getInstance({
		Endpoint : ["Dot", {radius:2}],
		HoverPaintStyle : {strokeStyle:"#1e8151", lineWidth:2 },
		ConnectionOverlays : [
			[ "Arrow", { 
				location:1,
				id:"arrow",
                length:14,
                foldback:0.8,
			} ],
            //[ "Label", { label:"", id:"label", cssClass:"aLabel" }]////註解掉後connection上的label"add text"就消失了
            		],
		Container:"statemachine-demo"
	});

	var windows = jsPlumb.getSelector(".statemachine-demo .w");

    // initialise draggable elements.  
	instance.draggable(windows, {containment:".demo"});
																						//可以刪除連線，可是怪怪的
    // bind a click listener to each connection
	instance.bind("click", function(conn, originalEvent) { 
	if(confirm("Delete connection from " + conn.sourceId + " to " + conn.targetId + "?"))
		instance.detach(conn); 
		instance.repaintEverything();
	});
    instance.bind("connection", function(info) {
	    info.connection.getOverlay("label").setLabel(info.connection.id);
		instance.repaintEverything();
    });
																						//可以刪除連線，可是怪怪的
	// connection to be renamed
	instance.bind("click", function(c) { 
		if (!(c.getOverlay("label").getLabel() == 'Add Text')) $('#renameLinkInput').val(c.getOverlay("label").getLabel());//$('#renameLinkInput').attr('placeholder', c.getOverlay("label").getLabel());
		
		$('#linkRenameModal').modal('show');

		$('#renameLinkForm').unbind().on('submit', function (event) {
			c.getOverlay("label").setLabel($('#renameLinkInput').val());
			$('#renameLinkInput').val('')
			$('#linkRenameModal').modal('hide');
			return false;
		});
		return false;
	});
	
	// focus input when modal loads
	$('#linkRenameModal, #conceptRenameModal').on('shown.bs.modal', function (e) {
		$('input:text').focus(function() { $(this).select(); });
		$('input:text').focus();
	})
	
	// remove input value when modal closes
	$('#linkRenameModal').on('hidden.bs.modal', function (e) {
		$('#renameLinkInput').val("");
	})
	
	
	// changing concept name on dblclick///////////選擇顯示的concept
	$(document).on('click', '.w', function (event) {
		var $divID = $(this);
		if($('#selectdiv').val()=="")
		$('#selectdiv').val($('#selectdiv').val()+$divID.text());/////將點選的div內容加到selectdiv理面
		else
		$('#selectdiv').val($('#selectdiv').val()+","+$divID.text());	
		/*$('#renameConceptInput').val($divID.text());
		$('#conceptRenameModal').modal('show');
		
		$('#renameConceptForm').unbind().on('submit', function (event) {
			// if main concept, still bold
			if ($divID.attr('id') == 'concept1') {
				$('#' + $divID.attr('id')).html('<strong>' + $('#renameConceptInput').val() + '</strong>');
			}
			else {
				$('#' + $divID.attr('id')).html($('#renameConceptInput').val());
			}
			
			$('#' + $divID.attr('id')).append("<div class='ep'></div>");
			$('#conceptRenameModal').modal('hide');
			instance.repaintEverything();
			return false;
		});*/

	});
	
   
	// bind a connection listener. note that the parameter passed to this function contains more than
	// just the new connection - see the documentation for a full list of what is included in 'info'.
	// this listener sets the connection's internal
	// id as the label overlay's text.
    instance.bind("connection", function(info) {
		//info.connection.getOverlay("label").setLabel(info.connection.id);
		info.connection.getOverlay("label").setLabel("Add Text");
    });

	// initialize the windows, make sources / targets
	initStuff (windows);
	

	// on click of add concept button
	$('#AddConceptButton').click(function () {
		AddConcept($('#AddConceptForm').val());
		$('#AddConceptForm').val("");
		return false;
	});
	////////////////////////////////////////
	function getnum(formValue)
	{
	
		var allConnections = (jsPlumb.getSelector(".statemachine-demo .w")).length;
	 return allConnections;
	}
		count=getnum();
    ///////////////////////////////////////
	// trying to add concepts
	function AddConcept(formValue) {
		// get the total number of windows
			console.log(count);
		var allConnections = (jsPlumb.getSelector(".statemachine-demo .w")).length;
		var divID = count+1;
		count+=1;
		// add this new div
		if (!formValue) {
			var $newDiv = "<div class='w' id='concept" + allConnections + "'>Concept " + allConnections + "</strong><div class='ep'></div></div>";	
		}
		else {
			var $newDiv = "<div class='w' id='concept" + allConnections + "'>" + formValue + "</strong><div class='ep'></div></div>";
		}
		
		$('#statemachine-demo').append($newDiv);
		
		// jsplumb the new div
		instance.draggable(jsPlumb.getSelector("#concept" + allConnections), {containment:".demo"});
		var newWindows = jsPlumb.getSelector("#concept" + allConnections);
		initStuff (newWindows);
		instance.repaintEverything();
	}
	//remove concept test 可以刪除concept，但是連線要另外刪除
	$(document).on('dbclick', '.w', '.ep', function (e,connection) {
	    var allConnections = (jsPlumb.getSelector(".statemachine-demo .w")).length;
		var divID = allConnections + 1;
		var $divID = $(this);
		alert($divID.attr('id'));
		jsPlumb.removeAllEndpoints($divID.parent().attr("id"));
		jsPlumb.detachAllConnections($divID.parent().attr("id"));
		if(confirm("Delete concept?"))
		$divID.remove();
		instance.repaintEverything();
		e.stopPropagation();
		});
	
								
	
	// initializing windows, making sources/targets functions
	function initStuff (win) {
		// suspend drawing and initialise.
		instance.doWhileSuspended(function() {
			var isFilterSupported = instance.isDragFilterSupported();
			// make each ".ep" div a source and give it some parameters to work with.  here we tell it
			// to use a Continuous anchor(連接點)and the StateMachine connectors, and also we give it the
			// connector's paint style.  note that in this demo the strokeStyle is dynamically generated,
			// which prevents us from just setting a jsPlumb.Defaults.PaintStyle.  but that is what i
			// would recommend you do. Note also here that we use the 'filter' option to tell jsPlumb
			// which parts of the element should actually respond to a drag start.
			// here we test the capabilities of the library, to see if we
			// can provide a `filter` (our preference, support by vanilla
			// jsPlumb and the jQuery version), or if that is not supported,
			// a `parent` (YUI and MooTools). I want to make it perfectly
			// clear that `filter` is better. Use filter when you can.
			if (isFilterSupported) {
				instance.makeSource(win, {
					filter:".ep",
					anchor:"Continuous",
					connector:[ "StateMachine", { curviness:20, proximityLimit:150 } ],
					connectorStyle:{ strokeStyle:"#5c96bc", lineWidth:2, outlineColor:"transparent", outlineWidth:4 },
					maxConnections:5,
					onMaxConnections:function(info, e) {
						alert("Maximum connections (" + info.maxConnections + ") reached");
					}
				});
			}
			else {
				var eps = jsPlumb.getSelector(".ep");
				for (var i = 0; i < eps.length; i++) {
					var e = eps[i], p = e.parentNode;
					instance.makeSource(e, {
						parent:p,
						anchor:"Continuous",
						connector:[ "StateMachine", { curviness:20, proximityLimit:200 } ],
						connectorStyle:{ strokeStyle:"#5c96bc",lineWidth:2, outlineColor:"transparent", outlineWidth:4 },
						maxConnections:5,
						onMaxConnections:function(info, e) {
							alert("Maximum connections (" + info.maxConnections + ") reached");
						}
					});
				}
			}
		});
		
		
		

		// initialise all '.w' elements as connection targets.
		instance.makeTarget(win, {
			dropOptions:{ hoverClass:"dragHover" },
			anchor:"Continuous"				
		});
	};
	
	
	// and finally, make a couple of connections
	//instance.connect({ source:"concept1", target:"concept2" });
	//instance.connect({ source:"concept1", target:"concept3" });
	//instance.connect({ source:"concept1", target:"concept4" });
	//instance.connect({ source:"concept3", target:"concept4" });
	//instance.connect({ source:"concept1", target:"concept5" });
    
	

 	var json = decodeURI(a);

    var newjson=JSON.parse(json);
    
    var nodeid=newjson.id;
     nodeidarray=nodeid.split(',');
  
    var nodeparentid=newjson.parentId;
     nodeparentidarray=nodeparentid.split(',');

    var nodecaption=newjson.caption;
     nodecaptionarray=nodecaption.split(',');
    var savediv=document.getElementById("statemachine-demo");
    for(var i=0;i<nodeidarray.length;i++)
    {


		AddConcept(nodecaptionarray[i]);
       // AddConcept(nodecaptionarray[i],i);
      /* var div1=document.createElement('div');
        div1.className="w ui-draggable ui-droppable";
        div1.id= "concept"+i;
        savediv.appendChild(div1);
        div1.innerHTML=nodecaptionarray[i];


      //  var div2=document.createElement('div');     
      //      div2.id= "node"+i;
      //      div2.innerHTML=nodecaptionarray[i];
        var div3=document.createElement('div');
            div3.className="ep";
          //  div1.appendChild(div2);
            div1.appendChild(div3);*/
        }

            // and finally, make a couple of connections
           
    for(var j=1;j<nodeidarray.length;j++)
    {
    	console.log("concept"+j);
    	console.log("concept"+nodeidarray.indexOf(nodeparentidarray[j]));///抓id array中和parentid array中相同的值的位置
     instance.connect({ target:"concept"+j, source:"concept"+nodeidarray.indexOf(nodeparentidarray[j]) });////將node和它的parent相連

    }

	//instance.connect({ source:"concept1", target:"concept2" });
	//instance.connect({ source:"concept1", target:"concept3" });
	//instance.connect({ source:"concept1", target:"concept4" });
	//instance.connect({ source:"concept3", target:"concept4" });
	//instance.connect({ source:"concept1", target:"concept5" });
    
	jsPlumb.fire("jsPlumbDemoLoaded", instance);
	
});