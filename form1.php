
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>feedback form</title>
</head>
<body>
    <center>
    <div class="outter">
    <h1>Fill this feedback form</h1>
        <h4><em>your feedback matters!</em></h4>
        <hr width=30% color="#2B3A55">
        <div class="form-box">
        
       
        <form method="post">
        <table cellspacing="4">
    <tr>
        <td><label for="Enrollment_no">Enrollment_no: </label></td>
        <td><input type="text" name="Enrollment_no" placeholder="100"><br></td>
    </tr>
    <tr>
    <td><label for="Date">Date:</label></td>
    <td><input type="Date" name="Date"></td> 
    </tr>
    <tr>
        <td><label for="Slot">Slot: (Breakfast,Lunch,Snacks,Dinner)</label></td>
        <td><input type="text" placeholder="lunch" name="Slot"></td>
    </tr>
    <tr>
        <td><label for="Feedback">Slot: (Good,Bad,Can be improved)</label></td>
        <td><input type="text" placeholder="Good" name="Feedback"></td>
    </tr>
    
  
    
</table>
<label for="submit"><input type="submit" name="submit"></label>
        </form>
        </div>
        <hr width=50% color="#2B3A55">
    </div>
    </center>
<?php
$link = mysqli_connect("localhost", "root", "", "mess-management");
if(isset($_POST['submit'])){ //checkig if the form is successfully submitted or not
    $Enrollment_no=$_POST['Enrollment_no'];//post super global variable ad collects form data usig post method
    $Date=$_POST['Date'];//setting variables
    $Slot=$_POST['Slot'];
    $Feedback=$_POST['Feedback'];
    $query="INSERT INTO reviews(Enrollment_no,Date,Slot,Feedback) VALUES('$Enrollment_no','$Date','$Slot','$Feedback')";
    $run=mysqli_query($link,$query);//performs a query against the database
}
?>
</body>
</html>

