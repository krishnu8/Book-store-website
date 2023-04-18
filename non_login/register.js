
function validateform() {
    var returnval = true;
    var regName = /\d+$/g;  
    var name = document.forms['myform']['name'].value;
    if (name.length<5 || regName.test(name)) {
        alert("Enter Valid Name");
        returnval = false;
    }
    
    var phone = document.forms['myform']['number'].value;
    if (phone.length != 10) {
        alert("Phone number is  not valid");
        returnval = false;
    
    }
    // var email = document.forms['myform']['email'].value;
    // if (email.value.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) || email.value == "") {
    //     alert("Invalid Email");
    //     returnval = false;
        
    // }
    var pass = document.forms['myform']['pass'].value;
    if (pass.length<8) {
        alert("Password length Must Be atleast 8 character long");
        returnval = false;
    }
    var cpass = document.forms['myform']['cpass'].value;
    if (cpass != pass) {
        alert("Password and confirm password is not matched");
        returnval = false;
    }

   return returnval;
}
