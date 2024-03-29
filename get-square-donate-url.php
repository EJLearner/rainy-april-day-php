<?php
// Include the Square Connect API resources
require_once('square-sdk/autoload.php');
$dollarAmount=$_GET["amount"];


$centsAmount = (float)$dollarAmount * 100;

//Replace your access token and location ID
$accessToken = getEnv("SQUARE_TOKEN");
$locationId = getEnv("SQUARE_LOC_ID");
$host = getEnv("SQUARE_HOST");

// Create and configure a new API client object
$defaultApiConfig = new \SquareConnect\Configuration();
$defaultApiConfig->setAccessToken($accessToken);
$defaultApiConfig->setHost($host);
$defaultApiClient = new \SquareConnect\ApiClient($defaultApiConfig);
$checkoutClient = new SquareConnect\Api\CheckoutApi($defaultApiClient);

//Create a Money object to represent the price of the line item.
$price = new \SquareConnect\Model\Money;
$price->setAmount($centsAmount);
$price->setCurrency('USD');

//Create the line item and set details
$book = new \SquareConnect\Model\CreateOrderRequestLineItem;
$book->setName('Rainy April Day Donation');
$book->setQuantity('1');
$book->setBasePriceMoney($price);

//Puts our line item object in an array called lineItems.
$lineItems = array();
array_push($lineItems, $book);

// Create an Order object using line items from above
$order = new \SquareConnect\Model\CreateOrderRequest();

$order->setIdempotencyKey(uniqid()); //uniqid() generates a random string.

//sets the lineItems array in the order object
$order->setLineItems($lineItems);

///Create Checkout request object.
$checkout = new \SquareConnect\Model\CreateCheckoutRequest();

$checkout->setIdempotencyKey(uniqid()); //uniqid() generates a random string.
$checkout->setOrder($order); //this is the order we created in the previous step.
$checkout->setRedirectUrl('https://rainyaprilday.com/thank-you'); //Replace with the URL where you want to redirect your customers after transaction.

try {
    $result = $checkoutClient->createCheckout(
      $locationId,
      $checkout
    );
    //Save the checkout ID for verifying transactions
    $checkoutId = $result->getCheckout()->getId();
    //Get the checkout URL that opens the checkout page.
    $checkoutUrl = $result->getCheckout()->getCheckoutPageUrl();
    print_r($checkoutUrl);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createCheckout: ', $e->getMessage(), PHP_EOL;
}



