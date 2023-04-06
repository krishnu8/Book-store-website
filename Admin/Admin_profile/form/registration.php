<?php include_once ("controller.php"); 
include_once("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
        <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?> 
<body style="justify-content: center;border: #ffffff solid 2px;height: 100vh;">
        <div class="form" style="display: flex;justify-content: center;margin-top:110px;">
            <div style="background-color: rgba(0,0,0,0.7);width:400px; height:650px;border-radius: 20px;">
                <center><img src="../pic/Book1.png" alt="" style="height:50px;width: 160px;border-radius: 10px;margin-top:-35px;"></center>
                <div style="padding: 30px;">
                    <form onsubmit="return validation1()" action="">
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>Name</b><br>
                                <input id="name" type="text" placeholder="Enter your Name" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                               <!-- <span id="nameerror" class="text-danger"></span> -->
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>Phone Number</b><br>
                                <input id="number" type="text" placeholder="Enter your phone Number" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <!-- <span id="numbererror" class="text-danger"></span> -->
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>E-mail</b><br>
                                <input id="email" type="email" placeholder="example@gmail.com"required   style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <!-- <span id="emailerror" class="text-danger"></span> -->
                        </div>
                        
                        <div class="input"><b>Password</b> <br>
                            <input id="password" type="password" placeholder="Enter password" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <!-- <span id="passworderror" class="text-danger"></span> -->
                        </div>
                        <div class="input"><b>Confirm Password</b> <br>
                            <input id="password1" type="password" placeholder="confirm password" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <!-- <span id="passworderror1" class="text-danger"></span> -->
                        </div>
                        <div class="input"><b>Profile Picture</b> <br>
                            <input id="pic" type="file" placeholder="confirm password" required   style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <!-- <label for="pic">Choose Profile Picture</label> -->
                        </div>
                        </font><br>
                        <p id="p1"></p>
                        <center><input type="submit" class="btn1" name="" id="" value="Register"></center>
                    </form>
                    <font color="white"><b>Have an Account?</b> <u><a href="login.php" style="color: green;">login</a></u><br></font><br>

                    <center><button style="background-color: rgb(117, 14, 143);width: 150px;height:35px;font-size: 20px;border: 0;border-radius: 10px;">
                            <a href="../Dashboard.php" style="color:#fff;"><b>Return BAck</b></a></button></center><br>
                </div>
            </div>
        </div>
</body>