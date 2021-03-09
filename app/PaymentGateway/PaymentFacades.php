<?php  
    namespace App\PaymentGateway;

    class PaymentFacades {
        Protected static function getFacadeAccessor(){
            return "Payment";
        }
    }