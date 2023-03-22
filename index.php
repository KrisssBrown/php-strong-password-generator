<?php
$pw_num = isset($_GET['pw-lenght']) ? $_GET['pw-lenght'] : 1;

$password = array_merge(range('0', '9'), range('a', 'z'), range('A', 'Z'));

$generated_password =  array_rand($password, intval($pw_num));



// var_dump($password)

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <form action="" method="GET">
        <p>
            Lunghezza Password
        </p>
        <input type="text" name="pw-lenght" placeholder="Inserisci numero">
        <input type="submit" value="Genera">

        <?php
        if ($pw_num >= 6) {
        ?>
            <p>
                La password è: <?php echo implode("", $generated_password)  ?>
            </p>
        <?php
        } else {
        ?>
            <p>
                Inserire numero caratteri da stampare
            </p>
        <?php
        }
        ?>
    </form>
</body>

</html>