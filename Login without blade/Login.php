<html>

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link type="text/css" rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container col-lg-offset-4 col-md-4">
    <ul class="nav nav-tabs" style="margin-top: 100px;" >
        <li class="active" ><a href="Login.php" >Login</a></li>
    </ul>

    <div class="panel-group" >
        <div class="panel panel-info">
            <div class="panel-heading" >Login</div>
            <div class="panel-body">

                <form action="loginHandler.php" method="POST">
                    <h1>Login Form</h1>
                    <div>
                        <label class="form-group">User Name</label>
                        <input type="name" class="form-control" name="name" placeholder="Name" required="" autofocus="" />
                    </div>
                    <br>
                    <div>
                        <label class="form-group">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <br>
                        <button class="btn  submit" style="background-color:#c7ddef;">Log in</button>
                    </div>
                    <div>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <br>
                    <div class="clearfix"></div>


                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
