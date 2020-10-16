<?php
/**
 * @author: William Nguyen (tuancanhit@gmail.com)
 * Date: 9/19/20
 * Time: 19:50
 */

namespace NTC\Directory\Model;

/**
 * Class WardRepository
 * @package NTC\Directory\Model
 */
class WardRepository implements \NTC\Directory\Api\WardRepositoryInterface
{
    /**
     * @var \NTC\Directory\Model\WardFactory
     */
    private $wardFactory;

    /**
     * @var \NTC\Directory\Model\ResourceModel\Ward\CollectionFactory
     */
    private $wardCollectionFactory;

    /**
     * WardRepository constructor.
     * @param \NTC\Directory\Model\WardFactory                          $wardFactory
     * @param \NTC\Directory\Model\ResourceModel\Ward\CollectionFactory $wardCollectionFactory
     */
    public function __construct
    (
        \NTC\Directory\Model\WardFactory $wardFactory,
        \NTC\Directory\Model\ResourceModel\Ward\CollectionFactory $wardCollectionFactory
    )
    {
        $this->wardFactory           = $wardFactory;
        $this->wardCollectionFactory = $wardCollectionFactory;
    }

    /**
     * @return \NTC\Directory\Model\ResourceModel\Ward\Collection
     */
    public function getList()
    {
        return $this->wardCollectionFactory->create();
    }

    /**
     * @param int $id
     * @return \NTC\Directory\Model\Ward
     */
    public function getById(int $id)
    {
       return $this->wardFactory->create()->load($id);
    }

    /**
     * @return \NTC\Directory\Model\Ward
     */
    public function create()
    {
        return $this->wardFactory->create();
    }
}