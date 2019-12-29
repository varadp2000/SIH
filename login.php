<?php require_once('includes/header.php'); ?>
    <div class="container" >
        <div class="card" style="margin-top:100px;padding:10% 10%;opacity:0.9;border-radius:2rem;background-color:black;">
        <div style="background-color:black;">
        <div style="width:100%; text-align:center;">
            <img src="public/images/avtar2.jpg" style="width:170px;height:170px;border-radius:100%;"></img>
            <h3 class="card-title " style="color:white">Sign in</h3><br><Br>
        </div>
        <div >

            <div>
            <form method="post" class="">
            <input type="email" placeholder="Email" name="email" class="form-control" style="background-color:white"><br>
            <input type="password" placeholder="Password" ID="pass" name="pass" class="form-control" style="background-color:white"><br>
            <input type="submit" class="btn btn-outline-danger my-2 my-sm-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <u class="custom-switch btn" >
                <input type="checkbox" class="custom-control-input" onclick="showPass()" id="customSwitches" >
                <label class="custom-control-label" style="color:white;" for="customSwitches">Show Password</label>
            </u><br><br>
            <a href="#" class="form-group" style="color:white">Forgot Password?</a><br>
            <a href="#" class="form-group" style="color:white">Don't have an account??</a>
        </div>
        </form>
    </div>
    </div>

    <script language="JavaScript">

        function showPass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>

<?php require_once('includes/footer.php'); ?>
