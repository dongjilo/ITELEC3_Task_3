<?php 

$nameText = $_POST['nameText'];
$emailText = $_POST['emailText'];
$pwText = $_POST['pwText'];

// echo "Hello, {$nameText} <br>";
// echo "{$emailText}";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .container-cstm {
            max-width: 400px;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
        }
    </style>
    <title>Welcome</title>
</head>
<body>
    <div class="container container-cstm mt-5">
        <div class="container">
            <h1 class="h1">Hello, <?php echo $nameText?></h1>
            <p class="px-1" name="p1"><?php echo $emailText?></p>
            <p class="px-1">Password: <?php echo $pwText?></p>
        </div>
    </div>
</body>
</html>