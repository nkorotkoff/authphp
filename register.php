<?php  require_once"./scripts/register.php"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>auth</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="App">
    <div class="vertical-center">
        <div class="inner-block">
            <form action="" method="post">
                <div class="links">
                <a href="http://localhost/auth/login.php"> Sign in</a>
                    <a href="http://localhost/auth/register.php"> Sign up</a>
                </div>
                <?php echo $success_msg; ?>
                <?php echo $email_exist; ?>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email_signin" />
                    <?php echo $emptyError1; ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password_signin" />
                    <?php echo $emptyError2; ?>
                </div>
                <button type="submit" name="submit" id="sign_in"
                        class="btn btn-outline-primary btn-lg btn-block">Sign
                    up</button>
<!--                --><?php // echo $_POST;?>
            </form>
        </div>
    </div>
</div>
</body>
</html>