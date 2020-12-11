<?php
//require('Controller\Index.php');
//$obj = new \ReflectionClass('Controller\\Index');
//$instance = $obj->newInstanceWithoutConstructor();
//$instance->readData();
require('Controller\Index.php');
$controller = new \Controller\Index();
$products = $controller->getCollection();
$comments = $controller->getComments();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citrus Test</title>
    <link rel="stylesheet" type="text/css" href="media/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="media/js/jQery.js"></script>
</head>
<body>
<style>

</style>
<div class="container" style="width: 80%;">
    <div class="row">
        <?php
        foreach ($products as $product){ ?>
            <div class="col-sm-4 landing">
                <img src="<?php echo $product['image'] ?>" alt="<?php $product['image'] ?>">
                <h2><?php echo $product['product_title'] ?></h2>
                <p><?php echo $product['product_description'] ?></p>
            </div>
        <?php }?>
    </div>
    <div class="row">
        <h2>Comments Section</h2>
        <?php if(!empty($comments)){
             foreach ($comments as $comment){ ?>
                <div class="col-sm-6">
                    <span><?php echo "Name: " . $comment['name'] ?></span>
                    <span><?php echo "Email " . $comment['email'] ?></span>
                    <span><?php echo "Message: " . $comment['comment'] ?></span>
                </div>
        <?php }
         }
         ?>
    </div>
    <div class="message-reporting"></div>
    <div class="comment-form">
        <form id="comment-create" action="" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name"> <br>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email"> <br>
            </div>
            <div>
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" rows="4"></textarea>
            </div>
            <input type="hidden" name="type" value="create-comment"> <br>
            <input style="margin-top: 10px;margin-left: 20%;" id="submit" type="button" name="submit" value="SEND">
        </form>
    </div>
</div>
<script src="media/js/index.js"></script>
</body>
</html>