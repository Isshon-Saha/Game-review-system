<?php session_start();
require("db_conn.php");

if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass'])){

$allData = getDataFromGameBank();
$recommendedData = getDataFromRecommended();
$editorsChoice = getDataFromEditorsChoice();
$popularData = getDataFromPopular();
// var_dump($data);

?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Rccomme</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="./js/Jquery.js"></script>

<style>

.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

</style>

</head>
<body class="flex-container">
    <header><p style="text-align:right"><a href="logout.php"> Logout</a></p></header>
    <div class="content-container">
        <div class="content">
          <div class="tab" style="text-align: center">
            <button class="tablinks" id="first" onclick="openCity(event, 'c0')">All</button>
            <button class="tablinks" onclick="openCity(event, 'c1')">Recommended</button>
            <button class="tablinks" onclick="openCity(event, 'c2')">Editor's choice</button>
            <button class="tablinks" onclick="openCity(event, 'c3')">Popular picks</button>
          </div>
          <div id="c0" class="tabcontent">
            <h3>All</h3>
            <table style="width:100%"border= 1px >
             <tr>
               <th>Genre</th>
               <th>Name</th>
               <th>Rating</th>
             </tr>

             <?php foreach($allData as $key=>$value): ?>
               <tr>
                 <th><?php echo $value['G_genre'] ?></th>
                 <th>
                  <a href="review.php?title=<?php echo $value['G_name'] ?>"> <?php echo $value['G_name'] ?> </a>
                 </th>
                 <td>
                   <?php for ($i=0; $i < $value['Rating']; $i++): ?>
                     <span class="fa fa-star checked"></span>
                   <?php endfor; ?>
               </td>
               </tr>
             <?php endforeach; ?>

           </table>
          </div>
          <div id="c1" class="tabcontent">
            <h3>Recommended</h3>
            <table style="width:100%"border= 1px >
             <tr>
               <th>Genre</th>
               <th>Name</th>
               <th>Rating</th>
             </tr>

             <?php foreach($recommendedData as $key=>$value): ?>
               <tr>
                 <th><?php echo $value['G_genre'] ?></th>
                <th>
                  <a href="review.php?title=<?php echo $value['G_name'] ?>"> <?php echo $value['G_name'] ?> </a>
                 </th>
                 <td>
                   <?php for ($i=0; $i < $value['Rating']; $i++): ?>
                     <span class="fa fa-star checked"></span>
                   <?php endfor; ?>
               </td>
               </tr>
             <?php endforeach; ?>
           </table>
            </div>

            <div id="c2" class="tabcontent">
              <h3>Editor's Choice</h3>
              <table style="width:100%"border= 1px >
               <tr>
                 <th>Genre</th>
                 <th>Name</th>
                 <th>Rating</th>
               </tr>

               <?php foreach($editorsChoice as $key=>$value): ?>
                 <tr>
                   <th><?php echo $value['G_genre'] ?></th>
                   <th>
                     <a href="review.php?title=<?php echo $value['G_name'] ?>"> <?php echo $value['G_name'] ?> </a>

                   </th>
                   <td>
                     <?php for ($i=0; $i < $value['Rating']; $i++): ?>
                       <span class="fa fa-star checked"></span>
                     <?php endfor; ?>
                 </td>
                 </tr>
               <?php endforeach; ?>
             </table>
            </div>

            <div id="c3" class="tabcontent">
              <h3>Popular Picks</h3>
              <table style="width:100%"border= 1px >
               <tr>
                 <th>Genre</th>
                 <th>Name</th>
                 <th>Rating</th>
               </tr>

               <?php foreach($popularData as $key=>$value): ?>
                 <tr>
                   <th><?php echo $value['G_genre'] ?></th>
                   <th>
                     <a href="review.php?title=<?php echo $value['G_name'] ?>"> <?php echo $value['G_name'] ?> </a>
                   </th>
                   <td>
                     <?php for ($i=0; $i < $value['Rating']; $i++): ?>
                       <span class="fa fa-star checked"></span>
                     <?php endfor; ?>
                 </td>
                 </tr>
               <?php endforeach; ?>
             </table>
            </div>

        </div>
        <div class="sidebar1"></div>
        <div class="sidebar2"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

    $( document ).ready(function() {
      $("#first").click();
    });


    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
</script>
</body>
</html>
<?php }
else{
	header("Location:index.html");
}
?>
