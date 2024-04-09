<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Emmy Ali Final Project</title>
<link rel="stylesheet" href="main.css">
</head>
<body>

<center>

<?php
$res = $MySQLiconn->query("SELECT * FROM students");
while($row = $res->fetch_array())
{
?>
    <div class="card">
        <div class="name">
            <?php echo $row['fn']; ?>
            <?php echo $row['ln']; ?>
        </div>
        <div class="info">
            <img src="<?php echo $row['photo']; ?>" alt="Profile Image" class="image">
            <h2><?php echo $row['job']; ?></h2>
            <p><?php echo $row['words']; ?></p>
            <h3>Inspiration: </h3>
            <p><?php echo $row['inspire']; ?></p>
            <h3>Dislikes: </h3>
            <p><?php echo $row['dislike']; ?></p>
            <a href="edit.php"><button class="profile-button">See Profile</button></a>
        </div>
    </div>
<?php
}
?>

</center>
</body>
</html>
