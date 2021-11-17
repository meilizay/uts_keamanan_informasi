<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Way Password | Meiliza Yuciana</title>
</head>

<body>
    <?php
    $inputdata = "meilizayuciana";

    echo "Data Before Hash : $inputdata";

    echo "<br>";

    $datahash = password_hash("meilizayuciana", PASSWORD_DEFAULT);

    echo "Data After Hash : $datahash";

    echo "<br>";
    echo "<br>";

    if (password_verify($inputdata, $datahash)) {
        echo "Success";
    } else {
        echo "Failed";
    }
    ?>
</body>

</html>