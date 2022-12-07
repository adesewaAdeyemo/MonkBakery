<script>
    const btn = document.getElementById('btn');
    const check = document.querySelector("[name='check']");
    const checkform = document.querySelector('#payment-form');
    const spin = document.querySelector("[name='spin']");
    const cart = document.querySelector("[name='cart']");
    const uncart = document.querySelector("[name='empty']");
    const load = document.querySelector("#spinner");
    const table = document.querySelector("table");
    count=0;
    check.addEventListener('click', (e) =>{
        count++;
        e.preventDefault();
        if (count%2 === 1) {
            checkform.style.display='block';
        }else{
            checkform.style.display='none';
        }
    })
    spin.addEventListener('click', (e) =>{
        e.preventDefault();
        count++;
        if (count%2 === 0) {
            load.style.display='block';
        }else{
            load.style.display='none';
        }
    })
    cart.addEventListener('submit', (e) =>{
        e.preventDefault();
    })
    uncart.addEventListener('submit', (e) =>{
        e.preventDefault();
    })
    table.addEventListener('onload', (e) =>{
        e.preventDefault();
    })



    btn.addEventListener('click', () => {
  const form = document.getElementById('form');
    

  if (form.style.display === 'none') {
    form.style.display = 'block';
  } else {
    form.style.display = 'none';
  }
});
</script>
