<style>

.form {
  background-color: rgb(249, 245, 239);
  width: 40%;
  min-width: 500px;
  align-self: center;
  box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
    0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
  border-radius: 7px;
  padding: 40px;
}
.cartform{
  padding-bottom:5.5rem; 
   box-shadow:none;
}

#payment-form {
  display:none;
  width:29.5%;
  position:absolute; 
  right:14%; 
  padding:1rem; 
  border-radius:5px; 
  margin-top:1rem; 
  border:1px solid rgb(107, 62, 3);  
  font-size: 16px;
}


#submit{
  border: 0;
  display: block;
  border-radius: 4px;
  padding: 5px;
  cursor: pointer;
  transition: all 0.2s ease;
  box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
  width: 100%;
}
button:hover {
  filter: contrast(115%);
}
button:disabled {
  opacity: 0.5;
  cursor: default;
}

@media only screen and (max-width: 600px) {
  /* form {
    width: 80vw;
    min-width: initial;
  } */
}
</style>