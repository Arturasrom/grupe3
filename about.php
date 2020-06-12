<?php include "header.php" ?>

<div class="content">
    <img class="fonas" src="images/aboutus.jpg">
    <h1 class="title2"><i class="indigo-text darken-4 large material-icons">group</i>About us</h1>
    <div class="tabContainer">
        <div class="buttonContainer">
            <button onclick="showPanel(0,'transparent')"><img src="images/1.jpg"> Artūras</button>
            <button onclick="showPanel(1,'transparent')"><img src="images/5.jpg"> Aušra</button>
            <button onclick="showPanel(2,'transparent')"><img src="images/3.jpg"> Lukas</button>
            <button onclick="showPanel(3,'transparent')"><img src="images/4.jpg"> Andrius</button>
            <button onclick="showPanel(4,'transparent')"><img src="images/2.jpg"> Povilas</button>
        </div>
        <div class="tabPanel">
            <img src="images/1.jpg">
            <li>Age: 34 years. </li>
            <li>Occupation: Sales manager.</li>
            <li>Hobbies: Basketball, hiking.</li>
            <li>Why programming?: I'm interested in programming because I have a passion for tech, creativity, and finding solutions. </li>
        </div>
        <div class="tabPanel">
            <img src="images/5.jpg">
            <li>Age: 29 years. </li>
            <li>Occupation: Investment and insurance specialist. </li>
            <li>Hobbies: Fitness, reading books, travel and gaming. </li>
            <li>Why programming?: Because everybody told me to try it and I secretly wanted to try and learn it.  </li>
        </div>
        <div class="tabPanel">
            <img src="images/3.jpg">
            <li>Age: 27yo.</li>
            <li>Occupation: Mechanical engineering.</li>
            <li>Hobiai: Sports, motosport, traveling.</li>
            <li>Why programming? I figured that I should have actually chosen programming 9 years ago.</li>
        </div>
        <div class="tabPanel">
            <img src="images/4.jpg">
            <li>Age: </li>
            <li>Occupation: </li>
            <li>Hobbies: </li>
            <li>Why programming?: </li>

        </div>
        <div class="tabPanel">
            <img src="images/2.jpg">
            <li>Age: 40 years. </li>
            <li>Occupation: People management.</li>
            <li>Hobbies: Sauna, sports.</li>
            <li>Why programming?: Why not? :) </li>
        </div>
    </div>
</div>
<?php include "footer.php" ?>