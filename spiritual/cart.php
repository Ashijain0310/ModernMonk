<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
  <title>Cart</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>MY CART</h1>
      </div>
      <div class="col-lg-8">
        <table class="table">
          <thead class="text-center">
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Item Name</th>
              <th scope="col">Item Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col">        </th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            if(isset($_SESSION['cart']))
            {
             foreach($_SESSION['cart'] as $key => $value)
             {
               $sr=$key+1;
               echo"
                <tr>
                <td>1</td>
                <td>$value[Item_Name]</td>
                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'</td>
                <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='10'></td>
                <td class='itotal'></td>
                <td>
                <form action='manage_cart.php'method='POST'>
                <button class='btn btn-outline-danger'>REMOVE</button>
                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                </form>
                </td>
                </tr>
                ";
             }
            }
            ?>
      </tbody>
     </table>
     </div>
     <div class="col-lg-4">
       <div class="border bg-light rounded p-4">
       <h4>Grand Total:</h4>
       <h5 class="text-right" id="gtotal">
          </h5>
          <br>
        <form>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1" style="margin-bottom:10px;">
              Cash On Delivery
          </label>
          </div>
          <button class="btn btn-primary btn-block">Make Purchase</button>
       </div> 
     </div>
          </div>
          </div>
  <script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementByClassName('iquantity');
    var itotal=document.getElementByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    // var fake_value = document.getElementsByClassName('iprice')[0].value;
    var fake_value = document.querySelector(".iprice")[0].value;
    function subTotal()
    {
      console.log("Entered in a function")
      gt=0;
      console.log("Length is ", iprice.length);
      console.log(iprice[0]);
      console.log(fake_value);
      for(i=0;i<iprice.length;i++)
      {
         console.log("Entered in for loop");
         itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
         console.log(itotal[i]);
         gt=gt+(iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText=gt;
    }
    subTotal();
  </script>
</body>
</html>