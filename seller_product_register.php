<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<style>
    .sub_btn {
        border-radius: 5px;
        border-color: blue;
        color: blue;
        background-color: transparent;
        height: 40px;
        width: 80px;
        font-size: 20px;

    }
    body{
        background-image: url(image/book111.jpg);
        background-repeat: no-repeat;
    }
    .sub_btn:hover {
        background-color: blue;
        color: white;
    }
</style>


<script >
    function validate123() {
        var fn = document.getElementById('fname1').value;
        var no = document.getElementById('mobile1').value;
        var ct = document.getElementById('category').value;
        if(ct=="2"){
            alert("category cannot be empty");
            var vct = "false";
        }
        else{
            var vct ="true";
        }
        if (fn == "") {
            alert("Enter Book name");

            var vfn = "false";
        } else {
            var fn123 = /^[a-zA-Z ]*$/;
            //alert ("demooooooooooo");
            var e = fn123.test(fn);
            // alert(e);
            if (e == false) {
               alert("Enter Correct Book name");
                vfn = "false";
            } else {
                vfn = "true";
            }
        }
        if (no == "") {
            alert("Enter price of Book")
            var vno = "false";
        } else {
            var mn = /^[0-9]{10}$/;
            var b = mn.test(no);
            if (b == false) {
                if(no>5000)
                {
                    alert("Book price cannot be more than 5000");
                }
                vno = "false";
            } else {

                vno = "true";
            }
        }

        if (vno == "true" && vfn == "true" && vct=="true") {
            return true;
            
        } else {
            return false;
        }
    }

</script>
<body>
    
<div style="display: flex;justify-content: center; ">
    <form onSubmit="return(validate123());" method="post" enctype="multipart/form-data" action="seller_product.php"
        style="margin-top:50px;display: flex;justify-content: center;background-color:rgba(36, 179, 160, 0.588);width:35%;height:auto; margin-top:10%;">

        <table>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <h3><u>BOOK Register</u></h3>
                </td>
            </tr>
            <tr>
                <td> Book Name</td>
                <td>
                    <input type="text" class="form-control" placeholder="Name" id="fname1" name="fn1">

                </td>
            </tr>
            <tr>
                <td> Category</td>
                <td>
                    <div class="form-group">
                        <select class="select" id="category">
                            <option value="1" disabled></option>
                            <option value="2">Category</option>
                            <option value="3">Graphic novel </option>
                            <option value="4">Historical fiction</option>
                            <option value="4">Horror</option>
                            <option value="4">Mystery</option>
                            <option value="4">Poetry</option>

                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Price
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="Price" id="mobile1" name="mobile">
                </td>
            </tr>
            <tr>
                <td>Book Picture</td>
                <td> <input type="file" name="" id=""> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" class="sub_btn" style=" margin-top:10px" value="submit" name="sub" />
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <a href="seller_product.php"><button type="button" class="sub_btn" style="width:150px; margin-top:20px"> Return Back</button></a>
                </td>
            </tr>
            
        </table>
    
</div>
</body>