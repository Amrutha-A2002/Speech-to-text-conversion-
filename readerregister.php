
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Register Form</title>
  <link href="login.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div class="form-container">
    <h2>Register Here</h2>
    <form action="readerinsertaction.php" method="post" enctype="multipart/form-data" id="login-form">
      <div class="form-group">
        <label for="login-email">Name:</label>
        <input type="text"  name="rname" class="form-control" id="login-email" required>
      </div>
	   <div class="form-group">
        <label for="login-email">Email:</label>
        <input type="email"  name="remail" class="form-control" id="login-email" required>
      </div>
	   <div class="form-group">
        <label for="login-email">Phone No:</label>
        <input type="text"  name="rphoneno" class="form-control" id="login-email" pattern="[0-9]{10}" required maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >
      </div>
      <div class="form-group">
        <label for="login-password">Password:</label>
        <input type="password" name="rpassword" class="form-control" id="login-password"  pattern="(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z\d]).{4,}" required>
      </div>
      <div class="form-group">
        <button type="submit" >Register</button>
      </div>
    </form>
   
  </div>
    

  
  </body>
  </html>