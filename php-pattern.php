<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

    function pattern($n)
    {

        for ($row = 1; $row <= $n; $row++) 
           
        {
            for ($column = 1; $column <= $row; $column++) 
            {
            echo "*";
            }
            echo '<br>';
        }
    }

    $n = 5;
    pattern($n);
?>
  

</body>
</html>