<?php
require_once "../config.php";
$sql = "SELECT * FROM persons";
$result=mysqli_query($conn,$sql)
?>
<?php //include "../header.php"?>
    <html>
    <head><title>Retrieve</title></head>
    <body>
    <a href="create.php">Create</a>

    <table border="1">
        <tr>
            <th>id</th>
            <th>Image</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($result as $row){ ?>
            <tr>
                <td><?php echo$row['id']?></td>
                <td><img src="upload/<?php echo $row['image']?>" height= "2%" width="5%"></td>
                <td><?php echo $row['first_name']?></td>
                <td><?php echo $row['last_name']?></td>
                <td><?php echo $row['email']?></td>
                <td><a href="update_details.php?id=<?php echo $row["id"]?>">Edit</a></td>
                <td><a href="delete_details.php? id=<?php echo $row["id"]?>">Delete</a> </td>
            </tr>

        <?php } ?>
    </table>
    </body>
    </html>
<?php //include "../footer.php"?>