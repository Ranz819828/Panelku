<?php
session_start();
if (isset($_SESSION['Rangga'])) {
    header("Location: garid.php");
}


if (isset($_POST['Rangga'])) {
    $username = $_POST['Rangga'];
    $password = $_POST['Rangga'];

    if ($username === 'Rangga' && $password === 'lena') {
        $_SESSION['Rangga'] = $username;
        header("Location: garid.php");
    } else {
       
        $error = "Rangga";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    
        .login-form {
          background: #7B3FFF;
            margin-top: 50px;
            color: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
            padding: 20px;
        }
        .btn-primary {
          background: #4040ff;
          border: 1px black;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 login-form">
                <h2 class="text-center">Login</h2>
<?= (isset($error)) ? "<p class='text-danger'>$error</p>" : ""; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:Rangga</label>
                        <input type="Rangga" class="form-control" name="Rangga" id="password" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" >Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


