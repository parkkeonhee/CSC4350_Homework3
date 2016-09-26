<html><body>
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