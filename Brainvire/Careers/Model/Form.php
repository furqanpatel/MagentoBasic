<?php


namespace Brainvire\Careers\Model;


use Brainvire\Careers\Api\Data\FormInterface;

class Form extends \Magento\Framework\Model\AbstractModel implements FormInterface
{
    public function _construct()
    {
        $this->_init('Brainvire\Careers\Model\ResourceModel\Form');
    }
    /**
     * Get AppId
     *
     * return int
     */
    public function getAppId()
    {
        // TODO: Implement getAppId() method.
        return $this->getData(self::APP_ID);
    }

    /**
     * set AppId
     */
    public function setAppId($appId)
    {
        // TODO: Implement setAppId() method.
        return $this->setData(self::APP_ID,$appId);
    }

    /**
     * Get FullName
     *
     * return varchar
     */
    public function getFullName()
    {
        // TODO: Implement getFullName() method.
        return $this->getData(self::FULL_NAME);
    }

    /**
     * set FullName
     */
    public function setFullName($fullName)
    {
        // TODO: Implement setFullName() method.
        return $this->getData(self::FULL_NAME,$fullName);
    }

    /**
     * Get Contact
     *
     * return varchar
     */
    public function getContact()
    {
        // TODO: Implement getContact() method.
        return $this->getData(self::CONTACT);
    }

    /**
     * set Contact
     */
    public function setContact($contact)
    {
        // TODO: Implement setContact() method.
        return $this->getData(self::CONTACT,$contact);
    }

    /**
     * Get Email
     *
     * return varchar
     */
    public function getEmail()
    {
        // TODO: Implement getEmail() method.
        return $this->getData(self::EMAIL_ID);
    }

    /**
     * set Email
     */
    public function setEmail($email)
    {
        // TODO: Implement setEmail() method.
        return $this->getData(self::EMAIL_ID,$email);
    }

    /**
     * Get Comment
     *
     * return varchar
     */
    public function getComment()
    {
        // TODO: Implement getComment() method.
        return $this->getData(self::COMMENTS);
    }

    /**
     * set Comment
     */
    public function setComment($comment)
    {
        // TODO: Implement setComment() method.
        return $this->getData(self::COMMENTS,$comment);
    }

    /**
     * Get ApplyForJob
     *
     * return varchar
     */
    public function getApplyForJob()
    {
        // TODO: Implement getApplyForJob() method.
        return $this->getData(self::APPLY_FOR_JOB_TITLE);
    }

    /**
     * set ApplyForJob
     */
    public function setApplyForJob($applyForJob)
    {
        // TODO: Implement setApplyForJob() method.
        return $this->getData(self::APPLY_FOR_JOB_TITLE,$applyForJob);
    }

    /**
     * Get Resume
     *
     * return varchar
     */
    public function getResume()
    {
        // TODO: Implement getResume() method.
        return $this->getData(self::RESUME);
    }

    /**
     * set Comment
     */
    public function setResume($resume)
    {
        // TODO: Implement setResume() method.
        return $this->getData(self::RESUME,$resume);
    }
}