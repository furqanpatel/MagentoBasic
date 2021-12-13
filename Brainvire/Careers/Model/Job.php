<?php


namespace Brainvire\Careers\Model;


use Brainvire\Careers\Api\CustomInterface;
use Brainvire\Careers\Api\Data\JobInterface;

class Job extends \Magento\Framework\Model\AbstractModel implements JobInterface,CustomInterface
{
    /**
     * @var ResourceModel\Job\CollectionFactory
     */
    protected $jobemodelFactory;
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    public function _construct()
    {
        $this->_init('Brainvire\Careers\Model\ResourceModel\Job');
    }

    /**
     * Get JobId
     *
     * return int
     */
    public function getJobId()
    {
        // TODO: Implement getJobId() method.
        return $this->getData(self::JOB_ID);
    }

    /**
     * set JobId
     */
    public function setJobId($jobId)
    {
        // TODO: Implement setJobId() method.
        return $this->setData(self::JOB_ID,$jobId);
    }

    /**
     * Get SkillRequired
     *
     * return varchar
     */
    public function getSkillRequired()
    {
        // TODO: Implement getSkillRequired() method.
        return $this->getData(self::SKILL_REQAUIRED);
    }

    /**
     * set SkillRequired
     */
    public function setSkillRequired($skillRequired)
    {
        // TODO: Implement setSkillRequired() method.
        return $this->setData(self::SKILL_REQAUIRED,$skillRequired);
    }

    /**
     * Get JobTitle
     *
     * return varchar
     */
    public function getJobTitle()
    {
        // TODO: Implement getJobTitle() method.
        return $this->getData(self::JOB_TITLE);
    }

    /**
     * set JobTitle
     */
    public function setJobTitle($jobTitle)
    {
        // TODO: Implement setJobTitle() method.
        return $this->setData(self::JOB_TITLE,$jobTitle);
    }

    /**
     * Get JobPostedOn
     *
     * return varchar
     */
    public function getJobPostedOn()
    {
        // TODO: Implement getJobPostedOn() method.
        return $this->getData(self::JOB_POSTED_ON);
    }

    /**
     * set JobPostedOn
     */
    public function setJobPostedOn($jobPostedOn)
    {
        // TODO: Implement setJobPostedOn() method.
        return $this->setData(self::JOB_POSTED_ON,$jobPostedOn);
    }

    /**
     * Get JobExpiresOn
     *
     * return varchar
     */
    public function getJobExpiresOn()
    {
        // TODO: Implement getJobExpiresOn() method.
        return $this->getData(self::JOB_EXPIRES_ON);
    }

    /**
     * set JobExpiresOn
     */
    public function setJobExpiresOn($jobExpiresOn)
    {
        // TODO: Implement setJobExpiresOn() method.
        return $this->setData(self::JOB_EXPIRES_ON,$jobExpiresOn);
    }

    /**
     * Get JobDescription
     *
     * return varchar
     */
    public function getJobDescription()
    {
        // TODO: Implement getJobDescription() method.
        return $this->getData(self::JOB_DESCRIPTION);
    }

    /**
     * set JobExpiresOn
     */
    public function setJobDescription($jobDescription)
    {
        // TODO: Implement setJobDescription() method.
        return $this->setData(self::JOB_DESCRIPTION,$jobDescription);
    }

    /**
     * Get IsActive.
     *
     * @return int
     */
    public function getIsActive()
    {
        // TODO: Implement getIsActive() method.
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set IsActive.
     */
    public function setIsActive($is_active)
    {
        // TODO: Implement setIsActive() method.
        return $this->setData(self::IS_ACTIVE,$is_active);
    }
    public function getAvailableStatuses()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }

    /**
     * Job constructor.
     * @param ResourceModel\Job\CollectionFactory $jobemodelFactory
     */
    public function __construct(
     \Brainvire\Careers\Model\ResourceModel\Job\CollectionFactory $jobemodelFactory
    )
    {
    $this->jobemodelFactory = $jobemodelFactory;
    }
    /**
     * {@inheritdoc}
     */
    public function customGetMethod()
    {
//        $collection = $this->jobemodelFactory->create();

        $objectManager =   \Magento\Framework\App\ObjectManager::getInstance();
        $connection = $objectManager->get('Magento\Framework\App\ResourceConnection')->getConnection('\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION');
        $result1 = $connection->fetchAll("SELECT * FROM jobs ");
        return $result1;
//        $collection->load();
//        $collection->setPageSize(1);
//        return $collection;
    }
}