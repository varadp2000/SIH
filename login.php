<?php 

require_once 'navbar.php';

?>


<html>
<head>
    <title>Login</title>
</head>
<body>
<br><br><Br>
    <div class="container" style="">
    <div class="card" style="background-color:black;height:70rem 100px;">
        <div style="width:100%; text-align:center">
            <img class="card-img-top" src="avtar2.jpg" style="width:15%;height:15%;border-radius:50%;"></img>
            <h3 class="card-title" style="color:white">Sign in</h3>
        </div>
        <div class="card-body">
            
            <div class="card-text">
            <form method="post">
            <input type="email" placeholder="Email" name="email" class="form-control" style="background-color:white"><br>
            <input type="password" placeholder="Password" name="pass" class="form-control" style="background-color:white"><br>
            <input type="submit" class="btn btn-outline-light my-2 my-sm-0"><br> 
        </form>
        </div>
        </div>
    </div>
    </div>
    
    <br><Br>

</body>
</html>