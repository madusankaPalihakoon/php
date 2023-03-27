<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";

    
    $Sid="";
    $Fname="";
    $LName="";
    $phone="";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // is submit button is clic
    if(isset($_POST['Submit']))
    {
    $Sid = $_POST['studentID'];
    $Fname = $_POST['firstName'];
    $LName = $_POST['lastName'];
    $phone = $_POST['phoneNumber'];
    // SQL query to insert data
    $sql = "INSERT INTO name VALUES ('$Sid', '$Fname', '$LName','$phone')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error executing insert ". $conn->error;
    }
    }

    //search data from database
    if(isset($_POST['view']))
    {
        $Sid = $_POST['studentID'];
        $sqlS = "SELECT * FROM name WHERE NameID='$Sid'";
        $result = mysqli_query($conn, $sqlS);
        if (!$result) {
            die("Error executing view: " . mysqli_error($conn));
            
        } else {
            // HTML form
            echo "<form method='POST'>";
            while($row=$result->fetch_assoc())
            {
                $Sid=$row['NameID'];
                $Fname=$row['FirstName'];
                $LName=$row['LastName'];
                $phone=$row['PhoneNumber'];
            }
        }
    }

    //delete data
    if(isset($_POST['delete']))
    {
        $Sid = $_POST['studentID'];
        $sqlD = "delete FROM name WHERE NameID='$Sid'";
        $result = mysqli_query($conn, $sqlD);

        if(!$result){
            die("Error executing delete: " . mysqli_error($conn));
        }else{
                $Sid="";
                $Fname="";
                $LName="";
                $phone="";
        }
    }

    //update data
    if(isset($_POST['update'])){
        $Sid = $_POST['studentID'];
        $Fname = $_POST['firstName'];
        $LName = $_POST['lastName'];
        $phone = $_POST['phoneNumber'];

        $sql = "UPDATE name SET FirstName='$Fname', LastName='$LName', PhoneNumber='$phone' WHERE NameID=$Sid";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    //clear button
    if(isset($_POST['update']))
    {
        $Sid="";
        $Fname="";
        $LName="";
        $phone="";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="css">
</head>
<body>
    <form action="1st.php" method="POST">
        <ul>
            Student ID:
            <input type="text" name="studentID" id="studentID" value="<?php echo $Sid ?>">
        </ul>
        <ul>
            First Name:
            <input type="text" name="firstName" id="firstName" value="<?php echo $Fname ?>">
        </ul>
        <ul>
            Last Name:
            <input type="text" name="lastName" id="lastName" value="<?php echo $LName ?>">
        </ul>
        <ul>
            Phone Number:
            <input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $phone ?>">
        </ul>
        <ul>
            <input type="submit" value="Submit" name="Submit" id="Submit">
            <input type="submit" value="view" name="view" id="view">
            <input type="submit" value="delete" name="delete" id="delete">
            <input type="submit" value="update" name="update" id="update">
            <input type="submit" value="clear" name="clear" id="clear">
        </ul>
    </form>
</body>
</html>

<?php
     // SQL query to retrieve data
     $sql = "SELECT*FROM name";
     $result = mysqli_query($conn, $sql);
     if (!$result) {
         die("Error executing query: " . mysqli_error($conn));
     }else{    
     // HTML form
     echo "<form method='POST'>";
     while ($row = mysqli_fetch_array($result)) {
         echo "<label>Student ID:</label>";
         echo "<input type='text' name='id' value='" . $row['NameID'] . "'><br><br>";
         echo "<label>First Name:</label>";
         echo "<input type='text' name='name' value='" . $row['FirstName'] . "'><br><br>";
         echo "<label>Last Name:</label>";
         echo "<input type='email' name='email' value='" . $row['LastName'] . "'><br><br>";
         echo "<label>Phone:</label>";
         echo "<input type='text' name='phone' value='" . $row['PhoneNumber'] . "'><br><br>";
     }
     echo "</form>";
 
     mysqli_close($conn);
    }
?>