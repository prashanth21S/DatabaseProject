<html>
<body>
<?php
include 'conn.php';
    $modelname = $_POST["modelname"];
    $geekbenchsingle = $_POST["geekbenchsingle"];
    $geekbenchmulti = $_POST["geekbenchmulti"];
    $cinebenchsingle = $_POST["cinebenchsingle"];
    $cinebenchmulti = $_POST["cinebenchmulti"];
    $cpuzsingle = $_POST["cpuzsingle"];
    $cpuzmulti = $_POST["cpuzmulti"];
    $review = $_POST["review"];
    $getCmpSeriers="SELECT CompanyName,SeriesName FROM processor WHERE ModelName='$modelname'";
    $result = $conn->query($getCmpSeriers);
    if($result){
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $companyname=$row["CompanyName"];
            $seriesname=$row["SeriesName"];
        }
    }
    else {
        echo "0 results";
      }
    }
    else{
        echo "Error in ".$getCmpSeriers."<br>".$conn->error;
    }
$sql="INSERT INTO input(SeriesName,ModelName,Single_Geekbench,Multi_Geekbench,Single_cinebench,Multi_cinebench,Single_CPUZ,Multi_CPUZ,CompanyName,Review) VALUES('$seriesname','$modelname','$geekbenchsingle','$geekbenchmulti','$cinebenchsingle','$cinebenchmulti','$cpuzsingle','$cpuzmulti','$companyname','$review')";
if ($conn->query($sql) === TRUE) {
    echo "<h1>Successfully Inserted</h1><br>";
    echo "<hr>";
    echo "<b>Model:<b>".$modelname."<br>";
    echo "<b>Company:<b>".$companyname."<br>";
    echo "<b>Series:<b>".$seriesname."<br>";
    echo "<b>Geekbench Single score:<b>".$geekbenchsingle."<br>";
    echo "<b>Geekbench Multi score:<b>".$geekbenchmulti."<br>";
    echo "<b>Cinebench Single score:<b>".$cinebenchsingle."<br>";
    echo "<b>Cinebench Multi score:<b>".$cinebenchmulti."<br>";
    echo "<b>CPUZ Single score:<b>".$cpuzsingle."<br>";
    echo "<b>CPUZ Multi score:<b>".$cpuzmulti."<br><hr>";
    echo "<a href='form.php'>Add more</a>";
    

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  
exit; 
?>
</body>
</html>