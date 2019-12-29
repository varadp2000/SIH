<?php
include_once 'includes/header.php';
?>

<div class="container" style="margin-top:100px">
    <div class="card" style="background-color:black;opacity:0.9;padding:50px 50px;border-radius:50px">
    <div style="text-align:center;color:white">
        <h1><b>Sign Up</b></h1>
    </div>
        <form><br><br>
            <div class="form-row">
                <div class="col">
                <input type="text" placeholder="First Name" class="form-control ">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col">
                <input type="text" placeholder="Last Name" class="form-control ">
                </div>
            </div><br>
                <input type="number" placeholder="Contact Number" class="form-control"><br>
                <input type="email" placeholder="Email" class="form-control"><br>
                <div class="form-row">
                <div class="col">
                <input type="password" placeholder="Password" class="form-control" id="pass"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col">
                <u class="custom-switch btn" >
                <input type="checkbox" class="custom-control-input" onclick="showPass()" id="customSwitches" style="height:20px">
                <label class="custom-control-label" style="color:white;" for="customSwitches">Show Password</label>
                </u>
                </div>
                </div><br>
                <div class="form-row"><br>
                <div class="col">
                <select class="custom-select" id="inlineFormCustomSelectPref">
                    <option selected>Security Question</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col">
                <input type="password" placeholder="Answer" class="form-control">
                </div>
                </div><br>
                <input type="Submit" class="btn btn-outline-danger">
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

<?php
include_once 'includes/footer.php';

?>