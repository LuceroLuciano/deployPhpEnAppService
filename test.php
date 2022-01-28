<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tests</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Deploy de Php en Azure App Service</h1>
        <!-- Make a form for user data-->
        <form action="../../index.html" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="surname" placeholder="Surname">
                    <input type="text" name="phone" placeholder="Phone number">
            <input type="submit" value="Send">
        </form>
        <!-- Show the result of the form -->
        <p>Hello, <?php echo $_POST['name']; ?>!</p>
    </body>
</html>