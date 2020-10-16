<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:39
 */

namespace NTC\Directory\Model\ResourceModel\Ward;

use NTC\Directory\Api\Data\WardInterface;

/**
 * Class Collection
 * @package NTC\Directory\Model\ResourceModel\Ward
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(\NTC\Directory\Model\Ward::class, \NTC\Directory\Model\ResourceModel\Ward::class);
    }

    /**
     * @param string $code
     * @return \NTC\Directory\Model\ResourceModel\Ward\Collection
     */
    public function addCodeFilter(string $code)
    {
        return $this->addFieldToFilter(WardInterface::CODE, $code);
    }

    /**
     * @param int $districtId
     * @return \NTC\Directory\Model\ResourceModel\Ward\Collection
     */
    public function addDistrictIdFilter(int $districtId)
    {
        return $this->addFieldToFilter(WardInterface::DISTRICT_ID, $districtId);
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return parent::toOptionArray();
    }
}