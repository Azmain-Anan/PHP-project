<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>BACHELOR BASHA</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <!--<link rel="stylesheet" href="style.css">-->
</head>
<body>
    
    <h1>BACHELOR BASHA</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <li><a href="signup.html">sign up</a>
        <li> <a href="login.php">Log in</a>
        <li> <a href="give rent.php">give rent</a>
        <li> <a href="About US.php">About US</a>
        <li><a href="Contact US.php">Contact US</a>
      <?php endif; ?>
    </div>
    
<div class = "container"  id= "showcase">
    </div>

    
</body>
</html>