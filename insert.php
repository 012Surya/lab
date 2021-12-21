<html>
    <head>

    </head>
<body>
<?php
include "db.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $name = $_POST['name'];
    $genre = $_POST['genre'];

    $insert = mysqli_query($conn,"INSERT INTO `game`(`name`, `genre`) VALUES ('$name','$genre')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($conn); // Close connection
?>

<div ng-app="myApp">
    <form method="post">
        Video game name: <br> <input type="text" ng-model="name" name="name"><br>
        Genre : <br> <input type="text" ng-model="genre" name="genre">
        <input type="submit" name ="submit" value="submit">
    </form>

</div>
  
</body>
</html>