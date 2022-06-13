<?php

$string = strtolower($_POST['string']);

// ----------------------------------------------------------------
$a = 0;
$e = 0;
$i = 0;
$o = 0;
$u = 0;
$len = strlen($string);
$x=0;
while( $x<$len){
    if( $string[$x] == 'a')
    {
        $a++;
    }
    if($string[$x]=='e')
    {
       $e++;
    }
    if($string[$x]=='i')
    {
       $i++;
    }
    if($string[$x]=='o')
    {
       $o++;
    }
    if($string[$x]=='u')
    {
       $u++;
    }
    $x++;
}
echo"<br>";
echo "No. of times a is present in word : ".$a;
echo"<br>";
echo "No. of times e is used in letter : ".$e;
echo"<br>";
echo "No. of times i is used in letter : ".$i;
echo"<br>";
echo "No. of times o is used in letter : ".$o;
echo"<br>";
echo "No. of times u is used in letter : ".$u;
echo"<br>";
//----------------------------------------------------------------
$vowels = array('a','e','i','o','u');
$len = strlen($string);
$num = 0;
$q=0;
while( $q<$len){
    if(in_array($string[$q], $vowels))
    {
        $num++;
    }
    $q++;
}

echo"<br>";
echo "No. of times vowels were used in ".$string , " are: ".$num;
?>
