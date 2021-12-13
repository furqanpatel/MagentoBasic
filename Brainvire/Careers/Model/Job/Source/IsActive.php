<?php


namespace Brainvire\Careers\Model\Job\Source;
use Magento\Framework\Data\OptionSourceInterface;

class IsActive implements OptionSourceInterface
{
    /**
     * @var \Brainvire\Careers\Model\Job
     */
    protected $dataJob;

    /**
     * Constructor
     *
     * @param \Brainvire\Careers\Model\Job $dataJob
     */
    public function __construct(\Brainvire\Careers\Model\Job $dataJob)
    {
        $this->dataJob = $dataJob;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->dataJob->getAvailableStatuses();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}