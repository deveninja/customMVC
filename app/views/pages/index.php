<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Name | Home</title>
</head>
<body>
    <h1><?php echo $data['title']; ?> to Home Page</h1>
    <p><?php 
    echo $data['description']; 
    echo APPROOT;
    
    ?></p>

</body>
</html>