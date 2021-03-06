<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatFish Social</title>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Source+Sans+Pro&display=swap" rel="stylesheet">
<!-- Boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Stylesheet -->
<link rel="stylesheet" href="style.css">
</head>


<body>


<div id="login-header-div" class="container-fluid">

    <div id="header-row" class="row">

        <div id="login-content" class="col-lg-6">

            <h1>Catfish Social</h1>
            <h2>The only place where its socially acceptable to be a CatFish</h2>

        </div>

        <div id="form-div" class="col-lg-6">

            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" id="login-btn" class="btn btn-primary">Login</button>
            </form>

            <a href="create_account.php"><button type="submit" id="create-account-btn" class="btn btn-primary">Create A New Account</button></a>

        </div>
    </div>

</div>


<?php



?>

    
</body>
</html>