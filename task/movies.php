<?php
error_reporting(E_ERROR | E_PARSE);
include('header.php');
$url = "http://www.omdbapi.com/?apikey=3bcce433&page=1&s=Bat*&r=json&Type=Movie";
$json = file_get_contents($url);
$json = json_decode($json,false); //get json string as an array - hence second parameter to be true
 

?>

<div id="populate-data"> 
<div class="table-head header-text"> Movies </div>
<div class="search-elements">
<input type="text" id="title" class="movie_search" onkeyup="search_movie(this.id,0)" placeholder="Search for Title.." title="Type in a name">
<input type="text" id="year" class="movie_search" onkeyup="search_movie(this.id,1)" placeholder="Search for Year.." title="Type in a Year">
<input type="text" id="movieid" class="movie_search" onkeyup="search_movie(this.id,2)" placeholder="Search for Type.." title="Type in a Year">
<button onclick="sortTable()" class="btn btn-lg btn-primary">Sort</button>
</div>
<div class="table-data table-responsive-sm">
  <table id="myTable" class="table-hover">
  
   <thead>
    <tr class="header">
     <th>Title</th>
      <th>Year</th>
      <th>imdbID</th>
      <th>Type</th>
      <th>Poster</th>
    </tr>
   
    <?PHP
    foreach($json as $key => $value) {
      foreach($value as $key1 => $value1) {
    ?>
  <tr>
  
    <td><?PHP echo $value1 -> {"Title"}; ?></td>
    <td><?PHP echo $value1 -> {"Year"}; ?></td>
    <td><?PHP echo $value1 -> {"imdbID"}; ?></td>
    <td><?PHP echo $value1 ->{"Type"}; ?></td>
    <td><img src=<?PHP echo $value1 -> {"Poster"}; ?> class="poster"></td>
  </tr>
 <?PHP
   } }
 ?>
 
   </table></div> </div>
<?php
include('footer.php');
?>