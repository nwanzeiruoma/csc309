<!DOCTYPE html>
<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table -->
    <table>
        <thead>
            <tr>
                <td>SN</td>
                <td>Last Name</td> 	
                <td>First Name</td> 	
                <td>Gender</td>
                <td>Date of Birth</td> 	
                <td>Email</td>
            </tr>
        </thead>

        <tbody>
           <?php
                //my server variables
                $server = 'localhost'; // 127.0.0.1
                $username = 'root';
                $password = 'rootroot';
                $db = 'csc309';

            //my server connection
            $conn = new mysqli($server, $username, $password, $db);
            
            //check server connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            //my select query
            $sql = "SELECT * FROM users";
            
            //query result
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result === false) {
                die("Error: " . $conn->error);
            }
            //fetch the data from the result set
            while ($row = $result->fetch_assoc()) {?>
                 <tr>
                    <td><?php $row["id"];?></td>
                    <td><?php $row["lastname"]</td> 	
                    <td><?php $row["firstname"]</td> 	
                    <td><?php $row["gender"];?></td>
                    <td><?php $row["date_of_birth"];?></td> 	
                    <td><?php $row["email"];?></td>
               </tr>
            <?php
                }
                // Close the database connection
                $conn->close();
            ?>

        </tbody>
    </table>
</body>
</html>
