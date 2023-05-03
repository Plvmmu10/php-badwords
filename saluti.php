<?php 

$paragraph = $_POST["userText"];
$badword = $_POST["userBadword"];
$censure = '***';

$censoredPara = str_replace($badword, $censure, $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="myContainer">
        <div class="box">
            <div class="para-box">
                <h1>Questo è il paragrafo</h1>

                <p>
                    <?php echo $paragraph ?>
                </p>
            </div>

            <div class="length-box">
                <h3>Lunghezza paragrafo</h3>

                <p><?php echo  strlen($paragraph)?></p>
            </div>
        </div>

        <div class="box">
            <div class="para-box">
                <h1>Questo è il paragrafo senza la badword</h1>

                <p>
                    <?php echo $censoredPara?>
                </p>
            </div>

            <div class="length-box">
                <h3>Lunghezza paragrafo</h3>

                <p><?php echo  strlen($censoredPara)?></p>

                <p><strong>Parola censurata:</strong> <?php echo $badword ?></p>
            </div>
        </div>
    </div>
</body>
</html>