<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* body {
    background: #ecf9f3;
} */

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #e4e1dc;
    border-radius: 15px;
    box-shadow: 3rem 4rem 10rem 10rem rgb(224, 195, 157), -3rem -3rem 10rem #efe7da;
}

.formlogo {
    width: 80px;
    margin: auto;
}

.formlogo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #f3b54a,
        0px 0px 0px 5px #f0e5d3,
        8px 8px 15px #a99f8f,
        -8px -8px 15px #f8f7f4;
}

.wrapper .formname {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #534939;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #6e624d;
    border-radius: 20px;
    padding: 10px 15px 10px 10px;
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #5a4828, inset -8px -8px 8px #eceae8;
}

.wrapper .form-field .fas {
    color: #6a5e49;
}

.wrapper .logbtn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-Color: rgb(245, 176, 87);
    margin-bottom: 10px;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 6px #c0a26e,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .logbtn:hover {
    background-Color: rgb(247, 157, 39);
}

.wrapper a {
    padding-top: 10px;
    text-decoration: none;
    font-size: 0.8rem;
    Color: rgb(114, 67, 5);
}

.wrapper a:hover {
    Color: rgb(190, 112, 8);
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>