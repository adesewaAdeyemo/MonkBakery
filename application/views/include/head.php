<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if (isset($_SESSION["mode"])){
        if ($_SESSION["mode"] == "light"){ ?>
    <?php $this->load->view('style/light'); ?>
            <style>
                body{
                    background-Color: rgb(251, 239, 223);
                }
            </style>
        <?php 
        }else {?>
    <?php $this->load->view('style/dark'); ?>
            <style>
                body{
                    background-color:#000 !important;
                }
            </style>
        <?php 
        }
    }else {?>
    <?php $this->load->view('style/cart'); ?>
    <?php 
    }
    ?>
    <link rel="stylesheet" href="style/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&display=swap" rel="stylesheet">
