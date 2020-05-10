<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin E-Store </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <link href="../build/css/custom.min.css" rel="stylesheet">
  <style rel="stylesheet" >
    .bg-wrapper {
      background: url('img/bg.jpg') no-repeat center center;
      background-size: cover;

      min-height: 101vh;
      position: relative;
      margin-right: 0px;
      margin-left: 0px;
    }
    .img-author {
      padding:10px;
      background: rgba(0, 0, 0, 0.65);
      color:white;
      line-height:30px
    }
    .box-auth {
      background:white;    
        padding: 20px;
        padding-top:0px;
        width: 440px;
        top: 0;
        right: 0;
        height: 100%;
        margin: 0;
        position: absolute;
    }
  </style>
</head>

<body class="login">
  <div class="container">

    <div class="row bg-wrapper" >
    
    <span class="img-author">Photo by Clark Street Mercantile on Unsplash</span>
      <!-- <div class="col-md-6 col-xs-12"></div>
      <div class="col-md-6 col-xs-12"> -->
      <div class="box-auth">
        <div>
          <a class="hiddenanchor" id="signup"></a>
          <a class="hiddenanchor" id="signin"></a>

          <div class="login_wrapper">

            <div class="animate form login_form">
            
            <div style="display: flex;">
              <img src="img/logo/logo.png" alt="" style="width:100px">
              <h1 style="
                  margin-left: 20px;
                  margin-top: 37px;
              "> E-Store</h1>
            </div>
              <section class="login_content">
                <form>
                  <h1>Login Form</h1>
                  <div>
                    <input type="text" class="form-control" placeholder="Username" required="" />
                  </div>
                  <div>
                    <input type="password" class="form-control" placeholder="Password" required="" />
                  </div>
                  <div>
                    <a class="btn btn-default submit" href="index.php">Log in</a>
                    <a class="reset_pass" href="#">Lost your password?</a>
                  </div>

                  <div class="clearfix"></div>

                  <div class="separator">
                    <p class="change_link">New to site?
                      <a href="#signup" class="to_register"> Create Account </a>
                    </p>

                    <div class="clearfix"></div>
                    <br />

                    <div>
                      <p>©2020 All Rights Reserved. E-Store Admin</p>
                    </div>
                  </div>
                </form>
              </section>
            </div>

            <div id="register" class="animate form registration_form">
            
            <div style="display: flex;">
              <img src="img/logo/logo.png" alt="" style="width:100px">
              <h1 style="
                  margin-left: 20px;
                  margin-top: 37px;
              "> E-Store</h1>
            </div>
              <section class="login_content">
                <form>
                  <h1>Create Account</h1>
                  <div>
                    <input type="text" class="form-control" placeholder="Username" required="" />
                  </div>
                  <div>
                    <input type="email" class="form-control" placeholder="Email" required="" />
                  </div>
                  <div>
                    <input type="password" class="form-control" placeholder="Password" required="" />
                  </div>
                  <div>
                    <input type="password" class="form-control" placeholder="Organisation" required="" />
                  </div>
                  <div>
                    <a class="btn btn-default submit" href="index.php">Submit</a>
                  </div>

                  <div class="clearfix"></div>

                  <div class="separator">
                    <p class="change_link">Already a member ?
                      <a href="#signin" class="to_register"> Log in </a>
                    </p>

                    <div class="clearfix"></div>
                    <br />

                    <div> 
                      <p>©2020 All Rights Reserved. E-Store Admin</p>
                    </div>
                  </div>
                </form>
              </section>
            </div>
          </div>
        </div>




      </div>
      <!-- </div> -->
    </div>

  </div>
</body>

</html>