<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8">
<title></title>
</head>
<body>
	<script>
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
	</script>
虛擬碼撰寫:
                <div>
                <span id="ol"><textarea  id="li1"   style="resize:none;width:40px;height:500px;font-size:14px;float:left;overflow-y:hidden" disabled>1.</textarea></span>
               <textarea id="t1"   wrap="off" style="resize:none;width:1100px;height:500px;"  onkeyup="keyUp(this.id[this.id.length-1])"  onscroll="G('li').scrollTop = this.scrollTop;" oncontextmenu="return false" spellcheck="false" >
              </textarea>
              </div>
</body>
</html>              