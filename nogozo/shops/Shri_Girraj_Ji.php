<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocceries</title>
    <link rel="stylesheet" href="css/products.css">
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
    var input, filter, ul, li, a, ii, txtValue;
    input = document.getElementById("myinput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("wrapper");
    li = ul.getElementsByTagName("li");
    for (ii = 0; ii < li.length; ii++) {
        a = li[ii].getElementsByTagName("i")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[ii].style.display = "";
        } else {
            li[ii].style.display = "none";
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
    <ul style="list-style-type:none;" id="wrapper">
    <div class="container">
        <div class="row">
                    
                        <div class="col-sm image">
                            <li>
                        <div class="card" style="width: 18rem;">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/51pm3U9bhmL._SY300_QL70_.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <b ><i>tea </i>| 125g |</b><b> 450Rs</b><br>
                                <a href="grocerries.php" class="btn btn-primary" >Add To Cart </a>
                                <span><input type="number" placeholder="0" style="width:20%;"></span>
                            </div>
                        </div></li>
                    </div>
                    

                    
                        <div class="col-sm image"><li>
                        <div class="card" style="width: 18rem;">
                            <img src="https://tse4.mm.bing.net/th?id=OIP.AVq-xXn-n2TiyEjxl8JVMQHaHa&pid=Api&P=0&w=300&h=300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <b ><i>amul ghee</i> | 1 litre |</b><b> 500Rs</b><br>
                                <a href="grocerries.php" class="btn btn-primary" >Add To Cart</a>
                                <span><input type="number" placeholder="0" style="width:20%;"></span>
                            </div>
                        </div></li>
                    </div>
                    

                    
                        <div class="col-sm image"><li>
                        <div class="card" style="width: 18rem;">
                            <img src="https://tse3.mm.bing.net/th?id=OIP.FOSsF5RjngHBbZ54xBTargHaHa&pid=Api&P=0&w=300&h=300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <b ><i>knorr soup</i> | 20g |</b><b> 49Rs</b><br>
                                <a href="grocerries.php" class="btn btn-primary" >Add To Cart</a>
                                <span><input type="number" placeholder="0" style="width:20%;"></span>
                            </div>
                        </div></li>
                    </div>
                    

                   
                       <div class="col-sm image" ><li>
                        <div class="card" >
                            <img src="https://tse1.mm.bing.net/th?id=OIP.F5ntpoiQC7_rOlDu_paBLAHaHa&pid=Api&P=0&w=300&h=300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <b ><i>bournvita pro health chocolate drink jar </i>| 1Kg |</b><b> 409Rs</b><br>
                                <a href="grocerries.php" class="btn btn-primary" >Add To Cart</a>
                                <span><input type="number" placeholder="0" style="width:20%;"></span>
                            </div>
                        </div></li>
                    </div>
                   

        </div>
    </div>
    </ul>
</body>
</html>