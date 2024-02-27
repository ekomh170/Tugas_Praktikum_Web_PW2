<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Sederhana</title>
    </head>

    <body>
        <form  method="POST" action="submit-post.php">
            <div>
                <label for="username">Username : </label>
                <input type="text" name="username" required>
            </div><br>

            <div>
                <label for="password">password :</label>
                <input type="password" name="password" required>
            </div><br>

            <div>
                <button type="submit" name="submit">submit</button>
            </div>
        </form>
    </body>

</html>