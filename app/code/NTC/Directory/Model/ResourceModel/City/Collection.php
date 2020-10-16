<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:38
 */

namespace NTC\Directory\Model\ResourceModel\City;

use NTC\Directory\Api\Data\CityInterface;

/**
 * Class Collection
 * @package NTC\Directory\Model\ResourceModel\City
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(\NTC\Directory\Model\City::class, \NTC\Directory\Model\ResourceModel\City::class);
    }

    /**
     * @param string $code
     * @return \NTC\Directory\Model\ResourceModel\City\Collection
     */
    public function addCodeFilter(string $code)
    {
        return $this->addFieldToFilter(CityInterface::CODE, $code);
    }

    /**
     * @param int $regionId
     * @return \NTC\Directory\Model\ResourceModel\City\Collection
     */
    public function addRegionIdFilter(int $regionId)
    {
        return $this->addFieldToFilter(CityInterface::REGION_ID, $regionId);
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return parent::toOptionArray();
    }
}