<?php

include "Suretly.php";

$sdk = Suretly::ClientDemo("59ca100acea0997574cef785", "317");

//шаблон заполнения данных по заёмщику
$borrowerJson = "{
            \"name\": {
                \"first\": \"Vasya\",
                \"middle\": \"Petrovich\",
                \"last\": \"Ivanov\",
                \"maiden\": \"\"
            },
            \"gender\": \"1\",  
            \"birth\": {
                \"date\": 1234567890,
                \"place\": \"Voronej\"
            },
            \"email\": \"test@suretly.com\",
            \"phone\": \"+3 000 123 5678\",
            \"ip\": \"123.123.123.123\",
            \"profile_url\": \"https://www.facebook.com/profile/\",
            \"photo_url\":\"http://file.ru/face.jpg\",
            \"passport\": {
                \"series\": \"5201\",
                \"number\": \"2345678\",
                \"issue_date\": \"21.12.2003\",
                \"issue_place\": \"Omsk\",
                \"issue_code\":  \"11-22\"
            },
            \"registration\": {
                \"country\": \"Russia\",
                \"zip\": \"630080\",
                \"area\": \"Russia\",
                \"city\": \"Berdsk\",
                \"street\": \"Lenina\",
                \"house\": \"1\",
                \"building\": \"2\",
                \"flat\": \"123\"
            },
            \"residential\": {
                \"country\": \"Russia\",
                \"zip\": \"630080\",
                \"area\": \"Russia\",
                \"city\": \"Berdsk\",
                \"street\": \"Lenina\",
                \"house\": \"1\",
                \"building\": \"2\",
                \"flat\": \"123\"
            }
        }";


//шаблон заполнения данных заявки
$orderJson = "{
   \"uid\": \"444333\",  
   \"is_public\": true,
   \"borrower\": ".$borrowerJson.",
   \"user_credit_score\":  123,   
   \"loan_sum\":  45000.00, 
   \"loan_term\": 30,
   \"loan_rate\": 56.34,
   \"currency_code\": \"RUB\",
   \"callback\": \"http://server.ru/?id=******\"
}";


$newOrder =  $sdk->mapToObject($orderJson, new NewOrder());

echo "\nПолучаем лимиты на заявку..."; $options = $sdk->getOptions(); sleep(2);
echo "\nПринимаем заявку на «Микрозайм под поручительство» соответствующую лимитам..."; sleep(2);
echo "\nИдентифицируем Заемщика..."; sleep(2);
echo "\nОтправляем Suretly данные договора займа...";$orderID = $sdk->postNewOrder($newOrder)->id;sleep(1);
echo "\nПолучаем договор для Заемщика"; $sdk->getContract($orderID);sleep(1);
echo "\nОжидаем подтверждения от Заёмщика";sleep(2);

if (mt_rand(0,1)){
    echo "\nЗаемщик подписал договор";
    $sdk->postContractAccept($orderID);
    echo "\nИдет поиск поручителей...\n";

} else {
    echo "\nОтказ заемщика";
    $sdk->postOrderStop($orderID);
    exit();
}

 do{

    $orderStatus = $sdk->getOrderStatus($orderID);
    print_r ($orderStatus);
    sleep(3);

    switch ($orderStatus->status){

        case 2: echo "\nПоиск поручителей остановлен заемщиком";exit();break;
        case 3: echo "\nЗаявка остановлена, по истечению времени, сумма не набрана";exit();break;
        case 4: echo "\nЗаявка успешно завершена, сумма набрана";break;

    }

} while($orderStatus->status!=4);

if (mt_rand(0,1)){
    echo "\nЗаявка оплачена и выдана ";
    $sdk->postOrderIssued($orderID);

} else {
    echo "\nОтказ заемщика";
    $sdk->postOrderStop($orderID);
    exit();

}
echo "\nОжидание возврата займа...";sleep(5);

switch (mt_rand(0,2)){

    case 0: $sdk->postOrderUnpaid($orderID);echo "\nЗайм не выплачен"; break;
    case 1: $sdk->postOrderPaid($orderID); echo "\nЗайм оплачен полностью";break;
    case 2: $sdk->postOrderPartialPaid($orderID, mt_rand(100, 500)); echo "\nЗайм оплачен частично"; break;

}


?>