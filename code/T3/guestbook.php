<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        .comment {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h2>Guestbook Comments</h2>

    
    <?php
    
    $comments = file('guestbook.txt', FILE_IGNORE_NEW_LINES);

    // Display all the comments
    foreach ($comments as $comment) {
        echo '<div class="comment">' . htmlspecialchars($comment) . '</div>';
    }
    ?>
</body>
</html>
