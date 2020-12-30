<!DOCTYPE html>
<head>
    <title>Input</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link href="form.css" rel="stylesheet" > 

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body class="background">

    <h1>Please enter the following details:</h1>
 <div class="container">
    <form action = "process.php" method ="post">




        <?php
            include 'conn.php';
            $sql = "SELECT * FROM processor";
            $result = $conn->query($sql);
            if($result){
            if ($result->num_rows > 0) {
                echo '<label for="modelname">Model name</label><br>
                <select name="modelname" id="modelname"';
                while($row = $result->fetch_assoc()) {
                    echo '<option value="'.$row["ModelName"].'">'.$row["ModelName"].'</option>';
                }
                echo '</select>';
            }
            else {
                echo "0 results";
              }
            }
            else{
                echo "Error in ".$sql."<br>".$conn->error;
            }

              $conn->close();
        ?>

        <label for="geekbenchsingle">Geekbench Single Core Score:</label><br>
        <input type="text" id="geekbenchsingle" name="geekbenchsingle" placeholder="Enter geekbenchsingle score">

        <label for="geekbenchmulti">Geekbench Multi Core Score:</label><br>
        <input type="text" id="geekbenchmulti" name="geekbenchmulti" placeholder="Enter geekbenchmulti score">

        <label for="cinebenchsingle">Cinebench Single Core Score:</label><br>
        <input type="text" id="cinebenchsingle" name="cinebenchsingle" placeholder="Enter cinebenchsingle score">

        <label for="cinebenchmulti">Cinebench Multi Core Score:</label><br>
        <input type="text" id="cinebenchmulti" name="cinebenchmulti" placeholder="Enter cinebenchmulti score">

        <label for="cpuzsingle">CPU-Z Single Core Score:</label><br>
        <input type="text" id="cpuzsingle" name="cpuzsingle" placeholder="Enter encpuzsingle score">

        <label for="cpuzmulti">CPU-Z Multi Core Score:</label><br>
        <input type="text" id="cpuzmulti" name="cpuzmulti" placeholder="Enter cpuzmulti score">

        <label for="review">Review :</label><br>
        <input type="text" id="review" name="review" placeholder="write your Review" >
    </div>
    <div>
        <br><input type="submit" value="Submit">
    </div>
         <br><a href="index.php">Go Back</a>
    </form>
</body>
</html>


