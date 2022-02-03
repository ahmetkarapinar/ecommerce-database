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
a {
  text-decoration: none;
}

</style>
        </head>
        <body>
        <div style="text-align: center;">
            <h1>Products</h1>
        </div>
        
        
        <table id="customers">
          <tr>
            <th>Pid</th>
            <th>Stock Count</th>
            <th>quantity</th>
            <th>Description</th>
          </tr>
      
         
          <?php
          include "configure.php"; // Makes mysql connection
          // All variables in config.php are now accessable in this file too
          $sql_statement =
          "SELECT * FROM products";
          $result = mysqli_query($db, $sql_statement); // Executing query
          while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
            $pid = $row['pid'];
            $stockcount = $row['stockcount'];
            $quantity = $row['quantity'];
            $description = $row['descriptions'];
          

          
          echo "<tr>" ."<td>".$pid."</td>"."<td>".$stockcount."</td>"."<td>".$quantity."</td>"."<td>".$description."</td>". "</tr>" ;
          }
?>
        </table>

        <div style="text-align: center;">
            <h1>Products with Categories</h1>
        </div>
        
        
        <table id="customers">
          <tr>
            <th>Pid</th>
            <th>Category Id</th>
            
          </tr>
      
         
          <?php
          include "configure.php"; // Makes mysql connection
          // All variables in config.php are now accessable in this file too
          $sql_statement =
          "SELECT * FROM belongto";
          $result = mysqli_query($db, $sql_statement); // Executing query
          while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
            $pid = $row['pid'];
            $catid = $row['catid'];
            
          

          
          echo "<tr>" ."<td>".$pid."</td>"."<td>".$catid."</td>". "</tr>" ;
          }
?>
        </table>
        <div style="text-align: center; padding-top:40px;">
            <h3>You can add products here:</h3>
        </div>

    

<div>
  <form action="products_insert.php" method="POST">
    <label for="fname">Pid</label>
    <input type="text" name="pid" placeholder="pid...">
    <label for="fname">Stock count</label>
    <input type="text" name="scount" placeholder="stock ount...">
    <label for="fname">Quantity</label>
    <input type="text" name="quan" placeholder="quantitiy...">
    <label for="fname">Description</label>
    <input type="text" name="des" placeholder="description...">
    <label for="fname">Category Id</label>
    <input type="text" name="catid" placeholder="catid...">
 
    <input type="submit" value="Insert">
  </form>

</div>
<div style="text-align: center; padding-top:40px;">
        <h4>You can delete products here:</h4>
        </div>

  <form action="customer_insert.php" method="POST">
  <select name="cid2">


<?php
  include "configure.php"; // Makes mysql connection
  // All variables in config.php are now accessable in this file too
  $sql_statement =
  "SELECT * FROM customer";
  $result = mysqli_query($db, $sql_statement); // Executing query
  while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
    $cid2 = $row['cid'];
    
    echo "<option value='$cid2'>" .$cid2 ."</option>";
    
  

  
  
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