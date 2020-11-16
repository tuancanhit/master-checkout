<?php
/**
 *  * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 10/27/20
 * Time: 19:05
 */

namespace NTC\Directory\Api;

/**
 * Interface RegionRepositoryInterface
 * @package NTC\Directory\Api
 */
interface RegionRepositoryInterface
{
    /**
     * @return \NTC\Directory\Model\ResourceModel\Region\Collection
     */
    public function getList();

    /**
     * @param string $countryCode
     * @return \NTC\Directory\Model\ResourceModel\Region\Collection
     */
    public function getByCountryCode(string $countryCode);
}