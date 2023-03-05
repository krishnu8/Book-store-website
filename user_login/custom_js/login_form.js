function validation() {
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;

    var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
    // var emailcheck = /^[A-Z.a-z_]{3,}[0-9]@[A-za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
    // var emailcheck = /^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/
    var emailcheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (emailcheck.test(email)) {
        document.getElementById('emailerror').innerHTML = "";
        
        if (passwordcheck.test(password)) {
            alert('Login Successful')
            document.getElementById('passworderror').innerHTML = "";
        }
        else {
            document.getElementById('passworderror').innerHTML = "**Include at least 1 number, 1 special symbol. Minimum 8 characters.";
            return false;
        }
    }
    else {
        document.getElementById('emailerror').innerHTML = "**Invalid Email";
        return false;
    }

    // if (passwordcheck.test(password)) {
    //     document.getElementById('passworderror').innerHTML = "";
    // }
    // else {
    //     document.getElementById('passworderror').innerHTML = "**Invalid Password";
    //     return false;
    // }
}