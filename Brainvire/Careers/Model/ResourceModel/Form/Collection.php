<?php


namespace Brainvire\Careers\Model\ResourceModel\Form;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'app_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('Brainvire\Careers\Model\Form', 'Brainvire\Careers\Model\ResourceModel\Form');
    }
}