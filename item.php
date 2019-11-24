<?php header('Content-Type: application/xml; charset=UTF-8'); ?>
<!DOCTYPE html>
<?php
$input = <<<INPUT
bar&quot;; alert(&quot;Meow!&quot;); var xss=&quot;true
INPUT;
$output = json_encode($input/*, JSON_HEX_QUOT|JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS*/);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Polar International cruises</title>
    <meta charset="UTF-8"/>
    <script type="text/javascript">
        var foo = <?php echo $output ?>;
        <link rel="stylesheet" href="css/style.css" />
    </script>

</head>
<body>
<div class="wrapper style1">
    <div id="page" class="container">
        <p>You met json_encode().</p>
    </div>
</div>
</body>
</html>