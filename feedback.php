<?php include "header.php" ?>
<!-- Netrinam! -->

<div class="col s12 m6 l3 right-align responsive-img">
    <img src="images/feedback.jpg" alt="feedback nuotrauka">>
</div>

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

        $name = $_GET["Data"];
        $name = $_GET["name"];
        if (isset($_GET["name"])) {
            $name = $_GET["name"];
        } else {
            $name = 0;
        }

        $sql = "INSERT INTO feedback (Data, name, Age, feedback_text)
    VALUES (Data, '$name', '$Age', 'feedback_text')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";

            header("Location: http:/grupe3/index.php?status=success");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        if (isset($GET["status"]) && $GET["status"]  === "success") {

            echo "<p>Pavyko sekmingai ikelti i duomenu baze<p>";
        }
    }
    $sql = "SELECT Data, name, Age, feedback_text FROM feedback";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . "Data: " . $row["name"]. " - Age: " . $row["feedback_text"]. "<li>";
        }
        echo "</ul>";

        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>


<form action="">
<input type="date" name="Data">
<input type="text" name="name">
<input type="number" name="Age">
<input type="text" name="feedback_text">
<button>Issaugoti</button>
</form>

  




<?php include "footer.php" ?>
<!-- Netrinam! -->