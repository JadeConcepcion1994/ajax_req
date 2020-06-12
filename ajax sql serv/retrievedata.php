<?php
include 'connection.php';


$conn = sqlsrv_connect($serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

if (isset($_GET['getData'])) {
    $sql = "SELECT email, password FROM tbl_sample";
    $result = sqlsrv_query( $conn, $sql);
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    echo "<table><tr><th>Username</th><th>Password</th></tr>";

   
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){

        //  echo $row['email'] . " , ".$row['password']."<br />"; 
        echo "<tr><td>" . $row["email"]. "</td><td>" . $row["password"].  "</td></tr>";
    }
    echo "</table>";    
    

 /*   $row =  sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
   if(sqlsrv_num_rows($row) > 0){
    foreach ($row as $rows) : ?>
        <td>
        <tr> <?php $rows['email'] ?> </tr>
        <tr> <?php $rows['password'] ?> </tr>
        </td>



    <?php endforeach;
   }
   else {
       echo "EMPTY";
   }  */


       
    


    
    sqlsrv_free_stmt( $stmt);
}



?>