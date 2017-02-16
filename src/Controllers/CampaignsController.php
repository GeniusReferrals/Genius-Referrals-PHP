<?php
/*
 * GeniusReferralsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GeniusReferralsLib\Controllers;

use GeniusReferralsLib\APIException;
use GeniusReferralsLib\APIHelper;
use GeniusReferralsLib\Configuration;
use GeniusReferralsLib\Models;
use GeniusReferralsLib\Exceptions;
use GeniusReferralsLib\Http\HttpRequest;
use GeniusReferralsLib\Http\HttpResponse;
use GeniusReferralsLib\Http\HttpMethod;
use GeniusReferralsLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class CampaignsController extends BaseController
{
    /**
     * @var CampaignsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return CampaignsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get a campaign by a given slug.
     *
     * @param string $accountSlug   The account identifier
     * @param string $campaignSlug  The campaign identifier
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCampaign(
        $accountSlug,
        $campaignSlug
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/campaigns/{campaign_slug}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'  => $accountSlug,
            'campaign_slug' => $campaignSlug,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Get the list of campaings for a given account.
     *
     * @param string  $accountSlug  The account identifier
     * @param integer $page         (optional) Page number, e.g. 1 would start at the first result, and 10 would start
     *                              at the tenth result.
     * @param integer $limit        (optional) Maximum number of results to return in the response. Default (10),
     *                              threshold (100)
     * @param string  $filter       (optional) Allowed fields: name, description, start_date, end_date, is_active
     *                              (true\|false), created. Use the following delimiters to build your filters params.
     *                              The vertical bar ('\|') to separate individual filter phrases and a double colon (':
     *                              :') to separate the names and values. The delimiter of the double colon (':')
     *                              separates the property name from the comparison value, enabling the comparison
     *                              value to contain spaces. Example: www.example.com/users?filter='name::todd\|city::
     *                              denver\|title::grand poobah'
     * @param string  $sort         (optional) Allowed fields: campaign_slug, created, start_date, end_date, is_active.
     *                              Use sort query-string parameter that contains a delimited set of property names.
     *                              For each property name, sort in ascending order, and for each property prefixed
     *                              with a dash ('-') sort in descending order. Separate each property name with a
     *                              vertical bar ('\|'), which is consistent with the separation of the name\|value
     *                              pairs in filtering, above. For example, if we want to retrieve users in order of
     *                              their last name (ascending), first name (ascending) and hire date (descending), the
     *                              request might look like this www.example.com/users?sort='last_name\|first_name\|-
     *                              hire_date'
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getCampaigns(
        $accountSlug,
        $page = null,
        $limit = null,
        $filter = null,
        $sort = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/campaigns';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'page'         => $page,
            'limit'        => $limit,
            'filter'       => $filter,
            'sort'         => $sort,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
