<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>view</title>
</head>

<body>
    <table border="1">
       <tr>
           <td colspan="5"><center>Product Type</center></td>
           <td><a href="product_type_form.php">New</a></td>
       </tr>
        <tr>
            <td>Sl.no</td>
            <td>Name</td>
            <td>Quality</td>
            <td>Date</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
        include_once("../db_connection.php");
        $sno=1;
        $sql=$conn->prepare("SELECT * FROM product_type");
        $sql->execute();
        $result=$sql->get_result();
        while($row=$result->fetch_assoc())
        {
          ?>
            <tr>
                <td>
                    <?php echo $sno++;?>
                </td>
                <td>
                    <?php echo $row["pt_name"];?>
                </td>
                <td>
                    <?php echo $row["pt_quality"];?>
                </td>
                <td>
                    <?php echo $row["pt_date"];?>
                </td>
                <td>EDIT</td>
                <td><a href="product_type_delete.php?id=<?php echo $row["pt_id"]?>">DELETE</a>
            </tr>
            <?php 
        }
         ?>
    </table>
</body>

</html>
