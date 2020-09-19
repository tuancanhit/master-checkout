<?php
/**
 *  * Created by PhpStorm.
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:23
 */

namespace NTC\Directory\Api\Data;

/**
 * Interface WardInterface
 * @package NTC\Directory\Api\Data
 */
interface WardInterface
{
    const ENTITY_ID   = 'entity_id';
    const DISTRICT_ID = 'district_id';
    const CODE        = 'code';
    const NAME        = 'name';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return int
     */
    public function getDistrictId();

    /**
     * @return string
     */
    public function getCode();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param int $districtId
     * @return mixed
     */
    public function setDistrictId(int $districtId);

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