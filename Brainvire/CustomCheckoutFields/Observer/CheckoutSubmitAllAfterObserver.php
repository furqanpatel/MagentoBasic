<?php


namespace Brainvire\CustomCheckoutFields\Observer;


class CheckoutSubmitAllAfterObserver implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        $quote = $observer->getEvent()->getQuote();
        if (empty($order) || empty($quote)) {
            return $this;
        }

        $shippingAddress = $quote->getShippingAddress();
//        $billingAddress = $quote->getBillingAddress();

//        $brgyShipping = $shippingAddress->getBarangay();
//        $brgyBilling = $billingAddress->getBarangay();

//        $brgy='';

        if ($shippingAddress->getDeliveryDate()) {
            $orderShippingAddress=$order->getShippingAddress();
            $orderShippingAddress->setDeliveryDate($shippingAddress->getDeliveryDate())->save();
        }

//        if (!empty($brgyBilling)) {
//            $brgy=$brgyBilling;
//            $shippingAddress->setBarangay($brgyBilling)->save();
//        }
//
//        $orderBillingAddress = $order->getBillingAddress();
//        $orderShippingAddress = $order->getShippingAddress();
//
//        $orderBillingAddress->setBarangay($brgy)->save();
//        $orderShippingAddress->setBarangay($brgy)->save();

        return $this;
    }
}