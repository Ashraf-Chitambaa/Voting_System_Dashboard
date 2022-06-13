<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Voting System</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap -->
    <link rel="stylesheet" href="./Bootstrap_Files/css/bootstrap.css">
    <!-- linking with font awesome -->
    <script src="https://kit.fontawesome.com/6f9370842c.js" crossorigin="anonymous"></script>
    <!-- side menu links-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- all_styles css -->
    <link rel="stylesheet" href="./Includes/all_styles.css">
    <!-- MY OWN CSS -->
    <link rel="stylesheet" href="IMPORTEDSTYLES.css">
    <!-- adminLTE css -->
    <link rel="stylesheet" href="./AdminLTE-master/plugins/codemirror/addon/scroll/simplescrollbars.css">
    <link rel="stylesheet" href="./AdminLTE-master/dist/css/adminlte.min.css">
    <style>
        body {
            display: grid;
            place-content: center;
            height: 90vh;
        }

		.login-box-body {
			box-shadow: 0px 0px 10px -4px rgba(29, 28, 28, 0.64);
			-webkit-box-shadow: 0px 0px 10px -4px rgba(29, 28, 28, 0.64);
			-moz-box-shadow: 0px 0px 10px -4px rgba(29, 28, 28, 0.64);
			padding: 1em;
            padding-bottom: 2.5em;
		}
		
		.btn.st-btn {
            text-transform: capitalize;
			border-radius: 4px;
			color: whitesmoke;
			border: none !important;
            transition: all .3s ease;
		}
	</style>
</head>

<body>
    <div class="login-box">
        <div class="login-logo">
            <h1>Voting System</h1>
        </div>
    
        <div class="login-box-body">
          <p class="login-box-msg">Sign in to start your session</p>
            
          <!-- YOU WILL DIRECT IT TO THE INDEX PAGE OF THE PHP FILE WHICH IS MY INDEX.HTML -->
          <form action="admin.php" method="POST">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row logIn-btn-container">
                <div class="text-center">
                    <button type="submit" class="btn st-btn btn-primary" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
                </div>
            </div>
          </form>
        </div>
    </div>
    <!-- bootstrap 5 -->
    <script src="./Bootstrap_Files/js/bootstrap.bundle.js"></script>
    <!--Local Stuff-->
</body>
</html>
