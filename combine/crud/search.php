<?php
require_once "../config.php";
if (isset($_POST["search_keyword"]) && isset($_POST["search_keyword"])){
    $search_keyword=$_POST["search_keyword"];
    echo $search_keyword;
    $search_field=$_POST["search_field"];
    echo $search_field;

// $sql="SELECT * FROM persons WHERE".$search_field." LIKE '%".$search_keyword."%'";
// $result = mysqli_query($conn, $sql);

    if($search_field=="first_name"){
        $sql="SELECT * FROM persons WHERE first_name LIKE '%".$search_keyword."%'";
        $result = mysqli_query($conn, $sql);
    }
    elseif($search_field == "first_name"){
        $sql="SELECT * FROM persons WHERE last_name LIKE '%".$search_keyword."%'";
        $result = mysqli_query($conn, $sql);
    }
    elseif($search_field=="email"){
        $sql="SELECT * FROM persons WHERE email LIKE '%".$search_keyword."%'";
        $result = mysqli_query($conn, $sql);
    }
}
//include "../header.php"?>
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
            <?php
            if(isset($result)) {
                if (mysqli_num_rows($result) ==0) {
                    echo"<tr>";
                    echo "<td colspan='7'>no data found!!!</td>";
                    echo "</tr>";
                }
            }
            ?>
        <?php } ?>
    </table>
    </body>
    </html>
<?php //include "../footer.php"?>