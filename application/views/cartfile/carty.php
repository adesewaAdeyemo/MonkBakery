<!DOCTYPE html>
<head>
    <?php $this->load->view('include/head'); ?>
</head>
<body>

<?php
    session_start();
    $id=$image=$name=$price=$quantity='';
    $_SESSION['count'] = 0;
    if (isset($_POST['id'])){
        $id=$_POST['id'];
        $quantity=$_POST['quantity'];

        echo "$id";
    }
    function increment(){
        $_SESSION['count'] += 1;
    }
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="preventDefault()">
    <?php $this->load->view('include/nav'); ?>
    <div class="container" style="justify-content-between;">
            <div class="row row-cols-lg-5 g-2 g-lg-3 mb-3" > 
                <?php
                $i=0;
                    foreach ($prod as $val => $product){
                        global $id, $name, $price, $image;

                        $image=$product['images'];
                        $name=$product['name'];
                        $price=$product['price'];
                        $id=$product['id'];
                ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="preventDefault()">
                        <div class="col card bread">
                            <input type="image" name="image" src="<?php echo base_url().$image; ?>" value="<?php echo base_url().$image; ?>" alt="bread" class="card-img-top img" disabled>
                            <h4 class="card-title"><input type="text" name="name" value="<?php echo $name; ?>" disabled></h4>
                            <p class="card-text"><input type="text" name="price" value="<?php echo $price; ?>" disabled></p>
                            <input type="number" name="quantity" value="" min='1' placeholder="+" style='display:; text-align:center;' id='qtty'required>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" class="card-text" name="cartitem" value="Shop with us" style="background-color:rgb(166, 148, 125); color:white;">
                        </div>
                    </form>
                <?php
                    $i++;
                }?>
            </div>
        </div>
    </form>
  <?php
    $this->load->view('include/script');
  ?>
</body>
</html>
