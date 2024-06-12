<?php
include "db.php";

$select = "SELECT * from add_product";

$exe = mysqli_query($con, $select);

while ($row = mysqli_fetch_array($exe)) { ?>

    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>

        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['current_price'] ?></td>
        <td><?php echo $row['before_price'] ?></td>
        <td><?php echo $row['buying_price'] ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><img height="70" width="70" src="<?php echo $row['image'] ?>"></td>
        <td><button onclick="deleteData(<?php echo $row['id'] ?>)" class="btn btn-danger">Delete</button></td>
    </tr>
    <?php
}
?>