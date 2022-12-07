    <?php 
    session_start();
    $this->load->view('include/breadClass');
    $defaultMode = "dark";
    if (isset($_POST["explore"])){
        $_SESSION["mode"] = isset($_POST["mode"]) ? $_POST["mode"] : $defaultMode;
    }
    if (isset($_POST["login"])){
        $_SESSION["mode"] = isset($_POST["mode"]) ? $_POST["mode"] : $defaultMode;
        }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('style/cart'); ?>
    <?php $this->load->view('style/calc'); ?>
    <?php $this->load->view('style/log'); ?>

    <title>Home</title>
    <?php $this->load->view('style/carousel'); ?>
</head>
<body>
<div class="container">
    <div class="carousel">
        <?php
        for ($_carokey = 0; $_carokey < 20; $_carokey++){
        ?>
        <div class="carousel__face"><span><?php echo $_SESSION['bread'][$_carokey]['name'];?> </span></div>
        <?php
        }
        ?>
    </div>
    <div class="">
    <form class="form-control" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="homeForm" style="width:300%; margin-top: -2rem; display:block; position:absolute; right:-100%; left:-100%; color:#fff; text-shadow: 2px 2px 3px black; bottom:-600px;">
        <img src="<?php echo base_url()?>/images/e.png" alt="" style="width:20%; padding-bottom: 5rem;">
        <h1 style="font-size: 4rem;
        margin-bottom: 0;">Monk Concept</h1>
        <h2 style="font-size: 3rem;
        font-weight: 200;
        margin:-10px 0 10px 0;">You are welcome back to E-Bakery...</h2>
        <label style="margin-top: 10px;
        font-size:2rem;" for="mode">Prefered mode</label>
        <input type="radio" name="mode" value="light" required>Light 
        <input type="radio" name="mode" value="dark" required>Dark
        <input type="submit" id="explore" name="explore" value="Explore" style="padding:5px 15px; outline:1px solid rgb(240, 148, 29);">
    </form>
    </div>
    <?php $this->load->view('include/login'); ?>
    <?php $this->load->view('include/signup'); ?>

</div>
<script>

    const login = document.querySelector(".login");
    const explore = document.querySelector("#explore");
    const signup = document.querySelector(".signup");
    const sign = document.querySelector("#sign");
    const log = document.querySelector("#log");
    const none = document.querySelector(".none");
    // const backtologin = document.querySelector(".logbtn");
    const backtologin = document.querySelector("#login");
    count = 0;
    explore.addEventListener('click',(e) => {
        count++;
        e.preventDefault();
        login.style.display='block';
    })
    sign.addEventListener('click',(e) => {
        signup.style.display='block';
    })
    log.addEventListener('click',(e) => {
        login.style.display='block';
        signup.style.display='none';
    })
    // backtologin.addEventListener('click',(e) => {
    //     e.preventDefault();
    //     login.style.display='block';
    //     signup.style.display='none';
    // })
    none.addEventListener('click',(e) => {
        e.preventDefault();
        count++;
        login.style.display='none';
    })

</script>
</body>
</html>