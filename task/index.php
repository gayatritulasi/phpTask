<?php
include('header.php');
$url = "http://localhost:8081/task/population.php";
$json = file_get_contents($url);
$json = json_decode($json,true); //get json string as an array - hence second parameter to be true
var_dump($json);

?>
<div id="populate-data"> 
<div class="table-head header-text"> Population </div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<div class="table-data">
  <table id="myTable" class="table-hover">
  
   <thead>
    <tr class="header">
     <th>CCA2</th>
      <th>NAME</th>
      <th>Pop2021</th>
      <th>World Percentage</th>
      <th>Rank</th>
    </tr>
    <?PHP
    foreach($json as $key => $value) {
    ?>
  <tr>
    <td><?PHP echo $json[$key]["Cca2"]; ?></td>
    <td><?PHP echo $json[$key]["Name"]; ?></td>
    <td><?PHP echo $json[$key]["Pop2021"]; ?></td>
    <td><?PHP echo $json[$key]["WorldPercentage"]; ?></td>
    <td><?PHP echo $json[$key]["Rank"];; ?></td>
  </tr>
 <?PHP
   }
 ?>
   </table></div> </div>
<?php
include('footer.php');
?>