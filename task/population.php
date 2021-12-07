<?php
    include('connection.php');
    try{
        
        $sql = "select * from population";
        $result = $conn->query($sql);
        $rows = array();
        while($r =$result->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $r;
        }
        print json_encode($rows);
    } 
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>