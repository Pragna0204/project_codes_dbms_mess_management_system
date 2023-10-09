<?php
session_start();
$con = mysqli_connect("localhost","root","","mess-management");

if(isset($_POST['save_select']))
{
    $Enrollment_no=$_POST['Enrollment_no'];//post super global variable ad collects form data usig post method
    $Name=$_POST['Name'];//setting variables
    $Choice=$_POST['Choice'];
  

    $query = "INSERT INTO foodchoices(Enrollment_no,Name,Choice) VALUES('$Enrollment_no','$Name','$Choice')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: form2.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: form2.php");
    }
}
?>