<?php
include_once 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Emmy Ali Final Project</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
   <center>
<div id="header">
 <label>C.R.U.D.</label>
</div>
<br />
<div id="form">
<form method="post">
<table width="100%" border="1" cellpadding="15">

<tr>
<td><input type="text" name="fn" placeholder="First Name"  value="<?php if(isset($_GET['edit'])) echo $getROW['fn'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="ln" placeholder="Last Name" value="<?php if(isset($_GET['edit'])) echo $getROW['ln'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="photo" placeholder="Photo" value="<?php if(isset($_GET['edit'])) echo $getROW['photo'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="job" placeholder="Job" value="<?php if(isset($_GET['edit'])) echo $getROW['job'];  ?>" /></td>
</tr>

<tr>
<td><input type="text" name="words" placeholder="Words" value="<?php if(isset($_GET['edit'])) echo $getROW['words'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="inspire" placeholder="Inspire" value="<?php if(isset($_GET['edit'])) echo $getROW['inspire'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="dislike" placeholder="Dislike" value="<?php if(isset($_GET['edit'])) echo $getROW['dislike'];  ?>" /></td>
</tr>
<tr>
<td>
<?php
if(isset($_GET['edit']))
{
 ?>
 <button type="submit" name="update">update</button>
 <?php
}
else
{
 ?>
 <button type="submit" name="save">save</button>
 <?php
}
?>
</td>
</tr>
</table>
</form>

<br /><br />

<table width="100%" border="1" cellpadding="15" align="center">
<?php
$res = $MySQLiconn->query("SELECT * FROM students");
while($row=$res->fetch_array())
{
 ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fn']; ?></td>
    <td><?php echo $row['ln']; ?></td>
    <td><img src="<?php echo $row['photo']; ?>" alt="Profile Image" style="width: 100px; height: auto;"></td>
    <td><?php echo $row['job']; ?></td>
    <td><?php echo $row['words']; ?></td>
    <td><?php echo $row['inspire']; ?></td>
    <td><?php echo $row['dislike']; ?></td>
    <td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Would you like to edit this entry?'); " >edit</a></td>
    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?'); ">delete</a></td>
    <td><a href="index.php">See Profile</a>
</td>
</tr>
<?php
}
?>

</table>
</div>
</center>
</body>
</html>
