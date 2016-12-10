<html>
{include file="config_css.tpl"}

	<script>
		//判斷是否有輸入必要的欄位
		function check_form(){
			if (!$("#k1").val()) {
				alert("『帳號』欄位不可以是空白");
				window.event.returnValue = false;
			}

			
			$.get("forget_action.php", { account1: $("input[name='account1']").val() }, 
				function(data) {
					if(data == 0)
						alert("無此帳號");
					else
						alert(data);
				}
			);				
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

      <div class="form-signin" >
        <h2 class="form-signin-heading">忘記密碼</h2>

        <input type="text" id="k1" name="account1" class="form-control" placeholder="請輸入帳號" >
		密碼會寄到您的信箱
		<br><br>
		<input type="button" class="btn btn-lg btn-primary btn-block" value="寄信" onclick="check_form();" />
		<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" onclick="history.back();" />

      </div>

    </div> <!-- /container -->


 </body>






	
</html>

{include file="footer.tpl"}