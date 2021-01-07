<?php
  
  session_start();
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $phone = $_SESSION['phone'];

  


    $checkin3 = $checkin5 = $checkout3 = $checkout5  = $tempin3 = $tempout3 = $tempin5 = $tempout5 = "";
    $datediff = $totalcost = $people5 = $people3 = 0;
    
        if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["calculate3"])) {
            calculate3();
        }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["calculate5"])) {
            calculate5();
        }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["book3"])) {
            book3();
        }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["book5"])) {
            book5();
        }

        function calculate3() {
            global $tempin3, $tempout3, $checkin3, $checkout3, $datediff, $people3, $totalcost, $name, $email, $phone;
            if (empty($_POST["checkin3"])) {
                echo "<script type = 'text/javascript'>alert('Select a Check-in date');
                window.location='CustomerPage.html';</script>";
            }
            if (empty($_POST["checkout3"])) {
                echo "<script type = 'text/javascript'>alert('Select a Check-out date');
                window.location='CustomerPage.html';</script>";
            }
            if (empty($_POST["people3"])) {
                echo "<script type = 'text/javascript'>alert('Enter Number of Guests');
                window.location='CustomerPage.html';</script>";
            }
            else {
                $tempin3 = $_POST["checkin3"];
                $tempout3 = $_POST["checkout3"];
                $checkin3 = strtotime($_POST["checkin3"]);
                $checkout3 = strtotime($_POST["checkout3"]);
                $people3 = $_POST["people3"];
                $date = $checkout3 - $checkin3;
                $datediff = number_format(round($date /(60 * 60 * 24)));
                if ($datediff == 0)
                    $datediff = 1;
                $totalcost = $datediff*$_POST["people3"]*9800;
                include 'Login.php';
                echo "<h2>Four Seasons  International</h2>";
                echo "<h3>Booking Details:</h3>";
                echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['name']."<br>";
                echo "Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['email']."<br>";
                echo "Contact No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['phone']."<br>";
                echo "Regular Room:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3-Star<br>";
                echo "Check-in Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $tempin3";
                echo "<br>";
                echo "Check-out Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$tempout3";
                echo "<br>";
                echo "No. of Days:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $datediff";
                echo "<br>";
                echo "No. of Guests:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ";
                echo $_POST["people3"];
                echo "<br>";
                echo "Total Cost: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR $totalcost<br>"; 
                echo "Kindly go back and click on 'Book Now' to confirm your booking!";
              
            
            } 
        $_SESSION['in3'] = $tempin3;
        $_SESSION['out3'] = $tempout3;
        $_SESSION['dd3'] = $datediff;
        $_SESSION['cost3'] = $totalcost;
        $_SESSION['p3'] = $people3;
           
        }

        
        // echo $name;
        // echo $email;
        // echo $phone;
        // echo $tempin3;
        // echo $tempout3;
        // echo $datediff;
        // echo $people3;
        // echo $totalcost;
        

    function calculate5 () {
        global $tempin3, $tempout5, $checkin5, $checkout5, $datediff, $people5, $totalcost, $name, $email, $phone;
        if (empty($_POST["checkin5"]))
            echo "<script type = 'text/javascript'>alert('Select a Check-in date');</script>";
        if (empty($_POST["checkout5"]))
            echo "<script type = 'text/javascript'>alert('Select a Check-out date');</script>";
        if (empty($_POST["people5"]))
            echo "<script type = 'text/javascript'>alert('Enter Number of Guests');</script>";
        else {
            $tempin5 = $_POST["checkin5"];
            $tempout5 = $_POST["checkout5"];
            $checkin3 = strtotime($_POST["checkin5"]);
            $checkout3 = strtotime($_POST["checkout5"]);
            $date = $checkout3 - $checkin3;
            $datediff = number_format(round($date /(60 * 60 * 24)));
            if ($datediff == 0)
                $datediff = 1;
            $totalcost = $datediff*$_POST["people5"]*19400;
            echo "<h2>Four Seasons  International</h2>";
            echo "<h3>Booking Details:</h3>";
            echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['name']."<br>";
            echo "Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['email']."<br>";
            echo "Contact No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['phone']."<br>";
            echo "Luxury Room:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5-Star<br>";
            echo "Check-in Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $tempin5";
            echo "<br>";
            echo "Check-out Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$tempout5";
            echo "<br>";
            echo "No. of Days:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $datediff";
            echo "<br>";
            echo "No. of Guests:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ";
            echo $_POST["people5"];
            echo "<br>";
            echo "Total Cost: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR $totalcost<br>"; 
            echo "Kindly go back and click on 'Book Now' to confirm your booking!";
        }
        $_SESSION['in5'] = $tempin5;
        $_SESSION['out5'] = $tempout5;
        $_SESSION['dd5'] = $datediff;
        $_SESSION['cost5'] = $totalcost;
        $_SESSION['p5'] = $people5;
    }

    

    function book3 () {
        global $name, $email, $phone;
        $tempin3 = $_SESSION['in3'];
        $tempout3 = $_SESSION['out3'];
        $datediff = $_SESSION['dd3'];
        $people3 = $_SESSION['p3'];
        $totalcost =$_SESSION['cost3'];
       
           
        /*SQL to add 3 star booking to DB*/
        $conn = mysqli_connect('localhost:3308','root', '','hotelmanagement');
	    $sql = "INSERT INTO bookings (name, email, contactno, checkin, checkout, roomtype, days, people, cost) 
        VALUES ('$name', '$email', '$phone', '$tempin3', '$tempout3', '3Stars', '$datediff', '$people3', '$totalcost')";

        if (mysqli_query($conn, $sql)) {
        echo "<script type = 'text/javascript'>alert('Booking confirmed! Payment will be processed at the Hotel. Thank you for choosing Four Seasons!');
        window.location='CustomerPage.html';</script>";
		$name = $email = $tempin3 = $tempout3 = $checkin3 = $checkout3 = $datediff = $people3 = $phone = "";
	    } 
	    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        echo "<script type = 'text/javascript'>alert('Booking confirmed! Payment will be processed at the Hotel. Thank you for choosing Four Seasons!');
        window.location='CustomerPage.html';</script>";
        session_start();
        session_unset();
        session_destroy();  
         
    }

    function book5 () {
        /*SQL to add 5 star booking to DB*/
        global $name, $email, $phone;
        $tempin5 = $_SESSION['in5'];
        $tempout5 = $_SESSION['out5'];
        $datediff = $_SESSION['dd5'];
        $people5 = $_SESSION['p5'];
        $totalcost =$_SESSION['cost5'];
       
           
        /*SQL to add 5 star booking to DB*/
        $conn = mysqli_connect('localhost:3308','root', '','hotelmanagement');
	    $sql = "INSERT INTO bookings (name, email, contactno, checkin, checkout, roomtype, days, people, cost) 
        VALUES ('$name', '$email', '$phone', '$tempin5', '$tempout5', '5Stars', '$datediff', '$people5', '$totalcost')";

        if (mysqli_query($conn, $sql)) {
        echo "<script type = 'text/javascript'>alert('Booking confirmed! Payment will be processed at the Hotel. Thank you for choosing Four Seasons!');
        window.location='CustomerPage.html';</script>";
		$name = $email = $tempin5 = $tempout5 = $checkin5 = $checkout5 = $datediff = $people5 = $phone = "";
	    } 
	    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        echo "<script type = 'text/javascript'>alert('Booking confirmed! Payment will be processed at the Hotel. Thank you for choosing Four Seasons!');
        window.location='CustomerPage.html';</script>";
        session_start();
        session_unset();
        session_destroy();
    }
    
?>