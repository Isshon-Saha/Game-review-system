<!DOCTYPE HTML>
<head>
  <link rel="stylesheet" href="review_style.css">
  <meta charset="UTF-8">
	<title>Review Page</title>
  <?php require("db_conn.php"); ?>
</head>
<script src="/Game review system/js/review.js" >

</script>
<body class="flex-container">
  <form class="myform" action="review_server.php?title=<?php echo $_GET["title"] ?>" method="POST">
    <header>
      <p style="text-align:right"><a href="logout.php"> Logout</a></p>
      <h1 style="text-align:center">
      <?php
          if(isset($_GET["title"]))
          {
            echo $_GET["title"];
          }
          else {
            echo "There should be a title here";
          }
        ?>
      </h1></header>
    <div class="content-container" >
      <div class="sidebar1"></div>
      <div class="sidebar2"></div>
        <div class="content">

          <div class="game_area">
            <div class="desc">
              <?php
              $name= $_GET["title"];
              $sql="select game_info from game_bank where G_name='".$name."'";
              $data = getDataFromDB($sql);
              foreach($data as $v)
              {
                echo "<p>".$v["game_info"]."</p>";
              }
               ?>
            </div>

          </div>
          <div class="desc_area">
            <div>
            <fieldset>
              <legend>Your review</legend>
              Rating :
              <select name="selection">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select><br/>
              <textarea type="text" id="myTextarea" name="text_a" rows="10" cols="50" > </textarea><br/>
              <div>
                <input class="button" type="submit" name="submit" value="Submit" onclick="return chk()">
                <input type="button">
              </div>
            </fieldset>

            </div>


          </div>
        </div>
        </div>



    </form>
</body>
