<!DOCTYPE html>
<html>
{include file="config_css.tpl"}



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

	<form class="form-signin" name="register" method="post" action="register_action.php" >
		<h2 class="form-signin-heading">Create an account</h2>
	    	

	    <input type="text" name="name1" class="form-control" placeholder="請輸入帳號"/>
		 

		<input type="password" name="password1"  class="form-control" placeholder="請輸入密碼"/>


		<input type="password" name="password2" class="form-control"  placeholder="請再次輸入密碼"/>


		<label for="inputEmail" class="sr-only">Email address</label>
	     <input type="email" id="inputEmail" name="mail1" class="form-control" placeholder="Email address" required autofocus>
<label class="checkbox">
		<span style="color: #F00;">此信箱為忘記密碼通知用</span>
</label >

	     <button class="btn btn-lg btn-primary btn-block" type="submit">確定</button>
		 <input type="button" class="btn btn-lg btn-primary btn-block" value="取消" onclick="history.back()" />
	 
	</form>


    </div> <!-- /container -->


 </body>

</html>

{include file="footer.tpl"}