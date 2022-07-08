
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="ticket-information">
        <!-- <div class="head">Information Found For Seat-3 & Travel ID-17</div> -->
        <?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "Railways";
            $con = mysqli_connect($server,$username,$password,$database);
            if(!$con){
                die("connection to this database is failed due to " . mysqli_connect_error());
            }
            $seat_no = $_POST["seat_no"];
            $travel_id = $_POST["travel_id"];
            echo("<div class=\"head\">Information Found For Seat-".$seat_no." & Travel ID-".$travel_id."</div>");
            // $seat_no=3;
            // $travel_id=17;
            $sql = "select B.id, B.fname, B.lname, B.phone, A.train_number, A.train_name, A.day, A._from, A._to, A.dispatch, A.duration ,A.price from traininfo A natural join (select id, fname, lname, phone, seat_no, travel_id from signup natural join bookings where seat_no=".$seat_no." and travel_id=".$travel_id.") B";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0)
            {
                while(($row = mysqli_fetch_array($result))) {
                    $fname[]=ucfirst($row['fname']);
                    $lname[]=ucfirst($row['lname']);
                    $phone[]=$row['phone'];
                    $train_number[]=$row['train_number'];
                    $train_name[]=$row['train_name'];
                    $day[]=ucfirst($row['day']);
                    $duration[]=$row['duration'];
                    $dispatch[]=$row['dispatch'];
                    $_from[]=ucfirst($row['_from']);
                    $_to[]=ucfirst($row['_to']);
                    $price[]=$row['price'];
                }
                echo("<div class=\"ticket\"> <div class=\"ticket-head\"> <div class=\"date\">Date: 27/7/34</div> <div class=\"day\">Day: Monday</div> </div> <div class=\"info\"> <div class=\"name\"><b class=\"attr\">Name:</b> ".$fname[0]." ".$lname[0]."</div> <div class=\"phone\"><b class=\"attr\">Contact:</b> ". $phone[0] ."</div> <div class=\"trian-name\"><b class=\"attr\">Train Name:</b> ".$train_name[0]."</div> <div class=\"train-no\"><b class=\"attr\">Train Number:</b> ".$train_number[0]."</div> <div class=\"location\"> <div class=\"from\"><b class=\"attr\">From:</b> ".$_from[0]."</div> <div class=\"to\"><b class=\"attr\">To:</b> ".$_to[0]."</div> </div> <div class=\"dispatch\"><b class=\"attr\">Dispatch Time:</b> ".$dispatch[0]."</div> <div class=\"duration\"><b class=\"attr\">Duration:</b> ".$duration[0]."</div> <div class=\"price\"><b class=\"attr\">Ticket Price:</b> ".$price[0]."&#8377;</div> </div> </div> <a href=\"./index.html\">Check Another</a> </div>");
            }
            else{
                echo("<h1>No booking found</h1>");
            }
            $con->close();
        ?>
</body>
</html>

