<!DOCTYPE html>
<html>
{include file="config_css.tpl"}

	<script>
		//判斷是否有輸入必要的欄位
		function check_form(){
			if (!$("#k1").val()) {
				alert("『帳號』欄位不可以是空白");
				window.event.returnValue = false;
			} 				
			else if (!$("#k2").val()){	 	  
				alert("『密碼』欄位不可以是空白");
				window.event.returnValue = false;
			}
		}
	</script>



<style type="text/css">

body {
  padding-top: 100px;
  padding-bottom: 40px;
  background-color: #eee;
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

    <div class="container">

      <form class="form-signin" action="login_action.php" method="post" onsubmit="check_form();">
        <h2 class="form-signin-heading">Please sign in</h2>

        <input type="text" id="k1" name="account1" class="form-control" placeholder="請輸入帳號" >

		<input type="password" id="k2" name="pw" class="form-control" placeholder="請輸入密碼" >

		 <label class="checkbox">
			<a href="forget.php">忘記密碼</a>	
		 </label>
		<button type="submit" class="btn btn-lg btn-primary btn-block">登入</button>

		<a href="./register.php" class="btn btn-lg btn-primary btn-block">註冊</a>

      </form>

    </div> <!-- /container -->


 </body>


{include file="footer.tpl"}
</html>

