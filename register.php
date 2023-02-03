<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="fname"><br><br>
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lname"><br><br>
        <label for="emailid">Email Id</label>
        <input type="text" id="emailid" name="email"><br><br>
        <label for="password">Password</label>
        <input type="text" id="password" name="pass"><br><br>
        <label for="gender">Gender</label>
        <input type="radio" name="Male" value="male">Male
        <input type="radio" name="Female" value="female">Female
        <input type="radio" name="Other" value="other">Other<br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>