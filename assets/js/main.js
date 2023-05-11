/*
Name: Michael Brady
Intermediate Web Programming
Purpose: This web application uses the CodeIgniter framework to display and create news headlines and articles.
*/

"use strict";

function clearForm() {
    //Clear inputs
    for (var i = 0; i < $(".formInput").length; i++) {
        $(".formInput").eq(i).val('');
    }

    //Clear error messages
    $("#successmsg").html('');
    $("#errmsg").html('');
}

function validEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validate(){
    var errorMessage = "";

    //Test to see if each input is empty
    for (var i = 0; i < $(".formInput").length; i++) {
        //Trim input values
        var input = $(".formInput").eq(i).val();
        input = $.trim(input);
        
        //Check value
        if(input === ""){
            errorMessage += $(".formInput").eq(i).attr('placeholder') + " cannot be empty.<br>";
        }
    }

    //Test to see if emails are the same
    if($("#emailText").val().toUpperCase() != $("#re-enter").val().toUpperCase()){
        errorMessage += "Emails must match.<br>";
    }

    //Test for valid email address
    if(!validEmail($("#emailText").val())){
        errorMessage += "Email is not valid."
    }
    
    if(errorMessage === ""){
        sendData();
    }else{
        $("#errmsg").html(errorMessage);
    }
}

function sendData(){
    //AJAX implementation using raw JS
    let errmsg = document.getElementById("errmsg");
    let successmsg = document.getElementById("successmsg");

    const XHR = new XMLHttpRequest();

    let formData = new FormData(document.getElementById("email-form"));

    XHR.addEventListener('load', function (event) {
        if (XHR.responseText === "okay") {
            clearForm();
            successmsg.innerHTML = "Your message was sent";
        } else {
            errmsg.innerHTML = "Sorry, your email was not sent";
        }
    });

    XHR.addEventListener('error', function (event) {
        if (XHR.statusText !== "OK") {
            errmsg.innerHTML = "Sorry, your email was not sent";
        }
    });

    XHR.open('POST', 'email.php');
    XHR.send(formData);
    
    return;
}

$(document).ready(function () {

    //Clear form
    $("#clear").click(function () {
        clearForm();
    });

    //Validate and attempt to send form
    $("#submit").click(function(){
        validate();
    });

});