<?php require_once('includes/header.php'); ?>

    <div class="container">
        <div class="card" style="opacity:0.9;height:70rem 100px;border-radius:2rem;background-color:black;width:40rem">
        <div style="width:100%; text-align:center;">
            <img class="card-img-top" src="avtar2.jpg" style="width:15%;height:15%;border-radius:100%;"></img>
            <h3 class="card-title " style="color:white">Sign in</h3>
        </div>
        <div class="card-body">

            <div class="card-text">
            <form method="post" class="">
            <input type="email" placeholder="Email" name="email" class="form-control btn-outline-danger" style="background-color:white"><br>
            <input type="password" placeholder="Password" ID="pass" name="pass" class="form-control btn-outline-danger" style="background-color:white"><br>
            <input type="submit" class="btn btn-outline-danger my-2 my-sm-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
