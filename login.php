<?php 

require_once 'navbar.php';

?>


<html>
<head>
    <title>Login</title>
</head>
<body style="background-image:url(loginbg1.jpg);background-repeat:no-repeat;background-attachment: fixed;background-size: cover;">
    <br><br><br><br>
    <div class="container" style="padding:40px 250px">
    <div class="card" style="opacity:0.9;height:70rem 100px;border-radius:2rem;background-color:grey;width:40rem">
    <br>
        <div style=" text-align:center;">
            <img class="card-img-top" src="avtar2.jpg" style="width:20%;height:20%;border-radius:100%;"></img>
            <h3 class="card-title " style="color:white">Sign in</h3>
        </div>
        <div class="card-body">
            
            <div class="card-text">
            <form method="post" class="">
            <label style="color:white">Email address</label>
            <input type="email" placeholder="Email" name="email" class="form-control btn-outline-primary" style="background-color:white"><br>
            <label style="color:white">Password</label>
            <input type="password" placeholder="Password" ID="pass" name="pass" class="form-control btn-outline-primary" style="background-color:white"><br>
            <input type="submit" class="btn btn-outline-light my-2 my-sm-0" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <u class="custom-switch btn" >
                <input type="checkbox" class="custom-control-input" onclick="showPass()" id="customSwitches" >
                <label class="custom-control-label" style="color:white;" for="customSwitches">Show Password</label>
            </u><br><br>
            <a href="#" style="color:white">Forgot Password?</a><br>
            <a href="#" style="color:white">Don't have an account??</a>
        </div>
        </form>
        </div>
        </div>
    </div>
    </div>
    
    <br><Br>

</body>
</html>

<Script language="JavaScript">
function showPass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>