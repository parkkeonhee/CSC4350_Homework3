<!doctype html>
<!-- Created by Keon Hee Park -->
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Part 3</title>
    </head>
    <body>
        <h1><u>PHP Functions and Arrays</u></h1>
        <h2>Part 3:</h2>
        <p>Program name Arrays and Functions</p>
        <p>Consider the following array.</p>
        <p>$month = array('January', 'February', 'March', 'April' <br>
                            'May', 'June', 'July', 'August',<br>
                            'September', 'October', 'November', 'December');</p>
        
        <p>Please code in this order</p>
        <ol>
            <li>Write a standard for loop not FOREACH that prints these months in order.</li>
            <li>Use a Function to Sort the months in alphabetical order and print months that are now sorted.</li>
            <li>Repeat Step 1 and 2 use the <b>foreach</b> Statement</li>
        </ol>
        
    <?php
        $month = array('January', 'February', 'March', 'April',
                        'May', 'June', 'July', 'August',
                        'September', 'October', 'November', 'December');
        
        $month_array_length = count($month);
        
        for($i=0;$i<$month_array_length;$i++){
            print $month[$i] . " ";
        }
        
        print("<br><br>");
        
        sort($month);
        
        for($i=0;$i<$month_array_length;$i++){
            print $month[$i] . " ";
        }
        print("<br><br>");
        print("Doing foreach now...");
        print("<br>");
        
        $month2 = array('January', 'February', 'March', 'April',
                        'May', 'June', 'July', 'August',
                        'September', 'October', 'November', 'December');
        
        foreach($month2 as $value){
            print $value . " ";
        }
        
        print("<br><br>");
        
        sort($month2);
        
        foreach($month2 as $value){
            print $value . " ";
        }
?>
</body>
</html>