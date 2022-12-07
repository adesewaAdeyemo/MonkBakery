<!DOCTYPE html>
<head>
    <?php $this->load->view('include/head'); ?>
    <?php $this->load->view('style/checkout'); ?>
</head>
<body>

<?php
    session_start();
    $id=$image=$name=$price=$quantity=$_total='';
    $_SESSION['count'] = 0;

?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="preventDefault()">
    <?php $this->load->view('include/nav'); ?>

    <div class="container"> 
        <div class="d-flex cartcase justify-content:spac-between;-between mb-2" style="margin:0;">
                <div class="col-7">
                    <form method='POST' class="form-control" action='counter.php' onsubmit="preventDefault()" class='form cartform'>
                        <table class="td1 card form" style="text-align:center; width:30%; justify-content:space-between; position:absolute; top:8rem; background-color:rgb(249, 245, 239)">
                            <tr>
                                <td></td>
                                <td><b>Items<b></td>
                                <td><b>Quantity<b></td>
                                <td><b><b>Price</td>
                                <td><b><b></td>
                                <td><b><b><pre>     </pre></td>
                                <td><b><b></td>
                            </tr>
                            <?php
                                foreach ($cart as $key => $val){
                                    // global $id;
                                    echo '<td> <img src = "' . base_url().$val['image'] . '" style="height:40px;width:60px;"> </td><td>' . $val['name'] . '</td>
                                    <td>' .$val['quantity']. '</td><td>' . $val['price'] . '</td><td><pre>     </pre></td><td><input type="submit" name="uncart" value="Remove" style=""></td></tr>';
                                    // $id= $val['id'];
                                    echo '<input type="hidden" name="id" value="'.$val['id'].'" >';
                                    echo "<br>";
                                    $_total = 0;
                                    if (is_numeric($val['price']) && is_numeric($val['quantity'])) {
                                        $_total += ((int)$val['price'] * (int)$val['quantity']);
                                    } else {
                                        $_total = 0;
                                      }
                                }
                            ?>
                            <tr class=''>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td><?php echo $_total ?></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col">
                    <form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>' class='form' onsubmit="preventDefault()">
                        <div class="car">
                        <input type="submit" name="continue" value="Continue Shopping" onclick="preventdefault()" style='box-shadow: 1px 1px 1px rgb(36, 22, 3);'>
                        <input type="submit" name="check" value="Check Out" onclick="preventdefault()" style='box-shadow: 1px 1px 1px rgb(36, 22, 3);'>
                        <input type="submit" name="empty" value="Empty Cart" onclick="preventdefault()" style='box-shadow: 1px 1px 1px rgb(36, 22, 3);'>
                        </div>
                    </form>

                
                    <?php
                        if (isset($_POST['continue'])){
                            header("location: ./carty");
                        }
                    ?>
                    <form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>' id="payment-form" onsubmit="preventDefault()">
                    <input type="submit" name="check" value="X" onclick="preventdefault()" style='width:20px; float:right;'>
                        <div class="form-row">
                            <label for="card-element" class="form-label">Credit or Debit Card</label>
                            <div class="card-errors" role="alert"></div>
                        </div>
                            <div class="form-floating" style="margin-top:10px;">
                            <input type="text" name="atm" placeholder="Card Number" id="floatingInput" class="form-control form-control-lg bg-light" onclick="preventdefault()">
                            <label for="floatingInput">Card Number...</label>
                            </div>

                            <div class="form-floating" style="margin-top:10px;">
                            <input type="Email" name="email" placeholder="Email" id="floatingInput" class="form-control form-control-lg bg-light" onclick="preventdefault()">
                            <label for="floatingInput">Email</label>
                            </div>
                            <button id="submit" name="spin" style="width: 38%; margin-top:10px; border-radius:4px;">
                            <div class="spinner-border hidden text-warning" id="spinner" style="display:none;"> role="status">>
                                <span class="visually-hidden" id="load">Loading...</span>
                            </div>
                            <span id="button-text">Proceed</span>
                            </button>
                        <div id="payment-message" class="hidden"></div>
                    </form>

                </div>

    </div>

    </form>
  <?php
    $this->load->view('include/script');
    $this->load->view('include/scriptfile');

  ?>
</body>
</html>
