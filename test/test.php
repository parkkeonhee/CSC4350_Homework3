<!doctype html>
<!-- Created by Keon Hee Park -->
<html lang="en-US">
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <meta charset="utf-8">
        <title>Part 2</title>
    </head>
    <body>
    <?php
        $numbers = array(3, 1, 4, 2);
        
        sortArray($numbers);
        printArray($numbers);
        
        function sortArray($numbers){
            for($i=0;$i<4;$i++){
                for($k=1;$k<=4;$k++){
                    if($numbers[$i] > $numbers[$k]){
                        $temp = $numbers[$k];
                        $numbers[$k] = $numbers[$i];
                        $numbers[$i] = $temp;
                    }
                }
            }
            return $numbers;
        }
        
        function printArray($numbers){
            for($i=0;$i<4;$i++){
                print $numbers[i];
            }
        }
    ?>
    </body>
</html>