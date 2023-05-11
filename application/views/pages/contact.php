<!---------------------
Name: Michael Brady
Intermediate Web Programming
Purpose: This web application uses the CodeIgniter framework to display and create news headlines and articles.
--------------------->  
<form id="email-form" name="email-form">
    <input class="formInput" type="text" id="nameText" name="name" placeholder="Name" maxlength="64"><br>
    <input class="formInput" type="text" id="emailText" name="email" placeholder="Return Email" maxlength="64"><br>
    <input class="formInput" type="text" id="re-enter" name="re-enter" placeholder="Re-Enter Return Email" maxlength="64"><br>
    <input class="formInput" type="text" id="subjectText" name="subject" placeholder="Subject" maxlength="64"><br>
    <textarea class="formInput" id="message" name="message" placeholder="Message" maxlength="1000"></textarea><br>
</form>
<div class="centered">
    <input type="submit" class="button" id="submit" name="submit"></input><br>
    <input type="button" class="button" id="clear" value="clear" name="clear"></input>
    <div id="successmsg"></div>
    <div id="errmsg"></div>
</div>