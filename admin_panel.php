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
          <h3>Paris</h3>
          <p>Paris is the capital of France.</p>
          </div>

          <div id="Delete a user" class="tabcontent">
          <h3>Tokyo</h3>
          <p>Tokyo is the capital of Japan.</p>
          </div>

          <div id="Insert a game" class="tabcontent">
          <h3>London</h3>
          <p>London is the capital city of England.</p>
          </div>

          <div id="Update game info" class="tabcontent">
          <h3>Paris</h3>
          <p>Paris is the capital of France.</p>
          </div>

          <div id="Delete a game" class="tabcontent">
          <h3>Tokyo</h3>
          <p>Tokyo is the capital of Japan.</p>
          </div>
        </div>
        <div class="sidebar1">side1</div>
        <div class="sidebar2">side2</div>
    </div>
    <footer>footer</footer>
</body>
</html
