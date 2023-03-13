<?php
/*Conditionals
if 
elseif
else
while
switch
*/

$price = 44;
 
if($price<25){
    print('বিস্কুটের দাম ২৫ টাকা।');
}elseif($price>40 && $price<50){
        print("আইস্ক্রিমের দাম ৪১-৫০ টাকা ।");
    }elseif($price>50 && $price<80){
        print("চকলেটের দাম ৫০-৮০ টাকা ।");
    }elseif ($price>80) {
      print("বারগারের দাম ৮০-১০০ টাকা ।");
    }else {
        print("something went wrong");
    }



 
?>