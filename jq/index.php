<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="javascripts/script.js"></script>
<title>Form Validation in jQuery</title>
</head>

<body>

<div class="workarea">

<h1>Create an Account</h1>

<form id=registration_form action="register.php" method="post">
<table>
<tr><td>Chose Username: </td><td><input type="text" class="form_text" name="uname" id="form_username"></td><td><span class="error_form" id="username_error_message"></span></td></tr>
<tr><td>Password: </td><td><input type="password" class="form_text" id="form_password"></td><td><span class="error_form" id="password_error_message"></span></td></tr>
<tr><td>Retype Password: </td><td><input type="password" class="form_text" id="form_retype_password"></td><td><span class="error_form" id="retype_password_error_message"></span></td></tr>
<tr><td>Email: </td><td><input type="text" class="form_text" id="form_email"></td><td><span class="error_form" id="email_error_message"></span></td></tr>
<tr><td></td><td><input type="submit" class="sbmt_btn" value="Create Account"></td><td></td></tr>
</table>
</form>

</div>

</body>
</html>