<?php
    class Bread {
        var $name;
        var $price;
        var $quantity;
        var $image;
        function __construct($name, $price, $quantity, $image){
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->image = $image;
        }
    }

    $prod = Array();
    $prod[0] = new Bread('White cream', 1200, 10, 'images/ice1.jfif');
    $prod[1] = new Bread('Browny cream', 1250, 10, 'images/ice2.jfif');
    $prod[2] = new Bread('Bee cream', 2000, 10, 'images/icestick2.jfif');
    $prod[3] = new Bread('Coconut cream', 1800, 10, 'images/ice4.jfif');
    $prod[4] = new Bread('Rio cream', 1200, 10, 'images/ice5.jfif');
    $prod[5] = new Bread('Cane cream', 1800, 10, 'images/ice6.jfif');
    $prod[6] = new Bread('Cheesy cream', 2000, 10, 'images/ice7.jfif');
    $prod[7] = new Bread('Romeo cream', 1200, 10, 'images/ice8.jfif');
    $prod[8] = new Bread('Banana cream', 1800, 10, 'images/ice9.jfif');
    $prod[9] = new Bread('Chocolate cream', 2000, 10, 'images/ice10.jfif');
    $prod[10] = new Bread('Wheat cream', 800, 10, 'images/ice11.jfif');
    $prod[11] = new Bread('Olive cream', 1400, 10, 'images/ice12.jfif');
    $prod[12] = new Bread('Pineapple cream', 1800, 10, 'images/ice13.jfif');
    $prod[13] = new Bread('Rain cream', 2500, 10, 'images/icestick2.jfif');
    $prod[14] = new Bread('Apple cream', 2100, 5, 'images/ice21.jfif');
    $prod[15] = new Bread('Peanut cream', 2500, 10, 'images/ice22.jfif');
    $prod[16] = new Bread('Hot cream', 2000, 10, 'images/icestick3.jfif');
    $prod[17] = new Bread('Vanilla cream', 1800, 10, 'images/ice18.jfif');
    $prod[18] = new Bread('Weed cream', 1800, 10, 'images/ice19.jfif');
    $prod[19] = new Bread('bun cream', 850, 10, 'images/ice20.jfif');
    $prod[20] = new Bread('White cream', 1200, 10, 'images/ice2.jfif');
    $prod[21] = new Bread('Browny cream', 1250, 10, 'images/ice22.jfif');
    $prod[22] = new Bread('Coconut cream', 2000, 10, 'images/ice23.jfif');
    $prod[23] = new Bread('Banana cream', 1800, 10, 'images/ice24.jfif');
    $prod[24] = new Bread('Rainbow cream', 1200, 10, 'images/ice25.jfif');
    $prod[25] = new Bread('Ciana cream', 1800, 10, 'images/ice26.jfif');
    $prod[26] = new Bread('Chi cream', 2000, 10, 'images/ice29.jfif');
    $prod[27] = new Bread('Sai cream', 1200, 10, 'images/ice30.jfif');
    $prod[28] = new Bread('Saca cream', 1800, 10, 'images/ice31.jfif');
    $prod[29] = new Bread('Chocolate cream', 2000, 10, 'images/ice32.jfif');
    $prod[30] = new Bread('French cream', 800, 10, 'images/ice33.jfif');
    $prod[31] = new Bread('Olive cream', 1400, 10, 'images/ice34.jfif');
    $prod[32] = new Bread('Ice-cream Sunday', 1800, 10, 'images/ice35.jfif');
    $prod[33] = new Bread('Rainbow cream', 2500, 10, 'images/icestick.jfif');
    $prod[34] = new Bread('Apple cream', 2100, 5, 'images/icebg1.jpg');
    $prod[35] = new Bread('Honey cream', 2000, 10, 'images/icestick4.jfif');
    $prod[36] = new Bread('Vanilla cream', 1800, 10, 'images/ice18.jfif');
    $prod[37] = new Bread('Weed cream', 1800, 10, 'images/ice19.jfif');
    $prod[38] = new Bread('bum cream', 850, 10, 'images/icestick3.jfif');
    $prod[49] = new Bread('bun cream', 850, 10, 'images/ice1.jfif');

    // $white = new Bread('White Bread', 1200, 10, 'images/bread 3.jfif');
    // $Browny = new Bread('Browny Bread', 1250, 10, 'images/bread 22.jfif');
    // $Coconut = new Bread('Coconut Bread', 2000, 10, 'images/bread 4.jfif');
    // $Banana = new Bread('Banana Bread', 1800, 10, 'images/bread 1.jfif');
    // $Cube = new Bread('Bread Cube', 1200, 10, 'images/bread cube.jpg');
    // $Cheesy = new Bread('Cheesy Bread', 1800, 10, 'images/cheesy Bread 3.jfif');
    // $chicken = new Bread('Chicken Bread', 2000, 10,'images/bread 6.jfif');
    // $Saiden = new Bread('Saiden Bread', 1200, 10, 'images/bread 16.jfif');
    // $Sacarra = new Bread('Sacarra Bread', 1800, 10, 'images/bread 7.jfif');
    // $Chocolate = new Bread('Chocolate Bread', 2000, 10, 'images/chocolate bread.jfif');
    // $Wheat = new Bread('Wheat Bread', 800, 10, 'images/bread 11');
    // $Olive = new Bread('Olive Bread', 1400, 10, 'images/bread 13');
    // $Pineapple = new Bread('Pineapple Bread', 1800, 10, 'images/bread 2.jfif');
    // $Rainbow = new Bread('Rainbow Bread', 2500, 10, 'images/rainbow bread.jfif');
    // $Apple = new Bread('Apple Bread', 2100, 5, 'images/bread 12');
    // $Peanut = new Bread('Peanut Bread', 2500, 10, 'images/peanut bread.jfif');
    // $Hot = new Bread('Hot Bread', 2000, 10, 'images/bread 15.jfif');
    // $Vanilla = new Bread('Vanilla Bread', 1800, 10, 'images/bread 5.jfif');
    // $Weed = new Bread('Weed Bread', 1800, 10, 'images/friut mix.jfif');
    // $bun = new Bread('bun Bread', 850, 10, 'images/cream bread.jfif');
    // $Package = new Bread('Package', 0, 0, 0 ,'');

?>