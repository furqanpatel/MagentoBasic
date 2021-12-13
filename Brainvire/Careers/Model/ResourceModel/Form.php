<?php


namespace Brainvire\Careers\Model\ResourceModel;


class Form extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * @var string
     */
    protected $_idFieldName = 'app_id';
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
{
    // TODO: Implement _construct() method.
    $this->_init('application','app_id');
}
}