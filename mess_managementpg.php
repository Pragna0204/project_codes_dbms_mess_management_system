<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Mess Management</title>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand logo" href="#">IIITNR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link text-white" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="display-4">IIIT-NR Mess Manager</h1>
        <p class="lead">look at student reviews or food choices.</p> 
    <div class="d-flex flex-row ">
    <p class="lead">
        <a class="btn btn-warning btn-lg" href="review-display.php" role="button">Student Reviews</a>
        <a class="btn btn-warning btn-lg" href="foodchoice-display.php" role="button">student food-choices</a>
        </p>
    </div>
</div>
</body>
</html>