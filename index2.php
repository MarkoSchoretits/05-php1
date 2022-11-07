<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Name, Age and Job</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <?php
    $name = 'Marko Schoretits';
    $age = '48';
    $job_title = 'Cognition Design Trainer';
    ?>
    
</head>
<body>
        <?php
        echo "<h1>Hello, my Name is $name, and I am $age. I work as a $job_title.</h1>";
        ?>
</body>
</html>