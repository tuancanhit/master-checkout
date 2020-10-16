<?php
/**
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
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @inheritDoc
     */
    public function getCityId()
    {
        return $this->getData(self::CITY_ID);
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
    public function setCityId(int $cityId)
    {
        $this->setData(self::CITY_ID, $cityId);
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