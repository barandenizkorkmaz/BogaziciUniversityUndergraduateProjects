<html>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sheltermanagerdb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }else{

                // Insert the record
                $sql = "INSERT INTO ANIMAL(Name,Age,Species,Caretaker,Sponsor) " .
                    "VALUES('" . $_POST['Name'] . "', '" . $_POST['Age'] . "', '" . $_POST['Species'] . "', '" . $_POST['Caretaker'] . "', '" . $_POST['Sponsor'] . "')";

                if ($conn->query($sql) === TRUE) {
                    echo "New animal added successfully <br />";
                    echo "<a href = 'homepage.php'>Back</a>";
                    
                       
                } else {
                    echo "<a href = 'homepage.php'>Back</a>"."<br>";
                    echo "Error creating record: " . $conn->error;
                }
                
            }
            $conn->close();
        
        
        ?>
    
    
    </body>

</html>