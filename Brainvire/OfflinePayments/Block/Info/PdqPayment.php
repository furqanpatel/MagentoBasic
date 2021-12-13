<?php


namespace Brainvire\OfflinePayments\Block\Info;


class PdqPayment extends \Magento\Payment\Block\Info
{
    /**
     * @var string
     */
    protected $_template='Brainvire_OfflinePayments::info/pdf/pdqpayment.phtml';
    /**
     * @return string
     */
    public function toPdf()
    {
        $this->setTemplate('Brainvire_OfflinePayments::info/pdf/pdqpayment.phtml');
        return $this->toHtml();
    }
}