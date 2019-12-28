<?php 

require_once 'navbar.php';

?>


<html>
<head>
    <title>Login</title>
</head>
<body style="background-image:url('loginbg.jpg');background-repeat:no-repeat;background-attachment: fixed;background-size: cover;">
    <br><br><br><br>
    <div class="container" style="padding:40px 250px">
    <div class="card" style="opacity:0.9;height:70rem 100px;border-radius:2rem;background-color:black;width:40rem">
    <br>
        <div style="width:100%; text-align:center;">
            <img class="card-img-top" src="avtar2.jpg" style="width:15%;height:15%;border-radius:100%;"></img>
            <h3 class="card-title " style="color:white">Sign in</h3>
        </div>
        <div class="card-body">
            
            <div class="card-text">
            <form method="post" class="">
            <input type="email" placeholder="Email" name="email" class="form-control btn-outline-danger" style="background-color:white"><br>
            <input type="password" placeholder="Password" name="pass" class="form-control btn-outline-danger" style="background-color:white"><br>
            <input type="submit" class="btn btn-outline-danger my-2 my-sm-0"><br> 
        </form>
        </div>
        </div>
    </div>
    </div>
    
    <br><Br>

</body>
</html>