<?php
/**
 *  * Created by PhpStorm.
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:38
 */

namespace NTC\Directory\Model\ResourceModel;

/**
 * Class Ward
 * @package NTC\Directory\Model\ResourceModel
 */
class Ward extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('directory_country_ward','entity_id');
    }
}