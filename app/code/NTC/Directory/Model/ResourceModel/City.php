<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:37
 */

namespace NTC\Directory\Model\ResourceModel;

/**
 * Class City
 * @package NTC\Directory\Model\ResourceModel
 */
class City extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('directory_country_city', 'entity_id');
    }
}
