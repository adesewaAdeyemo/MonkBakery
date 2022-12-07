<style>
    *{
    border: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Fuzzy Bubbles', cursive;
}

body form .navbar{
    background-color: rgb(36, 22, 3);
    position: fixed;
    top: 0;
    z-index: 1;
    width: 100%
}
.navbar{
    background-Color:  rgb(36, 22, 3);
    /*background-Color: rgb(102, 63, 13); */

}
nav .nav-item .nav-link{
    color: #fff;
}
nav .nav-item .nav-link:hover{
    color: rgb(107, 62, 3);
}

/* nav .nav-item .nav-link ul li ul{
    display: none;
} */
nav img{
    height: 40px;
    margin-left: 1rem;
}
.logo h1{
    display: inline;
    color: #fff;
    padding:0 0 0 1rem;
    margin-left: -1rem;
}
.logo .add{
    color: #fff;
    border:solid burlywood;
    border-radius: 50%;
    margin-left: -6%;
}
nav .logo button{
    background-color: rgb(36, 22, 3);
    border: none;
}
nav .logo h1{
    border-bottom: 2px solid rgb(240, 148, 29);
}
.prodUl{
    display: none;
    color: #fff;
    z-index: 1;
    position: absolute;
    background-color: burlywood;
    border-radius: 8px;
    padding: 10px;
}
.prodUl li{
    list-style-type: none;
}
.container{
    margin:5rem 10% 0;
    width: 80%;
}
.bread{
    width: 245px;
    height: 400px;
    text-align: center;
    box-shadow: 2px 1px 3px;
    /* margin-top: 10px; */
    margin-left: 1%;

}
.bread:hover{
    position: relative;
    box-shadow: 1rem 0rem  8rem 6rem rgb(166, 148, 125);
    width: 255px;
}
.cartcase .bread:hover{
    box-shadow: 1rem 1rem  8rem 1rem rgb(166, 148, 125);
    width: 230px;
}
.bread .img{
    height: 300px;
}
.bread .img:hover{
    background-color: antiquewhite;
}
.bread input[type='text']{
    border:none;
    background: tranparent;
    width: 245px;
    outline: none;
    text-align:center;
}
.bread p{
    margin: -3% 0 0;
    color: rgb(107, 62, 3);
}
nav span .btn{
    background-color: burlywood;
    margin-right: 5%;
}
nav .btn:hover{
    color: #fff;
    background-color: rgb(102, 80, 50);
}
.container .d-flex input{
    padding: 5px;
    background-color: burlywood;
}
.container table{
    margin-top: 0;
    text-align: left;
    background-color: rgb(235, 220, 201);
}
.car input[type="submit"], .car button{
    width: 200px;
    background-color: burlywood;
    border-radius: 4px;
    padding: 5px 0;
    margin-bottom: 1rem;
    border: 1px solid rgb(117, 72, 14);
    border: none;
    text-decoration: none;
}
.container .car{
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}
.container .car input[type="submit"]:hover, .container .car input[type="submit"]:hover{
    background-color: #fff;
}
.error{
            color:red;
        }
        .hero-error{
            color: red;
            position: absolute;
            bottom: 10%;
            right: 47%;
        }



</style>