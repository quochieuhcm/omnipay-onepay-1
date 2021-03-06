<?php
/**
 * @link https://github.com/phpviet/omnipay-onepay
 *
 * @copyright (c) PHP Viet
 * @license [MIT](https://opensource.org/licenses/MIT)
 */

namespace Omnipay\OnePay\Message\Installment;

use Omnipay\OnePay\Message\AbstractPurchaseRequest;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class PurchaseRequest extends AbstractPurchaseRequest
{
    protected $testEndpoint = 'https://dev.onepay.vn/paygate/vpcpay.op';

    protected $productionEndpoint = 'https://mtf.onepay.vn/vpcpay/vpcpay.op';
}
