# PHP-SDK

SDK for Suretly Lender API
## Installation
To add SDK you need to copy SDK folder to your project and connect file Suretly.php in the place where you're going to use SDK. It is also possible to install via Composer: composer require suretly/lender-api-sdk
## Connection
    require_once "Suretly.php";
    ...
    $sdk = Suretly::ClientDemo("lender_id", "lender_token"); //Initializing the SDK to work with the demo-server
    
    $sdk = Suretly::ClientProduction("lender_id", "lender_token"); //Initializing the SDK to work with the production-server

## Calling API methods with SDK

### #1 General methods

#### #1.1 Getting parameters for surety search

    $options = $sdk->getOptions();
#### #1.2 Orders list

    $orders = $sdk->getOrders($from, $to, $limit, $skip);
### #2 Creating and handling orders

#### #2.2 Create surety order
    $newOrder =  $sdk->mapToObject($orderJson, new NewOrder()); //create an order object
    $orderID = $sdk->postNewOrder($newOrder)->id;
    
#### #2.3 Get order status

    $orderStatus = $sdk->getOrderStatus($orderID);
    
#### #2.4 Cancel order
    
    $sdk->postOrderStop($orderID);
    
#### #2.9 Get borrower contract

    $sdk->getContract($orderID);
    
#### #2.10 Confirm that contract is signed by borrower

    $sdk->postContractAccept($orderID);
    
#### #2.11 Confirm that order is paid and issued

    $sdk->postOrderIssued($orderID);
    
### #3 Working with order payment

#### #3.5 Mark loan as paid

    $sdk->postOrderPaid($orderID);
    
#### #3.6 Mark loan as partially paid

    $sdk->postOrderPartialPaid($orderID, $sum); //$sum - amount of partial payment of an order
    
#### #3.7 Mark loan as overdue

    $sdk->postOrderUnpaid($orderID);
    
### Dictionaries

#### Currencies

    $currencies = $sdk->getCurrencies();
    
#### Countries

    $countries = $sdk->getCountries();

