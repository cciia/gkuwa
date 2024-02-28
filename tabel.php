<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tabel View</title>
    </head> 
    <body>
     <table border="1" class="table">
    <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
    </tr>
</table>
<?php
// select tabel user dari database
$nomor = 1;
echo $nomor;
include 'koneksi.php'
$result = mysqli_query($conn, "SELECT * FROM user ") or die (mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr>
        <td><?php echo $name+; ?></td>
        <td><?php echo $username++; ?></td>
        <td><?php echo $email++; ?></td>
        <?php } ?>
    </tr>
</html>