<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel DB connection</title>
</head>
<body>
     <div>
        <?php
            if(DB::connection()->getPdo()){
                echo "Succseffult connected"
            }
        ?>
     </div>
</body>
</html>