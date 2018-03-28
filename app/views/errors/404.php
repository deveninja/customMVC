<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Name | Page Not Found</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        .error-msg {
            background-color: black;
            color: white;
            line-height: 40px;
            padding: 0 20px;
        }

        .error-span {
            color: yellow;
            font-weight: bolder;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Page Not found!</h1>
    <?php 
    
    echo URLROOT;
    print_r($_GET['url']);
    ?>
    
</body>
</html>
