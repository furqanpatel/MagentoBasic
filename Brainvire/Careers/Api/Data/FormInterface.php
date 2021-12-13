<?php


namespace Brainvire\Careers\Api\Data;


interface FormInterface
{
    const APP_ID='app_id';
    const FULL_NAME='full_name';
    const EMAIL_ID='email_id';
    const RESUME='resume';
    const CONTACT='contact';
    const COMMENTS='comments';
    const APPLY_FOR_JOB_TITLE='apply_for_job_title';

    /**
     * Get AppId
     *
     * return int
     */
    public function getAppId();

    /**
     * set AppId
     */
    public function setAppId($appId);

    /**
     * Get FullName
     *
     * return varchar
     */
    public function getFullName();

    /**
     * set FullName
     */
    public function setFullName($fullName);

    /**
     * Get Contact
     *
     * return varchar
     */
    public function getContact();

    /**
     * set Contact
     */
    public function setContact($contact);

    /**
     * Get Email
     *
     * return varchar
     */
    public function getEmail();

    /**
     * set Email
     */
    public function setEmail($email);

    /**
     * Get Comment
     *
     * return varchar
     */
    public function getComment();

    /**
     * set Comment
     */
    public function setComment($comment);

    /**
     * Get Resume
     *
     * return varchar
     */
    public function getResume();

    /**
     * set Comment
     */
    public function setResume($resume);
    /**
     * Get ApplyForJob
     *
     * return varchar
     */
    public function getApplyForJob();

    /**
     * set Comment
     */
    public function setApplyForJob($applyForJob);
}