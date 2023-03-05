function validation() {
    var username = document.getElementById('name1').value;
    var email = document.getElementById('em').value;
    var mobile = document.getElementById('mob1').value;
    var password = document.getElementById('pwd').value;
    var cpassword = document.getElementById('cpwd').value;

    var usercheck = /^[A-Za-z. ]{3,20}$/;
    var emailcheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var mobilecheck = /^[0-9]{9}$/;
    var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;

    if (usercheck.test(username)) {
        document.getElementById('usererror').innerHTML = "";

        if (emailcheck.test(email)) {
            document.getElementById('emailerror').innerHTML = "";

            if (mobilecheck.test(mobile)) {
                document.getElementById('phoneerror').innerHTML = "";

                if (passwordcheck.test(password)) {
                    document.getElementById('passworderror').innerHTML = "";

                    if (cpassword.match(password)) {
                        alert('Registered Successfully')
                        document.getElementById('cpassworderror').innerHTML = "";
                    }
                    else {
                        document.getElementById('cpassworderror').innerHTML = "**Please Confirm Password";
                        return false;
                    }
                }
                else {
                    document.getElementById('passworderror').innerHTML = "**Include at least 1 number, 1 special symbol. Minimum 8 characters.";
                    return false;
                }

            }
            else {
                document.getElementById('phoneerror').innerHTML = "**Invalid Number";
                return false;
            }    

        }
        else {
            document.getElementById('emailerror').innerHTML = "**Invalid Email";
            return false;
        }
    }
    else {
        document.getElementById('usererror').innerHTML = "**Invalid Username";
        return false;
    }
}