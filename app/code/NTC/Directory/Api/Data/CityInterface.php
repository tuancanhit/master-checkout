<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:21
 */

namespace NTC\Directory\Api\Data;

/**
 * Interface CityInterface
 * @package NTC\Directory\Api\Data
 */
interface CityInterface
{
    const ENTITY_ID = 'entity_id';
    const REGION_ID = 'region_id';
    const CODE      = 'code';
    const NAME      = 'name';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return int
     */
    public function getRegionId();

    /**
     * @return string
     */
    public function getCode();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param int $regionId
     * @return mixed
     */
    public function setRegionId(int $regionId);

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