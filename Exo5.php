<?php
function lePlusPetit($a,$b,$c)
{
 $plusPeti=$a;
 if($b <$a && $b < $c)
  $plusPeti=$b;
  else if($c <$a && $c <$b)
  $plusPeti=$c;
  else
  $plusPeti=$a;
  return $plusPeti;

}
echo lePlusPetit(2,3,4);