<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location:../login.php');
}

?>
<?php
include('header.php');
include('titlehead.php');
include('../dbcon.php');

$sid=$_GET['sid'];

$sql="SELECT * FROM `studeny` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($run);

?>
<form methods="post" action="updatedata.php" enctype="multipart/form-data">
    <table align="center" border="1" style="width:70%; margin-top:40px;">

        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="name"  value="<?php echo $data['name']; ?>" required></td>

        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" value="<?php echo $data['city']; ?>" required></td>

        </tr>
        <tr>
            <th>Parents Contact no</th>
            <td><input type="text" name="pcon"  value="<?php echo $data['pcont']; ?>" required></td>

        </tr>
        <tr>
            <th>Standerd</th>
            <td><input type="number" name="std"  value="<?php echo $data['standerd']; ?>" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>

    </table>
</form>

