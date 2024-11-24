<?php
// maintenance.php
http_response_code(503);

$message = "We'll be back soon!";

// Optional: Customize the HTML content for the maintenance page
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Maintenance Mode</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f3f3f3;
            color: #333;
        }
        h1 {
            font-size: 50px;
        }
        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Under Maintenance</h1>
    <p>$message</p>
</body>
</html>
";
exit;
