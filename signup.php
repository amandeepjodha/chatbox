<html>

	<head>
                <title>create new account</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link rel ="stylesheet" type="text/css" href="css/signup.css">
	</head>
	<body>
            <div class="signup-form">
                <form action="" method="post">
                    <div class="form-header">
                        <h2>Sign up</h2>
                        <p>fill this form and start chatting with ur friends.</p>
                    </div>
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user_name" placeholder="example: deepamanee" class="form-control" required="true" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="user_email" placeholder="someone@gmail.com" class="form-control" required="true" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="user_pass" placeholder="password" class="form-control" required="true" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <select class="form-control" name="user_country" required>
                            <option disabled="">Select a country</option>
                            <option>india</option>
                            <option>America</option>
                            <option>Russia</option>
                            <option>France</option>
                            <option>Africa</option>
                            <option>Switzerland</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="user_gender" required>
                            <option disabled="">Select a Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of use</a> &amp; <a href="#">Privacy Policy</a>
                                </label>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Signup</button>    
                    </div>
                    <?php include("signup_user.php"); ?>
                </form>
                <div class="text-center small" style="color: #67428B;">Already have an account?<a href="signin.php">Signin here</a></div>
            </div>
        </body>
        </html>
  