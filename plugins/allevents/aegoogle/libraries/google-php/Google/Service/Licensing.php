<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Licensing (v1).
 *
 * <p>
 * Licensing API to view and manage license for your domain.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/google-apps/licensing/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Licensing extends Google_Service
{
    /** View and manage Google Apps licenses for your domain. */
    const APPS_LICENSING =
        "https://www.googleapis.com/auth/apps.licensing";

    public $licenseAssignments;


    /**
     * Constructs the internal representation of the Licensing service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'apps/licensing/v1/product/';
        $this->version = 'v1';
        $this->serviceName = 'licensing';

        $this->licenseAssignments = new Google_Service_Licensing_LicenseAssignments_Resource(
            $this,
            $this->serviceName,
            'licenseAssignments',
            [
                'methods' => [
                    'delete' => [
                        'path' => '{productId}/sku/{skuId}/user/{userId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'skuId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => '{productId}/sku/{skuId}/user/{userId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'skuId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'insert' => [
                        'path' => '{productId}/sku/{skuId}/user',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'skuId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'listForProduct' => [
                        'path' => '{productId}/users',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'customerId' => [
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'maxResults' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'listForProductAndSku' => [
                        'path' => '{productId}/sku/{skuId}/users',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'skuId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'customerId' => [
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pageToken' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'maxResults' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'patch' => [
                        'path' => '{productId}/sku/{skuId}/user/{userId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'skuId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'update' => [
                        'path' => '{productId}/sku/{skuId}/user/{userId}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'skuId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
    }
}


/**
 * The "licenseAssignments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $licensingService = new Google_Service_Licensing(...);
 *   $licenseAssignments = $licensingService->licenseAssignments;
 *  </code>
 */
class Google_Service_Licensing_LicenseAssignments_Resource extends Google_Service_Resource
{

    /**
     * Revoke License. (licenseAssignments.delete)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku
     * @param string $userId email id or unique Id of the user
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function delete($productId, $skuId, $userId, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'userId' => $userId];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Get license assignment of a particular product and sku for a user
     * (licenseAssignments.get)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku
     * @param string $userId email id or unique Id of the user
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($productId, $skuId, $userId, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'userId' => $userId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_Licensing_LicenseAssignment");
    }

    /**
     * Assign License. (licenseAssignments.insert)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku
     * @param Google_LicenseAssignmentInsert|Google_Service_Licensing_LicenseAssignmentInsert $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function insert($productId, $skuId, Google_Service_Licensing_LicenseAssignmentInsert $postBody, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [$params], "Google_Service_Licensing_LicenseAssignment");
    }

    /**
     * List license assignments for given product of the customer.
     * (licenseAssignments.listForProduct)
     *
     * @param string $productId Name for product
     * @param string $customerId CustomerId represents the customer for whom
     *                           licenseassignments are queried
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @opt_param string pageToken Token to fetch the next page.Optional. By default
     * server will return first page
     * @opt_param string maxResults Maximum number of campaigns to return at one
     * time. Must be positive. Optional. Default value is 100.
     */
    public function listForProduct($productId, $customerId, $optParams = [])
    {
        $params = ['productId' => $productId, 'customerId' => $customerId];
        $params = array_merge($params, $optParams);

        return $this->call('listForProduct', [$params], "Google_Service_Licensing_LicenseAssignmentList");
    }

    /**
     * List license assignments for given product and sku of the customer.
     * (licenseAssignments.listForProductAndSku)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku
     * @param string $customerId CustomerId represents the customer for whom
     *                           licenseassignments are queried
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @opt_param string pageToken Token to fetch the next page.Optional. By default
     * server will return first page
     * @opt_param string maxResults Maximum number of campaigns to return at one
     * time. Must be positive. Optional. Default value is 100.
     */
    public function listForProductAndSku($productId, $skuId, $customerId, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'customerId' => $customerId];
        $params = array_merge($params, $optParams);

        return $this->call('listForProductAndSku', [$params], "Google_Service_Licensing_LicenseAssignmentList");
    }

    /**
     * Assign License. This method supports patch semantics.
     * (licenseAssignments.patch)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku for which license would be revoked
     * @param string $userId email id or unique Id of the user
     * @param Google_LicenseAssignment|Google_Service_Licensing_LicenseAssignment $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function patch($productId, $skuId, $userId, Google_Service_Licensing_LicenseAssignment $postBody, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'userId' => $userId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_Licensing_LicenseAssignment");
    }

    /**
     * Assign License. (licenseAssignments.update)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku for which license would be revoked
     * @param string $userId email id or unique Id of the user
     * @param Google_LicenseAssignment|Google_Service_Licensing_LicenseAssignment $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function update($productId, $skuId, $userId, Google_Service_Licensing_LicenseAssignment $postBody, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'userId' => $userId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_Licensing_LicenseAssignment");
    }
}


/**
 * Class Google_Service_Licensing_LicenseAssignment
 */
class Google_Service_Licensing_LicenseAssignment extends Google_Model
{
    public $etags;
    public $kind;
    public $productId;
    public $selfLink;
    public $skuId;
    public $userId;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getEtags()
    {
        return $this->etags;
    }

    /**
     * @param $etags
     */
    public function setEtags($etags)
    {
        $this->etags = $etags;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    /**
     * @return mixed
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param $skuId
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}

/**
 * Class Google_Service_Licensing_LicenseAssignmentInsert
 */
class Google_Service_Licensing_LicenseAssignmentInsert extends Google_Model
{
    public $userId;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}

/**
 * Class Google_Service_Licensing_LicenseAssignmentList
 */
class Google_Service_Licensing_LicenseAssignmentList extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextPageToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Licensing_LicenseAssignment';
    protected $itemsDataType = 'array';

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    /**
     * @param $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return mixed
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    /**
     * @param $nextPageToken
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
}
