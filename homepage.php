<?php session_start();

if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass'])){
?>
<html>
<head>
    <meta charset="utf-8" />
    <title> Rccomme</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="flex-container">
    <header><p style="text-align:right"><a href="logout.php"> Logout</a></p></header>
    <div class="content-container">
        <div class="content">
          <div class="tab" style="text-align: center">
            <button class="tablinks" onclick="openCity(event, 'c1')">Recommended</button>
            <button class="tablinks" onclick="openCity(event, 'c2')">Editor's choice</button>
            <button class="tablinks" onclick="openCity(event, 'c3')">Popular picks</button>
          </div>
          <div id="c1" class="tabcontent" style="text-align: center">
           <table style="width:100%"border= 1px >
            <tr>
              <th>Genre</th>
              <th>Name</th>
              <th>Rating</th>
            </tr>
            <tr>
              <td>Horror</td>
              <td>Friday the 13th</td>
              <td><span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span></td>
            </tr>
            <tr>
              <td>RPG</td>
              <td>The Legend of Zelda: Breath of the Wild</td>
              <td><span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span></td>
            </tr>

            <tr>
              <td>RPG</td>
              <td>Mario:Odyssey</td>
              <td><span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span></td>
            </tr>
            <tr>
              <td>RPG</td>
              <td>Thw Witcher III:Wild Hunt</td>
              <td><span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span></td>
            </tr>
            <tr>
              <td>Action</td>
              <td>Dark souls III: The Fire Fades Edition</td>
              <td><span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span></td>
            </tr>
          </table>
          </div>

        </div>
        <div class="sidebar1"></div>
        <div class="sidebar2"></div>
    </div>
    <footer>footer</footer>
</body>
</html>
<?php }
else{
	header("Location:index.html");
}
?>
