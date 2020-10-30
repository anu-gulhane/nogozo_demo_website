<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocceries</title>
    <link rel="stylesheet" href="css/grocerries.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
    <script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Philosopher:ital@1&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

    <script>

function searchf() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myinput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("wrapper");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h5")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

     
    </script>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="images/nogozo_logo.png" alt="image">
        </div>
        <div class="input-group md-form form-sm form-1 pl-0">
            <div class="input-group-prepend">
                <span class="input-group-text purple lighten-3 e" id="basic-text1"><i class="fas fa-search text-white e" aria-hidden="true"></i></span>
           </div>
           <input class="form-control my-0 py-1 f" type="text" name="search" value="" autocomplete="off"
           placeholder="Search The Shop You Are Looking For" aria-label="Search" id="myinput" onkeyup="searchf()">
        </div>
    </div>
    <ul id="wrapper" style="list-style-type: none;margin-right:30px;">
        <li>
<div class="card">
  <h5 class="card-header">Shri Girraj Ji General Store</h5>
  <div class="card-body">
<p style="font-size:18px!important;"><b>Address : </b>Sarla Bagh ext,Dayal Bagh - 282005</p>
<p style="font-size:18px!important;"><b>Phone : </b>8477892077</p>
<p style="font-size:18px!important;">Order <b>Rs 200</b> to get free delivery</p>
<p style="font-size:18px!important;">Delivery charges : <b>Rs 500</b></p>
    <a href="shops/Shri_Girraj_Ji.php" class="btn btn-primary">Show Products</a>
  </div>
</div>
</li>
<li>
<div class="card">
  <h5 class="card-header">Radhika Departmental Store</h5>
  <div class="card-body">
    <p style="font-size:18px!important;"><b>Address : </b> A-1 Radhika Store Jairam Bagh-282005</p>
<p style="font-size:18px!important;"><b>Phone : </b>8477892077</p>
<p style="font-size:18px!important;">Order <b>Rs 500</b> to get free delivery</p>
<p style="font-size:18px!important;">Delivery charges : <b>Rs 50</b></p>
    <a href="#" class="btn btn-primary">Show Products</a>
  </div>
</div>
</li>
<li>
<div class="card">
  <h5 class="card-header">Grocers's Basket</h5>
  <div class="card-body">
    <p style="font-size:18px!important;"><b>Address : </b>10 , Kabir Nagar ,Opp. Puspanjali Ext - 282005</p>
<p style="font-size:18px!important;"><b>Phone : </b>7252990378</p>
<p style="font-size:18px!important;">Order <b>Rs 350</b> to get free delivery</p>
<p style="font-size:18px!important;">Delivery charges : <b>Rs 5</b></p>
    <a href="#" class="btn btn-primary">Show Products</a>
  </div>
</div>
</li>
 </ul>
</body>
</html>