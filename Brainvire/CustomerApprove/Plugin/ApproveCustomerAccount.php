<?php


namespace Brainvire\CustomerApprove\Plugin;


use Magento\Framework\Exception\LocalizedException;

class ApproveCustomerAccount
{
    protected $_mageHelper;

    public function __construct(
        \Brainvire\CustomerApprove\Helper\Data $mageHelper
    )
    {
        $this->_mageHelper = $mageHelper;
    }

    public function afterAuthenticate(
        \Magento\Customer\Api\AccountManagementInterface $accountManagement,
        $result
    )
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Your text message');
        if ($this->_mageHelper->getConfig('brainvire/approve_account/enable')) {
            $logger->info('1');
            if ($result->getCustomAttribute('approve_account')) {
                $logger->info('2');
                $customerStatus = $result->getCustomAttribute('approve_account')->getValue();
                $logger->info('custom status='.$customerStatus);
                if ($customerStatus == 0) {
                    $logger->info('3');
                    throw new LocalizedException(__('Your Account still not approved. Please contact store owner for more details.'));
                }
            }
        }
        return $result;
    }
}