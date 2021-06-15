  
<!DOCTYPE html>
<html>

<head>
    <title>Name Input field</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="username" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; }?>"> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>