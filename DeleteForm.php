<?php
    include("Connection.php");
    $id = $_GET['id'];

    $querry = "delete from form where id = '$id'";
    $data = mysqli_query($conn,$querry);

    if($data)
    {
        echo "<script>alert('Record deleted')</script>";
        ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/generatePDF/ProgramInfo.php" />
        <?php
    }
    else
    {
        echo "<script>alert('Failed to deleted')</script>";
    }
?>