<?php


namespace Brainvire\Careers\Model;


use Magento\Framework\App\RequestInterface;
use Magento\Store\Model\StoreManagerInterface;
use Brainvire\Careers\Model\ResourceModel\Job\CollectionFactory;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $jobCollectionFactory
     * @param array $meta
     * @param array $data
     */
    protected $loadedData;

    protected $request;

    protected $storeManager;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $jobCollectionFactory,
        RequestInterface $request,
        StoreManagerInterface $storeManager,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $jobCollectionFactory->create();
        $this->request = $request;
        $this->storeManager = $storeManager;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $storeId = (int) $this->request->getParam('id');
        // $this->collection->setCarId($storeId)->addAttributeToSelect('*');
        $items = $this->collection->getItems();
        $this->loadedData = array();
        foreach ($items as $item) {
            $item->setJobId($storeId);
            $itemData = $item->getData();

            $this->loadedData[$item->getJobId()]= $itemData;
            // break;
        }
        return $this->loadedData;

    }
}