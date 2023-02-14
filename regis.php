<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/regis.css">
   </head>
<body>
  <nav class="navbar"></nav>
  <div class="wrapper">
    <div class="header">
      <h2>Registration Form</h2>
    </div>
    <form id="form" class="form">
      <div class="form-control">
        <input type="text" placeholder="Enter Full Name" id="name" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-times-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <input type="number" placeholder="Your number" id="phone" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-times-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <input type="email" placeholder="Enter email" id="email" />
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-times-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <input type="password" placeholder="Password" id="password"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-times-circle"></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <input type="password" placeholder="Confirm Password" id="confirm"/>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-times-circle"></i>
        <small>Error message</small>
      </div>
      <a href="http://127.0.0.1:5500/image/submit.html"><button>Submit</button></a>
    </form>
    <div class="credit">Made with <span style="color:tomato">❤</span> by <a href="https://www.facebook.com/chasmis.aahan">Cuttest Aahan</a></div>
  </div>

  <script src="validation/regis.js"></script>
 
 

</body>
</html>
