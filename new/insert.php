<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "asha";
        $password = "12345";
        $db = "asha";
        $conn = new mysqli($servername, $username, $password, $db);
        if($conn->connect_error)
        {
            echo ("connection failed:" . $conn->connect_error);
        }

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['Email'];

        $sql = "INSERT INTO registration(FirstName, LastName, Email ) VALUES('$fname', '$lname','$email')";

        if(mysqli_query($conn,$sql))
            {
	            echo "Registerd Successfully";
            }
                else
                    {
	                    echo mysqli_error($conn);
                    }

?>    
</body>
</html>
