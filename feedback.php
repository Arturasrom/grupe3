<?php include "header.php" ?>
<!-- Netrinam! -->

<div class="col s12 m6 l3 center-align responsive-img">
    <img src="images/feedback.jpg" alt="feedback nuotrauka">
</div>

<div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webgrupe3db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET["name"])) {

        $Data = $_GET["Data"];
        $name = $_GET["name"];
        $Age = $_GET["Age"];
        $feedback_text = $_GET["feedback_text"];

        $sql = "INSERT INTO feedback (Data, name, Age, feedback_text)
    VALUES ('$Data', '$name', '$Age', '$feedback_text')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";

            header("Location: http:/grupe3/feedback.php?status=success");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        if (isset($GET["status"]) && $GET["status"]  === "success") {

            echo "<p>Pavyko sekmingai ikelti i duomenu baze<p>";
        }
    }

    $sql = "SELECT Data , name, Age, feedback_text FROM feedback";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul class=\"db_results\">";
        // output data of each row
        echo "<table>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo 
            // "<td>" .  "Data: " . $row["Data"]. "</td>".
            "<td> Name: ". $row["name"] . "</td>
            <td> Age: " . $row["Age"] . "
            </td><td>" .  "Feedback: " . $row["feedback_text"]. "</td>";
            echo "</tr>";
        }
            echo "</table>";
        echo "</ul>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px ;
  box-sizing: border-box;
  
}
</style>

<body>

<p class="c-align"></p>

<form id="feedback_form">
  <!-- <label for="Data">Date</label>
  <input type="textData" id="Data" name="Data"> -->
  <label for="lname">Name</label>
  <input type="Name" id="name" name="Name">
  <label for="Age">Your age</label>
  <input type="int" id="Age" name="Age">
  <br><label for="lname">Please enter Your feedback! </label>
  <input type="text" id="feedback_text" name="feedback_text"> <br>

  <button>Submit <!DOCTYPE html></button>
</form>


<?php include "footer.php" ?>
<!-- Netrinam! -->