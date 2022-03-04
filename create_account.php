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


<div id="create-header-div" class="container-fluid">

    <h1>Catfish Social</h1>

    <div id="header-row" class="row">

        <div id="form-div" class="">
            <form>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="first-name" aria-describedby="firstname" placeholder="Enter First Name">
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" id="last-name" aria-describedby="lastname" placeholder="Enter Last Name">
                            </div>
                    
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="phone number">Phone Number</label>
                                <input type="number" class="form-control" id="phone-number" aria-describedby="phone number" placeholder="Enter Your Phone Number">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Create a password">
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="create-account-btn" class="btn btn-primary">Create A New Account</button>
                </div>
            </form>
        </div>
    </div>
    <a href="cs_index.php"><p>Back To Login</p></a>
</div>


<?php



?>

    
</body>
</html>