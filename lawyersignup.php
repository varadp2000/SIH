<?php
include_once 'includes/header.php';

?>
<div class="container" style="margin-top:100px">
    <div class="card" style="background-color:black;opacity:0.9;padding:50px 50px;border-radius:50px">
    <div style="text-align:center;color:red">
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
                <input type="number" class="form-control" placeholder="Varification Code">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col">
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                    Don't Have Code?
                </button>
                </div>
                </div><br>
                <input type="Submit" class="btn btn-outline-danger">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" class="btn btn-outline-danger">
        </form>

    </div>
</div>
<?php
include_once 'includes/footer.php';

?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">How to get Varification Code?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        To get varification code contact to our Admin at <br><link>admin@example.com</link>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="window.location.href='mailto:varadrpatil27@gmail.com';">Contact Admin</button>
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