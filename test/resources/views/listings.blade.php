<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($listings) > 0) {?> 
        <p>listings found </p>
    
    <h1> {{$heading}} </h1>
        <?php
            foreach($listings as $list) {
                ?>
                <div>
                <?php echo $list['id'];?>
                </div>
                <br>
                <div>
                <?php echo $list['title'];?>
                </div>
                <br>
                <div>
                <?php echo $list['descripiton'];?>
                </div>
                <br>
                <?php
                }
            }
        ?>
</body>
</html>