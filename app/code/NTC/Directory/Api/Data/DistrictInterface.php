<?php
/**
 *  * Created by PhpStorm.
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:22
 */

namespace NTC\Directory\Api\Data;

/**
 * Interface DistrictInterface
 * @package NTC\Directory\Api\Data
 */
interface DistrictInterface
{
    const ENTITY_ID = 'entity_id';
    const CITY_ID   = 'city_id';
    const CODE      = 'code';
    const NAME      = 'name';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return int
     */
    public function getCityId();

    /**
     * @return string
     */
    public function getCode();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param int $cityId
     * @return mixed
     */
    public function setCityId(int $cityId);

    /**
     * @param string $code
     * @return mixed
     */
    public function setCode(string $code);

    /**
     * @param string $name
     * @return mixed
     */
    public function setName(string $name);
}