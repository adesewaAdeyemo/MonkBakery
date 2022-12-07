<style>
body {
    margin: 0;
    background: lightgray;
    text-align: center;
    font-family: sans-serif;
    color: rgb(194, 192, 190);
    /* text-shadow:1px 1px 1px solid black;*/
    /* background-Color: rgb(240, 148, 29); */
    background-Color: rgb(245, 176, 87);
    /* background-Color: rgb(251, 218, 186) ; */
}
#explore{
    box-shadow:3px 3px 3px burlywood;
}
#explore:hover{
    background-color:transparent;
}
.container {
    position: relative;
    width: 320px;
    margin: 100px auto 0 auto;
    perspective: 1000px;
}
.carousel {
    position: absolute;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d; 
    animation: rotate360 60s infinite forwards linear;
}
.carousel__face { 
    position: absolute;
    width: 300px;
    height: 187px;
    top: 20px;
    left: 10px;
    right: 10px;
    background-size: cover;
    box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);
    display: flex;
}      
span {
    margin: auto;
    font-size: 2rem;
}

.carousel__face:nth-child(1) {
    background-image: url("images/peanut bread.jfif");
    transform: rotateY(  0deg) translateZ(430px); }
.carousel__face:nth-child(2) { 
    background-image: url("images/cream bread.jfif");
    transform: rotateY( 40deg) translateZ(430px); }
.carousel__face:nth-child(3) {
    background-image: url("https://images.pexels.com/photos/808466/pexels-photo-808466.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
    transform: rotateY( 80deg) translateZ(430px); }
.carousel__face:nth-child(4) {
    background-image: url("images/cheesy Bread.jfif");
    transform: rotateY(120deg) translateZ(430px); }
.carousel__face:nth-child(5) { 
    background-image: url("images/bread 15.jfif");
transform: rotateY(160deg) translateZ(430px); }
.carousel__face:nth-child(6) { 
    background-image: url("images/Bread cube.jpg");
transform: rotateY(200deg) translateZ(430px); }
.carousel__face:nth-child(7) { 
    background-image: url("https://images.pexels.com/photos/1394841/pexels-photo-1394841.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
transform: rotateY(240deg) translateZ(430px); }
.carousel__face:nth-child(8) {
    background-image: url("images/fruit mix.jfif");
    transform: rotateY(280deg) translateZ(430px); }
.carousel__face:nth-child(9) {
    background-image: url("images/cart.png");
    transform: rotateY(320deg) translateZ(430px); }


@keyframes rotate360 {
    from {
    transform: rotateY(0deg);
    }
    to {
    transform: rotateY(-360deg);
    }
}

</style>
