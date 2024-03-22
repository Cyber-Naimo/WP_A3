<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $name = $_POST['name'];
    $comment = $_POST['comment'];


    $file = fopen('guestbook.txt', 'a');

    // Write the user's name and comment to the file
    fwrite($file, $name . ': ' . $comment . PHP_EOL);

    
    fclose($file);

    // Redirect back to the guestbook page after submission
    header("Location: guestbook.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Guestbook</h2>

        <!-- HTML form for users to input their name and comment -->
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>

            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" required></textarea><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
