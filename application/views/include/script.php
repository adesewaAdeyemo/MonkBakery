    <script>
    function search() {
        let input = document.getElementById('searchbar').value
        input=input.toLowerCase();
        let card = document.getElementsByClassName('card-title');
        
        for (i = 0; i < card.length; i++) {
            if (!card[i].innerHTML.toLowerCase().includes(input)) {
                card[i].style.backgroundColor="#000";				
            }
            else {
                card[i].style.backgroundColor="burlywood";				
            }
        }
    }
    let searchbtn = document.querySelector('#searchbtn');
    searchbtn.addEventListener('click', scroll);
    function scroll(){
        let input = document.getElementById('searchbar').value
        input=input.toLowerCase();
        let card = document.getElementsByClassName('card-title');
        for (i = 0; i < card.length; i++) {
            if (card[i].innerHTML.toLowerCase().includes(input)) {
                card[i].style.backgroundColor="burlywood";
                card[i].scrollIntoViewIfNeeded();				
            }
        }
    }

    let product = document.querySelector('#product');
    let prodUl = document.querySelector('.prodUl');
    var count = 0;
    product.addEventListener('click', prodList)
    function prodList(e){
        e.preventDefault();
        count+=1;
        console.log(count);
        if (count%2 != 0){
            prodUl.style.display = 'block';
            let ul = document.querySelector('.prodUl');
        }else{
            prodUl.style.display = 'none';
        }
    }
    // function myFunction() {
    // document.getElementById("product").style.display = "block";
    // }


    // let btn = document.querySelector('form');
    // btn.addEventListener('submit', function(e){
    //     e.preventDefault();
    // })

</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src='cart.js'></script>
<script>
      if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
  </script>
