<?php
/**
 *  * Created by PhpStorm.
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 19:50
 */

namespace NTC\Directory\Model;

/**
 * Class DistrictRepository
 * @package NTC\Directory\Model
 */
class DistrictRepository implements \NTC\Directory\Api\DistrictRepositoryInterface
{
    /**
     * @var \NTC\Directory\Model\DistrictFactory
     */
    private $districtFactory;

    /**
     * @var \NTC\Directory\Model\ResourceModel\District\CollectionFactory
     */
    private $districtCollectionFactory;

    /**
     * DistrictRepository constructor.
     * @param \NTC\Directory\Model\DistrictFactory                          $districtFactory
     * @param \NTC\Directory\Model\ResourceModel\District\CollectionFactory $districtCollectionFactory
     */
    public function __construct
    (
        \NTC\Directory\Model\DistrictFactory $districtFactory,
        \NTC\Directory\Model\ResourceModel\District\CollectionFactory $districtCollectionFactory
    )
    {
        $this->districtFactory           = $districtFactory;
        $this->districtCollectionFactory = $districtCollectionFactory;
    }

    /**
     * @return \NTC\Directory\Model\ResourceModel\District\Collection
     */
    public function getList()
    {
        return $this->districtCollectionFactory->create();
    }

    /**
     * @param int $id
     * @return \NTC\Directory\Model\District
     */
    public function getById(int $id)
    {
        return $this->districtFactory->create()->load($id);
    }

    /**
     * @return \NTC\Directory\Model\District
     */
    public function create()
    {
        return $this->districtFactory->create();
    }
}