<?php include "header.php" ?>
<!-- Netrinam! -->

<ul class="breadcrumb">
  <li><a href="http://localhost/grupe3/index.php">Home</a></li>
  <li><a href="http://localhost/grupe3/about.php">About</a></li>
  <li><a href="http://localhost/grupe3/single_entry.php">Your journey awaits</a></li>
  <li><a href="http://localhost/grupe3/news.php">news</a></li>
  <li><b>Feedback</b> </li>
</ul>
<div class="feedback col s12 m6 l3 center-align responsive-img">
    <img src="images/feedback1.jpg" alt="feedback nuotrauka">
    <h1 class="title"><i class="indigo-text darken-4 large material-icons">create</i>Give feedback </h1>
</div>
<div class="container"> 
<div>
    <?php
    $servername = "localhost";
    $username = "coktai_vcs200612-c";
    $password = "VGuPKtQzM42K54mD";
    $dbname = "coktai_vcs200612-c";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn -> set_charset("utf8");

    if (isset($_GET["name"])) {

        // $Data = $_GET["Data"];
        $name = $_GET["name"];
        $Age = $_GET["Age"];
        $feedback_text = $_GET["feedback_text"];

        $sql = "INSERT INTO feedback ( name, Age, feedback_text)
    VALUES ( '$name', '$Age', '$feedback_text')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";

            header("Location: feedback.php?status=success");
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
</div>


<p class="c-align"></p>

<form id="feedback_form">
  <!-- <label for="Data">Date</label>
  <input type="textData" id="Data" name="Data"> -->
  <label for="lname">Name</label>
  <input type="name" name="name">
  
  <label for="Age">Your age</label>
  <input type="int" name="Age">
  <br>
  <br>
  <label for="lname">Please enter Your feedback! </label>
  <input type="text"  name="feedback_text"> 
  <br>

  <button>Submit! <!DOCTYPE html></button>

</form>

</div>
<br>

<br>

<?php include "footer.php" ?>
<!-- Netrinam! -->