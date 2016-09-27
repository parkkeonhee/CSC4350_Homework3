<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
    <?php
    
    print "<table style='width=300px'>";
    for($i = 0; $i<10; $i++){
        print "<tr>";
        for($j =0; $j<10; $j++){
            $value = ($i%2) + ($j%2);
            if($value == 1){
                print "<td class='red'>";
            } else{
                print "<td class='black'>";
            }
            print "</td>";
        }
        print "</tr>";
    }
    print "</table>";
    ?>
    </body>
</html>