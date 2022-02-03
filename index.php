<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
          text-align: center;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #04AA6D;
          color: white;
        }
        </style>
        <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>
        </head>
        <body>
        <div style="text-align: center;">
            <h1>Welcome to DB15+ </h1>
            <h2>Company</h2>
        </div>
        
        
        <table id="customers">
          <tr>
            <th>Company Name</th>
            
          </tr>
          
          <?php
          include "configure.php"; // Makes mysql connection
          // All variables in config.php are now accessable in this file too
          $sql_statement =
          "SELECT * FROM company";
          $result = mysqli_query($db, $sql_statement); // Executing query
          while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
          $company_name = $row['names'];
          
          echo "<tr>" ."<td>".$company_name. "</tr>" ."</td>";
          }
?>
        </table>
        <div style="text-align: center;">
            <h4>You can add companies</h4>
        </div>

    

<div style="text-align: center;">
  <form action="company_insert.php" method="POST">
    <label for="fname">Company Name</label>
    <input type="text" name="names" placeholder="Company name...">
 
    <input type="submit" value="Insert">
  </form>
  <div style="text-align: center; padding-top:40px;">
        <h4>You can delete companies here:</h4>
        </div>

  <form action="company_insert.php" method="POST">
  <select name="names2">


<?php
  include "configure.php"; // Makes mysql connection
  // All variables in config.php are now accessable in this file too
  $sql_statement =
  "SELECT * FROM company";
  $result = mysqli_query($db, $sql_statement); // Executing query
  while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
    $names2 = $row['names'];
    
    echo "<option value='$names2'>" .$names2 ."</option>";
    
  

  
  
  }
  ?>
  <input type="submit" value="DELETE">
 </form>
</div>


        
        <div style="text-align: center;">
            <button><a href="customer.php">Next Page</a></button>
        </div>

</body>
</html>