<?php
/**
 *  * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 10/27/20
 * Time: 18:53
 */

namespace NTC\Checkout\Helper;

/**
 * Class Directory
 * @package NTC\Checkout\Helper
 */
class Directory extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Admin config default country path
     */
    const DEFAULT_COUNTRY_CONFIG_PATH = 'general/country/default';

    /**
     * @var \NTC\Checkout\Helper\Config\Data
     */
    public $helperDataConfig;

    /**
     * @var \NTC\Directory\Api\RegionRepositoryInterface
     */
    public $regionRepository;

    /**
     * Directory constructor.
     * @param \Magento\Framework\App\Helper\Context        $context
     * @param \NTC\Checkout\Helper\Config\Data             $helperDataConfig
     * @param \NTC\Directory\Api\RegionRepositoryInterface $regionRepositoryInterface
     */
    public function __construct
    (
        \Magento\Framework\App\Helper\Context $context,
        \NTC\Checkout\Helper\Config\Data $helperDataConfig,
        \NTC\Directory\Api\RegionRepositoryInterface $regionRepositoryInterface
    )
    {
        $this->helperDataConfig = $helperDataConfig;
        $this->regionRepository = $regionRepositoryInterface;
        parent::__construct($context);
    }

    /**
     * @param string $scope
     * @return bool|string
     */
    public function getDefaultCountryCode(string $scope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE)
    {
        return $this->helperDataConfig->getConfig(self::DEFAULT_COUNTRY_CONFIG_PATH, $scope);
    }

    /**
     * @param string $countryCode
     * @return array
     */
    public function getRegionOption(string $countryCode)
    {
        return $this->regionRepository->getByCountryCode($countryCode)->toOptionArray();
    }
}