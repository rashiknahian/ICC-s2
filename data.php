<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    
        include("head.php"); 
        include("dbconnect.php");
    
        $query = "SELECT * FROM contact_form";
        $data = $DBConnect->query($query);
    ?>
</head>
<body>
    <?php include("header.php"); ?>
    <?php include("nav.php"); ?>
    
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php
            while($row = $data->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['messages']?></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <?php include("footer.php"); ?>
</body>
</html>