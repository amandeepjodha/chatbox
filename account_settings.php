<?php
session_start();
include("includes/connection.php");
include("includes/header.php");
if(!isset($_SESSION['user_email'])){
    header("location: signin.php");
}
else{
?> 
<html>
    <head>
        <title>account_settings</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >       
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 

    
      
    </head>
    <body>
        <div class="row">
            <div class="col-sm-2">
            </div>
            <?php
            $user= $_SESSION['user_email'];
            $get_user= "select * from users where user_email= '$user'";
            $run_user= mysqli_query($con,$get_user);
            $row= mysqli_fetch_array($run_user);
            $user_name=$row['user_name'];
            $user_pass=$row['user_pass'];
            $user_email=$row['user_email'];
            $user_profile=$row['user_profile'];
            $user_country=$row['user_country'];
            $user_gender=$row['user_gender'];
            ?>
            <div class="col-sm-8">
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="table table-bordered table-hover">
                        <tr align="center">
                            <td colspan="6" class="active"><h2>change account settings</h2></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Change your username</td>
                            <td>
                                <input type="text" name="u_name" class="form-control" required value ="<?php echo $user_name;?>"/>
                                
                            </td>
                        </tr>
                        <tr>
                            <td></td><td><a class="btn btn-default" style="text-decoration: none; font-size:15px" href="upload.php"><i class="fa fa-user" aria-hidden="true"></i>change profile</a></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Change your email</td>
                            <td>
                                <input type="email" name="u_email" class="form-control" required value ="<?php echo $user_email;?>"/>
                                
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold">Country</td>
                            <td>
                                <select class="form-control" name="u_country">
                                    <option><?php echo $user_country;?></option>
                                    <option>USA</option>
                                    <option>UK</option>
                                    <option>Canada</option>
                                    <option>Austrailia</option>
                                    <option>france</option>
                                   
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold">Gender</td>
                            <td>
                                <select class="form-control" name="u_gender">
                                    <option><?php echo $user_gender;?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </td>
                        </tr>
                        <!--<tr>
                            <td style="font-weight: bold;">Forgotten password</td>
                            <td>
                                <button type="button" class="btn btn-default" data toggle="modal"
                                        data-target="#myModal">Forgotten passwords</button>
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog"> 
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <!--*/ <form action="recovery.php?id=<?php echo $user_id;?>" method="post" id="f">
                                                    <strong>what is the name of ur school friend</strong>
                                                    <textarea class="form-control" cols="4" rows="4" name="content" placehoder="someone"></textarea><br>
                                                    <input type="btn btn-default" type="submit"name="sub" value="Submit" style="width: 100px;"><br><br>
                                                    <pre>Answer the above question we will ask you if forget your <br>password.</pre>
                                                    <br><br>
                                                </form>*/-->
                                                <!--<form action="recovery.php?id=<?php echo $user_id;?>"method="post" id="f">
                                                    <strong>what is the name of ur school friend</strong>
                                                    <textarea class="form-control" cols="4" rows="4" name="content" placehoder="someone"></textarea><br>
                                                    <input type="btn btn-default" type="submit"name="sub" value="Submit" style="width: 100px;"><br><br>
                                                    <pre>Answer the above question we will ask you if forget your <br>password.</pre>
                                                    <br><br>
                                                </form>*/-->
                                                <?php
                                                if(isset($_POST['sub']))
                                                {
                                                    $bfn = htmlentities($_POST['content']);
                                                    if($bfn=='')
                                                    {
                                                        echo"<script>alert('Please enter something.')</script>";
                                                        echo"<script>window.open('account_settings.php','_self')</script>";
                                                        exit();
                                                        
                                                    }
                                                    else{
                                                        $update= "update users set forgotten_answer='$bfn' where user_email='$user'";
                                                        $run = mysqli_query($con,$update);
                                                        if($run)
                                                        {
                                                        echo"<script>alert('Working...')</script>";
                                                        echo"<script>window.open('account_settings.php','_self')</script>";
                                                        exit();    
                                                        }
                                                        else{
                                                            echo"<script>alert('Error while updating information .')</script>";
                                                            echo"<script>window.open('account_settings.php','_self')</script>";
                                                            exit();
                                                        }
                                                    }
                                                    
                                                }
                                                ?>
                                            </div>
                                            <!--<div class="modal-footer">
                                                <button type="button " class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </tr>*-->
                        <tr>
                            <td></td>
                                <td><a class="btn btn-default" style="text-decoration:none; font-size: 15px;" href="change_password.php"><i class="fa fa-key fa-fw" aria-hidden="true"></i>Change password </a></td>
                        </tr>
                        <tr align ="center ">
                            <td colspan="6">
                                <input type="submit" value="Update" name="update" class="btn btn-info">
                            </td>
                        </tr>
                    </table>
                </form>
                <?php
                    if(isset($_POST['update']))
                    {
                        $user_name= htmlentities($_POST['u_name']);
                        $email = htmlentities($_POST['u_email']);
                        $u_country = htmlentities($_POST['u_country']);
                        $u_gender = htmlentities($_POST['u_gender']);
                        
                        $update = "update users set user_name='$user_name',user_email='$email',user_country='$u_country',user_gender='$u_gender' where user_email='$user'";
                        $run = mysqli_query($con,$update);
                        if($run){
                            
                            echo"<script>window.open('account_settings.php','_self')</script>";
                            
                        }
                        
                    }
                ?>
            </div>
                                <div class="col-sm-2">
                                </div>
        </div>
    </body>
</html>
<?php } ?>