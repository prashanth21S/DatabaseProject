<!DOCTYPE html>
<head>
    <title>Compare</title>
    <link href="compare2.css" rel="stylesheet" >
</head>
<body>
<?php
include 'conn.php';
$model_1=$_POST['modelname'];
$model_2=$_POST['modelname2'];
if ($model_1===$model_2){
  echo "<div style='font-size:28px;color:black;text-align:center'>Both of the selected processors are identical, Choose a different one<br><br>";
  echo "<a href='compare.php'>Try Again</a></div>";
}
else{
$sql="SELECT *
      FROM
        benchmark as b INNER JOIN specifications as s on b.ModelName=s.ModelName
      WHERE b.ModelName='$model_1'";
$res1=$conn->query($sql);
$sql="SELECT *
      FROM
        benchmark as b INNER join specifications as s on b.ModelName=s.ModelName
      WHERE b.ModelName='$model_2'";
$res2=$conn->query($sql);
$row1=$res1->fetch_assoc();
$row2=$res2->fetch_assoc();
}
 ?>
<h1> Results Of Comparison:</h1>
<div style="overflow-x:auto;">
    <table>
    <tr>
        <th>Attribute</th>
        <th>Processor 1</th>
        <th>Processor 2</th>
    </tr>
    <tr>
        <td>Company Name</td>
        <td><?php echo $row1['CompanyName']; ?></td>
        <td><?php echo $row2['CompanyName']; ?></td>
    </tr>
    <tr>
        <td>Series Name</td>
        <td><?php echo $row1['SeriesName']; ?></td>
        <td><?php echo $row2['SeriesName']; ?></td>
    </tr>
    <tr>
        <td>Model Name</td>
        <td><?php echo $row1['ModelName']; ?></td>
        <td><?php echo $row2['ModelName']; ?></td>
    </tr>
    <tr>
        <td>Base Frequency</td>
        <td><?php echo $row1['BaseFrequency']; ?></td>
        <td><?php echo $row2['BaseFrequency']; ?></td>
    </tr>
    <tr>
        <td>Max Frequency</td>
        <td><?php echo $row1['MaxFrequency']; ?></td>
        <td><?php echo $row2['MaxFrequency']; ?></td>
    </tr>
    <tr>
        <td>Number of Cores</td>
        <td><?php echo $row1['Cores']; ?></td>
        <td><?php echo $row2['Cores']; ?></td>
    </tr>
    <tr>
        <td>Number of Threads</td>
        <td><?php echo $row1['Threads']; ?></td>
        <td><?php echo $row2['Threads']; ?></td>
    </tr>
    <tr>
        <td>Cache Size</td>
        <td><?php echo $row1['Cache']; ?></td>
        <td><?php echo $row2['Cache']; ?></td>
    </tr>
    <tr>
        <td>TDP(W)</td>
        <td><?php echo $row1['TDP']; ?></td>
        <td><?php echo $row2['TDP']; ?></td>
    </tr>
    <tr>
        <td>Integrated Graphics</td>
        <td><?php if (isset($row1['IntegeratedGraphics'])){
          echo $row1['IntegeratedGraphics'];
        }
        else{
          echo "Information currently not available";
        } ?></td>
        <td><?php if (isset($row2['IntegeratedGraphics'])){
          echo $row2['IntegeratedGraphics'];
        }
        else{
          echo "Information currently not available";
        } ?></td>
    </tr>
    <tr>
        <td>Transistor Size</td>
        <td><?php echo $row1['Lithography']; ?></td>
        <td><?php echo $row2['Lithography']; ?></td>
    </tr>
    <tr>
        <td>Geekbench Single Core Score</td>
        <td><<?php echo $row1['Single_Geekbench']; ?></td>
        <td><?php echo $row2['Single_Geekbench']; ?></td>
    </tr>
    <tr>
        <td>Geekbench Multi Core Score</td>
        <td><?php echo $row1['Multi_Geekbench']; ?></td>
        <td><?php echo $row2['Multi_Geekbench']; ?></td>
    </tr>
    <tr>
        <td>Cinebench Single Core Score</td>
        <td><?php echo $row1['Single_cinebench']; ?></td>
        <td><?php echo $row2['Single_cinebench']; ?></td>
    </tr>
    <tr>
        <td>Cinebench Multi Core Score</td>
        <td><?php echo $row1['Multi_cinebench']; ?></td>
        <td><?php echo $row2['Multi_cinebench']; ?></td>
    </tr>
    <tr>
        <td>CPU-Z Single Core Score</td>
        <td><?php echo $row1['Single_CPUZ']; ?></td>
        <td><?php echo $row2['Single_CPUZ']; ?></td>
    </tr>
    <tr>
        <td>CPU-Z Multi Core Score</td>
        <td><?php echo $row1['Multi_CPUZ'] ?></td>
        <td><?php echo $row2['Multi_CPUZ'] ?></td>
    </tr>

</table>
</div>
<br><br>
<a href="index.php">Click Here To go back</a>
</body>
