<html><body>
<?php
function isBitten(){
    $randomNumber = mt_rand (0, 10) * 10;
    print $randomNumber ."%". "<br>";
    if($randomNumber <= 50){
        return true;
    }else{
        return false;
    }
}

if(isBitten() === true){
    print "Charlie ate my lunch!";
}else{
    print "Charlie did not eat my lunch!";
}
?>
</body>
</html>