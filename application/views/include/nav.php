<nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <div class="logo">
                    <img src="<?php echo base_url()?>/images/e.png" alt=""><h1>Chef</h1>
                    <a href="./checkout"><img src="<?php echo base_url()?>/images/grocery-cart.png" alt="E"></a>
                    <span class="add"><?php $this->load->database();    $this->db;   echo $this->db->count_all('orders'); ?></span>

                </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="./carty">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./checkout">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="product" href="#">Product</a>
                <ul class="prodUl"> 
                <li>Bread</li>
                <li>Icecream</li>
                <li>Milk</li>
                <li>Select</li>
                </ul>
                </li>
            </ul>
            </div>

            <span class="d-flex">
                <input class="form-control me-3" id="searchbar" onkeyup="search()" type="text" placeholder="Search">
                <button class="btn" type="button" id="searchbtn">Search</button>
            </span>

</nav>
