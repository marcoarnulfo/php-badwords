<?php

$paragraph = $_GET['paragraph'];
$censured = $_GET['censured'];

$censura = str_replace($censured, '***', $paragraph);

$results = $censura . strlen($paragraph);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>
<body>

    <p><?php echo $results ?></p>

</body>
</html>
