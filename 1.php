<!DOCTYPE HTML>
<?php
 echo '123';
?>
<html>
<head>
    <title>Phase Shift by TEMPLATED</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
    echo'<div id="footer" class="wrapper style2">';
    echo'<div class="container">';
    echo'<h2>Вы можете задать вопрос или оставить отзыв</h2>';
    echo'<div class="row half">';
    echo'<div class="12u">';
    echo'<form action="1.php" method="post">';
    echo'<input class="text" type="text" name="user_name" id="name" placeholder="Name" />';
    echo'<input type="submit" />';
    echo'</form>';
    echo $_POST['user_name'];
    echo'</div>';
    echo'</div>';
    echo'</div>';
    echo '<br><br>';
    echo'</div>';
?>
</body>
</html>