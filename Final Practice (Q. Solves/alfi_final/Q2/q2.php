<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
    <form action="" method="POST">
        Attendees : <input type="number" name = "input1"><br><br>

        Seat Capacity : <input type="number" name = "input2"><br><br>

        Ticket Price : <input type="number" name = "input3"><br><br>

        <button name = "submit">Submit</button><br> <br>

    </form>

    <?php
        if(isset($_POST['submit'])){
            $attendees = (int) $_POST['input1'];
            $seat_capacity = (int) $_POST['input2'];
            $ticket_price = (int) $_POST['input3'];

             $Total_Screens = ceil($attendees / $seat_capacity);

             $Empty_Seats = ($Total_Screens * $seat_capacity) - $attendees;

             $Wasted_Money = $Empty_Seats * $ticket_price;

             echo "Total Screens: " . $Total_Screens . "<br>";
             echo "Empty Seats: " . $Empty_Seats . "<br>";
             echo "Wasted Money: " . $Wasted_Money . "<br>";

        }
    ?>
</body>
</html>