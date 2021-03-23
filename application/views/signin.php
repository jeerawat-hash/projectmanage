

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>เข้าสู่ระบบบริหารจัดการโครงการ</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://blueprojectmanagement.com/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://blueprojectmanagement.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://blueprojectmanagement.com/assets/dist/css/adminlte.min.css">
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
               
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button  id = "btnsub" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
          </div>
          <!-- /.col -->
        </div>
      
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

      
       
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="https://blueprojectmanagement.com/assets/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="https://blueprojectmanagement.com/assets/plugins/bootstrap/js/bootstrap.bundle.js"></script>
<!-- AdminLTE App -->
<script src="https://blueprojectmanagement.com/assets/dist/js/adminlte.js"></script>
 
</body>
</html>

<script type="text/javascript"> 
       $("#btnsub").on("click",function(){
        
       
        var username =  $("#username").val(); 

        console.log(username);
            if (username.trim() == "") {
              alert("Please fill Username ");
              $("#btnsub").show();
              username.focus();
              return false;
            }


          var psw =  $("#psw").val();
          if (psw.trim() == "") {
            alert("Please fill Password ");
            $("#btnsub").show();
            psw.focus();
            return false;
          } 
        $.post("https://blueprojectmanagement.com/index.php/home/login"
              ,
              {
                username : username,
                password : psw
               
              }
              ,
              function(data,status,response){ 
                  

                  if (data == 1) {
                    var Pagesite = "https://blueprojectmanagement.com/index.php/home/summary/";
                    location.replace(Pagesite);   
                  }else{

                    alert("Fail");
                    return false;
                    
                  }
                  

                    

            });  

    }); 



</script>