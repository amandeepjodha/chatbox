<html>

	<head>
                <title>signin page</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link rel ="stylesheet" type="text/css" href="css/signin.css">
	</head>
	<body>
            <div class="signin-form">
                <form action="" method="post">
                    <div class="form-header">
                        <h2>Sign in</h2>
                        <p>Login to mychat</p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="someone@gmail.com" class="form-control" required="true" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="password" class="form-control" required="true" autocomplete="off">
                    </div>
                   <!-- <div class="small">forget Password?<a href="forget_pass.php">Click here</a></div> -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Signin</button>    
                    </div>
                    <?php include 'signin_user.php';?>
                </form>
                <div class="text-center small" style="color: #67428B;">Dont have account?<a href="signup.php">Create</a></div>
            </div>
        </body>
        </html>
