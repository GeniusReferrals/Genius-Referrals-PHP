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
class AdvocatesController extends BaseController
{
    /**
     * @var AdvocatesController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return AdvocatesController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Delete an advocate
     *
     * @param string $accountSlug    The account identifier
     * @param string $advocateToken  The advocate's token
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAdvocate(
        $accountSlug,
        $advocateToken
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates/{advocate_token}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            'advocate_token' => $advocateToken,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Update an advocate.
     *
     * @param string              $accountSlug    The account identifier
     * @param string              $advocateToken  The advocate's token
     * @param Models\AdvocateForm $advocateForm   The body of the request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function putAdvocate(
        $accountSlug,
        $advocateToken,
        $advocateForm
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates/{advocate_token}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            'advocate_token' => $advocateToken,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($advocateForm));

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
     * Update partial elements of an advocate.
     *
     * @param string $accountSlug    The account identifier
     * @param string $advocateToken  The advocate's token
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function patchAdvocate(
        $accountSlug,
        $advocateToken
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates/{advocate_token}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            'advocate_token' => $advocateToken,
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
        $_httpRequest = new HttpRequest(HttpMethod::PATCH, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::patch($_queryUrl, $_headers);

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
     * Create a new advocate.
     *
     * @param string              $accountSlug   The account identifier
     * @param Models\AdvocateForm $advocateForm  The body of the request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function postAdvocate(
        $accountSlug,
        $advocateForm
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'  => $accountSlug,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($advocateForm));

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
     * Get an advocate by a given token.
     *
     * @param string $accountSlug    The account identifier
     * @param string $advocateToken  The advocate's token
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAdvocate(
        $accountSlug,
        $advocateToken
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates/{advocate_token}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            'advocate_token' => $advocateToken,
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
     * Delete all advocates
     *
     * @param string $accountSlug  The account identifier
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAdvocates(
        $accountSlug
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Get the list of advocates
     *
     * @param string  $accountSlug  The account identifier
     * @param integer $page         (optional) Page number, e.g. 1 would start at the first result, and 10 would start
     *                              at the tenth result.
     * @param integer $limit        (optional) Maximum number of results to return in the response. Default (10),
     *                              threshold (100)
     * @param string  $filter       (optional) Allowed fields: name, lastname, email, advocate_token,
     *                              bonus_exchange_method_slug, campaign_slug, can_refer, is_referral, from, to,
     *                              created. Use the following delimiters to build your filters params. The vertical
     *                              bar ('\|') to separate individual filter phrases and a double colon ('::') to
     *                              separate the names and values. The delimiter of the double colon (':') separates
     *                              the property name from the comparison value, enabling the comparison value to
     *                              contain spaces. Example: www.example.com/users?filter='name::todd\|city::
     *                              denver\|title::grand poobah'
     * @param string  $sort         (optional) Allowed fields: name, lastname, email, created. Use sort query-string
     *                              parameter that contains a delimited set of property names. For each property name,
     *                              sort in ascending order, and for each property prefixed with a dash ('-') sort in
     *                              descending order. Separate each property name with a vertical bar ('\|'), which is
     *                              consistent with the separation of the name\|value pairs in filtering, above. For
     *                              example, if we want to retrieve users in order of their last name (ascending),
     *                              first name (ascending) and hire date (descending), the request might look like this
     *                              www.example.com/users?sort='last_name\|first_name\|-hire_date'
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAdvocates(
        $accountSlug,
        $page = 1,
        $limit = 10,
        $filter = null,
        $sort = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'page'         => (null != $page) ? $page : 1,
            'limit'        => (null != $limit) ? $limit : 10,
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
