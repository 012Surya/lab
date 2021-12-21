<html>
<head> </head>
<body>
<?php

include "db.php"; // Using database connection file here


if(isset($_POST['update'])) // when click on Update button
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $genre = $_POST['genre'];
	
    $edit = mysqli_query($conn,"update game set name='$name', genre='$genre' where id='$id'");
	
    if(!$edit)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records updated successfully.";
    }  	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="number" name="id" placeholder="Enter id" Required>
  Video game name: <br> <input type="text" ng-model="name" name="name"><br>
        Genre : <br> <input type="text" ng-model="genre" name="genre">
  <input type="submit" name="update" value="Update">

</form>
</body>
</html>