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
    </style>
    <title>Login Page</title>
</head>
<body>
<div class="container container-cstm mt-5">
    <h2 class="h2">LOGIN PAGE</h2>
    <form action="./operation/data.php" method="post">

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

        <input class="btn btn-success mx-auto mt-2" type="submit" value="LOGIN" name="btnSubmit">
    </form>
</div>
</body>
</html>