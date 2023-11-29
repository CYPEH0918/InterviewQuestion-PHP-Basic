<?php

function handleFormSubmission() {
    $msg = "";//initialize

    //check if the from action is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];//get username from the form

        //check the string equals "abc"
        if ($username == "abc") {
            $msg = "Verified";
        } else {
            $msg = "Error";
        }
    }

    echo $msg; 
}

//check of request is made using AJAX
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    handleFormSubmission();// call the handleFormSubmission php function
}