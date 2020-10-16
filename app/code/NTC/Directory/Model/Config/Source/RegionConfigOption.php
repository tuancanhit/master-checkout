<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 20:35
 */

namespace NTC\Directory\Model\Config\Source;

/**
 * Class RegionConfigOption
 * @package NTC\Directory\Model\Config\Source
 */
class RegionConfigOption implements \Magento\Framework\Option\ArrayInterface
{
    const REGION_MODE_DEFAULT  = 'default';
    const REGION_MODE_MULTIPLE = 'multiple';

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => self::REGION_MODE_DEFAULT,
                'label' => __('Default')
            ],
                [
                'value' => self::REGION_MODE_MULTIPLE,
                'label' => __('Multiple')
            ]
        ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [0 => __('No'), 1 => __('Yes')];
    }
}
