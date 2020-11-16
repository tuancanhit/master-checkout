<?php
/**
 *  * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 10/27/20
 * Time: 18:44
 */

namespace NTC\Checkout\Helper\Config;

/**
 * Class Data
 * @package NTC\Checkout\Helper\Config
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @param string $path
     * @param string $scope
     * @return string|bool
     */
    public function getConfig(string $path, string $scope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE)
    {
        return $this->scopeConfig->getValue($path, $scope);
    }
}