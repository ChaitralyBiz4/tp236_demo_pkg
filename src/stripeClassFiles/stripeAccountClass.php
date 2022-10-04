<?php 
namespace ChaitralyBiz4\tp236_demo_pkg;
require_once('vendor/autoload.php');
//global $stripe;
class stripeAccountClass {

    function initializeStripeClient($stripe_api_key){
        $stripe = new \Stripe\StripeClient(["api_key" => $stripe_api_key]);
       return $stripe;
    }
    function setStripeApiKey($stripe_api_key){
        \Stripe\Stripe::setApiKey($stripe_api_key);

    }

    function createStandardStripeConnectAccount($stripe_api_key){
        $stripe = new \Stripe\StripeClient(["api_key" => $stripe_api_key]);
        //return $stripe;
        // $account = \Stripe\Account::create([
        $stripe->accounts->create([
                 'type' => 'standard',
         ]);
    }
   

}

?>