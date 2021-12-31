<?php

$place = filter_input(INPUT_POST, 'place');
$guest_no = filter_input(INPUT_POST, 'guest_no');
$arrival_date = filter_input(INPUT_POST, 'arrival_date');
$leaving_date = filter_input(INPUT_POST, 'leaving_date');

if (!empty($place)) {
    if (!empty($guest_no)) {
        if (!empty($arrival_date)) {
            if (!empty($leaving_date)) {
                $host = "localhost";
                $dbusername = "root";
                $dbpassword ="";
                $dbname = "dblogin";

        // Create Connection
        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error('.mysqli_connect_errno().')'
            .mysqli_connect_error());
        }
        else {
            $sql = "INSERT INTO book (Place, People, Arrival, Leaving)
                    VALUES ('$place', '$guest_no', '$arrival_date', ''$leaving_date')";
            if ($conn->query($sql)){
                echo "New record is inserted successfully";
            }
           else{
               echo "Error: ". $sql . "<br>". $conn->error;
           }
           $conn->close();
        } 
}
else {
    echo "leaving_date should not be empty";
    die();
}
        }
else {
    echo "arrival_date should not be empty";
    die();
}
    }
else {
    echo "guest_no should not be empty";
    die();
}
}
else {
      echo "place should not be empty";
      die();
}

?>