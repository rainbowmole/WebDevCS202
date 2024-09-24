<!doctype html>
<html lang="en">
    <head>
        <title>Camacho's Website</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="container">
            <?php include('header.php'); ?>
            <?php include('nav.php'); ?>
            <?php include('info-col.php'); ?>

            <div id='regcontent'>
                <div id="regerrors">
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        //error array to stor all errors
                        $errors = array();
                        //naglagay na ba name
                        if(empty($_POST['fname'])) {
                            $errors[] = 'Please input your first name.';
                        }else{
                            $fn = trim($_POST['fname']);
                        }
                        //naglagay na ba apelyido?
                        if(empty($_POST['lname'])) {
                            $errors[] = 'Please input your last name.';
                        }else{
                            $fn = trim($_POST['lname']);
                        }
                        //naglagay ba email?
                        if(empty($_POST['email'])) {
                            $errors[] = 'Please input your email.';
                        }else{
                            $fn = trim($_POST['email']);
                        }
                        //match ba password na nilagay niya?
                        if(!empty($_POST['psword1'])) {
                            if($_POST['psword1'] != $_POST['psword2']){
                                $errors[] = 'Your password do not match.';
                            }else{
                                $p = trim($_POST['psword1']);
                            }
                        }else{
                            $errors[] = 'Please input your password.';
                        }

                        //okay na lahat ng input
                        if(empty($errors)){

                        }else{
                            echo'<h2 class="headerror">Error!</h2><p class="error">The following
                            error(s) occured:<br/>';
                            foreach($errors as $msg){
                                echo " - $msg<br/>\n";
                            }
                            echo ' </p><h3 class="tryagain">Please try again.</h3><br/><br/>';
                        }
                    }
                ?>
                </div>
                <div id="regpage">
                    <h2>Registration page</h2>
                    <form action="register.php" method="post">
                        <p><label class="label" for="fname">First name </label><br/>
                        <input type="text" id="fname" name="fname" size="30" maxlength="40"
                        value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>">
                        </p>

                        <p><label class="label" for="lname">Last name </label><br/> 
                        <input type="text" id="lname" name="lname" size="30" maxlength="40"
                        value="<?php if(isset($_POST['lname'])) echo $_POST['lname'];?>">
                        </p>

                        <p><label class="label" for="email">Email Address </label><br/>  
                        <input type="text" id="email" name="email" size="30" maxlength="50"
                        value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                        </p>

                        <p><label class="label" for="psword1">Password </label><br/>  
                        <input type="password" id="psword1" name="psword1" size="30" maxlength="40"
                        value="<?php if(isset($_POST['psword1'])) echo $_POST['psword1'];?>">
                        </p>

                        <p><label class="label" for="psword2">Repeat Password </label> <br/> 
                        <input type="password" id="psword2" name="psword2" size="30" maxlength="40"
                        value="<?php if(isset($_POST['psword2'])) echo $_POST['psword2'];?>">
                        </p>

                        <p><input type="submit" id="submit" name="submit" value="register"></p>      
                    </form>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>