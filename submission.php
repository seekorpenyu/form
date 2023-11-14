<?php

$dbhost = getenv("DB_HOST"); // Set in Azure Web App Configuration
$dbuser = getenv("DB_USER"); // Set in Azure Web App Configuration
$dbpass = getenv("DB_PASS"); // Set in Azure Web App Configuration
$dbname = getenv("DB_NAME"); // Set in Azure Web App Configuration

mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

if (!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3000, NULL, MYSQLI_CLIENT_SSL)) {
    die("failed to connect!");
}

// Initialize a variable to hold the message
$message = "";

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];

    // Insert data into MySQL table
    $sql = "INSERT INTO user (name, age) VALUES ('$name', '$age')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully, redirect back to index.html
        $message = "Your form has been submitted!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

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
            <form action="index.php" method="post">
                <p class="message">
                    <?php echo $message; ?>
                </p>
                <button type="resubmit">Resubmit</button>

            </form>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</body>

</html>

