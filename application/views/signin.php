<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.js"></script> 

 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>เข้าสู่ระบบบริหารจัดการโครงการ</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>ระบบบริหารจัดการโครงการ</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">เข้าสู่ระบบเพื่อเริ่มการปฏิบัติงาน</p>

      <form  >
        <div class="input-group mb-3">
          <input type="text" id = "username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id = "psw" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                จดจำ
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit"  id = "btnsub" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">ลืมรหัสผ่าน</a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center">ลงทะเบียนผู้ใช้ใหม่</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="https://projectmanage.webclient.me/assets/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="https://projectmanage.webclient.me/assets/plugins/bootstrap/js/bootstrap.bundle.js"></script>
<!-- AdminLTE App -->
<script src="https://projectmanage.webclient.me/assets/dist/js/adminlte.js"></script>
 
</body>
</html>

<script type="text/javascript"> 
       $("#btnsub").on("click",function(){
        
       
        var username =  $("#username").val(); 
            if (username.trim() == "") {
              alert("Please fill Username ");
              $("#btnsub").show();
              username.focus();
              return false;
            }


          var upassword =  $("#psw").val();
          if (upassword.trim() == "") {
            alert("Please fill Password ");
            $("#btnsub").show();
            upassword.focus();
            return false;
          }
 
        $.post("https://projectmanage.webclient.me/index.php/home/getuserlogin"
              ,
              {
                username : username,
                password : upassword
               
              }
              ,
              function(data,status,response){
              // console.log(data);
               // console.log(status);

              var object =  JSON.parse(data); 
                console.log(object);
                /* var O7ESNM = object; 
                    if (O7ESNM != "") {
                            var PWSLMN = object.PWSLMN 
                            var PWPSWD = object.PWPSWD  
                            var a = "http://mail.smcthai.co.th:8082/PJ_MAIL/smc/index.php/auth/user/"+PWSLMN+"/"+PWPSWD ;
                              
                 location.replace(a); 

                    } else{

                             alert("Please Login again"); 
                              $("#username").val("");  
                              $("#password").val(""); 
                    }  */

            });  

    }); 



</script>