<?php


namespace Brainvire\MyTicket\Block;


use Magento\Framework\View\Element\Template;

class Link extends Template
{
    protected $_template = 'Brainvire_MyTicket::link.phtml';

    protected function _toHtml()
    {
        $this->setNewUrl("http://localhost/magento2/myticket/front/index/");
        $this->setNewTitle("My Ticket");
        return parent::_toHtml();
    }
}