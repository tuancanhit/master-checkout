<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 19:50
 */

namespace NTC\Directory\Model;

/**
 * Class CityRepository
 * @package NTC\Directory\Model
 */
class CityRepository implements \NTC\Directory\Api\CityRepositoryInterface
{
    /**
     * @var \NTC\Directory\Model\CityFactory
     */
    private $cityFactory;

    /**
     * @var \NTC\Directory\Model\ResourceModel\City\CollectionFactory
     */
    private $cityCollectionFactory;

    /**
     * CityRepository constructor.
     * @param \NTC\Directory\Model\CityFactory                          $cityFactory
     * @param \NTC\Directory\Model\ResourceModel\City\CollectionFactory $cityCollectionFactory
     */
    public function __construct
    (
        \NTC\Directory\Model\CityFactory $cityFactory,
        \NTC\Directory\Model\ResourceModel\City\CollectionFactory $cityCollectionFactory
    )
    {
        $this->cityFactory           = $cityFactory;
        $this->cityCollectionFactory = $cityCollectionFactory;
    }

    /**
     * @return \NTC\Directory\Model\ResourceModel\City\Collection
     */
    public function getList()
    {
        return $this->cityCollectionFactory->create();
    }

    /**
     * @param int $id
     * @return \NTC\Directory\Model\City
     */
    public function getById(int $id)
    {
       return $this->cityFactory->create()->load($id);
    }

    /**
     * @return \NTC\Directory\Model\City
     */
    public function create()
    {
       return $this->cityFactory->create();
    }
}