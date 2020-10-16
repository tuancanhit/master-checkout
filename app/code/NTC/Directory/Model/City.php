<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:36
 */

namespace NTC\Directory\Model;

/**
 * Class City
 * @package NTC\Directory\Model
 */
class City extends \Magento\Framework\Model\AbstractModel implements \NTC\Directory\Api\Data\CityInterface
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(\NTC\Directory\Model\ResourceModel\City::class);
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
    public function getRegionId()
    {
        return $this->getData(self::REGION_ID);
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
    public function setRegionId(int $regionId)
    {
        $this->setData(self::REGION_ID, $regionId);
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
