<?php


namespace Brainvire\Careers\Model\ResourceModel;


class Job extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * @var string
     */
    protected $_idFieldName = 'job_id';
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init('jobs','job_id');
    }
}