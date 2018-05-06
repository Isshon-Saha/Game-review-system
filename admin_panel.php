<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin_panel.css">
    <script src="./js/admin_panel.js">

    </script>
    <script src="./js/Jquery.js">

    </script>
    <?php require("db_conn.php"); ?>
</head>
<body class="flex-body">

    <header><p style="text-align:right"><a href="logout.php"> Logout</a></p>
      <h2 style="text-align:center">Admin panel</h2>
    </header>
    <div class="content-container">
        <div class="content">
          <!-- Tab links -->
          <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'Create user')">Create user</button>
          <button class="tablinks" onclick="openCity(event, 'Update user profiles')">Update user profiles</button>
          <button class="tablinks" onclick="openCity(event, 'Delete a user')">Delete a user</button>
          <button class="tablinks" onclick="openCity(event, 'Insert a game')">Insert a game</button>
          <button class="tablinks" onclick="openCity(event, 'Update game info')">Update game info</button>
          <button class="tablinks" onclick="openCity(event, 'Delete a game')">Delete a game</button>
          <button class="tablinks" onclick="openCity(event, 'Editors choice')">Editor's choice</button>
          <button class="tablinks" onclick="openCity(event, 'Editors choice_na')"> Remove from Editor's choice</button>
          </div>

          <!-- Tab content -->
          <div id="Create user" class="tabcontent">
          <form class="myfm" action="admin_panel_server_Uadd.php" method="post">
            <label face="verdana"> Username: </label>
            <input type="text" id="namefield" name="username" placeholder="enter username here" onkeyup="testChk()"/>
            <label face="verdana" id="hint1" style="visibility:hidden"> </label> <br>
            <label face="verdana"> Password: </label>
            <input  type="password" name="password" placeholder="enter password here"/>
            <label face="verdana" id="hint2" style="visibility:hidden"> </label><br>
            <label face="verdana"> Email: </label>
            <input type="email" name="email" placeholder="enter email here"/>
            <label face="verdana" id="hint3" style="visibility:hidden"> </label><br>
            <label face="verdana" id="hint5" style="visibility:hidden"> </label><br>
            <input class="button" type="submit" name="submit" value="Insert" onclick="return chk1()">
          </form>
          </div>

          <div id="Update user profiles" class="tabcontent">
            <form class="myfm" action="admin_panel_server_Uupdate.php" method="post">
              <table class="table1" style="width:80%" border= 1px>
                <tr>
                  <th> ID </th>
                  <th> Name</th>
                  <th> Password(Hash value) </th>
                  <th> Email </th>
                </tr>

                <?php $sql="select * from user_info";
                $res=getDataFromDB($sql);
                foreach ($res as $key) {
                  echo "<tr>";
                  echo "<td>".$key["U_id"]."</td>";
                  echo "<td>".$key["U_name"]."</td>";
                  echo "<td>".$key["U_pass"]."</td>";
                  echo "<td>".$key["U_email"]."</td>";
                  echo "</tr>";
                }
                 ?>
                 <br/>
                 <label face="verdana"> Username: </label>
                 <select id="namefield" name="username">
                   <?php
                      $sql="select * from user_info";
                      $res=getDataFromDB($sql);
                      foreach ($res as $key) {
                        echo "<option value='".$key["U_name"]."'>".$key["U_name"]."</option>";
                      }
                    ?>
                 </select> <br>
                 <label face="verdana"> Password: </label>
                 <input  type="password" name="password" placeholder="enter password here"/><br>
                 <label face="verdana"> Email: </label>
                 <input type="email" name="email" placeholder="enter email here"/><br>
                 <input class="button" type="submit" name="submit" value="Update" onclick="return chk2()">
              </table>
            </form>
          </div>

          <div id="Delete a user" class="tabcontent">
            <form class="myfm" action="admin_panel_server_Udelete.php" method="post">
              <table class="table1" style="width:80%" border= 1px>
                <tr>
                  <th> ID </th>
                  <th> Name</th>
                  <th> Password(Hash value) </th>
                  <th> Email </th>
                </tr>

                <?php $sql="select * from user_info";
                $res=getDataFromDB($sql);
                foreach ($res as $key) {
                  echo "<tr>";
                  echo "<td>".$key["U_id"]."</td>";
                  echo "<td>".$key["U_name"]."</td>";
                  echo "<td>".$key["U_pass"]."</td>";
                  echo "<td>".$key["U_email"]."</td>";
                  echo "</tr>";
                }
                 ?>
                 <br>
                 <label face="verdana"> Username: </label>
                 <select id="namefield" name="username">
                   <?php
                      $sql="select * from user_info";
                      $res=getDataFromDB($sql);
                      foreach ($res as $key) {
                        echo "<option value='".$key["U_name"]."'>".$key["U_name"]."</option>";
                      }
                    ?>
                 </select> <br>
                 <input class="button" type="submit" name="submit" value="Delete" onclick="return chk3()">
              </table>
            </form>
          </div>

          <div id="Insert a game" class="tabcontent">
            <form class="myfm" action="admin_panel_server_Gadd.php" method="post">
              <label face="verdana"> Game name: </label>
              <input type="text" id="namefield" name="gamename" placeholder="enter game name here"/> <br>
              <label face="verdana"> Genre: </label>
              <select>
                <option value="RPG">RPG</option>
                <option value="Racing">Racing</option>
                <option value="Strategy">Strategy</option>
                <option value="Action">Action</option>
                <option value="Puzzle">Puzzle</option>
              </select><br>
              <label face="verdana"> Tags: </label>
              <input type="text" name="tags" placeholder="Enter Tags here"/><br>
              <label face="verdana"> Description: </label>
              <input type="text" name="Description" placeholder="Enter description here"/><br>
              <input class="button" type="submit" name="submit" value="Insert" onclick="return chk4()">

            </form>


          </div>

          <div id="Update game info" class="tabcontent">
            <form class="myfm" action="admin_panel_server_Gupdate.php" method="post">
              <table class="table1" style="width:80%" border= 1px>
                <tr>
                  <th> ID </th>
                  <th> Name</th>
                  <th> Genre </th>
                  <th> Tags </th>
                  <th> Game description  </th>
                </tr>

                <?php $sql="select * from game_bank";
                $res=getDataFromDB($sql);
                foreach ($res as $key) {
                  echo "<tr>";
                  echo "<td>".$key["G_id"]."</td>";
                  echo "<td>".$key["G_name"]."</td>";
                  echo "<td>".$key["G_genre"]."</td>";
                  echo "<td>".$key["tags"]."</td>";
                  echo "<td>".$key["game_info"]."</td>";
                  echo "</tr>";
                }
                 ?>
                 <br>
                 <label face="verdana"> Game name: </label>
                 <select id="namefield" name="gamename">
                   <?php
                      $sql="select * from game_bank";
                      $res=getDataFromDB($sql);
                      foreach ($res as $key) {
                        echo "<option value='".$key["G_name"]."'>".$key["G_name"]."</option>";
                      }
                    ?>
                 </select> <br>
                 <label face="verdana"> Genre: </label>
                 <select name="genre">
                   <option value="RPG">RPG</option>
                   <option value="Racing">Racing</option>
                   <option value="Strategy">Strategy</option>
                   <option value="Action">Action</option>
                   <option value="Puzzle">Puzzle</option>
                 </select><br>
                 <label face="verdana"> Tags: </label>
                 <input type="text" name="tags" placeholder="Enter Tags here"/><br>
                 <label face="verdana"> Description: </label>
                 <input type="text" name="Description" placeholder="Enter description here"/><br>
                 <input class="button" type="submit" name="submit" value="Update" onclick="return chk5()">
              </table>
            </form>
          </div>

          <div id="Delete a game" class="tabcontent">
            <form class="myfm" action="admin_panel_server_Gdelete.php" method="post">
              <table class="table1" style="width:80%" border= 1px>
                <tr>
                  <th> ID </th>
                  <th> Name</th>
                  <th> Genre </th>
                  <th> Tags </th>
                  <th> Game description  </th>
                </tr>

                <?php $sql="select * from game_bank";
                $res=getDataFromDB($sql);
                foreach ($res as $key) {
                  echo "<tr>";
                  echo "<td>".$key["G_id"]."</td>";
                  echo "<td>".$key["G_name"]."</td>";
                  echo "<td>".$key["G_genre"]."</td>";
                  echo "<td>".$key["tags"]."</td>";
                  echo "<td>".$key["game_info"]."</td>";
                  echo "</tr>";
                }
                 ?>
                 <br>
                 <label face="verdana"> Game name: </label>
                 <select id="namefield" name="gamename">
                   <?php
                      $sql="select * from game_bank";
                      $res=getDataFromDB($sql);
                      foreach ($res as $key) {
                        echo "<option value='".$key["G_name"]."'>".$key["G_name"]."</option>";
                      }
                    ?>
                 </select> <br>
                 <input class="button" type="submit" name="submit" value="Delete" onclick="return chk6()">
              </table>
            </form>
          </div>

          <div id="Editors choice" class="tabcontent">
            <form class="myfm" action="admin_panel_server_choice.php" method="post">
              <table class="table1" style="width:80%" border= 1px>
                <tr>
                  <th> ID </th>
                  <th> Name</th>
                  <th> Genre </th>
                  <th> Tags </th>
                  <th> Game description  </th>
                </tr>

                <?php $sql="select * from game_bank where Rating>= 5 and Editors_choice != 'yes'";
                $res=getDataFromDB($sql);
                foreach ($res as $key) {
                  echo "<tr>";
                  echo "<td>".$key["G_id"]."</td>";
                  echo "<td>".$key["G_name"]."</td>";
                  echo "<td>".$key["G_genre"]."</td>";
                  echo "<td>".$key["tags"]."</td>";
                  echo "<td>".$key["game_info"]."</td>";
                  echo "</tr>";
                }
                 ?>
                 <br>
                 <label face="verdana"> Game name: </label>
                 <select id="namefield" name="gamename">
                   <?php
                      $sql="select * from game_bank where Rating>= 5 and Editors_choice != 'yes'";
                      $res=getDataFromDB($sql);
                      foreach ($res as $key) {
                        echo "<option value='".$key["G_name"]."'>".$key["G_name"]."</option>";
                      }
                    ?>
                 </select> <br>
                 <input class="button" type="submit" name="submit" value="Make it editor's choice" onclick="return chk7()">
              </table>
            </form>
          </div>

          <div id="Editors choice_na" class="tabcontent">
            <form class="myfm" action="admin_panel_server_choice_na.php" method="post">
              <table class="table1" style="width:80%" border= 1px>
                <tr>
                  <th> ID </th>
                  <th> Name</th>
                  <th> Genre </th>
                  <th> Tags </th>
                  <th> Game description  </th>
                </tr>

                <?php $sql="select * from game_bank where Editors_choice = 'yes'";
                $res=getDataFromDB($sql);
                foreach ($res as $key) {
                  echo "<tr>";
                  echo "<td>".$key["G_id"]."</td>";
                  echo "<td>".$key["G_name"]."</td>";
                  echo "<td>".$key["G_genre"]."</td>";
                  echo "<td>".$key["tags"]."</td>";
                  echo "<td>".$key["game_info"]."</td>";
                  echo "</tr>";
                }
                 ?>
                 <br>
                 <label face="verdana"> Game name: </label>
                 <select id="namefield" name="gamename">
                   <?php
                      $sql="select * from game_bank where Rating>= 5 and Editors_choice = 'yes'";
                      $res=getDataFromDB($sql);
                      foreach ($res as $key) {
                        echo "<option value='".$key["G_name"]."'>".$key["G_name"]."</option>";
                      }
                    ?>
                 </select> <br>
                 <input class="button" type="submit" name="submit" value="Remove from editor's choice" onclick="return chk8()">
              </table>
            </form>
          </div>
        </div>
        <div class="sidebar1"></div>
        <div class="sidebar2"></div>
    </div>
    <footer></footer>
</body>
</html
