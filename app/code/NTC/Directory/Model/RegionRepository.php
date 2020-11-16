<?php
/**
 *  * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 10/27/20
 * Time: 19:06
 */

namespace NTC\Directory\Model;

/**
 * Class RegionRepository
 * @package NTC\Directory\Model
 */
class RegionRepository implements \NTC\Directory\Api\RegionRepositoryInterface
{
    /**
     * @var \NTC\Directory\Model\ResourceModel\Region\CollectionFactory
     */
    public $regionCollectionFactory;

    /**
     * RegionRepository constructor.
     * @param \NTC\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory
     */
    public function __construct(\NTC\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory)
    {
        $this->regionCollectionFactory = $regionCollectionFactory;
    }

    /**
     * @return \NTC\Directory\Model\ResourceModel\Region\Collection
     */
    public function getList()
    {
        return $this->regionCollectionFactory->create();
    }

    /**
     * @param string $countryCode
     * @return \NTC\Directory\Model\ResourceModel\Region\Collection
     */
    public function getByCountryCode(string $countryCode)
    {
        return $this->regionCollectionFactory->create()->addCountryCodeFilter($countryCode);
    }
}