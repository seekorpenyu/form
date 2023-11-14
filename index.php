<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    
    <title>Data Entry Form</title>
</head>
<body>
    <div class="container">
        <h1>Data Entry Form</h1><br>
        <div class="header">
            <form action="submission.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="age">Age :</label>
                <input type="text" id="age" name="age" required>
                <br>
                <br>
                <button type="submit">Submit</button>

                 <!-- Display the message if it is set -->
                <p class="message"><?php echo $message; ?></p>
            </form>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</body>
</html>
