

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

        .bg-primary {
            border-radius: 10px;

        }

        .anim {
            animation: fadeIn 500ms ease-out backwards;
        }

        @keyframes fadeIn {
            from {
                transform: translateY(250px);
                opacity: 0;
            }
            to {
                transform: translateY(0px);
                opacity: 1;
            }
        }
    </style>
    <title>Form Page Using Self</title>
</head>
<body>
    <div class="container container-cstm mt-5">
        <h3 class="h3 p-3 bg-primary text-white text-center">Login Page using SELF</h3>
        <div class="container-cstm bg-white">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off">

                <div class="form-floating mb-3">
                    <input type="text" name="nameText" class="form-control" id="floatingInput" placeholder="Name Example">
                    <label for="floatingInput">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="emailText" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="pwText" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>  

                <input type="submit" name="btnSubmit" class="btn btn-outline-success mt-3" value="REGISTER">
                <input type="reset" name="btnCancel" class="btn btn-outline-danger mt-3" value="CANCEL">
                
            </form>
        </div>
    </div>

<?php

if (!empty($_POST['nameText']) && !empty($_POST['emailText']) && !empty($_POST['pwText'])){
    $nameText = $_POST['nameText'];
    $emailText = $_POST['emailText'];
    $pwText = $_POST['pwText'];

    echo '<div class="container container-cstm mt-5 anim">';
    echo '<div class="container">';
    echo '<h1 class="h1">Hello, ' . $nameText . '</h1>';
    echo '<p class="px-1" name="p1">' . $emailText . '</p>';
    echo '<p class="px-1">Password: ' . $pwText . '</p>';
    echo '</div>';
    echo '</div>';
    
}

?>

</body>
</html>