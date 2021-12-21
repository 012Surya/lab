<html>
<head> </head>
<body>
<?php

include "db.php"; // Using database connection file here


if(isset($_POST['delete'])) // when click on Update button
{
    $id = $_POST['id'];
	
    $edit = mysqli_query($conn,"DELETE FROM game where id='$id'");
	
    if(!$edit)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records deleted successfully.";
    }  	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="number" name="id" placeholder="Enter id" Required>
  <input type="submit" name="delete" value="Delete">

</form>
</body>
</html>