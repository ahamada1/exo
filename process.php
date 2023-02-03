
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
$_SESSION["connected"] = true;

require 'menu.php'; 


 <?php include_once(login.php);
 <h1> connnexion </h1>
 <?php if(isset($loggeUser)): ?>
    <?php foreach(get_login($login, $limit) as $logine): ?>
        <formulaire>
        <h3> <?php echo $logine['title']; ?> </h3>
        <div><?php echo $logine['logine'];?></div>
        <i><?php echo display_author($logine['author'], $users); ?> </i>
        </formulaire>
        <?php endforeach ?>
        <?php endif; ?>
        </div>
       
?>
</body>
</html>