<?php
    error_reporting(0);
    include("connection.php");

    $query = "SELECT * FROM form";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    //echo $total;
    
    if($total !=0)
    {

        ?>
        <table border="3">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>AGE</th>
                <th>DOB</th>
            </tr>
         

        <?php
        while($result = mysqli_fetch_assoc($data)){
           echo "
           <tr>
           <td>".$result['id']."</td>
           <td>".$result['name']."</td>
           <td>".$result['email']."</td>
           <td>".$result['age']."</td>
           <td>".$result['dob']."</td>
        </tr>
           ";
        }
    }
    else{
        echo "No records founds";
    }
?>
</table>
