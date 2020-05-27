<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['email'];
    function isPattern($str)
    {
        $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

        if (preg_match($pattern, $str)) {
            echo($str."ddung la  email ");
        } else {
            echo($str."khong phai email dung  ");
        }
    }
    isPattern($str);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Email:<input type="text" name="email">
    <button type="submit">Tim kiem</button>
</form>
</body>
</html>

