<!DOCTYPE html>
<html>


{include file="config_css.tpl"}

{include file='header.tpl'}

<script>
//判斷是否有輸入必要的欄位
    function check_form(){
      if (!$("#name").val()) {
        alert("『帳號』欄位不可以是空白");
        window.event.returnValue = false;
      }         
      else if (!$("#password").val()){      
        alert("『密碼』欄位不可以是空白");
        window.event.returnValue = false;
      }
      else if (!$("#mail").val()){      
        alert("『email』欄位不可以是空白");
        window.event.returnValue = false;
      }

    }
</script>

<style type="text/css">

body {
  padding-top: 60px;
  padding-bottom: 40px;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

 </style>






<body>

    <div class="container" >
       <div class="jumbotron" >
       <form class="form-signin"  name="profile_update" method="post" action="profile_update.php" onsubmit="check_form();" >
         <h2 class="form-signin-heading">Profile</h2>
                  
          <input type="text" id="name" name="name" class="form-control" value="{$name}" readonly/>
          
            <input type="password" id="password" name="password"class="form-control" value="{$pw}"/>
            
        
            <input type="text" id="mail" name="mail" class="form-control" value="{$mail}"/>

        
             <input type="submit" class="btn btn-lg btn-primary btn-block" value="修改" />
             <input type="button" class="btn btn-lg btn-primary btn-block" value="取消" onclick="history.back()" />
             <br><br><br><br><br><br><br><br><br>
                       
         </form>
        </div> 

    </div> <!-- /container -->


 </body>




{include file="footer.tpl"}

</html>