<?php
/**
 *  * Created by PhpStorm.
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:37
 */

namespace NTC\Directory\Model;

/**
 * Class District
 * @package NTC\Directory\Model
 */
class District extends \Magento\Framework\Model\AbstractModel implements \NTC\Directory\Api\Data\DistrictInterface
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(\NTC\Directory\Model\ResourceModel\District::class);
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        // TODO: Implement getId() method.
    }

    /**
     * @inheritDoc
     */
    public function getCityId()
    {
        // TODO: Implement getCityId() method.
    }

    /**
     * @inheritDoc
     */
    public function getCode()
    {
        // TODO: Implement getCode() method.
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }

    /**
     * @inheritDoc
     */
    public function setCityId(int $cityId)
    {
        // TODO: Implement setCityId() method.
    }

    /**
     * @inheritDoc
     */
    public function setCode(string $code)
    {
        // TODO: Implement setCode() method.
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name)
    {
        // TODO: Implement setName() method.
    }
}