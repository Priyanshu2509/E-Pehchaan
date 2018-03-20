<html>
<title>Home Page</title>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.container {
  position: absolute;
  margin-top: 70px;
  width: 280px;
  height: 350px;
  margin-left: 200px  ;
}

.container2 {
  position: absolute;
  margin-top: 70px;
  width: 280px;
  height: 350px;
  margin-left: 750px  ;
}

.container3 {
  position: absolute;
  margin-top: 450px;
  width: 280px;
  height: 350px;
  margin-left: 480px  ;
}


img {
  position: relative;
  width: 280px;
  height: 350px;
  margin-left: 70px;
}


.title {
  position: absolute;
  width: 500px;
  left: -120;
  top: 120px;
  font-weight: 700;
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  color: white;
  z-index: 1;
  transition: top .5s ease;
}

.title2 {
  position: absolute;
  width: 500px;
  left: -120;
  top: 120px;
  font-weight: 700;
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  color: white;
  z-index: 1;
  transition: top .5s ease;
}

.title3{
  position: absolute;
  width: 500px;
  left: -120;
  top: 120px;
  font-weight: 700;
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  color: white;
  z-index: 1;
  transition: top .5s ease;
}
.container:hover .title {
  top: 90px;
}

.container2:hover .title2 {
  top: 90px;
}
.container3:hover .title3 {
  top: 90px;
}
.button {
  position: absolute;
  width: 500px;
  left:-120;
  top: 180px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}


.button2 {
  position: absolute;
  width: 500px;
  left:-120 ;
  top: 180px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}

.button3 {
  position: absolute;
  width: 500px;
  left:-120 ;
  top: 180px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}

.button a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  border: solid 2px white;
  z-index: 1;
}

.button2 a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  border: solid 2px white;
  z-index: 1;
}

.button3 a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  border: solid 2px white;
  z-index: 1;
}


.container:hover .button {
  opacity: 1;
}

.container2:hover .button2 {
  opacity: 1;
}

.container3:hover .button3 {
  opacity: 1;
}

body, html {
    height: 100%;
    margin: 0;
}

body {margin:10;
 background-color: #ddd; }


h1 {
font-size:px;
display: inline-block;
text-align: center;
 }

.hero-image {
  background-image: url("hero_image.jpg");
  height: 80%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 10%;
  left: 18%;
  transform: translate(-50%, -50%);
  color: white;
  float: left;
  clear: left;
}

img{

  position:absolute;
 float:left;
  clear:right;
margin-right:0px;
  TOP:-30px; LEFT:-200px; WIDTH:500px; HEIGHT:700px" src="heading.png"}

 

</style>
<body>
  <ul>
  <li><a class="active" href="#home">Priyanshu, 20513202715/CSE-2</a></li>
</ul>

 <div class="hero-image">
  <div class="hero-text">
    
    <img src="heading.png" alt="logo" style="float:left; margin:0px 500px 500px 0px; cursor:pointer; cursor:hand; border:0 width:120px;height:120px;">
     
   
     </div>
</div>

<div class="container">
  <img src="adminphoto.png" alt="" />
  <p class="title">Login as Adminstrator</p>
  <div class="overlay"></div>
  <div class="button"><a href="loginadmin.php"> Click here</a></div>
</div>

<div class="container2">
  <img src="userphoto.png" alt="" />
  <p class="title2">Login as Employee</p>
  <div class="overlay2"></div>
  <div class="button2"><a href="loginpri.php "> Click here </a></div>
</div>

<div class="container3">
  <img src="public.png" alt="" />
  <p class="title3">General Public Portal</p>
  <div class="overlay3"></div>
  <div class="button3"><a href="addcomplaint.php "> Click here </a></div>
</div>



</body>
</html>