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

    function createStripeConnectAccount($stripe_api_key,$account_type){
        //$stripe = new \Stripe\StripeClient(["api_key" => $stripe_api_key]);
        if($account_type != 'standard'){
            $error_message = "Use 'standard' as account type";
            return $error_message;
        }
        $stripe = self::initializeStripeClient($stripe_api_key);
        $stripe_account = $stripe->accounts->create([
                 'type' => $account_type,
         ]);
         return $stripe_account;
    }

    function createStripeConnectAccountLink($stripe_api_key,$account_id){
        $stripe = self::initializeStripeClient($stripe_api_key);
        $account_link = \Stripe\AccountLink::create([
            'account' => $account_id,
            'refresh_url' => "", 
            'return_url' => "",
            'type' => 'account_onboarding',
        ]);
        return $account_link;
    }
   

}

?>