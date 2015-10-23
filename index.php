<?php

$beatles = ['Ringo','John','Paul','George'];


?>

<form action="process.php" method="post">
	<label for="title">Title:</label><br>
    <select class="" name="title">
        <option value="">Select a Title</option>
        <option value="mr">Mr.</option>
        <option value="mrs">Mrs.</option>
        <option value="ms">Ms.</option>
        <option value="?">Undetermined</option>
    </select><br>
    <label for="firstname">First Name:</label><br>
    <input type="text" name="firstname" id="firstname">
    <br>
    <label for="lastname">Last Name:</label><br>
    <input type="text" name="lastname" id="lastname"><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password"><br>
    <label for="beatle">Beatle:</label>
    <select class="" name="beatle">
        <option value="">Select a Beatle</option>
        <option value="0"><?php echo $beatles[0] ?></option>
        <option value="1"><?php echo $beatles[1] ?></option>
        <option value="2"> <?php echo $beatles[2] ?></option>
        <option value="3"><?php echo $beatles[3] ?></option>
    </select><br>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
</form>