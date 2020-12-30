<!DOCTYPE html>
<head>
    <title>Input</title>
    <link href="form.css" rel="stylesheet" > 
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
        <input type="text" id="geekbenchsingle" name="geekbenchsingle">

        <label for="geekbenchmulti">Geekbench Multi Core Score:</label><br>
        <input type="text" id="geekbenchmulti" name="geekbenchmulti">

        <label for="cinebenchsingle">Cinebench Single Core Score:</label><br>
        <input type="text" id="cinebenchsingle" name="cinebenchsingle">

        <label for="cinebenchmulti">Cinebench Multi Core Score:</label><br>
        <input type="text" id="cinebenchmulti" name="cinebenchmulti">

        <label for="cpuzsingle">CPU-Z Single Core Score:</label><br>
        <input type="text" id="cpuzsingle" name="cpuzsingle">

        <label for="cpuzmulti">CPU-Z Multi Core Score:</label><br>
        <input type="text" id="cpuzmulti" name="cpuzmulti">
        
        <label for="review">Review :</label><br>
        <input type="text" id="review" name="review">
    </div>
    <div>
        <br><input type="submit" value="Submit">
    </div>  
    </form>
</body>
</html>