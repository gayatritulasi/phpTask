<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;1,100&display=swap" rel="stylesheet">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
      .logo{
          width:50px;
          height:50px;
      }
  

      footer {
        background: #007bff;
        background: linear-gradient(to right, #0062E6, #33AEFF);
      }
      .header-text{
        font-family: 'Lato', sans-serif;
      }
      .table-head{
        margin-left:317px;
        font-size:24px;
        font-weight:400;
        margin-top:20px;
        margin-bottom:20px;
      }
      #myTable {
  border-collapse: collapse;
  width: 50%;
  border: 1px solid #ddd;
  font-size: 18px;
   
}
.table-data{
  width:80%;
  margin:auto;
}
#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
#myInput {
    background-image: url('images/searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    width: 40%;
    font-size: 16px;
    margin-left:137px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
  }
  #populate-data{
    height:75vh;
    overflow:scroll;
  }
  .poster{
    width:150px;
    height:150px;
  }
  input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin:20px;
}

input[type=submit]:hover {
  background-color: #45a049;
 
}
.center-text{
  text-align:center;
}
  
  </style>
  <script>
   function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
  </script>
</head>
<body>
  <header>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.jpg" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active header-text" aria-current="page" href="index.php">Population Analysis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-text" href="movies.php">Movies List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-text" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-text" href="contact.php">Contact Us</a>
        </li>
   
    </div>
</div>
</nav>
 
</header>
