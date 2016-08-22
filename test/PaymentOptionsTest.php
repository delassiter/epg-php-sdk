<?php

/* 
 * Euro Payment Group PHP SDK (http://www.europaymentgroup.com)
 * 
 * @see       https://github.com/europaymentgroup/epg-php-sdk for the canonical source repository
 * @copyright Copyright (c) 2016 Euro Payment Group GmbH, Frankfurt am Main (http://www.europaymentgroup.com)
 * @license   https://github.com/europaymentgroup/epg-php-sdk/blob/master/LICENSE
 */

namespace EuroPaymentGroupTest;

use EuroPaymentGroup\PaymentOptions as Po;
use PHPUnit_Framework_TestCase as TestCase;

class PaymentOptionsTest extends TestCase
{
    public function testGetAll()
    {
        $expected = [
            Po::ASTROPAY,
            Po::BARZAHLEN,
            Po::BITCOIN,
            Po::CREDITCARD,
            Po::DIRECTDEBIT,
            Po::EPS,
            Po::GIROPAY,
            Po::HIPAY,
            Po::IDEAL,
            Po::PAYBOX,
            Po::PAYPAL,
            Po::PAYSAFECARD,
            Po::SKRILL,
            Po::SOFORT
        ];
        
        $this->assertEquals($expected, Po::getAll());
    }
    
    /**
     * @dataProvider validDataProvider
     * @param string $po
     * @param bool $expected
     */
    public function testIsValid($po, $expected)
    {
        $this->assertEquals($expected, Po::isValid($po));
    }
    
    public function validDataProvider()
    {
        return [
            ['cc4', true],
            ['dd', true],
            ['astropay', true],
            ['barzahlen', true],
            ['sofort', true],
            ['positiveenergy', false],
            ['wishfulthinking', false]
        ];
    }
}