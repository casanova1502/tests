<?php
// function outputNumber($a)
// {
//   echo "引数の値は" . $a . "です";
//   return;
// }

// outputNumber(2);

// function outputHello()
// {
//   echo "Hello world";
// }

// outputHello(); // ①

// function text($number1, $number2)
// {
//   $value = $number1 + $number2;
//   return $value;
// }

// $total = text(2, 4);
// echo $total;

// function text($number1, $number2)
// {
//   $value = $number1 + $number2;
//   return $value;
// }

// $total = text(2, 3);
// echo $total;

function test($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if($total > 210)
  {
    echo "合計点は".$total."点なので合格です";
  }else{
    echo "合計点は".$total."点なので不合格です";
  }
}
echo (test(70, 80,90));