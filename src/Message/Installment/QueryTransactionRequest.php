<?php
/**
 * @link https://github.com/phpviet/omnipay-onepay
 *
 * @copyright (c) PHP Viet
 * @license [MIT](https://opensource.org/licenses/MIT)
 */

namespace Omnipay\OnePay\Message\Installment;

use Omnipay\OnePay\Message\AbstractQueryTransactionRequest;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class QueryTransactionRequest extends AbstractQueryTransactionRequest
{
    protected $testEndpoint = 'https://dev.onepay.vn/paygate/vpcpay.op';

    protected $productionEndpoint = 'https://onepay.vn/vpcpay/Vpcdps.op';
}
