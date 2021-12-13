<?php


namespace Brainvire\Careers\Model\ResourceModel\Job;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'job_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('Brainvire\Careers\Model\Job', 'Brainvire\Careers\Model\ResourceModel\Job');
    }
}