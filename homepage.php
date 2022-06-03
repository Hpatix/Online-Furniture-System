<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background-image: url(./images/img_2.jpg);
  background-position: center;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: lightgreen;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: tomato;
}

.main {
  margin-left: 160px; 
  font-size: 28px;
  padding: 0px 10px;
}
h2{
  color: white;
}
p{
  margin-left: 30px;
  font-size: 17px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="user_login.php">Register</a>
  <a href="#about">About</a>
  <a href="#services">Products</a>
  
  <a href="#contact">Contact</a>
  <a href="#location">Location</a> 
</div>

<div class="main">
  <h2>Online Furniture Management System</h2>

  <p class="text">We offer services related to buying and selling furnitures online</p>
  <p class="text">Shop with us with our delivery commerce.</p>
  <p class="text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam minus ratione, vel dolorem? Impedit neque adipisci assumenda facere deserunt maxime sequi, nobis, officiis est, quidem minus odit error quae illum.</p>
  <p class="text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque qui nobis praesentium, minima dolore debitis saepe nisi totam quo. Asperiores soluta et, doloribus earum, nemo, culpa repellendus dicta magni maxime, inventore officia quam molestiae cum nobis natus nesciunt nisi. Architecto iusto reprehenderit officia quis ut nemo error, nihil nesciunt eveniet.</p>
  <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Deserunt laboriosam nisi, doloremque quia dignissimos voluptates odit reiciendis mollitia repudiandae impedit quasi omnis praesentium excepturi ex est illo, nesciunt similique vel sed a fugit animi veniam! Itaque vero temporibus, quam dolorum voluptatibus officia enim! Placeat fugit porro dolorum, numquam consequuntur, accusantium.</p>
  <p style="color: whitesmoke; margin-left: 250px;">copyrights &copy; 2022, All rights reserved.</p>
</div>
   
</body>


</html> 
