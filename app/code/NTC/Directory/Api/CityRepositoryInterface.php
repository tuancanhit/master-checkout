<?php
/**
 *  * Created by PhpStorm.
 * @author : William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:24
 */

namespace NTC\Directory\Api;

/**
 * Interface CityRepositoryInterface
 * @package NTC\Directory\Api
 */
interface CityRepositoryInterface
{
    /**
     * @return \NTC\Directory\Model\ResourceModel\City\Collection
     */
    public function getList();

    /**
     * @param int $id
     * @return \NTC\Directory\Model\City
     */
    public function getById(int $id);

    /**
     * @return \NTC\Directory\Model\City
     */
    public function create();
}