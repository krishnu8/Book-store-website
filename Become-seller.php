<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
 
  font-family: Arial, Helvetica, sans-serif;
 
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("image/a2.jpg");
  height: 50%;
  /* margin-bottom: 25%; */
  background-position: center;
  /* margin-top: 20%; 
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;  */
}

.hero-text {
  text-align: center;
  position: absolute;
  bottom: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 20px;
  margin-left: 200px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}
.btn{
  border-radius: 45px;
  outline: 0;
  display: inline-block;
  padding: 15px 20px;
  margin-left: 200px;
  color: black;
  background-color: #e41212;
  text-align: center;
  cursor: pointer;
  margin-bottom: 25%;
}
.btn2{
  border-radius: 45px;
  outline: 0;
  display: inline-block;
  padding: 15px 20px;
  margin-right: 200px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
  margin-bottom: 20%;
}
.btn:hover {
  background-color: deepskyblue;
  color: white;
}
.btn2:hover {
  background-color:green;
  color: white;
}
.a1{
  border-radius: 15px;
  height: 35px;
}
.a2{
  border-radius: 15px;
  height: 35px;
  width: 25%;
  background-color: deepskyblue;
  text-align: center;
  cursor: pointer;
  font-size: 20px;
}
.a2:hover{
  background-color: white;
  color: red;
}

</style>
</head>

<body>
  

<div class="hero-image">
  <div class="hero-text">
	<h3>Launch your bissiness in 10 minutes</h3>
    <input type="number" class="a1" placeholder="Enter Your Number">
	<input type="button" value="Start Selling" class="a2">
    <p></p>
    <a href="regis.php"><input type="button" value="register" class="btn2"></a>
	<input type="button" value="Start Selling" class="btn">
  </div>
</div>

<?php include_once("footer.php"); ?>

</body>
</html>
