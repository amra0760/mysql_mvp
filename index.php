<?php include('server.php'); 

  // if user is not logged in, they cannot access this page
  if (empty($_SESSION['username'])) {
    header('location: login.php');
  }


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  
  <div class ="header">
      <h2>Home Page</h2>
      <img src="images/P_Logo1.jpg" class="logo img-fluid rounded-circle" width="100" height="200"/>
  </div>
  
  <div class="content">
      <?php if (isset($_SESSION['success'])): ?>
          <div class="error success">
              <h3>
                  <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                  ?>
              </h3>
          </div>
      <?php endif ?>
      
      
      <!--<pre>-->
    <?php
    $db = new mysqli(
        'localhost',    //Hostname
        'amra0760',     //UserID
        '',             //Password
        'mvp'           //Name of Database
        );
        
    // print_r($db);
    
    if ($db->connect_errno != 0){
        die("Error in DB connection $db->connect_error");
    } else{
        // printf("Yes, connected \n");
        $result = $db->query ('SELECT username, password FROM mvp_table');
        // print_r($result);
        printf("<table>");
        printf("<tr><th> My Usernames</th><th>My Passwords</th></tr>");
        while($row = $result->fetch_assoc()) {
            printf("<tr><td>%s</td> <td>%s</td></tr>\n", $row['username'], $row['password']);
        };
        printf("<table>");
    }
    
    ?>
    <!--</pre>-->
      <br><br>
      
      
      
      
      <?php if (isset($_SESSION["username"])):  ?>
          <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
          <p><a href="index.php?logout='1" style="color: red;">Logout</a></p>
      <?php endif ?>
      
  </div>
  
  
  
  </body>
</html>