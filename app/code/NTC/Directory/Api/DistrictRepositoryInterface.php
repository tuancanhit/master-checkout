<?php
/**
 *  * Created by PhpStorm.
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:25
 */

namespace NTC\Directory\Api;

/**
 * Interface DistrictRepositoryInterface
 * @package NTC\Directory\Api
 */
interface DistrictRepositoryInterface
{
    /**
     * @return \NTC\Directory\Model\ResourceModel\District\Collection
     */
    public function getList();

    /**
     * @param int $id
     * @return \NTC\Directory\Model\District
     */
    public function getById(int $id);

    /**
     * @return \NTC\Directory\Model\District
     */
    public function create();
}