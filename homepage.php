

<?php session_start();

if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass'])){
?>
<title> Rccomme</title>
<body  bgcolor="white">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
.checked {
    color: orange;
}
.tablinks {
background-color:darkolivegreen;
border:none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration:inherit;
display: inline-block;
font-size: 16px;
margin: 3px 2px;
cursor:cell;
}
</style>
<p style="text-align:right"><a href="logout.php"> Logout</a></p>

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

</body>

<?php }
else{
	header("Location:index.html");
}
?>
