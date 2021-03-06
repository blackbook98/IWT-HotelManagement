<?php

session_start();
if (isset($_SESSION['name']) && isset($_SESSION['email'])) {

?>

 <!DOCTYPE HTML>  
<html>
<head>
<link rel = "stylesheet" href = "CustomerPage.css">
</head>
<body> 
<div class = "bg-image"></div>
    <a href="logout.php" class = "logout">Logout</a>
	<h2 class = "heading">Rooms Gallore! <?php echo $_SESSION['name']; ?> </h2>
	<p class = "intro-text">
        A wholesome experience set right in a serene cocoon encompassed by greenery all around that makes
        one forget about the busy city life! With fast, easy, discreet Check-in & Check-out, a variety of facilities, 
        food-plans, and enhanced, pet-friendly, or even luxury rooms available at your disposal, you have indeed come to 
        the right place for your ideal vacation!
    </p>
    <p class = "intro-text-1"><br><br><br><br><br><br>Choose a room below to start off:</p>
    <div class="row">
        <div class="column1"  style = "background-color: #6699CC; opacity: 0.85;">
            <p style = "text-align: center; font-size: large; font-weight: bold; color: #ffb25c;">Regular:</p>
            <p style = "margin: 10px; font-weight: normal; font-size: 14px;">
                 A three-star room with all the amenities that would provide you with a more 
                 than satisfactory stay!<br> The facilities include:<br>
                 ~ Complimentary Breakfast<br>
                 ~ 24x7 Reception Access<br>
                 ~ Air Conditioning<br>
                 ~ Unlimited Cable<br>
                 ~ Energy-Saving Lighting<br>
                 ~ 24x7 Room Service<br><br><br><br><br>
            </p>
            <p style = "margin: 20px; font-weight: bold; font-size: 14px;">
                Cost per night per person:&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287
                &#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287
                &#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287INR 9800/-<br><br></p>
            <p style = "margin-left: 20px; font-size: 14px;">
                Check-in Date:&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287
                &#8287&#8287&#8287&#8287&#8287&#8287Check-out Date:&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287
                &#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287No. of People:</p> 
            <form method = "post" action = "CustomerPage.php">
                <input type="date" id = "checkin3"  name = "checkin3" style="margin-left: 20px; margin-right: 20px; border-radius: 10px; width: 125px;">      
                <input type="date" id = "checkout3" name = "checkout3" style = "margin-bottom: 20px; border-radius: 10px; width: 125px;"> 
                <input type = "number" id = "people3" name = "people3" style = "margin-right: 20px; margin-left: 20px; width: 90px; border-radius: 10px; height: 17px;">
                <button class = "button" name = "calculate3" style = "margin-left: 230px;  margin-bottom: 20px;" onClick = "calculate3()">Calculate</button>
                <button class = "button" name = "book3" style = "margin-left: 20px;  margin-bottom: 20px;" onClick = "book3()">Book Now</button>    
            </form>
        </div>
        <div class="column2"  style = "background-color: #6699CC; opacity: 0.85;;">
            <p style = "text-align: center; font-size: large; font-weight: bold; color: #ffb25c;">Luxury Pool-Side:</p>
            <p style = "margin: 10px; font-weight: normal; font-size: 14px;">
                 A five-star room with all the amenities that would provide you with a luxurious
                 stay with everything you could want and more!<br> The facilities include:<br> 
                 ~ Complimentary Breakfast, Lunch, and Dinner<br> 
                 ~ Private Pool (Temperature Regulated)<br> 
                 ~ 24x7 Reception Access<br>
                 ~ Air Conditioning<br> 
                 ~ Unlimited Cable<br>
                 ~ Energy-Saving Lighting<br>
                 ~ 24x7 Room Service<br>
                 ~ Minibar/Fridge<br>
                 ~ Complimentary one-time access to the Spa<br><br>
            </p>
            <p style = "margin: 20px; font-weight: bold; font-size: 14px;">
                Cost per night per person:&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287
                &#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287
                &#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287INR 19,400/-<br><br></p>
                <p style = "margin-left: 20px; font-size: 14px;">
                    Check-in Date:&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287
                    &#8287&#8287&#8287&#8287&#8287&#8287Check-out Date:&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287
                    &#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287&#8287No. of People:</p> 
                <form method = "post" action = "CustomerPage.php">
                    <input type = "date" id = "checkin5" name = "checkin5" style = "margin-left: 20px; margin-right: 20px; border-radius: 10px; width: 125px;">     
                    <input type = "date" id = "checkout5" name = "checkout5" style = "margin-bottom: 20px; border-radius: 10px; width: 125px;"> 
                    <input type = "number" id = "people5" name = "people5" style = "margin-right: 20px; margin-left: 20px; width: 90px; border-radius: 10px; height: 17px;">
                    <button class = "button" name = "calculate5" style = "margin-left: 230px; margin-bottom: 20px;" onClick = "calculate5()">Calculate</button>
                    <button class = "button" name = "book5" style = "margin-left: 20px;  margin-bottom: 20px;" onClick = "book5()">Book Now</button>    
                </form>
        </div>
      </div>
      <p style = "margin-top: 300px">&#8287</p>


</body>
</html>
<?php 
}else{
     header("Location: Loginpage.php");
     exit();
}
 ?>