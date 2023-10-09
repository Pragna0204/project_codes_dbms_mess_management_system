<?php
session_start();
$con = mysqli_connect("localhost","root","","mess-management");

if(isset($_POST['save_select']))
{
    $Enrollment_no=$_POST['Enrollment_no'];//post super global variable ad collects form data usig post method
    $Date=$_POST['Date'];//setting variables
    $Slot=$_POST['Slot'];
    $Feedback=$_POST['Feedback'];

    $query = "INSERT INTO reviews(Enrollment_no,Date,Slot,Feedback) VALUES('$Enrollment_no','$Date','$Slot','$Feedback')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: demo.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: demo.php");
    }
}
?>