<?php


namespace Brainvire\WarentyPrice\Observer;


use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;




class CustomPrice implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer) {

        $item=$observer->getEvent()->getData('quote_item');
        $product=$observer->getEvent()->getData('product');
        // here i am using item's product final price
        $price = $item->getProduct()->getFinalPrice()+10; // 10 is custom price. It will increase in product price.
        // Set the custom price
        $item->setCustomPrice($price);
        $item->setOriginalCustomPrice($price);
        // Enable super mode on the product.
        $item->getProduct()->setIsSuperMode(true);
        return $this;
    }
}