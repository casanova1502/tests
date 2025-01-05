<?php
// for ($i = 0; $i < 4; $i++) {
//   echo $i;
// }
// for ($i = 1; $i <= 5; $i++) {
//     echo $i * 2 . "<br />";
//   }

// $i = 0;
  
// while ($i < 3) {
//   echo 'i = ' . $i . '<br />';
//   $i += 1;
// }
// .の意味とは？ 

// $count = 0 ;

// while ($count < 20) {
//   $count += 1;
//   echo $count . '<br />';
// }

// $count = 0

// ↓Parse error: syntax error, unexpected 'while' (T_WHILE) in /var/www/php01/index06.php on line 26
// while ($count <= 100) {
//   if ($count === 20) {
//     break;
//   }
//   if ($count % 3 === 0) {
//     $count++;
//     continue;
//   }
//   echo $count . '<br />';
//   $count++;
// }

// $num = 0;
// do {
//   echo 'num = ' . $num . '<br />';
//   $num += 1;
// } while ($num < 3) ;

// for ($a = 1;$a <= 100;$a++){
//   if($a % 3 === 0){
//   echo "Fizz";
// }elseif($a % 5 === 0){
//   echo "Buzz";
// }elseif($a % 15 === 0){
//   echo "FizzBuzz";
// }else{
//   echo $a;
// }
// }

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}