<?php
$numbers = [1,2,3,55,66,77,88, 99];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pencetak ArrayDiv</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: crimson;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {clear:both}
    </style>
</head>
<body>
<?php for ($i = 0; $i < count($numbers); $i++) { ?>
    <div class="kotak"><?php echo $numbers[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($numbers as $n) {?>
    <div class="kotak"><?php echo $n;?></div>
<?php } ?>
</body>
</html>

