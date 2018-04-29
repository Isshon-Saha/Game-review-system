<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin_panel.css">
    <script src="/Game review system/js/admin_panel.js">

    </script>
    <?php require("db_conn.php"); ?>
</head>
<body class="flex-body">
    <header>header</header>
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
          </div>

          <!-- Tab content -->
          <div id="Create user" class="tabcontent">
          <h3>London</h3>
          <p>London is the capital city of England.</p>
          </div>

          <div id="Update user profiles" class="tabcontent">
            <form class="myfm" action="admin_panel_server.php" method="post">
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
              </table>
            </form>
          </div>

          <div id="Delete a user" class="tabcontent">
            <form class="myfm" action="admin_panel_server.php" method="post">
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
              </table>
            </form>
          </div>

          <div id="Insert a game" class="tabcontent">
          <h3>London</h3>
          <p>London is the capital city of England.</p>
          </div>

          <div id="Update game info" class="tabcontent">
            <form class="myfm" action="admin_panel_server.php" method="post">
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
              </table>
            </form>
          </div>

          <div id="Delete a game" class="tabcontent">
            <form class="myfm" action="admin_panel_server.php" method="post">
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
              </table>
            </form>
          </div>
        </div>
        <div class="sidebar1">side1</div>
        <div class="sidebar2">side2</div>
    </div>
    <footer>footer</footer>
</body>
</html
