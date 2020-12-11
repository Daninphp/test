<?php
session_start();
require('Controller\Index.php');
$controller = new \Controller\Index();
$comments = $controller->getUnaprovedComments();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="media/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="media/js/jQery.js"></script>
</head>
<body>
<div class="container">
<?php
if(isset($_SESSION['username']) && isset($_SESSION['password']) && !empty($_SESSION['username']) && !empty($_SESSION['password'])) { ?>
    <div class="message-reporting"></div>
    <div class="logout">
        <form method="post" action="controller/logoutHandler.php" style="width: fit-content">
            <button type="submit" class="btn" name="login_btn">Logout</button>
        </form>
    </div>
    <div class="row">
        <h2>Unaproved comments</h2>
        <?php if(!empty($comments)) {
             foreach($comments as $comment){ ?>
                <div class="col-sm-4 admin" style="border: 2px solid grey;padding: 10px;margin: 5px;min-height: 85px;text-align: center;">
                    <span><?php echo "Name: " . $comment['name'] ?></span>
                    <span><?php echo "Email " . $comment['email'] ?></span>
                    <span><?php echo "Message: " . $comment['comment'] ?></span>
                    <button style="display: block;margin:5px auto" type="submit" class="submit" name="submit" id="<?php echo $comment['id'] ?>">Approve</button>
                </div>
        <?php }
        } ?>
    </div>
<script src="media/js/admin.js"></script>
<?php } else { ?>
<?php if(isset($_SESSION['message'])){
    echo '<h2>' . $_SESSION['message'] . '</h2>';
    session_destroy();
} ?>
<div class="header">
    <h2>Login</h2>
</div>
<form method="post" action="controller/loginHandler.php">
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_btn">Login</button>
    </div>
</form>
<?php } ?>
</div>
</body>
</html>