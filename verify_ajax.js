$(document).ready(function() {
    $("#myForm").submit(function(e) {
        e.preventDefault();//prevent submit the form normally
        if ($("#username").val().trim() !== "") { //check the username is empty or not
            handleFormSubmission(); // Call the AJAX function
        } else {
            // Handle the case where the input is empty
            displayErrorMessage("Username cannot be empty");
        }
    });

    function handleFormSubmission() {
        $.ajax({
            url: "info.php",
            type: "POST",
            dataType: "text",
            data: $("#myForm").serialize(), // Include form data in the request
            success: function(data) {
                displayErrorMessage(data);//call the php function with the data returned
            },
            error: function(error) {
                console.log("Error:", error);
            }
        });
    }

    function displayErrorMessage(message) {
        var errMsg = document.getElementById("msg");

        errMsg.textContent = message;

        if(message == "Error" || message == "Username cannot be empty"){
            errMsg.style.color = "red";
        }else{
            errMsg.style.color = "lightgreen";
        }
    }
});