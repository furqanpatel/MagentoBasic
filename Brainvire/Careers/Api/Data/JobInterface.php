<?php


namespace Brainvire\Careers\Api\Data;


interface JobInterface
{
    const JOB_ID='job_id';
    const JOB_TITLE='job_title';
    const SKILL_REQAUIRED='skill_required';
    const JOB_POSTED_ON='job_posted_on';
    const JOB_EXPIRES_ON='job_expires_on';
    const JOB_DESCRIPTION='job_description';
    const IS_ACTIVE='is_active';

    /**
     * Get JobId
     *
     * return int
     */
    public function getJobId();

    /**
     * set JobId
     */
    public function setJobId($jobId);
    /**
     * Get SkillRequired
     *
     * return varchar
     */
    public function getSkillRequired();

    /**
     * set SkillRequired
     */
    public function setSkillRequired($skillRequired);

    /**
     * Get JobTitle
     *
     * return varchar
     */
    public function getJobTitle();

    /**
     * set JobTitle
     */
    public function setJobTitle($jobTitle);

    /**
     * Get JobPostedOn
     *
     * return varchar
     */
    public function getJobPostedOn();

    /**
     * set JobPostedOn
     */
    public function setJobPostedOn($jobPostedOn);

    /**
     * Get JobExpiresOn
     *
     * return varchar
     */
    public function getJobExpiresOn();

    /**
     * set JobExpiresOn
     */
    public function setJobExpiresOn($jobExpiresOn);

    /**
     * Get JobDescription
     *
     * return varchar
     */
    public function getJobDescription();

    /**
     * set JobExpiresOn
     */
    public function setJobDescription($jobDescription);

    /**
     * Get IsActive.
     *
     * @return int
     */
    public function getIsActive();

    /**
     * Set IsActive.
     */
    public function setIsActive($is_active);


}