<?php
include_once 'database.php';
$sql = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
	header('Location: adminpage.php');
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>