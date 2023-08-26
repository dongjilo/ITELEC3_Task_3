<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Go to New Page</title>
    <style>
        .container-cstm {
            max-width: 400px;
            border-radius: 10px;
            margin-top: 30%;
            padding: 20px;
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
        }   
    </style>
</head>
<body>

<?php 

echo '<div class="container container-cstm mt-5">';
echo '<div class="container">';
echo '<h1 class="h1">Hello, ' . $_GET['name'] . '.</h1>';
echo '<p class="px-1" name="p1">' . $_GET['email'] . '</p>';
echo '</div>';
echo '</div>';

?>

</body>
</html>