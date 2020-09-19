<?php
/**
 *  * Created by PhpStorm.
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 14:26
 */

namespace NTC\Directory\Api;

/**
 * Interface WardRepositoryInterface
 * @package NTC\Directory\Api
 */
interface WardRepositoryInterface
{
    /**
     * @return \NTC\Directory\Model\ResourceModel\Ward\Collection
     */
    public function getList();

    /**
     * @param int $id
     * @return \NTC\Directory\Model\Ward
     */
    public function getById(int $id);

    /**
     * @return \NTC\Directory\Model\Ward
     */
    public function create();
}