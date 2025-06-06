<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

require_once 'vendor/autoload.php';
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Exceptions\MPApiException;

protected function authenticate()
{
    // Getting the access token from .env file (create your own function)
    $mpAccessToken = Flux::config('MercadoPagoAccessToken');
    // Set the token the SDK's config
    MercadoPagoConfig::setAccessToken($mpAccessToken);
    // (Optional) Set the runtime enviroment to LOCAL if you want to test on localhost
    // Default value is set to SERVER
    MercadoPagoConfig::setRuntimeEnviroment(MercadoPagoConfig::LOCAL);
}

// Function that will return a request object to be sent to Mercado Pago API
function createPreferenceRequest($items, $payer): array
{
    $paymentMethods = [
        "excluded_payment_methods" => [],
        "installments" => 12,
        "default_installments" => 1
    ];

    $backUrls = array(
        'success' => route('mercadopago.success'),
        'failure' => route('mercadopago.failed')
    );

    $request = [
        "items" => $items,
        "payer" => $payer,
        "payment_methods" => $paymentMethods,
        "back_urls" => $backUrls,
        "statement_descriptor" => "NAME_DISPLAYED_IN_USER_BILLING",
        "external_reference" => "1234567890",
        "expires" => false,
        "auto_return" => 'approved',
    ];

    return $request;
}

public function createPaymentPreference(): ?Preference
{
    // Fill the data about the product(s) being purchased
    $product1 = array(
        "id" => "1234567890",
        "title" => "Product 1 Title",
        "description" => "Product 1 Description",
        "currency_id" => "BRL",
        "quantity" => 12,
        "unit_price" => 9.90
    );

    $product2 = array(
        "id" => "9012345678",
        "title" => "Product 2 Title",
        "description" => "Product 2 Description",
        "currency_id" => "BRL",
        "quantity" => 5,
        "unit_price" => 19.90
    );

    // Mount the array of products that will integrate the purchase amount
    $items = array($product1, $product2);

    // Retrieve information about the user (use your own function)
    $user = getSessionUser();

    $payer = array(
        "name" => $user->name,
        "surname" => $user->surname,
        "email" => $user->email,
    );

    // Create the request object to be sent to the API when the preference is created
    $request = createPreferenceRequest($item, $payer);

    // Instantiate a new Preference Client
    $client = new PreferenceClient();

    try {
        // Send the request that will create the new preference for user's checkout flow
        $preference = $client->create($request);

        // Useful props you could use from this object is 'init_point' (URL to Checkout Pro) or the 'id'
        return $preference;
    } catch (MPApiException $error) {
        // Here you might return whatever your app needs.
        // We are returning null here as an example.
        return null;
    }
}

?>