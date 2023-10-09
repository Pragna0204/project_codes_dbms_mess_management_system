<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header" style="text-align:center">
                        <h4>Fill your food preference</h4>
                    </div>
                    <div class="card-body">

                        <form action="code1.php" method="POST">
                            <div class="from-group mb-3">
                                <label for="">Enrollment_no:</label>
                                <input type="text" name="Enrollment_no" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Name:</label>
                                <input type="text" name="Name" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Food-preference:</label>
                                <select name="Choice" class="form-control">
                                    <option value="">--Select choice--</option>
                                    <option value="Veg">Veg</option>
                                    <option value="Non-veg">Non-veg</option>
                                    
                                </select>
                            </div>
                            
                            <div class="from-group mb-3">
                                <button type="submit" name="save_select" class="btn btn-primary" >Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



