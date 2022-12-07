<?php

$error='';
$error='';
$email=$uid=$pwd=$rpwd=$mail=$pwd='';
$errors= array('uid'=>'', 'email'=>'', 'pwd'=>'', 'rpwd'=>'');    
if (isset($_POST['signup'])){
    
    if(!empty($_POST['email']) || !empty($_POST['uid']) || !empty($_POST['pwd']) || !empty($_POST['rpwd'])){
        $errors['email']="Field cannot be Empty";
    }else{
        $email=$_POST['logmail'];   
        $uid=$_POST['loguid'];
        $pwd=$_POST['logpwd'];
        $rpwd=$_POST['logrpwd'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
            $errors['album']="Invalid Email";
        }
        if ((!preg_match('/^[a-zA-Z\s]+$/', $uid))){
            $errors['artist']="Invalid User ID";
        }
        if (((!is_numeric($pwd)) ||  (!preg_match('/^[a-zA-Z]+$/', $pwd))) && (strlen($pwd) >= 8)){
            $errors['band']="Pasword should be atleast 8 character long";
            $errors['band'].="Invalid password";
        }
        if (!($pwd === $rpwd)){
            $errors['rating']="Password do not match";
        }
        If (array_filter($errors)){
            echo '<center>';
            // echo $errors;
            $error = "<div class='hero-error'>Error in the form</div>";
            echo '</center>';
        }else{
            header("Location: ./carty");
        }
    }
}

?>
<div class="signup" style="position:absolute; display:none;">
    <div class="wrapper">
        <div class="formlogo">
            <img src="<?php echo base_url()?>/images/e.png" alt="">
        </div>
        <div class="text-center mt-4 formname" style="text-align:Center; padding:10px 0;">
            Monk Concept
        </div>
        <form class="p-3 mt-3" action="<?= base_url(); ?>" method='POST'>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="logmail" id="newUMail" placeholder="E-mail">
            </div>
            <div class="error"><?php echo $errors['email']; ?></div>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="loguid" id="newUName" placeholder="Username">
            </div>
            <div class="error"><?php echo $errors['uid']; ?></div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="logpwd" id="newUPwd" placeholder="Password">
            </div>
            <div class="error"><?php echo $errors['pwd']; ?></div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="logrpwd" id="newPUPwd" placeholder="Repeat Password">
            </div>
            <div class="error"><?php echo $errors['pwd']; ?></div>

            <input type="submit" name="signup" id="login" class="logbtn mt-3" value='Sign Up'>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a><input type="submit" id="log" name="log" value="Log In" style="border:none; outline:none; background:transparent;"></a>
        </div>
        <div class="error"><?php echo $error; ?></div>
    </div>
</div>

