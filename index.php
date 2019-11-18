<!DOCTYPE HTML>
<html>
<head>
		<title>Phase Shift by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
</head>
<body>
	<div class="wrapper style1">
        <div class="container" id="banner">
                <p>This is Phase Shift, a responsive HTML5 site template freebie by TEMPLATED.</p>
                <a href="item.html" class="button medium">Read More</a>
        </div>
    </div>

    <?php
    echo'<div id="footer" class="wrapper style2">';
        echo'<div class="container">';
            echo'<header class="major">';
                echo'<h2>Вы можете задать вопрос или оставить отзыв</h2>';
            echo'</header>';
            echo'<div class="row half">';
                echo'<div class="12u">';
                    echo'<form action="index.php" method="post">';
                        echo'<input class="text" type="text" name="user_name" id="name" placeholder="Name" />';
                        echo'<input type="submit" value="Send Message" name="submit_button" class="button alt" />';
                    echo'</form>';
                echo'</div>';
            echo'</div>';
        echo'</div>';
        echo $_POST['user_name'];
        echo '<br><br>';
    echo'</div>';
    ?>
</body>
</html>