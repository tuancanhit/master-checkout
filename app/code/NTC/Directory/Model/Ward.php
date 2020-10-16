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
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @inheritDoc
     */
    public function getDistrictId()
    {
        return $this->getData(self::DISTRICT_ID);
    }

    /**
     * @inheritDoc
     */
    public function getCode()
    {
        return $this->getData(self::CODE);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setDistrictId(int $districtId)
    {
        $this->setData(self::DISTRICT_ID, $districtId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setCode(string $code)
    {
        $this->setData(self::CODE, $code);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name)
    {
        $this->setData(self::NAME, $name);
        return $this;
    }
}