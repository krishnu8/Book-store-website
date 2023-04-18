function validation1() {
    var name = document.getElementById("name").value;
    var number = document.getElementById("number").value;
    var password = document.getElementById("password").value;
    var cpass = document.getElementById("password1").value;
    // var email = document.getElementById("em").value;
    var namecheck = /[A-Za-z]/;
    var numbercheck = /^[0-9]{10}$/;
    var passwordcheck = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    var emailcheck = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if (namecheck.test(name)) {
        N = "true";
    } else {

        // document.getElementById('nameerror').innerHTML ="Name Connot contain number";
        alert("Name Connot contain number");
        N = "false";
    }
    if (numbercheck.test(number)) {
        NU = "true";
    } else {

        // document.getElementById('numbererror').innerHTML ="Number must be 10 digit";
        alert("Number must be 10 digit");
        NU = "false";
    }
    // if (emailcheck.test(email)) {
    //     EM = "true";
    // } else {

    //     // document.getElementById('numbererror').innerHTML ="Number must be 10 digit";
    //     alert("Enter correct Email Adderess");
    //     EM = "false";
    // }
    if (passwordcheck.test(password)) {
        if (password === cpass) {
            CP = "true";
        } else {
            // document.getElementById('passworderror1').innerHTML ="Enter same as above";
            alert("Enter same as above");
            CP = "false";
        }
    } else {
        // document.getElementById('passworderror').innerHTML ="Password must contain number symbol and character";
        alert("Password must contain number symbol and character");
        P = "false";
    }
    if (N == "false" || NU == "false" || P == "false" || CP == "false") {
        return false;
    }else{
        return true;
    }

}