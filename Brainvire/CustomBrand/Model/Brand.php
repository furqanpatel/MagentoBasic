<?php


namespace Brainvire\CustomBrand\Model;


class Brand extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * Retrieve All options
     *
     * @return array
     */
    public function getAllOptions()
    {
        if($this->_options==null){
            $this->_options = [
                ['value' => '1', 'label' => __('Levis')],
                ['value' => '2', 'label' => __('Adidas')],
                ['value' => '3', 'label' => __('Reebok')]
            ];
        }
        return $this->_options;
    }
    final public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label' => __('Levis')),
            array('value' => '2', 'label' => __('Adidas')),
            array('value' => '3', 'label' => __('Reebok'))
        );
    }
}