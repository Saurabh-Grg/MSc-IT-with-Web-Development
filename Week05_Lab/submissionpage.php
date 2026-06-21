<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <?php
        $name = $_POST['tbxName'];
        $email = $_POST['tbxEmail'];
        $age = $_POST['tbxAge'];

        if (empty($name)){
            echo "You must submit your name<br>";
        }else if (empty($email)){
            echo "You must submit your email<br>";
        }else if (empty($age)){
            echo "You must submit your age<br>";
        }else if (! is_numeric($age)){
            echo "Age must be a number<br>";
        }else if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email not in correct format<br>";
        }
        else{
        echo $name . "<br>";
        echo $email . "<br>";
        echo $age . "<br>";
        }
        
    ?>
</body>
</html>