<?php
include_once('includes/config.php');
include_once('includes/functions.php');
$id = $_GET['uid'];
$qry = "DELETE FROM students WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Student Data Deleted Successfully');window.location.href='students.php';</script>";
} else {
   echo "<script>alert('Student Data Deleted');window.location.href='students.php';</script>";
}
?>
