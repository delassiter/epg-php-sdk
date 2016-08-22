<?php

/* 
 * Euro Payment Group PHP SDK (http://www.europaymentgroup.com)
 * 
 * @see       https://github.com/europaymentgroup/epg-php-sdk for the canonical source repository
 * @copyright Copyright (c) 2016 Euro Payment Group GmbH, Frankfurt am Main (http://www.europaymentgroup.com)
 * @license   https://github.com/europaymentgroup/epg-php-sdk/blob/master/LICENSE
 */

namespace EuroPaymentGroup;

class PaymentOptions
{
    const ASTROPAY = 'astropay';
    const BARZAHLEN = 'barzahlen';
    const BITCOIN = 'bitcoin';
    const CREDITCARD = 'cc4';
    const DIRECTDEBIT = 'dd';
    const EPS = 'eps';
    const GIROPAY = 'giropay';
    const HIPAY = 'hipay';
    const IDEAL = 'iDeal';
    const PAYBOX = 'paybox';
    const PAYPAL = 'paypal';
    const PAYSAFECARD = 'paysafecard';
    const SKRILL = 'skrill';
    const SOFORT = 'sofort';
    
    public static function getAll()
    {
        return [
            self::ASTROPAY,
            self::BARZAHLEN,
            self::BITCOIN,
            self::CREDITCARD,
            self::DIRECTDEBIT,
            self::EPS,
            self::GIROPAY,
            self::HIPAY,
            self::IDEAL,
            self::PAYBOX,
            self::PAYPAL,
            self::PAYSAFECARD,
            self::SKRILL,
            self::SOFORT
        ];
    }
    
    public static function isValid($paymentOption)
    {
        return in_array($paymentOption, self::getAll(), true);
    }
}