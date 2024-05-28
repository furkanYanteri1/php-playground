<?php
// Best practice is to not to close the php tags for pure php scripts (meaning non in-html ones)


// !!Checking if the script is accessed directly or is index.php (the form) is reaching out to this script
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // htmlspecialchars avoids injection :) makes sure we're not running any script, making sure it is a string
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    echo "the data user input: <br>";
    echo $firstname;
    echo "<br>";

    echo $lastname;
    echo "<br>";

    echo $favouritepet;
    echo "<br>";

    // Decomment the following line to see the user is redirected back to the form
    // header("Location: ../index.php");
    # code...
}
