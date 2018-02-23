<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Basic AlgorithmStack Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
        <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
        <link rel="stylesheet" type="text/css" href="css/unslider.css" />
        <link rel="stylesheet" type="text/css" href="css/template.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="login-logo">
                <h1>logo</h1>
            </div>
            <div class="box ">

                <div class="box_inner">


                    <div class="row" >
                        <div class="sin-reg col-sm-6 brdr" id="sl1" onclick="login()" style="padding:10px;margin-bottom: 10px">
                            <h1><a class="sl" >Log in</a></h1>
                        </div>
                        <div class="col-sm-6 brdr" id="sl2" style="padding:10px; margin-bottom: 10px" onclick="register()">
                            <h1><a class="sl sl2" >Register</a></h1>
                        </div>
                    </div>
                    <form name="reg" id="register" action="1.php" method="post">
                        <input class="form-input" type="text" id="user_name" name="uname" placeholder="User name" required>
                        <label for="user_name" class="form-label">User Name</label>
                        <input class="form-input" type="Email" id="email" placeholder="Email" name="email" required>
                        <label for="email" class="form-label">Email</label>
                        <input class="form-input" type="Password" id="pass0" placeholder="Password" name="pass" required>
                        <label for="pass0" class="form-label">Password</label>
                        <input class="form-input" type="Password" id="pass0" placeholder="Confirm Password" name="pass" required>
                        <label for="pass0" class="form-label">Confirm Password</label>
                        <input type="hidden" name="signup" value=1>
                        <div class="brdr">
                            <input type="submit" value="Register" id= "button1" class="btn_mnl">
                        </div>
                    </form>
                    <form id="login" action="1.php" method="post">
                        <br>
                        <input class="form-input" type="text"  name="uname" placeholder="User name/Email" required>
                        <label for="user_name" class="form-label">User Name/Email</label>
                        <input class="form-input" type="Password" id="pass2" name="pass" placeholder="Password" required>
                        <label for="pass2" class="form-label">Password</label>
                        <input type="hidden" name="signup" value=0>
                        <div class="brdr">
                            <input type="submit" id="button1" class="btn_mnl" value="Login">
                        </div>
                    </form>
                    <div class="row con" id="con" >
                        <h4>connect with</h4>
                        <hr>
                        <div class=" col-sm-6 " id="fun1" onmouseover="fun1(1)" onmouseout="fun1(0)">
                            <div class="cnct-fb">
                                <a href="#"></a><h5><i class="fa fa-facebook fa-2x" aria-hidden="true"></i><span>&nbsp;with Facebook</span></h5></a>

                            </div>
                        </div>
                        <div class="col-sm-6" id="fun2" onmouseover="fun2(1)" onmouseout="fun2(0)" >
                            <div class="cnct-ggle">
                                <a href="#" style="text-decoration: none;"><h5><i class="fa fa-google fa-2x" aria-hidden="true"></i><span>&nbsp;with google</span></h5></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function fun1(x){
                if(x)
                document.getElementById("fun1").style.opacity=".8";
            else
                document.getElementById("fun1").style.opacity="1";
            }
            function fun2(x){
                if(x)
                document.getElementById("fun2").style.opacity=".8";
            else
                document.getElementById("fun2").style.opacity="1";
            }
        document.getElementById("login").style.display="none";
        document.getElementById("sl1").style.backgroundColor="rgb(230,230,230)";
        document.getElementById("sl2").style.backgroundColor="rgb(255,255,255)";
        document.getElementById("sl1").style.border="1px solid gray";
        document.getElementById("sl1").style.borderTop="1px solid transparent";
        document.getElementById("sl1").style.borderLeft="1px solid transparent";
        document.getElementById("sl2").style.border="1px solid transparent";
        function login()
        {
        document.getElementById("register").style.display="none";
        document.getElementById("login").style.display="block";
        document.getElementById("sl2").style.backgroundColor="rgb(230,230,230)";
        document.getElementById("sl1").style.backgroundColor="rgb(255,255,255)";
        document.getElementById("sl2").style.border="1px solid gray";
        document.getElementById("sl2").style.borderTop="1px solid transparent";
        document.getElementById("sl2").style.borderRight="1px solid transparent";
        document.getElementById("sl1").style.border="1px solid transparent";
        }
        function register()
        {
        document.getElementById("login").style.display="none";
        document.getElementById("register").style.display="block";
        document.getElementById("sl1").style.backgroundColor="rgb(230,230,230)";
        document.getElementById("sl2").style.backgroundColor="rgb(255,255,255)";
        document.getElementById("sl1").style.border="1px solid gray";
        document.getElementById("sl1").style.borderTop="1px solid transparent";
        document.getElementById("sl1").style.borderLeft="1px solid transparent";
        document.getElementById("sl2").style.border="1px solid transparent";
        }
        </script>
    </body>
</html>
