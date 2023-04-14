<style>
    .oi {
        position: fixed;
        height: 100%;
        background-color: #9ec5c6;
        border-radius: 10px;
        padding-top: -20px;
    }
</style>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Conform its You</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <label for="inputPasswordOld">Enter Password</label>
                    <input type="password" class="form-control" id="inputPasswordOld" required="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" value="Delete" class="btn btn-primary">
                </div>
            </form>

        </div>
    </div>
</div>
</div>
</div>

<!-- Change password -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="post" onsubmit="return validation1()">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Chnage Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="orangeForm-name" class="form-control     " required>
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Current
                            Password</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="pass" class="form-control " required>
                        <label data-error="wrong" data-success="right" for="orangeForm-email">New Pasword</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="cpass" class="form-control" required>
                        <label data-error="wrong" data-success="right" for="orangeForm-pass" >verify</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" value="Change" class=" btn-custom" >
                </div>
            </div>
        </form>
        <script>
            function validation1() {
                var pass = document.getElementById("pass").value;
                var cpass = document.getElementById("cpass").value;
                var passwordcheck = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
                if(passwordcheck.test(pass)){
                    if(pass!==cpass){
                        alert("Enter same password as above");
                        CP="false";
                    }
                }
                else{
                    alert("password must contain number character special symbol");
                    P="false";
                }
                if(P=="false"||CP=="false"){
                    return false;
                }else{
                    return true;
                }

            }
        </script>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>