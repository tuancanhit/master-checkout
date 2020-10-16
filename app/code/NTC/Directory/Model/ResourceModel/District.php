<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:38
 */

namespace NTC\Directory\Model\ResourceModel;

/**
 * Class District
 * @package NTC\Directory\Model\ResourceModel
 */
class District extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('directory_country_district','entity_id');
    }
}