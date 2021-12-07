<?php
include('header.php');
$url = "http://www.omdbapi.com/?i=tt3896198&apikey=3bcce433";
$json = file_get_contents($url);
$json = json_decode($json,true); //get json string as an array - hence second parameter to be true
 

?>

<div id="populate-data"> 
<div class="table-head header-text"> Movies </div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Title.." title="Type in a name">
<div class="table-data">
  <table id="myTable" class="table-hover">
  
   <thead>
    <tr class="header">
     <th>Title</th>
      <th>Year</th>
      <th>Director</th>
      <th>Released</th>
      <th>Actors</th>
      <th>Poster</th>
    </tr>
   
  <tr>
    <td><?PHP echo $json['Title'] ; ?></td>
    <td><?PHP echo $json['Year']; ?></td>
    <td><?PHP echo $json['Director']; ?></td>
    <td><?PHP echo $json['Released']; ?></td>
    <td><?PHP echo $json['Actors']; ?></td>
    <td><img class="poster" src="<?PHP echo $json['Poster']; ?>"></td>
  </tr>
 
   </table></div> </div>
<?php
include('footer.php');
?>