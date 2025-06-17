<!-- PHP Starts Here -->

<!doctype html>
<html lang="en">
	<head>
		<title>Login - ICBS</title>
	</head>
	<body class="login-background">
    <!doctype html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sidebar with Icons</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS (for icons) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/style1.css">

    <!-- css style go to end here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
 

    
        <div class="login-div mt-3 rounded" >
            
            <div class="login-padding">
                <h2 class="text-center text-white">LOGIN</h2>
                <form class="p-1" action="loginaction.php" method="POST">
                <div class="form-group">
                        <label><h6>User Name:</h6></label>
                        <input type="text" name="uname" placeholder="Enter Username" class="form-control border-bottom" required>
                   
                    </div>
                    <div class="form-group">
                        <label><h6>Password:</h6></label>
                        <input type="Password" name="psw" placeholder="Enter Password" class="form-control border-bottom" required>
                   
                    </div>
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnlogin" value="LOGIN" class="btn btn-white pl-5 pr-5 ">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>



