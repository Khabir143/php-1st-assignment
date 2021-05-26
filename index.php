<?php


$bangla=70;
$math=85;
$english=90;
$social=50;
$science=60;
$islam=90;



$result=$bangla+$math+$english+$social+$science+$islam;
echo $result;
$avg=$result/6;

if($bangla<33 || $math<33 || $english<33 || $social<33 || $science<33 || $islam<33){
	echo"fail";
}
else{


if($avg>=80){
	echo"A+";

   }
   else if($avg>=70 && $avg<80){
     echo"A";
   }
 
   else if($avg>=60  && $avg<70){
  echo"A-";
  }

   else if($avg>=50  && $avg<40){
  echo"B";
   }


    else if($avg>=40  && $avg<50){
  echo"C";

}
 else if($avg>=33  && $avg<40){
   echo"D";
 }


else{
	echo"fail";
}

}

?>



<?php

$year=2012;

if($year%4 == 0 and $year%100 !=0 or $year%400 == 0){
   

   echo "This is leap Year";
}
else{
	 echo "This not leap Year";
}






?>





<?php

$car=-1;

if($car>="a" and $car<="z"){
 echo "This is small alphabet";
}
else if($car>="A" and $car<="Z"){
 echo "This is capital alphabet";
}
else if($car>=0){
 echo "This digit is positive";
 }
 else if($car<0){
 echo "This digit is negative";

 }
  else{
  	echo "This is special car";
  }






?>



<?php

$basicSallery = 20001;

if ($basicSallery <= 10000) {
    $grossSallery = $basicSallery + $basicSallery * 0.2 + $basicSallery * 0.8;
    echo 'Basic Sallery is '. $basicSallery .' and Gross Sallery is '. $grossSallery;
} else if ($basicSallery >= 10001 && $basicSallery <= 20000) {
    $grossSallery = $basicSallery + $basicSallery * 0.25 + $basicSallery * 0.9;
    echo 'Basic Sallery is '. $basicSallery .' and Gross Sallery is '. $grossSallery;
} else if($basicSallery >= 20001) {
    $grossSallery = $basicSallery + $basicSallery * 0.3 + $basicSallery * 0.95;
    echo 'Basic Sallery is '. $basicSallery .' and Gross Sallery is '. $grossSallery;
}

?>






