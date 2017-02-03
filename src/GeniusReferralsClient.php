<?php
/*
 * GeniusReferralsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GeniusReferralsLib;

use GeniusReferralsLib\Controllers;

/**
 * GeniusReferralsLib client class
 */
class GeniusReferralsClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $contentType = null,
        $xAuthToken = null
    ) {
        Configuration::$contentType = $contentType ? $contentType : Configuration::$contentType;
        Configuration::$xAuthToken = $xAuthToken ? $xAuthToken : Configuration::$xAuthToken;
    }
 
    /**
     * Singleton access to Authentications controller
     * @return Controllers\AuthenticationsController The *Singleton* instance
     */
    public function getAuthentications()
    {
        return Controllers\AuthenticationsController::getInstance();
    }
 
    /**
     * Singleton access to Advocates controller
     * @return Controllers\AdvocatesController The *Singleton* instance
     */
    public function getAdvocates()
    {
        return Controllers\AdvocatesController::getInstance();
    }
 
    /**
     * Singleton access to Accounts controller
     * @return Controllers\AccountsController The *Singleton* instance
     */
    public function getAccounts()
    {
        return Controllers\AccountsController::getInstance();
    }
}
