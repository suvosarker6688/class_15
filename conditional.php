<?php
/*Conditionals
if 
elseif
else
while
switch
*/

// $price = 44;

// if($price<25){
//     print('বিস্কুটের দাম ২৫ টাকা।');
// }elseif($price>40 && $price<50){
//         print("আইস্ক্রিমের দাম ৪১-৫০ টাকা ।");
//     }elseif($price>50 && $price<80){
//         print("চকলেটের দাম ৫০-৮০ টাকা ।");
//     }elseif ($price>80) {
//       print("বারগারের দাম ৮০-১০০ টাকা ।");
//     }else {
//         print("something went wrong");
//     }


$price = 5;

switch ($price) {
    case $price < 10:
        print("তুমি ১০ টাকা দিয়ে ক্যান্ডি কিনতে পারবে ।");
        break;
    case $price >= 10 && $price <= 20:
        print("তুমি ২০ টাকা দিয়ে বিস্কুট কিনতে পারবে ।");
        break;
    case $price >= 20 && $price <= 40:
        print("তুমি ৪০ টাকা দিয়ে আইস্ক্রিম কিনতে পারবে ।");
        break;
    case $price >= 50 && $price <= 70:
        print("তুমি ৭০ টাকা দিয়ে কেক কিনতে পারবে ।");
        break;
    default:
        print('কিছু কিনতে চাইলে পছন্দ করো ।');
};
