<?php  

$password= array_merge(range(0,1000), range('a','z'), range('A','Z'));

$generated_password = [];

$pw_num= $_GET ['pw-lenght'];

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
        <input type="submit" value="Genera" >

        <?php 
            if ($pw_num > 10) {
        ?>
            <p>
                La password è: <?php echo array_rand($password, $pw_num)  ?>
            </p>
        <?php     
            } 
        ?>
    </form>
</body>
</html>