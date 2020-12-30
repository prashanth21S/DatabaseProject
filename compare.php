<!DOCTYPE html>
<html>
<head>
    <title>Compare Page</title>
    <link href="compare3.css" rel="stylesheet" >

</head>

<body>

    <h1>Please enter the following details:</h1>
    <form action="compare2.php" method="post">
    <?php
      include 'conn.php';
      $sql="SELECT ModelName FROM benchmark
      GROUP BY ModelName;";
      $result= $conn->query($sql);
      echo "<label for='modelname'>Model Name for 1st processor:</label><br>";
      echo "<select id='modelname'name='modelname'>";
      while($row=$result->fetch_assoc()){
        echo '<option value="'.$row['ModelName'].'">'.$row['ModelName'].'</option>';
        echo "<br>";
      }
      echo"</select>";
      echo "<br><br>";
      echo "<label for='modelname2'>Model name for 2nd processor: </label><br>";
      echo "<select id='modelname2' name='modelname2'>";
      $result=$conn->query($sql);
      while($row=$result->fetch_assoc()){
        echo '<option value="'.$row['ModelName'].'">'.$row['ModelName'].'</option>';
        echo "<br>";
      }
      echo "</select>";
    //  echo "<label for";
     ?>
     <br><br>
     <input type="submit" onclick=alert("") value="Submit">
    </form>
</body>
</html>
