
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .container-cstm {
            max-width: 450px;
            border-radius: 10px;
            padding: 50px;
            margin-top: 15% !important;
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
        }

        .anim {
            animation: fadeIn 500ms ease-out backwards;
        }

        @keyframes fadeIn {
            from {
                transform: translateZ(250px);
                opacity: 0;
            }
            to {
                transform: translateZ(0px);
                opacity: 1;
            }
        }

    </style>
    <title>Welcome</title>
</head>
<body>
<?php 

if (!empty($_POST['nameText']) && !empty($_POST['emailText']) && !empty($_POST['pwText'])){
    $nameText = $_POST['nameText'];
    $emailText = $_POST['emailText'];
    $pwText = $_POST['pwText'];

    echo '<div class="container container-cstm mt-5 anim">';
    echo '<div class="container">';
    echo '<h1 class="h1">Hello, ' . $nameText . '.</h1>';
    echo '<p class="px-1" name="p1">' . $emailText . '</p>';
    echo '<p class="px-1">Password: ' . $pwText . '</p>';
    echo '</div>';
    echo '</div>';
    
}else {
    echo '<div class="container container-cstm mt-5 anim">';
    echo '<div class="container">';
    echo '<h1 class="h1">This can only be accessed after logging in. <a href="../form.php">Log in</a></h1>';
    echo '</div>';
    echo '</div>';
}
?>
</body>
</html>