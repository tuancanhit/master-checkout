<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:37
 */

namespace NTC\Directory\Model;

/**
 * Class Ward
 * @package NTC\Directory\Model
 */
class Ward extends \Magento\Framework\Model\AbstractModel implements \NTC\Directory\Api\Data\WardInterface
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(\NTC\Directory\Model\ResourceModel\Ward::class);
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
    public function getDistrictId()
    {
        // TODO: Implement getDistrictId() method.
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
    public function setDistrictId(int $districtId)
    {
        // TODO: Implement setDistrictId() method.
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