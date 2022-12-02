    <h1>echo/print</h1>
<?php
echo "Hello World";
print"hello world";
?>

<h1>variables</h1>
<?php
$text = "hello world";
$x = 4;
echo "$text";
echo"<br>";
print"$x";
?>

<h1>Data types</h1>
<h2>string</h2>
<?php
$x ="kuzu";
$y ="zangpo";
echo"$x$y";
?>

<h2>integer</h2>
<?php
$x = 200;
$y =300;
var_dump($x+$y);
?>

<h2>float</h2>
<?php
$X =12.212121;
var_dump($X);
?>

<h2>boolean</h2>
<?php
$x=1;
$y=10;
if($x > $y){
    echo"true";
}
else{
    echo"false";
}
?>
<h2>array</h2>
<?php
$fruits = array("Apple","Banana","Coconut");
var_dump($fruits[0]);
?>

<h1>string strlen</h1>
<?php
echo strlen("hello  world");
?>
<h1>string str_word_count</h1>
<?php
echo str_word_count("hello world");
?>

<h1>string strrev</h1>
<?php
echo strrev("hello world");
?>

<h1>string strpos</h1>
<?php
echo strpos("hellodog","dog");
?>
<h1>string str_replace</h1>
<?php
echo str_replace("zangpo","sir","kuzu zangpo")
?>

<h1>Math</h1>
<?php
echo(pi());
?>

<h1>Math min/max</h1>
<?php
echo(min(1,2,3,4)."<br>");
echo(max(5,6,7,8));
?>

<h1>Math abs</h1>
<?php
echo(abs(-1.2));
?>

<h1>Math sqrt</h1>
<?php
echo(sqrt(81));
?>

<h1>Math round</h1>
<?php
echo(round(9.5));
?>

<h1>Math rand</h1>
<?php
echo(rand());
?>
<h1>math rand</h1>
<?php
echo(rand(1,100));
?>
<h1>constant</h1>
<?php
define("welcome","nice to meet you.");
echo welcome;
?>

<h1>constant</h1>
<?php
define("chillies", [
  "red chilli",
  "green chilli",
  "white chhilli"
]);
echo chillies[0];
?> 

<h1>if else</h1>
<?php
$t = date("am");

if ($t < "20") {
  echo "good night!";
} else {
  echo "good day!";
}
?>
<h1>switch</h1>
<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
<h1>loop</h1>
<h1>while loop</h1>
<?php
$x=1;
while($x <= 5){
  echo"The number is: $x <br> ";$x++;
}
?>
<h1>while loop</h1>
<?php
$a=0;
while($a <= 100){
  echo"Number is:$a<br>";$a+=10;
}
?>

<h1>Do while loop</h1>
<?php
$s=0;
do
{echo"Number is:$s<br>";$s++;
}while($s <= 6);
?>
<h1>for loop</h1>
<?php
for($b=0; $b <= 10; $b++){
  echo"Number is:$b <br>";
}
?>
<h1>foreach</h1>
<?php
$number = array("1","2","3","4");
foreach($number as $value){
  echo"$value<br>";
}
?>
<h1>break</h1>
<?php
for($v=0; $v <= 8; $v++){
if ($v==6){break;}echo"Number is:$v <br>";}
?>
<h1>function</h1>
<?php
function myname($name){
  echo"$name<br>";
}
myname("karma");
myname("Dorji");
?>
<h1>Arrays</h1>
<?php
$people=array("karma","Dorji","Dorjee");{
  echo"I am ".$people[0]." ".$people[1] ."and". $people[2].".";
}
?>
<h1>index array</h1>
<?php
$cars = array("toy car", "wood car", "steel car");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<h1>association array</h1>
<?php
$age = array("tashi"=>"19", "karma"=>"22", "dorji"=>"23");
echo "Tashi is " . $age['tashi'] . " years old.";
?>
<h1>Multidimentional array</h1>
<?php
$people = array (
  array("karma",20,18),
  array("Dorji",15,34),
  array("Pema",5,2),
  array("Dorjee",17,15));
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$people[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
<h1>sorting</h1>
<?php
$animal = array("dog", "cat", "cow");
sort($animal);

$clength = count($animal);
for($x = 0; $x < $clength; $x++) {
  echo $animal[$x];
  echo "<br>";}
?>