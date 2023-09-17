<html>
    <head>Display</head>
    <style>
        .update, .delete, .download
        {
            background-color: green;
            color: white;
            margin-left: 3px;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 25px;
            width: 75px;
            font-weight: bold;
            cursor: pointer;
        }
        .delete
        {
            background-color: red;
        }
        .download
        {
            background-color: grey;
        }
    </style>
</html>

<?php

include("Connection.php");
error_reporting(0);

 $querry = "select * from form";
 $data = mysqli_query($conn,$querry);

 $total = mysqli_num_rows($data);

 

//  echo $total;
 

 if($total != 0)
 {
    ?>
    <h1 style="text-align:center">Displaying all records</h1>
    <table border = 3>
        <tr>
        <th width="3%">Name</th>
        <th width="3%">Semester</th>
        <th width="3%">Program Code</th>
        <th width="8%">Program Name</th>
        <th width="8%">Course 1</th>
        <th width="8%">Course 2</th>
        <th width="8%">Course 3</th>
        <th width="8%">Course 4</th>
        <th width="8%">Elective Course 1</th>
        <th width="8%">Course 5</th>
        <th width="14%">Operations</th>
    
        </tr>
        
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo"<tr>
        <td>".$result['name']."</td>
        <td>".$result['semester']."</td>
        <td>".$result['ProgramCode']."</td>
        <td>".$result['ProgramName']."</td>
        <td>".$result['CompCourse1']."</td>
        <td>".$result['CompCourse2']."</td>
        <td>".$result['CompCourse3']."</td>
        <td>".$result['CompCourse4']."</td>
        <td>".$result['ElecCourse1']."</td>
        <td>".$result['CompCourse5']."</td>
        
        <td>
            <a href='http://localhost/generatePDF/UpdateForm.php?id=$result[id] '><input type='submit' value='Update' class='update'></a>
            <a href='http://localhost/generatePDF/DeleteForm.php?id=$result[id] '><input type='submit' value='Delete' class='delete'
            onclick = 'return checkDelete()'></a>
            <a href='http://localhost/generatePDF/Download.php?id=$result[id] '><input type='submit' name='btn' value='Download' class='download'></a>
        </td>

        </tr>
        ";
    }
 }
 else{
    echo "No records found";
 }
?>
</table>
</html>
<script>
    function checkDelete()
    {
        return confirm('Are you sure you want to delete this Record ?');
    }
</script>

