<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 20:35
 */

namespace NTC\Checkout\Model\Config\Source;

/**
 * Class RegionConfigOption
 * @package NTC\Checkout\Model\Config\Source
 */
class RegionConfigOption implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var \NTC\Checkout\Helper\Directory
     */
    public $directoryHelper;

    /**
     * RegionConfigOption constructor.
     * @param \NTC\Checkout\Helper\Directory $directoryHelper
     */
    public function __construct(\NTC\Checkout\Helper\Directory $directoryHelper)
    {
        $this->directoryHelper = $directoryHelper;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $option = [
            ['value' => '', 'label' => __('Please select a region, state or province.')]
        ];
        $defaultCountryCode = $this->directoryHelper->getDefaultCountryCode();
        if($defaultCountryCode) {
            $option = $this->directoryHelper->getRegionOption($defaultCountryCode);
        }
        return $option;
    }
}
