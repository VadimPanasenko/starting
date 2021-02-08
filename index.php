<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-1</title>
</head>
<body>

    <h1> hello Sokrates </h1>

    <?php

       var_dump ('20cats' + 40);
       var_dump(3 / 1);
       var_dump(1 / 3);
       var_dump(21 % 2 );
       var_dump(20 % 2 );

       echo ($a=2);
       $x = ($y = 12)-8;
       echo $x;

       var_dump(1==1.0);
       var_dump(1===1.0);
       var_dump('02'==2);
       var_dump('02'===2);
       var_dump('02'=='2');


       $x = true xor true;
       var_dump($x);

        ?>


</body>
</html>