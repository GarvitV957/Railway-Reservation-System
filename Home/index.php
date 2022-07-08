
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Home</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style2.css">
    <script src="./index.js"></script>
    <link rel="shortcut icon" href="../Authentication/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="bg"></div>
    <nav>
        <div>iRailway</div>
        <div class="nav-menu"><a href="#" onclick="profileShow()">Profile <i class="fas fa-user-circle"></i></a><a href="http://localhost/RailwayProject/Authentication/index.html">Sign Out <i class="fas fa-sign-out-alt"></i></a></div>
    </nav>
    <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "Railways";
        $con = mysqli_connect($server,$username,$password,$database);
        if(!$con){
            die("connection to this database is failed due to " . mysqli_connect_error());
        }


        $isLogin = $_POST["login"];
        if($isLogin==1)
        {
            $phone_=$_POST["phone"];
            $password_=$_POST["password"];
            $sql="select id from signup where phone = ".$phone_." and password = \"".$password_."\";";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0)
            {
                while(($row = mysqli_fetch_array($result))) {
                    $id_[]=$row["id"];
                }
                $user_id=$id_[0];
            }
            else{
                header("Location: http://localhost/RailwayProject/Authentication/mismatch.html");
            }
        }
        $isSignUP=$_POST["signUp"];
        if($isSignUP==1)
        {
            $password_ = $_POST["password"];
            $fname_ = ucfirst($_POST["fname"]);
            $lname_ = ucfirst($_POST["lname"]);
            $phone_ = $_POST["phone"];
            $sql = "Insert into signup (fname,lname,phone,password) values(\"".$fname_."\",\"".$lname_."\",\"".$phone_."\",\"".$password_."\")";
            mysqli_query($con,$sql);
            $sql = "select id from signup where phone = ".$phone_.";";
            $result=mysqli_query($con,$sql);
            while(($row = mysqli_fetch_array($result))) {
                $id_[]=$row["id"];
            }
            $user_id=$id_[0];
        }
                // Condition to search or first time login
        $refresh=0;
        $refresh=$_GET["refresh"];
        if(($isLogin!=1)&&($isSignUP!=1)&&($refresh!=1)&&($refresh!=2)&&($refresh!=3))
        {
            header("Location: http://localhost/RailwayProject/Authentication/index.html");
        }
        if($refresh==1) // For searching a train and giving search results
        {
                        $day_given = strtolower($_GET["day"]);
                        $from_given = $_GET["from"];
                        $to_given = $_GET["to"];
                        $date = $_GET["date"];
                        $user_id=$_GET["user_id"];
                        $sql = "select * from traininfo where day = \"".$day_given."\" and  _from=\"".$from_given."\" and _to=\"".$to_given."\";";
                        $result = mysqli_query($con, $sql);
                        echo("<div class=\"list-box\"><h1>List of Trains</h1><div class=\"tains-list\"><div class=\"tickets\">");
                        if(mysqli_num_rows($result)>0)
                        {
                            while(($row = mysqli_fetch_array($result))) {
                                $train_number[]=$row['train_number'];
                                $train_name[]=$row['train_name'];
                                $day[]=ucfirst($row['day']);
                                $price[]=$row['price'];
                                $duration[]=$row['duration'];
                                $dispatch[]=$row['dispatch'];
                                $_from[]=ucfirst($row['_from']);
                                $_to[]=ucfirst($row['_to']);
                                $seats_left[]=$row["seats_left"];
                                $total_seats[]=$row["total_seats"];
                                $travel_id[]=$row["travel_id"];
                                for ($i=0; $i < count($day); $i++) {
                                    echo("<div class=\"ticket\"> <div class=\"ticket-head\"> <div class=\"day\">".$day[$i]."</div> <div class=\"date\">Date: ".$date."</div> </div><div class=\"info\"> <div class=\"train-info\"> <div class=\"train-name\"> <b class=\"attr\">Train Name: </b>".$train_name[$i]." </div> <div class=\"train-no\"><b class=\"attr\">Train Number: </b>".$train_number[$i]." </div> </div> <div class=\"location\"> <div class=\"from\"><b class=\"attr\">From: </b>".$_from[$i]."</div> <div class=\"to\"><b class=\"attr\">To: </b>".$_to[$i]."</div> </div> <div class=\"timing\"> <div class=\"dispatch\"><b class=\"attr\">Dispatch Time: </b>".$dispatch[$i]."</div> <div class=\"duration\"><b class=\"attr\">Duration: </b>".$duration[$i]."</div> </div><div class=\"book-now\"> <div class=\"price\">Price: ". $price[$i] ."</div> <div><b>Seats Left: </b>".$seats_left[$i]."</div> <form action=\"index.php\" method=\"GET\"><input type=\"hidden\" name=\"user_id\" value=\"".$user_id."\"><input type=\"hidden\" name=\"travelId\" value=\"".$travel_id[$i]."\"><input type=\"hidden\" name=\"refresh\" value=\"2\"><input type=\"hidden\" name=\"date\" value=\"".$date."\"><input type=\"hidden\" name=\"seats_left\" value=\"".$seats_left[$i]."\"><input type=\"hidden\" name=\"seats_total\" value=\"".$total_seats[$i]."\"><button>BOOK NOW</button></form> </div></div></div>");
                                }
                            }
                        }
                        else {
                            echo("<h2 style=\"color:wheat;\">No trains found from ".$from_given." to ".$to_given." on ".$date." <i class=\"far fa-frown\"></i> </h2>");
                        }
                        echo("</div></div></div>");
        }
        if ($refresh==2) { // For booking a train
            $user_id_ = ($_GET["user_id"]);
            $user_id = ($_GET["user_id"]);
            $travel_id_=($_GET["travelId"]);
            $seats_left_ =($_GET["seats_left"]);
            $seats_total_ =($_GET["seats_total"]);
            $seat_no_=$seats_total_-$seats_left_+1;
            $date_=($_GET["date"]);
            $sql="Insert into bookings (id, travel_id, seat_no, travel_date) values (".$user_id_.",".$travel_id_.", ".$seat_no_.",\"".$date_."\");";
            mysqli_query($con, $sql);
            $sql="update traininfo set seats_left =(seats_left-1) where travel_id = ".$travel_id_.";";
            mysqli_query($con, $sql);
        }
        if($refresh==3){ // For canceling the ticket
            $booking_id_ = $_GET["bookingId"];
            $user_id=$_GET["user_id"];
            $travel_id_=$_GET["travel_id"];
            $sql= "delete from bookings where booking_id=".$booking_id_.";";
            mysqli_query($con, $sql);
            $sql="update traininfo set seats_left =(seats_left+1) where travel_id = ".$travel_id_.";";
            mysqli_query($con, $sql);
        }
        ?>
        <div class="container">
                <?php if($isSignUP==1) echo("<h1 style=\"color:wheat;\">Thank You for choosing iRailway.</h1><h2 style=\"color:#aaf\">What are you waiting for, book your first ticket right now!</h2>") ?>
                <div class="book-cover">
                    <div class="book">
                        <h1>Find Your Train</h1>
                        <form  action="./index.php" method="GET">
                            <div class = "From"><p>From: </p><select name =  "from" placeholder="Select Station">
                                <option value="Delhi" >Delhi</option>
                                <option value="Kanpur">Kanpur</option>
                                <option value="Madras">Madras</option>
                                <option value="Mandi">Mandi</option>
                                <option value="Calcutta" >Calcutta</option>
                                <option value="Mumbai" >Mumbai</option>
                                </select>
                            </div>
                            <div class = "To"><p>To: </p><select name=  "to">
                            <option value="Delhi" >Delhi</option>
                                <option value="Kanpur">Kanpur</option>
                                <option value="Madras">Madras</option>
                                <option value="Mandi">Mandi</option>
                                <option value="Calcutta" >Calcutta</option>
                                <option value="Mumbai" >Mumbai</option>
                                </select>
                            </div>
                            <div class = "Date" onchange="changeDay()"><p>Date: </p><input name="date" type="date" id = "dateInput" require/>
                                    </div>
                            <div class = "Day"><p>Day: </p><input name="day" type="text" id = "day" readonly/></div>
                            <input type="hidden" value=1 name="refresh">
                            <?php echo("<input type=\"hidden\" name=\"user_id\" value=".$user_id.">"); ?>
                            <div class="btn-box"><button type="submit" value="Submit">Find Now</button></div>
                        </form>
                    </div>
                </div>
        <div class="bookings">
            <h1 class="bookings-head">Your Bookings</h1>
            <div class="tickets">
            <?php
                $sql = "select B.id, B.fname, B.lname, B.phone, A.train_number, A.train_name,B.travel_id,B.travel_date, A.day, A._from, A._to, A.dispatch, A.duration,B.seat_no,B.booking_id, A.price from traininfo A natural join (select id, fname, lname, phone, seat_no, travel_id, booking_id,  travel_date from signup natural join bookings where id =".$user_id.") B";
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result)>0){
                    while(($row = mysqli_fetch_array($result))) {
                        $fname[]=ucfirst($row['fname']);
                        $lname[]=ucfirst($row['lname']);
                        $phone[]=$row['phone'];
                        $train_number[]=$row['train_number'];
                        $train_name[]=$row['train_name'];
                        $day[]=ucfirst($row['day']);
                        $price[]=$row['price'];
                        $seat_no[]=$row['seat_no'];
                        $duration[]=$row['duration'];
                        $dispatch[]=$row['dispatch'];
                        $_from[]=ucfirst($row['_from']);
                        $_to[]=ucfirst($row['_to']);
                        $travel_id[]=$row['travel_id'];
                        $travel_date[]=$row['travel_date'];
                        $booking_id[]=$row['booking_id'];
                    }
                    for ($i=0; $i < count($fname); $i++) {
                        echo("<div class=\"ticket-cover\"> <div class=\"ticket\" id=\"".$i."\"> <div class=\"ticket-head\"> <div class=\"happy\">Happy Journey</div> <div class=\"date\">Date: ".$travel_date[$i]."</div> </div> <div class=\"info\"> <div class=\"person-info\"> <div class=\"name\"><b class=\"attr\">Name: </b>".$fname[$i]." ".$lname[$i]."</div> <div class=\"phone\"><b class=\"attr\">Contact:</b> +91 ".$phone[$i]."</div> </div> <div class=\"train-info\"> <div class=\"train-name\"> <b class=\"attr\">Train Name: </b>".$train_name[$i]." </div> <div class=\"train-no\"><b class=\"attr\">Train Number: </b>".$train_number[$i]." </div> </div> <div class=\"day\"><div><b class=\"attr\">Travel ID:</b> ".$travel_id[$i]."</div><p class=\"day-element\"><b class=\"attr\">Day: </b>".$day[$i]."</p> </div> <div class=\"location\"> <div class=\"from\"><b class=\"attr\">From: </b>".$_from[$i]."</div> <div class=\"to\"><b class=\"attr\">To: </b>".$_to[$i]."</div> </div> <div class=\"timing\"> <div class=\"dispatch\"><b class=\"attr\">Dispatch Time: </b>".$dispatch[$i]."</div> <div class=\"duration\"><b class=\"attr\">Duration: </b>".$duration[$i]."</div> </div> <div class=\"seat-info\"> <div class=\"seat-no\"><b class=\"attr\">Seat Number: </b>".$seat_no[$i]." </div> <div class=\"price\"><b class=\"attr\">Price: </b>".$price[$i]."&#8377;</div> </div> </div> <div class=\"img-cover\"> <div class=\"verified-content\"> <img src=\"./verified.png\" height=\"50px\" width=\"50px\"> <p>Digitally Verified</p> </div> <img src=\"./Signature.png\" height=\"50px\" width=\"50px\"> </div>  </div> <div style=\"display: flex; justify-content: space-between;\"> <button onclick=\"printTicket(".$i.")\">Download Ticket <i class=\"fas fa-arrow-circle-down\"></i></button> <form class=\"delete-btn-form\" action=\"index.php\"><input type=\"hidden\" value=\"3\" name=\"refresh\"><input type=\"hidden\" name=\"bookingId\" value=\"".$booking_id[$i]."\"><input type=\"hidden\" name=\"user_id\" value=\"".$user_id."\"><input type=\"hidden\" name=\"travel_id\" value=\"".$travel_id[$i]."\"><button type=\"submit\">Cancel Ticket <i class=\"fas fa-plane-slash\"></i></button></form></div> </div>");
                    }
                }
                else {
                    echo("<h2 style=\"color:wheat;\">You have no bookings yet!</h2>");
                }
            ?>
            </div>
        </div>
        <div class="profile" id="profile">
            <?php
            $sql="select fname, lname, phone from signup where id =".$user_id.";";
            $result = mysqli_query($con, $sql);
            while(($row = mysqli_fetch_array($result))) {
                $fname[]=ucfirst($row['fname']);
                $lname[]=ucfirst($row['lname']);
                $phone[]=$row['phone'];
            }
            $con->close();
            ?>
            <div class="profile-box">
                <div class="name">Name: <?php echo($fname[0]." ".$lname[0]) ?></div>
                <div class="phone">Phone: <?php echo($phone[0])?></div>
            </div>
        </div>
    </div>
</body>
</html>
