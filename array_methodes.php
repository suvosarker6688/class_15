<?php
/* array methodes*/
// pop methode
// push methode
// unshift methode
// shift methode


// $mobile =["symphoney" ,"samsung","xiaomi","lenovo","oppo","blackpberry","Iphone"];

//  array_push($mobile,'orange');
//  array_unshift($mobile,'strawberry');
//  print_r($mobile);

// array_pop($mobile); 
// array_shift($mobile);
// print_r($mobile);

// array_push($mobile,['nokia','apple']);
// print_r(json_encode($mobile));
// print_r(var_dump($mobile));

use LDAP\Result;

// $mobile1 =["symphoney" ,"samsung","xiaomi","lenovo","oppo","blackpberry","Iphone"]; 
// $mobile2 =["symphoney" ,"samsung","xiaomi","lenovo","oppo","blackpberry","Iphone"]; 



// print(count($mobile1));
// print(count($mobile2));


// var_dump(json_encode($mobile1));
// array_push($mobile2,['hp','imac','thinkpad']);
// var_dump(json_encode($mobile2));

// $result = array_diff($mobile1,$mobile2);
// print_r($result)


$car1 = ['Toyota','BMW','Porshe','Fiat','Ford'];

function callBackFunction ($item){
    print($item);
}
array_map('callBackFunction',$car1);