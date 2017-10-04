# PHP-SDK

SDK for Suretly Lender API
## Установка
Для подключения SDK необходимо скопировать  папку с SDK в проект и подключить файл Suretly.php в месте использования SDK. Так же возможна установка через Composer: 
composer require suretly/lender-api-sdk
## Подключение
    require_once "Suretly.php";
    ...
    $sdk = Suretly::ClientDemo("lender_id", "lender_token"); //инициализация SDK для работы с demo-сервером 
    
    $sdk = Suretly::ClientProduction("lender_id", "lender_token"); //инициализация SDK для работы с production-сервером

## Вызов методов API через SDK

### #1 Общие методы

#### #1.1 Получение параметров для поиска поручителей

    $options = $sdk->getOptions();
#### #1.2 Список заявок

    $orders = $sdk->getOrders($from, $to, $limit, $skip);
### #2 Создание и работа с заявками

#### #2.2 Создать заявку на поручительство
    $newOrder =  $sdk->mapToObject($orderJson, new NewOrder()); //создаем объект заявки
    $orderID = $sdk->postNewOrder($newOrder)->id; //отправляем заявку Suretly, в ответ получаем id созданной заявки для дальнейшей работы с ней.
    
#### #2.3 Получить статус заявки

    $orderStatus = $sdk->getOrderStatus($orderID);
    
#### #2.4 Отменить заявку
    
    $sdk->postOrderStop($orderID);
    
#### #2.9 Получить контракт для заемщика

    $sdk->getContract($orderID);
    
#### #2.10 Подтвердить что договор по заявке подписан заемщиком

    $sdk->postContractAccept($orderID);
    
#### #2.11 Подтвердить что заявка оплачена и выдана

    $sdk->postOrderIssued($orderID);
    
### #3 Работа с оплатой заявки

#### #3.5 Отметить займ как выплаченный

    $sdk->postOrderPaid($orderID);
    
#### #3.6 Отметить займ как выплаченный частично

    $sdk->postOrderPartialPaid($orderID, $sum); //$sum - сумма частичной оплаты заявки
    
#### #3.7 Отметить займ как просроченный

    $sdk->postOrderUnpaid($orderID);
    
### Справочники

#### Валюты

    $currencies = $sdk->getCurrencies();
    
#### Страны

    $countries = $sdk->getCountries();

