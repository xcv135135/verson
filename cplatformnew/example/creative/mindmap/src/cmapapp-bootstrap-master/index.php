<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>cmapapp-bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
       <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Nestable</title>
    <style type="text/css">

.cf:after { visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0; }
* html .cf { zoom: 1; }
*:first-child+html .cf { zoom: 1; }

html { margin: 0; padding: 0; }
body { font-size: 100%; margin: 0; padding: 1.75em; font-family: 'Helvetica Neue', Arial, sans-serif; }

h1 { font-size: 1.75em; margin: 0 0 0.6em 0; }

a { color: #2996cc; }
a:hover { text-decoration: none; }

p { line-height: 1.5em; }
.small { color: #666; font-size: 0.875em; }
.large { font-size: 1.25em; }

/**
 * Nestable
 */

.dd { position: relative; display: block; margin: 0; padding: 0; max-width: 400px; list-style: none; font-size: 13px; line-height: 20px; }

.dd-list { display: block; position: relative; margin: 0; padding: 0; list-style: none; }
.dd-list .dd-list { padding-left: 30px; }
.dd-collapsed .dd-list { display: none; }

.dd-item,
.dd-empty,
.dd-placeholder { display: block; position: relative; margin: 0; padding: 0; min-height: 20px; font-size: 13px; line-height: 20px; }

.dd-handle { display: block; height: 30px; margin: 5px 0; padding: 5px 10px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
    background: #fafafa;
    background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
    background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
    background:         linear-gradient(top, #fafafa 0%, #eee 100%);
    -webkit-border-radius: 3px;
            border-radius: 3px;
    box-sizing: border-box; -moz-box-sizing: border-box;
}
.dd-handle:hover { color: #2ea8e5; background: #fff; }

.dd-item > button { display: block; position: relative; cursor: pointer; float: left; width: 25px; height: 20px; margin: 5px 0; padding: 0; text-indent: 100%; white-space: nowrap; overflow: hidden; border: 0; background: transparent; font-size: 12px; line-height: 1; text-align: center; font-weight: bold; }
.dd-item > button:before { content: '+'; display: block; position: absolute; width: 100%; text-align: center; text-indent: 0; }
.dd-item > button[data-action="collapse"]:before { content: '-'; }

.dd-placeholder,
.dd-empty { margin: 5px 0; padding: 0; min-height: 30px; background: #f2fbff; border: 1px dashed #b6bcbf; box-sizing: border-box; -moz-box-sizing: border-box; }
.dd-empty { border: 1px dashed #bbb; min-height: 100px; background-color: #e5e5e5;
    background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                      -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
    background-image:    -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                         -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
    background-image:         linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                              linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
    background-size: 60px 60px;
    background-position: 0 0, 30px 30px;
}

.dd-dragel { position: absolute; pointer-events: none; z-index: 9999; }
.dd-dragel > .dd-item .dd-handle { margin-top: 0; }
.dd-dragel .dd-handle {
    -webkit-box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
            box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
}

/**
 * Nestable Extras
 */

.nestable-lists { display: block; clear: both; padding: 30px 0; width: 100%; border: 0; border-top: 2px solid #ddd; border-bottom: 2px solid #ddd; }

#nestable-menu { padding: 0; margin: 20px 0; }

#nestable-output,
#nestable2-output { width: 100%; height: 7em; font-size: 0.75em; line-height: 1.333333em; font-family: Consolas, monospace; padding: 5px; box-sizing: border-box; -moz-box-sizing: border-box; }

#nestable2 .dd-handle {
    color: #fff;
    border: 1px solid #999;
    background: #bbb;
    background: -webkit-linear-gradient(top, #bbb 0%, #999 100%);
    background:    -moz-linear-gradient(top, #bbb 0%, #999 100%);
    background:         linear-gradient(top, #bbb 0%, #999 100%);
}
#nestable2 .dd-handle:hover { background: #bbb; }
#nestable2 .dd-item > button:before { color: #fff; }

@media only screen and (min-width: 700px) {

    .dd { float: left; width: 48%; }
    .dd + .dd { margin-left: 2%; }

}

.dd-hover > .dd-handle { background: #2ea8e5 !important; }

/**
 * Nestable Draggable Handles
 */

.dd3-content { display: block; height: 30px; margin: 5px 0; padding: 5px 10px 5px 40px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
    background: #fafafa;
    background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
    background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
    background:         linear-gradient(top, #fafafa 0%, #eee 100%);
    -webkit-border-radius: 3px;
            border-radius: 3px;
    box-sizing: border-box; -moz-box-sizing: border-box;
}
.dd3-content:hover { color: #2ea8e5; background: #fff; }

.dd-dragel > .dd3-item > .dd3-content { margin: 0; }

.dd3-item > button { margin-left: 30px; }

.dd3-handle { position: absolute; margin: 0; left: 0; top: 0; cursor: pointer; width: 30px; text-indent: 100%; white-space: nowrap; overflow: hidden;
    border: 1px solid #aaa;
    background: #ddd;
    background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
    background:    -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
    background:         linear-gradient(top, #ddd 0%, #bbb 100%);
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.dd3-handle:before { content: '≡'; display: block; position: absolute; left: 0; top: 3px; width: 100%; text-align: center; text-indent: 0; color: #fff; font-size: 20px; font-weight: normal; }
.dd3-handle:hover { background: #ddd; }

  </style>
     
  </head>
  
  
  <body onload="get_allcaption();sessiontest()">

   <script>
	var all_caption;
	var kcluster;
	
	
    RightNow = new Date();
     

    
var countnum=0;

function check(){
                 var input=document.getElementById('selectdiv').value;
                if (input == "")
                {
                  alert("尚未選擇ideas");
                  return false;
                }
               else
               {
                getidea();
               }


}

var nowclicknum;////記錄資料的number,可以根據這個去找到所屬的虛擬碼


function getidea(){
  var count=parseInt(document.getElementById('count').value);
                 $.ajax({
                         url:"../../../getnum.php",
                         data:({}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                   countnum=parseInt(msg)+1;
                                   //alert(msg);

                count=count+1;
                document.getElementById("count").value=count; 
                var idea=document.getElementById('applicationexplain').value;
                var div1=document.createElement('div');
                var div2=document.createElement('div');
                var textbox1=document.createElement('li');
                var numberinput=document.createElement('input');
                //div1.style.width="300px"; 
               // textbox.style.border="2px solid #d3d3d3";
                div1.className="toggle_div";
                div2.id="Content_idea"+countnum;
                div2.innerHTML=idea;
                div2.style.display="none";
                div2.style.cursor="default";/////滑鼠指標
                div1.style.cursor="default";/////滑鼠指標
                div1.id="idea"+countnum;
                div1.innerHTML="應用"+count;
                numberinput.style.display="none";
                numberinput.id="testinput"+countnum;
                numberinput.value=0;
                div1.onclick = function(){
                    //alert(this.innerHTML);
                    $(".toggle_div").click(function(){
                    $("#"+this.id).toggleClass("isTogged");
                    $("#"+"Content_"+this.id).toggle();
                                                  });
                                         }



                div2.onclick = function(){
                  document.getElementById('conceptBody').style.display ='none';
                  document.getElementById('pseudodiv').style.display='inline'; 
                 var dive2_txt = document.getElementById('div2');

                  //alert(dive2_txt);
                  ///alert(dive2_txt);



                  var a=this.id.split('Content_idea')[1];
                  nowclicknum=a;
                  //alert(a);                 
                  $.ajax({
                         url:"../../../getidea.php",
                         data:({"record":a}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                    var test=msg;///傳ideasave回來
                                    document.getElementById('applicationchoose').innerHTML=idea;
                                    ideacombine.innerHTML=test;
                                     var number=document.getElementById('testinput'+nowclicknum).value;
                                           $.ajax({
                                                  url:"../../../getpesudo.php",
                                                  data:  ({"testnumber":number}),
                                                  type:"POST",
                                                  dataType:'text',
                                                  success: function(msg){ 
                                                                        $("#t1").val(msg);
                                                                        //alert(msg);
                                                                        
                                                                           yoyo=3;                                                                 
                                                                        },
                                                  error:function(xhr, ajaxOptions, thrownError){ alert(xhr.status); alert(thrownError);  }
                                                    });
                                       

                                              },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         }); //////end of ajax (get idea from database)


                    //$("#t1").val("");/////換別的組合就把虛擬碼撰寫部分清空
                                          }/////end of div2.onclick function


            var usertemple = document.getElementById('sessiontemp').innerHTML;
            
            $.ajax({
                url:"../../../receive.php",
                data:  ({"text":$('#selectdiv').val(),"record":countnum,"usertemple":usertemple,"appli":idea}),
                type:"POST",
                dataType:'text',
                success: function(msg){
                                        yoyo = 1;////////搞笑用derr 
                                       },
                error:function(xhr, ajaxOptions, thrownError){ alert(xhr.status); alert(thrownError);  }
                  });////////////insert idea into database
               
                $("#uibox").append(textbox1); 
                textbox1.appendChild(div1); 
                $("#selectdiv").val("");
                $("#uibox").append(textbox1); 
                textbox1.appendChild(div2); 
                $("#selectdiv").val("");
                $("#uibox").append(textbox1); 
                textbox1.appendChild(numberinput);





                                               },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         });


              $("#nestable").html("<ol class='dd-list' id='test'> </ol>");
              $("#nestable2").html(" <ol class='dd-list' id='combinearea'><li class='dd-item' >  <div class='dd-handle' id='tryit'>與應用相關的想法靈感區</div> </li> </ol> " ) ;   
                go();


               }////////////////////end of getidea function

  function savepseudo()
  {
    var pseudo = document.getElementById('t1').value;
    var ideatext=ideacombine.innerHTML;
    var applicationsave = document.getElementById('applicationchoose').innerHTML;
    $.ajax({
                         url:"../../../savepseudo.php",
                         data:({"pseudo":pseudo,"ideatext":ideatext,"applicationsave":applicationsave}),
                         type : "POST",
                         dataType:'text',
                         success:function(msg){
                                             var t = parseInt(msg);
                                             document.getElementById("testinput"+nowclicknum).value=t; 
                                             //$("#t1").val(t);
                                             alert("success");
                                               },
                        error: function(xhr,exception){
                                          alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                          alert("responseText: "+xhr.responseText);
                                                     },                                          
                         });
  }
  /////////////////////////////////////////////////////////////////////////虛擬碼旁邊數字自動生成的function

var num="";
  function G(objid){
    return document.getElementById(objid);
  }

  function keyUp(x){
    
    var obj=G("t"+x);
    var str=obj.value; 
    str=str.replace(/\r/gi,"");
    str=str.split("\n");
    n=str.length;
    line(n,x);
  }
  function line(n,x){
    var lineobj=G("li"+x);
    for(var i=1;i<=n;i++){
       if(document.all){
        num+=i+".\r\n";
       }else{
        num+=i+".\n";
       }
    }
    lineobj.value=num;
    num="";
  }
////////////////////////////////////////////////////////////////////
function change(){
                    document.getElementById('conceptBody').style.display ='inline';
                    document.getElementById('pseudodiv').style.display='none'; 

}
///////////////////////////////////////////////////////////
function myFunction() {
    window.open("../../../cpp_course/cpp_compiler_OV.php");
}
////////////////////////////////////////////////////////////////
function addcombine(){
                        var a =document.getElementById('tryit').innerHTML;
                       //alert(a);


                      
                      
                       var match_idea_content  =  $("#nestable2").html().match(/<div class="dd-handle">([^>]*)<\/div>/g);/////////正規表示式(找div class="dd-handle") g很重要是global的意思
                      
                      for( var i=0 ; i < match_idea_content.length ; i++)
                      {
                          match_idea_content[i] = ( match_idea_content[i].replace('<div class="dd-handle">','')).replace('</div>' , '') ;
                          }
                      
                      for( var i=0 ; i < match_idea_content.length ; i++)
                       {
                        //var $divID = $(this);
                        

                        var input=document.getElementById('selectdiv').value;
                        if(input == "")
                        {
                          document.getElementById('selectdiv').value=document.getElementById('selectdiv').value+match_idea_content[i];
                        }
                        else
                        {
                          document.getElementById('selectdiv').value=document.getElementById('selectdiv').value+","+match_idea_content[i];
                        }
                      } 
                       var lastnew=document.getElementById('selectdiv').value;
                       //alert(lastnew);
                       
                       getidea();
                        $("#selectdiv").val("");
                        
                      
  }////////////////////////////////////////////end of addcombine
 function checkapplication()
                             {
                              
                              var input=document.getElementById('applicationexplain').value;
                if (input == "")
                {
                  alert("尚未選擇填寫應用");
                  return false;
                }
               else
               {
                addcombine();
               }
                             }

function sessiontest(){
                        document.getElementById('sessiontemp').innerHTML='<?php echo $_SESSION['username'];?>';
                        var a = document.getElementById('sessiontemp').innerHTML;
                        //alert(a);
}
</script>

  <div class="container-fluid"> 
    <div class="row-fluid"><!--記錄想法組合的div -->
           <div class="col-xs-3 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation" style="width:320px;isplay:none">
              <div id="saveidea" class="well sidebar-nav">
               創意應用組合:
               <ul id="uibox" >
               </ul>
              </div><!--/.well -->
			  <div id = "tips_head" class="well sidebar-nav">提示 : 
				  <div id = "tips_con" >請先選擇一個核心想法
				  </div>
			  </div>
			  
            </div><!--/span-->

    </div>

 
 
  
  <!-- Add Concept Button Row -->
    <div class="container" >
     <div class="container" id="addConceptRow" data-spy="affix" data-offset-top="500">
      <div class="row">
      <div>
              <div id="selectdiv1" style="width:1170px;height:60px"><input type="textbox" name="Text" id="selectdiv" style="width:1100px;height:30px;display:none"></input>
              <input type="button" value="add" class="btn btn-primary" id="add" onclick="check()" style="display:none"></input></div><!--selectdiv為顯示已選擇的concept-->
              <input type="hidden" id="count" name="count" value="0"><!--計算add按下幾次
            <form class="form-search">
          <div class="input-group">
                    
            <!--<input type="text" class="form-control " placeholder="Name..." id="AddConceptForm">
            <span class="input-group-btn">
              <<button type="submit" class="btn btn-primary" id="AddConceptButton" >Add Concept</button>
            </span>
                      -->
                 <div class="container" id="conceptBody" onContextMenu="return false" align="center">
            <!-- demo -->
                     <div class="col-xs-12 col-sm-9" style="font-family:Times New Roman;font-size:20px">
                      <div id="sessiontemp"  style="display:none">hrhrh</div>
                        <div id="application" style="font-family:Times New Roman;font-size:24px">
                            你想到的應用是甚麼??<br>
                            <input type="textarea" id="applicationexplain" style="height:50px;width:825px" placeholder="我的應用是XXX，可以解決YYY問題"></input>
                          </div>
                          <p>
                            請描述來你所想到的應用(10字以上)，並從你的想法靈感區中，挑選跟你所想到的應用相關的想法，並且將其拖曳到"與應用相關的想法靈感區"，完成後，點選"新增應用"；如果已想不到新應用，請按"完成"。 
                               評分方式:（應用的數量50%，應用創意性50%）
                            <br>   
                          <div class="dd" id="nestable" style="overflow:auto; height:600px; word-break: break-all">
                             <ol class="dd-list" id="test">
                
                            </ol>
                          </div>

                          <div class="dd" id="nestable2" style="overflow:auto; height:600px; word-break: break-all">
                                 <ol class="dd-list" id="combinearea"> 
                                    <li class="dd-item" >
                                       <div class="dd-handle" id="tryit">與應用相關的想法靈感區</div>
                                    </li>
                                </ol>   
                         </div>
                       
                      </div> 
                      
                      <input type="button" value="新增應用123" class="btn btn-primary" id="add" onclick="checkapplication()"></input>

                      <br>
                          
                    </div>
   <!---<p><strong>Serialised Output (per list)</strong></p>

    <textarea id="nestable-output"></textarea>
    <textarea id="nestable2-output"></textarea>>---->




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery.nestable.js"></script> 
<script>

function go()
{

var a=window.parent.document.getElementById('temp_area').value;
//alert(a);
var json = decodeURI(a);

    var newjson=JSON.parse(json);
    
    var nodeid=newjson.id;
     nodeidarray=nodeid.split(',');
  
    var nodeparentid=newjson.parentId;
     nodeparentidarray=nodeparentid.split(',');

    var nodecaption=newjson.caption;
     nodecaptionarray=nodecaption.split(',');
    //var savediv=document.getElementById("statemachine-demo");
    $("#test").append("<li class='dd-item' data-id='"+nodeidarray[0]+"'><div id='"+all_caption[0]+"' class='dd-handle'>"+all_caption[0]+"</div><ol  id='"+nodeidarray[0]+"' class='dd-list'></ol></li>");



    for(i=1;i<all_caption.length;i++)
    {

         // alert(document.getElementById(nodeparentidarray[i]).childNodes.length+","+nodecaptionarray[i]);

        if(parseInt(document.getElementById(nodeparentidarray[i]).childNodes.length)<all_caption.length)
        {
                  
             $("#"+nodeparentidarray[i]).append("<li class='dd-item' data-id='"+nodeidarray[i]+"'><div id='"+all_caption[i]+"' class='dd-handle'>"+all_caption[i]+"</div><ol  id='"+nodeidarray[i]+"' class='dd-list'></ol></li>");
        }
        else
        { 

           $("#"+nodeparentidarray[i]+"> ol").append("<li class='dd-item' data-id='"+all_caption[i]+"'><div class='dd-handle' id='"+nodeidarray[i]+"'>"+all_caption[i]+"</div></li>");

        }
     }
     /////////////////////////////////////////////////////刪掉沒有子節點的ol標籤
        $( "OL" ).each(function( ) {
                         if(this.childNodes.length==0)
                       {
                        this.remove();
                        }

                                     });//////////////刪掉沒有子節點的ol標籤


    
     var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

	
	//var all_caption;
	//var kcluster;
	
    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    })
    .on('change', updateOutput, function(){
		
		var b=document.getElementById("combinearea");
		console.log(
			'b.childNodes.length : ',
			b.childNodes.length			
		);
		
		//nestable2 is empty
		if(b.childNodes.length == 3)
		{
			for(var i = 0 ; i < all_caption.length ; i++)
			{
				//console.log(all_caption[i]);
				//console.log('nestable2 is empty');
				var v=document.getElementById(all_caption[i]);
				v.style.background="";
				v.className-="dd-handle";
				v.className="dd-handle";
			}
			
			var a=document.getElementById("tips_con");
			a.innerHTML = "請先選擇一個核心想法";
		}
		else
		{
			
			for(var i = 0 ; i < all_caption.length ; i++)
			{
				//console.log(all_caption[i]);
				//console.log('nestable2 is empty');
				var v=document.getElementById(all_caption[i]);
				//v.style.background= "#bbb";
				//v.style.background= "-webkit-linear-gradient(top, #ddd 0%, #bbb 100%)";
				v.style.background= "-moz-linear-gradient(top, #bbb 0%, #999 100%)";
				//v.style.background="linear-gradient(top, #bbb 0%, #999 100%)";
				//-moz-linear-gradient(top, #bbb 0%, #999 100%);
				v.className="dd-handle";
			}
			
			
			var fthink = b.childNodes[2].innerText;
			fthink = fthink.split('\n');
			console.log(
				'fthink : ',
				fthink);
			
			var ffthink;
			//core idea
			if(fthink[0] == "Collapse" )
			{
				console.log(
					'fthink[1] : ',
					fthink[1]
					);
				ffthink = fthink[1];
			}
			else
			{
				console.log(
					'fthink[0] : ',
					fthink[0]
					);
				ffthink = fthink[0];
			}
			
			console.log(
					'ffthink : ',
					ffthink
					);
			
			var num = 0 ;
			for(var i = 0 ; i < all_caption.length ; i++)
			{
				if(ffthink == all_caption[i])
					num = i;
			}
			
			for(var i = 0 ; i < kcluster.length ; i++)
			{
				if(kcluster[i] == kcluster[num])
				{
					var v=document.getElementById(all_caption[i]);
					v.style.background="#82FF82";
				}
			}
			
			var a=document.getElementById("tips_con");
			a.innerHTML = "橘色想法為機器推薦適合搭配的想法";
		}
	});

    // activate Nestable for list 2
    $('#nestable2').nestable({
        group: 1
    })
    .on('change', updateOutput, function(){
		
		var b=document.getElementById("combinearea");
		console.log(
			'b.childNodes.length : ',
			b.childNodes.length			
		);
		
		//nestable2 is empty
		if(b.childNodes.length == 3)
		{
			for(var i = 0 ; i < all_caption.length ; i++)
			{
				//console.log(all_caption[i]);
				//console.log('nestable2 is empty');
				var v=document.getElementById(all_caption[i]);
				v.style.background="";
				v.className-="dd-handle";
				v.className="dd-handle";
			}
			
			var a=document.getElementById("tips_con");
			a.innerHTML = "請先選擇一個核心想法";
		}
		else
		{
			
			for(var i = 0 ; i < all_caption.length ; i++)
			{
				//console.log(all_caption[i]);
				//console.log('nestable2 is empty');
				var v=document.getElementById(all_caption[i]);
				//v.style.background= "#bbb";
				//v.style.background= "-webkit-linear-gradient(top, #ddd 0%, #bbb 100%)";
				v.style.background= "-moz-linear-gradient(top, #bbb 0%, #999 100%)";
				//v.style.background="linear-gradient(top, #bbb 0%, #999 100%)";
				//-moz-linear-gradient(top, #bbb 0%, #999 100%);
				v.className="dd-handle";
			}
			
			
			var fthink = b.childNodes[2].innerText;
			fthink = fthink.split('\n');
			console.log(
				'fthink : ',
				fthink);
			
			var ffthink;
			//core idea
			if(fthink[0] == "Collapse" )
			{
				console.log(
					'fthink[1] : ',
					fthink[1]
					);
				ffthink = fthink[1];
			}
			else
			{
				console.log(
					'fthink[0] : ',
					fthink[0]
					);
				ffthink = fthink[0];
			}
			
			console.log(
					'ffthink : ',
					ffthink
					);
			
			var num = 0 ;
			for(var i = 0 ; i < all_caption.length ; i++)
			{
				if(ffthink == all_caption[i])
					num = i;
			}
			
			for(var i = 0 ; i < kcluster.length ; i++)
			{
				if(kcluster[i] == kcluster[num])
				{
					var v=document.getElementById(all_caption[i]);
					v.style.background="#82FF82";
				}
			}
			
			var a=document.getElementById("tips_con");
			a.innerHTML = "綠色想法為機器推薦適合搭配的想法";
		}
	});

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));
    updateOutput($('#nestable2').data('output', $('#nestable2-output')));

    $('#nestable-menu').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    $('#nestable3').nestable();

}

function get_allcaption()
{
	$.ajax({
		url:"../../../getkallcaption.php",
		data:({}),
		type:"POST",
		dataType:'text',
		success: function(msgg){console.log('getkallcaption at here');
									all_caption = msgg.split("|");
									console.log(all_caption);
									
									get_kcluster();
							   },
		error:function(xhr, ajaxOptions, thrownError){ alert(xhr.status); alert(thrownError);  }
		  });////////////insert idea into database
}
 	
function get_kcluster()
{
	$.ajax({
		url:"../../../getkcluster.php",
		data:({}),
		type:"POST",
		dataType:'text',
		success: function(msgg){console.log('getkcluster at here');
									kcluster = msgg.split("|");
									console.log(kcluster);
								
									go();
							   },
		error:function(xhr, ajaxOptions, thrownError){ alert(xhr.status); alert(thrownError);  }
		  });////////////insert idea into database
}
       


</script>    
            <!-- /demo -->
                     
                

      <div  id="pseudodiv"  style="display:none">
                <div> 1.你的創意有很多，但是時間和能力有限，請試著從你發想的創意中挑選出一個最有創意，但是你又可以在2小時內寫程式完成的創意，先以虛擬碼完整表達，再使用C++程式完成實作。虛擬碼評分方式：（解決步驟合理程度50%，創意25%，實用性25%） <br>
                       2.程式碼評分方式：（虛擬碼和程式的完成度50%，程式可執行性50%）</div>
                所選取的應用:<div id="applicationchoose" style="width:1000px;font-family:Times New Roman;font-size:24px"></div>
            
                此應用相關的靈感想法:<div id="ideacombine" style="width:1000px;font-family:Times New Roman;font-size:24px"></div><p><a href="#myModal" data-toggle="modal" class="btn btn-primary btm-large" >虛擬碼範例</a> &nbsp<input type="button" value="虛擬碼儲存" class="btn btn-primary" id="save"  onclick="savepseudo()"></input> &nbsp<input type="button" value="切換" class="btn btn-primary" id="change"  onclick="change()"></input>&nbsp<input type="button" value="線上程式撰寫" class="btn btn-primary" id="save"  onclick="myFunction()"></input><br>
                
                虛擬碼撰寫:
                <div>
                <span id="ol"><textarea  id="li1"   style="resize:none;width:30px;height:500px;font-size:14px;float:left;overflow-y:hidden" disabled>1.  2.  3. </textarea></span>
               <textarea id="t1"   wrap="off" style="resize:none;width:1097px;height:500px;"  onkeyup="keyUp(this.id[this.id.length-1])"  onscroll="G('li').scrollTop = this.scrollTop;" oncontextmenu="return false" spellcheck="false" >
              預期輸入:
              預期輸出:
              執行流程:
              </textarea>
              </div>
  
         </div> 

         
         
       </div>
       </div>
     </div>
     </div>
      
<!-- Modal -->
   <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
    <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <h3 id="myModalLabel">虛擬碼參考範例</h3>
             <div class="image" align="center">
                <img src="" >
            </div>
    </div>
  <div class="modal-body">
    <p><h1>題目:<h1> 輸入三個數求其平均值。</p>
    <pre>虛擬碼 (用文字敘述法來記錄)
       (1) 宣告變數a、 b 、 c 、 sum 及avg
       (2) 輸入三個數，並存到 a、 b 及 c中
       (3) 總和 sum 為 a、 b 、 c 之和
       (4) 平均 avg 為總和 sum 除於 3
       (5) 輸出平均 avg
       (6) 停止
    </pre>
    <pre>虛擬碼 (用演算法語言來記錄)
       (1) INPUT a, b, c
       (2) sum ← a + b + c
       (3) avg ← sum / 3
       (4) PRINT avg
       (5) END
    </pre>  
  </div>
  <div class="modal-footer" style="display:none;">
    <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
    <button class="btn btn-primary">確定</button>
  </div>
  </div>
  </div>
</div>
<!-- Modal -->
  <!--Remove Concept Button row-->
   <!--     <div class="container" id="removeConceptRow" data-spy="affix" data-offset-top="280">
            <div class="row">
              <div class="col-sm-3 col-xs-12 col-lg-3">
                    <form class="form-search">
                        <div class="input-grounp">
                        </div>
                    </form>
              </div>          
            </div>
        </div>-->
    
    <!-- Concept Window oncontextmenu鎖右鍵-->
    
    
    <!-- Concept Rename Modal -->
        
    <div class="modal fade" id="conceptRenameModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myConceptModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Rename Concept...</h4>
        </div>
        <div class="modal-body">
        <form class="form-search" id="renameConceptForm">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type concept name here..." id="renameConceptInput">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary" id="renameConceptButton">Rename Concept</button>
            </span>
          </div>
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      </div>
    </div>

    
    <!-- Linking Phrase Rename Modal -->
    <div class="modal fade" id="linkRenameModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLinkModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Rename Linking Phrase...</h4>
        </div>
        <div class="modal-body">
        <form class="form-search" id="renameLinkForm">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type linking phrase here..." id="renameLinkInput">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary" id="renameLinkButton">Rename Link</button>
            </span>
          </div>
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      </div>
    </div>

    <hr>

    <footer>
      <p>&copy; LINA 2015</p>
    </footer>
    </div> <!-- /container -->


    <div id="selectdiv"></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/transition.js"></script>
  </body>
</html>
