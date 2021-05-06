
    <?php


	 ?>

<!doctype html>

<html>
    <head>
    <title>Hello world!</title>
</head>
<style>
  body{
    background-image: url(anotherblue.jpg);
}



  .BG{ 
  min-height: 100%;
  width: 100%;
  height: auto;
  position: fixed;
  top: 0;
  left: 0;
  }
 
/* A one-line comment */

.Login{
      text-align: center;
      padding: 115px;
			margin: 35px;
      color:#4a4b65;
			position: relative; 
			font-size: 25px;
      font-family: sans-serif;
      box-sizing: border-box;
      width: 95%;
			
     
}
/* Color sa background sa logo and also ang size */

.Logo{
  position: absolute;
  top: 0;
  left: 0;
  background-color: white;
  padding: 175px;
  box-shadow: 15px 10px #3C5584;
  left: 75px;
  top: 25px;
  opacity: 0.9;
  
}

/* ang logo */

img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;

}

.Login h1{
  position: relative; 
  left:185px;
  bottom:55px;
}

/*  para sa student og counsellor na button */

.but1{
	background-color: #41CFF2;
  color: white;
  padding: 25px 185px;
  text-align: center;
  display: inline-block;
  font-size: 46px;
  margin: auto;
  transition-duration: 0.4s;
  cursor: pointer;
	border-radius: 8px;
  box-sizing: border-box;
  left:320px;
  bottom:35px;
  position: relative;
  font-family: Tahoma;
  opacity: 0.9;
  
}
.but2{
	background-color: #92B1FE;
  color: white;
  padding: 25px 160px;
  text-align: center;
  display: inline-block;
  font-size: 45px;
  margin: auto;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 8px;
  top:5px;
  left:320px;
  box-sizing: border-box;
  position: relative;
  opacity: 0.9;
  
  font-family: Tahoma;
}
.Login .but1{
  color: black; 
  border: 2px solid #41CFF2;
}
.Login .but1:hover{
	background-color: #08B7E2;
  color: white;
  
}
.but1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.Login .but2{
  color: black; 
  border: 2px solid #92B1FE;
}
.Login .but2:hover {
	background-color: #5A7DFC;
  color: white;
}
.but2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

	</style>
<body>
<div clas ="buttons">

</div>
  <div class = "BG">
  <div class = "Login" >
 <!-- buttons sa student and counsellor -->   
<h1 style="color:#19A2A2">Access as:</h1>
  <a href="student.html" target="_parent">	<button class="but1">Student</button></a>
  <a href="Coun_reg.html" target="_parent">	<button class="but2">Counsellor</button></a>

  
<div class = "Logo">
  <!-- Logo na png -->
<img src="log.png" alt="girl">
 
</div>
</div>
</body>
</html>

