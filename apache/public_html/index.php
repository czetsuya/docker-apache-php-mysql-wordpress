<html>
<head>
    <meta name="author" content="czetsuya@gmail.com">
</head>
<body>
    <h1>czetsuyatech</h1>
    <h2>konnichiwa</h2>
    <h2>annyeongsayo</h2>
    
    <?php 
    $host = 'mysql';
    $user = 'kerri';
    $pass = 'kerri';
    $conn = new mysqli($host, $user, $pass);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    echo "Connected to MySQL successfully!";
    ?>
</body>
</html>