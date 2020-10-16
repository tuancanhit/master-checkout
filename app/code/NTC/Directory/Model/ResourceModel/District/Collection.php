<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:38
 */

namespace NTC\Directory\Model\ResourceModel\District;

use NTC\Directory\Api\Data\DistrictInterface;

/**
 * Class Collection
 * @package NTC\Directory\Model\ResourceModel\District
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(\NTC\Directory\Model\District::class, \NTC\Directory\Model\ResourceModel\District::class);
    }

    /**
     * @param string $code
     * @return \NTC\Directory\Model\ResourceModel\District\Collection
     */
    public function addCodeFilter(string $code)
    {
        return $this->addFieldToFilter(DistrictInterface::CODE, $code);
    }

    /**
     * @param int $cityId
     * @return \NTC\Directory\Model\ResourceModel\District\Collection
     */
    public function addCityIdFilter(int $cityId)
    {
        return $this->addFieldToFilter(DistrictInterface::CITY_ID, $cityId);
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return parent::toOptionArray();
    }
}