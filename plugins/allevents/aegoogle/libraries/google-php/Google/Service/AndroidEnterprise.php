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
 * Service definition for AndroidEnterprise (v1).
 *
 * <p>
 * Allows MDMs/EMMs and enterprises to manage the deployment of apps to Android
 * for Work users.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_AndroidEnterprise extends Google_Service
{
    /** Manage corporate Android devices. */
    const ANDROIDENTERPRISE =
        "https://www.googleapis.com/auth/androidenterprise";

    public $collections;
    public $collectionviewers;
    public $devices;
    public $enterprises;
    public $entitlements;
    public $grouplicenses;
    public $grouplicenseusers;
    public $installs;
    public $permissions;
    public $products;
    public $users;


    /**
     * Constructs the internal representation of the AndroidEnterprise service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'androidenterprise/v1/';
        $this->version = 'v1';
        $this->serviceName = 'androidenterprise';

        $this->collections = new Google_Service_AndroidEnterprise_Collections_Resource(
            $this,
            $this->serviceName,
            'collections',
            [
                'methods' => [
                    'delete' => [
                        'path' => 'enterprises/{enterpriseId}/collections/{collectionId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'collectionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => 'enterprises/{enterpriseId}/collections/{collectionId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'collectionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'insert' => [
                        'path' => 'enterprises/{enterpriseId}/collections',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'enterprises/{enterpriseId}/collections',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => 'enterprises/{enterpriseId}/collections/{collectionId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'collectionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'update' => [
                        'path' => 'enterprises/{enterpriseId}/collections/{collectionId}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'collectionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->collectionviewers = new Google_Service_AndroidEnterprise_Collectionviewers_Resource(
            $this,
            $this->serviceName,
            'collectionviewers',
            [
                'methods' => [
                    'delete' => [
                        'path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users/{userId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'collectionId' => [
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
                        'path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users/{userId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'collectionId' => [
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
                    ], 'list' => [
                        'path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'collectionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users/{userId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'collectionId' => [
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
                        'path' => 'enterprises/{enterpriseId}/collections/{collectionId}/users/{userId}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'collectionId' => [
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
        $this->devices = new Google_Service_AndroidEnterprise_Devices_Resource(
            $this,
            $this->serviceName,
            'devices',
            [
                'methods' => [
                    'get' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'deviceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'getState' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/state',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'deviceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/devices',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
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
                    ], 'setState' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/state',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'deviceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->enterprises = new Google_Service_AndroidEnterprise_Enterprises_Resource(
            $this,
            $this->serviceName,
            'enterprises',
            [
                'methods' => [
                    'delete' => [
                        'path' => 'enterprises/{enterpriseId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'enroll' => [
                        'path' => 'enterprises/enroll',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'token' => [
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => 'enterprises/{enterpriseId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'insert' => [
                        'path' => 'enterprises',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'token' => [
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'enterprises',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'domain' => [
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'setAccount' => [
                        'path' => 'enterprises/{enterpriseId}/account',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'unenroll' => [
                        'path' => 'enterprises/{enterpriseId}/unenroll',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->entitlements = new Google_Service_AndroidEnterprise_Entitlements_Resource(
            $this,
            $this->serviceName,
            'entitlements',
            [
                'methods' => [
                    'delete' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'entitlementId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'entitlementId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
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
                    ], 'patch' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'entitlementId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'install' => [
                                'location' => 'query',
                                'type' => 'boolean',
                            ],
                        ],
                    ], 'update' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'entitlementId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'install' => [
                                'location' => 'query',
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->grouplicenses = new Google_Service_AndroidEnterprise_Grouplicenses_Resource(
            $this,
            $this->serviceName,
            'grouplicenses',
            [
                'methods' => [
                    'get' => [
                        'path' => 'enterprises/{enterpriseId}/groupLicenses/{groupLicenseId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'groupLicenseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'enterprises/{enterpriseId}/groupLicenses',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->grouplicenseusers = new Google_Service_AndroidEnterprise_Grouplicenseusers_Resource(
            $this,
            $this->serviceName,
            'grouplicenseusers',
            [
                'methods' => [
                    'list' => [
                        'path' => 'enterprises/{enterpriseId}/groupLicenses/{groupLicenseId}/users',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'groupLicenseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->installs = new Google_Service_AndroidEnterprise_Installs_Resource(
            $this,
            $this->serviceName,
            'installs',
            [
                'methods' => [
                    'delete' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'deviceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'installId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'deviceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'installId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'deviceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'deviceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'installId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'update' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'deviceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'installId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->permissions = new Google_Service_AndroidEnterprise_Permissions_Resource(
            $this,
            $this->serviceName,
            'permissions',
            [
                'methods' => [
                    'get' => [
                        'path' => 'permissions/{permissionId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'permissionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->products = new Google_Service_AndroidEnterprise_Products_Resource(
            $this,
            $this->serviceName,
            'products',
            [
                'methods' => [
                    'get' => [
                        'path' => 'enterprises/{enterpriseId}/products/{productId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ], 'getAppRestrictionsSchema' => [
                        'path' => 'enterprises/{enterpriseId}/products/{productId}/appRestrictionsSchema',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                        ],
                    ], 'getPermissions' => [
                        'path' => 'enterprises/{enterpriseId}/products/{productId}/permissions',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'updatePermissions' => [
                        'path' => 'enterprises/{enterpriseId}/products/{productId}/permissions',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->users = new Google_Service_AndroidEnterprise_Users_Resource(
            $this,
            $this->serviceName,
            'users',
            [
                'methods' => [
                    'generateToken' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/token',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'enterpriseId' => [
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
                        'path' => 'enterprises/{enterpriseId}/users/{userId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
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
                    ], 'list' => [
                        'path' => 'enterprises/{enterpriseId}/users',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'enterpriseId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'email' => [
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'revokeToken' => [
                        'path' => 'enterprises/{enterpriseId}/users/{userId}/token',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'enterpriseId' => [
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
 * The "collections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $collections = $androidenterpriseService->collections;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Collections_Resource extends Google_Service_Resource
{

    /**
     * Deletes a collection. (collections.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function delete($enterpriseId, $collectionId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'collectionId' => $collectionId];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Retrieves the details of a collection. (collections.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function get($enterpriseId, $collectionId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'collectionId' => $collectionId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_Collection");
    }

    /**
     * Creates a new collection. (collections.insert)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param Google_Collection|Google_Service_AndroidEnterprise_Collection $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function insert($enterpriseId, Google_Service_AndroidEnterprise_Collection $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [$params], "Google_Service_AndroidEnterprise_Collection");
    }

    /**
     * Retrieves the IDs of all the collections for an enterprise.
     * (collections.listCollections)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function listCollections($enterpriseId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidEnterprise_CollectionsListResponse");
    }

    /**
     * Updates a collection. This method supports patch semantics.
     * (collections.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param Google_Collection|Google_Service_AndroidEnterprise_Collection $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function patch($enterpriseId, $collectionId, Google_Service_AndroidEnterprise_Collection $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidEnterprise_Collection");
    }

    /**
     * Updates a collection. (collections.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param Google_Collection|Google_Service_AndroidEnterprise_Collection $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function update($enterpriseId, $collectionId, Google_Service_AndroidEnterprise_Collection $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidEnterprise_Collection");
    }
}

/**
 * The "collectionviewers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $collectionviewers = $androidenterpriseService->collectionviewers;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Collectionviewers_Resource extends Google_Service_Resource
{

    /**
     * Removes the user from the list of those specifically allowed to see the
     * collection. If the collection's visibility is set to viewersOnly then only
     * such users will see the collection. (collectionviewers.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function delete($enterpriseId, $collectionId, $userId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'userId' => $userId];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Retrieves the ID of the user if they have been specifically allowed to see
     * the collection. If the collection's visibility is set to viewersOnly then
     * only these users will see the collection. (collectionviewers.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function get($enterpriseId, $collectionId, $userId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'userId' => $userId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_User");
    }

    /**
     * Retrieves the IDs of the users who have been specifically allowed to see the
     * collection. If the collection's visibility is set to viewersOnly then only
     * these users will see the collection.
     * (collectionviewers.listCollectionviewers)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function listCollectionviewers($enterpriseId, $collectionId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'collectionId' => $collectionId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidEnterprise_CollectionViewersListResponse");
    }

    /**
     * Adds the user to the list of those specifically allowed to see the
     * collection. If the collection's visibility is set to viewersOnly then only
     * such users will see the collection. This method supports patch semantics.
     * (collectionviewers.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param string $userId The ID of the user.
     * @param Google_Service_AndroidEnterprise_User|Google_User $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function patch($enterpriseId, $collectionId, $userId, Google_Service_AndroidEnterprise_User $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'userId' => $userId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidEnterprise_User");
    }

    /**
     * Adds the user to the list of those specifically allowed to see the
     * collection. If the collection's visibility is set to viewersOnly then only
     * such users will see the collection. (collectionviewers.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $collectionId The ID of the collection.
     * @param string $userId The ID of the user.
     * @param Google_Service_AndroidEnterprise_User|Google_User $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function update($enterpriseId, $collectionId, $userId, Google_Service_AndroidEnterprise_User $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'collectionId' => $collectionId, 'userId' => $userId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidEnterprise_User");
    }
}

/**
 * The "devices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $devices = $androidenterpriseService->devices;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Devices_Resource extends Google_Service_Resource
{

    /**
     * Retrieves the details of a device. (devices.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The ID of the device.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function get($enterpriseId, $userId, $deviceId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_Device");
    }

    /**
     * Retrieves whether a device is enabled or disabled for access by the user to
     * Google services. The device state takes effect only if enforcing EMM policies
     * on Android devices is enabled in the Google Admin Console. Otherwise, the
     * device state is ignored and all devices are allowed access to Google
     * services. (devices.getState)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The ID of the device.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function getState($enterpriseId, $userId, $deviceId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId];
        $params = array_merge($params, $optParams);

        return $this->call('getState', [$params], "Google_Service_AndroidEnterprise_DeviceState");
    }

    /**
     * Retrieves the IDs of all of a user's devices. (devices.listDevices)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function listDevices($enterpriseId, $userId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidEnterprise_DevicesListResponse");
    }

    /**
     * Sets whether a device is enabled or disabled for access by the user to Google
     * services. The device state takes effect only if enforcing EMM policies on
     * Android devices is enabled in the Google Admin Console. Otherwise, the device
     * state is ignored and all devices are allowed access to Google services.
     * (devices.setState)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The ID of the device.
     * @param Google_DeviceState|Google_Service_AndroidEnterprise_DeviceState $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function setState($enterpriseId, $userId, $deviceId, Google_Service_AndroidEnterprise_DeviceState $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('setState', [$params], "Google_Service_AndroidEnterprise_DeviceState");
    }
}

/**
 * The "enterprises" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $enterprises = $androidenterpriseService->enterprises;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Enterprises_Resource extends Google_Service_Resource
{

    /**
     * Deletes the binding between the MDM and enterprise. This is now deprecated;
     * use this to unenroll customers that were previously enrolled with the
     * 'insert' call, then enroll them again with the 'enroll' call.
     * (enterprises.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function delete($enterpriseId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Enrolls an enterprise with the calling MDM. (enterprises.enroll)
     *
     * @param string $token The token provided by the enterprise to register the
     *                                                                                 MDM.
     * @param Google_Enterprise|Google_Service_AndroidEnterprise_Enterprise $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function enroll($token, Google_Service_AndroidEnterprise_Enterprise $postBody, $optParams = [])
    {
        $params = ['token' => $token, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('enroll', [$params], "Google_Service_AndroidEnterprise_Enterprise");
    }

    /**
     * Retrieves the name and domain of an enterprise. (enterprises.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function get($enterpriseId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_Enterprise");
    }

    /**
     * Establishes the binding between the MDM and an enterprise. This is now
     * deprecated; use enroll instead. (enterprises.insert)
     *
     * @param string $token The token provided by the enterprise to register the
     *                                                                                 MDM.
     * @param Google_Enterprise|Google_Service_AndroidEnterprise_Enterprise $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function insert($token, Google_Service_AndroidEnterprise_Enterprise $postBody, $optParams = [])
    {
        $params = ['token' => $token, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [$params], "Google_Service_AndroidEnterprise_Enterprise");
    }

    /**
     * Looks up an enterprise by domain name. (enterprises.listEnterprises)
     *
     * @param string $domain The exact primary domain name of the enterprise to look
     *                          up.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function listEnterprises($domain, $optParams = [])
    {
        $params = ['domain' => $domain];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidEnterprise_EnterprisesListResponse");
    }

    /**
     * Set the account that will be used to authenticate to the API as the
     * enterprise. (enterprises.setAccount)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param Google_EnterpriseAccount|Google_Service_AndroidEnterprise_EnterpriseAccount $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function setAccount($enterpriseId, Google_Service_AndroidEnterprise_EnterpriseAccount $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('setAccount', [$params], "Google_Service_AndroidEnterprise_EnterpriseAccount");
    }

    /**
     * Unenrolls an enterprise from the calling MDM. (enterprises.unenroll)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function unenroll($enterpriseId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId];
        $params = array_merge($params, $optParams);

        return $this->call('unenroll', [$params]);
    }
}

/**
 * The "entitlements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $entitlements = $androidenterpriseService->entitlements;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Entitlements_Resource extends Google_Service_Resource
{

    /**
     * Removes an entitlement to an app for a user and uninstalls it.
     * (entitlements.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $entitlementId The ID of the entitlement, e.g.
     *                              "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function delete($enterpriseId, $userId, $entitlementId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'entitlementId' => $entitlementId];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Retrieves details of an entitlement. (entitlements.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $entitlementId The ID of the entitlement, e.g.
     *                              "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function get($enterpriseId, $userId, $entitlementId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'entitlementId' => $entitlementId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_Entitlement");
    }

    /**
     * List of all entitlements for the specified user. Only the ID is set.
     * (entitlements.listEntitlements)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function listEntitlements($enterpriseId, $userId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidEnterprise_EntitlementsListResponse");
    }

    /**
     * Adds or updates an entitlement to an app for a user. This method supports
     * patch semantics. (entitlements.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $entitlementId The ID of the entitlement, e.g.
     *                                                                                       "app:com.google.android.gm".
     * @param Google_Entitlement|Google_Service_AndroidEnterprise_Entitlement $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     * @opt_param bool install Set to true to also install the product on all the
     * user's devices where possible. Failure to install on one or more devices will
     * not prevent this operation from returning successfully, as long as the
     * entitlement was successfully assigned to the user.
     */
    public function patch($enterpriseId, $userId, $entitlementId, Google_Service_AndroidEnterprise_Entitlement $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'entitlementId' => $entitlementId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidEnterprise_Entitlement");
    }

    /**
     * Adds or updates an entitlement to an app for a user. (entitlements.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $entitlementId The ID of the entitlement, e.g.
     *                                                                                       "app:com.google.android.gm".
     * @param Google_Entitlement|Google_Service_AndroidEnterprise_Entitlement $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     * @opt_param bool install Set to true to also install the product on all the
     * user's devices where possible. Failure to install on one or more devices will
     * not prevent this operation from returning successfully, as long as the
     * entitlement was successfully assigned to the user.
     */
    public function update($enterpriseId, $userId, $entitlementId, Google_Service_AndroidEnterprise_Entitlement $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'entitlementId' => $entitlementId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidEnterprise_Entitlement");
    }
}

/**
 * The "grouplicenses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $grouplicenses = $androidenterpriseService->grouplicenses;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Grouplicenses_Resource extends Google_Service_Resource
{

    /**
     * Retrieves details of an enterprise's group license for a product.
     * (grouplicenses.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $groupLicenseId The ID of the product the group license is for,
     *                               e.g. "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function get($enterpriseId, $groupLicenseId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'groupLicenseId' => $groupLicenseId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_GroupLicense");
    }

    /**
     * Retrieves IDs of all products for which the enterprise has a group license.
     * (grouplicenses.listGrouplicenses)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function listGrouplicenses($enterpriseId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidEnterprise_GroupLicensesListResponse");
    }
}

/**
 * The "grouplicenseusers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $grouplicenseusers = $androidenterpriseService->grouplicenseusers;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Grouplicenseusers_Resource extends Google_Service_Resource
{

    /**
     * Retrieves the IDs of the users who have been granted entitlements under the
     * license. (grouplicenseusers.listGrouplicenseusers)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $groupLicenseId The ID of the product the group license is for,
     *                               e.g. "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function listGrouplicenseusers($enterpriseId, $groupLicenseId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'groupLicenseId' => $groupLicenseId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidEnterprise_GroupLicenseUsersListResponse");
    }
}

/**
 * The "installs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $installs = $androidenterpriseService->installs;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Installs_Resource extends Google_Service_Resource
{

    /**
     * Requests to remove an app from a device. A call to get or list will still
     * show the app as installed on the device until it is actually removed.
     * (installs.delete)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param string $installId The ID of the product represented by the install,
     *                             e.g. "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function delete($enterpriseId, $userId, $deviceId, $installId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Retrieves details of an installation of an app on a device. (installs.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param string $installId The ID of the product represented by the install,
     *                             e.g. "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function get($enterpriseId, $userId, $deviceId, $installId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_Install");
    }

    /**
     * Retrieves the details of all apps installed on the specified device.
     * (installs.listInstalls)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function listInstalls($enterpriseId, $userId, $deviceId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidEnterprise_InstallsListResponse");
    }

    /**
     * Requests to install the latest version of an app to a device. If the app is
     * already installed then it is updated to the latest version if necessary. This
     * method supports patch semantics. (installs.patch)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param string $installId The ID of the product represented by the install,
     *                                                                              e.g. "app:com.google.android.gm".
     * @param Google_Install|Google_Service_AndroidEnterprise_Install $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function patch($enterpriseId, $userId, $deviceId, $installId, Google_Service_AndroidEnterprise_Install $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidEnterprise_Install");
    }

    /**
     * Requests to install the latest version of an app to a device. If the app is
     * already installed then it is updated to the latest version if necessary.
     * (installs.update)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param string $deviceId The Android ID of the device.
     * @param string $installId The ID of the product represented by the install,
     *                                                                              e.g. "app:com.google.android.gm".
     * @param Google_Install|Google_Service_AndroidEnterprise_Install $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function update($enterpriseId, $userId, $deviceId, $installId, Google_Service_AndroidEnterprise_Install $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId, 'deviceId' => $deviceId, 'installId' => $installId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidEnterprise_Install");
    }
}

/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $permissions = $androidenterpriseService->permissions;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Permissions_Resource extends Google_Service_Resource
{

    /**
     * Retrieves details of an Android app permission for display to an enterprise
     * admin. (permissions.get)
     *
     * @param string $permissionId The ID of the permission.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     * @opt_param string language The BCP47 tag for the user's preferred language
     * (e.g. "en-US", "de")
     */
    public function get($permissionId, $optParams = [])
    {
        $params = ['permissionId' => $permissionId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_Permission");
    }
}

/**
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $products = $androidenterpriseService->products;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Products_Resource extends Google_Service_Resource
{

    /**
     * Retrieves details of a product for display to an enterprise admin.
     * (products.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product, e.g.
     *                             "app:com.google.android.gm".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     * @opt_param string language The BCP47 tag for the user's preferred language
     * (e.g. "en-US", "de").
     */
    public function get($enterpriseId, $productId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'productId' => $productId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_Product");
    }

    /**
     * Retrieves the schema defining app restrictions configurable for this product.
     * All products have a schema, but this may be empty if no app restrictions are
     * defined. (products.getAppRestrictionsSchema)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     * @opt_param string language The BCP47 tag for the user's preferred language
     * (e.g. "en-US", "de").
     */
    public function getAppRestrictionsSchema($enterpriseId, $productId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'productId' => $productId];
        $params = array_merge($params, $optParams);

        return $this->call('getAppRestrictionsSchema', [$params], "Google_Service_AndroidEnterprise_AppRestrictionsSchema");
    }

    /**
     * Retrieves the Android app permissions required by this app.
     * (products.getPermissions)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function getPermissions($enterpriseId, $productId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'productId' => $productId];
        $params = array_merge($params, $optParams);

        return $this->call('getPermissions', [$params], "Google_Service_AndroidEnterprise_ProductPermissions");
    }

    /**
     * Updates the set of Android app permissions for this app that have been
     * accepted by the enterprise. (products.updatePermissions)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $productId The ID of the product.
     * @param Google_ProductPermissions|Google_Service_AndroidEnterprise_ProductPermissions $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function updatePermissions($enterpriseId, $productId, Google_Service_AndroidEnterprise_ProductPermissions $postBody, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'productId' => $productId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('updatePermissions', [$params], "Google_Service_AndroidEnterprise_ProductPermissions");
    }
}

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $users = $androidenterpriseService->users;
 *  </code>
 */
class Google_Service_AndroidEnterprise_Users_Resource extends Google_Service_Resource
{

    /**
     * Generates a token (activation code) to allow this user to configure their
     * work account in the Android Setup Wizard. Revokes any previously generated
     * token. (users.generateToken)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function generateToken($enterpriseId, $userId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId];
        $params = array_merge($params, $optParams);

        return $this->call('generateToken', [$params], "Google_Service_AndroidEnterprise_UserToken");
    }

    /**
     * Retrieves a user's details. (users.get)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function get($enterpriseId, $userId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidEnterprise_User");
    }

    /**
     * Looks up a user by email address. (users.listUsers)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $email The exact primary email address of the user to look up.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function listUsers($enterpriseId, $email, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'email' => $email];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidEnterprise_UsersListResponse");
    }

    /**
     * Revokes a previously generated token (activation code) for the user.
     * (users.revokeToken)
     *
     * @param string $enterpriseId The ID of the enterprise.
     * @param string $userId The ID of the user.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @throws Google_Exception
     */
    public function revokeToken($enterpriseId, $userId, $optParams = [])
    {
        $params = ['enterpriseId' => $enterpriseId, 'userId' => $userId];
        $params = array_merge($params, $optParams);

        return $this->call('revokeToken', [$params]);
    }
}


/**
 * Class Google_Service_AndroidEnterprise_AppRestrictionsSchema
 */
class Google_Service_AndroidEnterprise_AppRestrictionsSchema extends Google_Collection
{
    protected $collection_key = 'restrictions';
    protected $internal_gapi_mappings = [];
    protected $restrictionsType = 'Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestriction';
    protected $restrictionsDataType = 'array';


    /**
     * @param $restrictions
     */
    public function setRestrictions($restrictions)
    {
        $this->restrictions = $restrictions;
    }

    /**
     * @return mixed
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestriction
 */
class Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestriction extends Google_Collection
{
    public $description;
    public $entry;
    public $entryValue;
    public $key;
    public $restrictionType;
    public $title;
    protected $collection_key = 'entryValue';
    protected $internal_gapi_mappings = [];
    protected $defaultValueType = 'Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue';
    protected $defaultValueDataType = '';

    /**
     * @param Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue $defaultValue
     */
    public function setDefaultValue(Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param $entry
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
    }

    /**
     * @return mixed
     */
    public function getEntryValue()
    {
        return $this->entryValue;
    }

    /**
     * @param $entryValue
     */
    public function setEntryValue($entryValue)
    {
        $this->entryValue = $entryValue;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getRestrictionType()
    {
        return $this->restrictionType;
    }

    /**
     * @param $restrictionType
     */
    public function setRestrictionType($restrictionType)
    {
        $this->restrictionType = $restrictionType;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue
 */
class Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue extends Google_Collection
{
    public $type;
    public $valueBool;
    public $valueInteger;
    public $valueMultiselect;
    public $valueString;
    protected $collection_key = 'valueMultiselect';
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getValueBool()
    {
        return $this->valueBool;
    }

    /**
     * @param $valueBool
     */
    public function setValueBool($valueBool)
    {
        $this->valueBool = $valueBool;
    }

    /**
     * @return mixed
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * @param $valueInteger
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
    }

    /**
     * @return mixed
     */
    public function getValueMultiselect()
    {
        return $this->valueMultiselect;
    }

    /**
     * @param $valueMultiselect
     */
    public function setValueMultiselect($valueMultiselect)
    {
        $this->valueMultiselect = $valueMultiselect;
    }

    /**
     * @return mixed
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * @param $valueString
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_Collection
 */
class Google_Service_AndroidEnterprise_Collection extends Google_Collection
{
    public $collectionId;
    public $kind;
    public $name;
    public $productId;
    public $visibility;
    protected $collection_key = 'productId';
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getCollectionId()
    {
        return $this->collectionId;
    }

    /**
     * @param $collectionId
     */
    public function setCollectionId($collectionId)
    {
        $this->collectionId = $collectionId;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_CollectionViewersListResponse
 */
class Google_Service_AndroidEnterprise_CollectionViewersListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'user';
    protected $internal_gapi_mappings = [];
    protected $userType = 'Google_Service_AndroidEnterprise_User';
    protected $userDataType = 'array';

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
     * @param $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_CollectionsListResponse
 */
class Google_Service_AndroidEnterprise_CollectionsListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'collection';
    protected $internal_gapi_mappings = [];
    protected $collectionType = 'Google_Service_AndroidEnterprise_Collection';
    protected $collectionDataType = 'array';

    /**
     * @param $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
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
}

/**
 * Class Google_Service_AndroidEnterprise_Device
 */
class Google_Service_AndroidEnterprise_Device extends Google_Model
{
    public $androidId;
    public $kind;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getAndroidId()
    {
        return $this->androidId;
    }

    /**
     * @param $androidId
     */
    public function setAndroidId($androidId)
    {
        $this->androidId = $androidId;
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
}

/**
 * Class Google_Service_AndroidEnterprise_DeviceState
 */
class Google_Service_AndroidEnterprise_DeviceState extends Google_Model
{
    public $accountState;
    public $kind;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getAccountState()
    {
        return $this->accountState;
    }

    /**
     * @param $accountState
     */
    public function setAccountState($accountState)
    {
        $this->accountState = $accountState;
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
}

/**
 * Class Google_Service_AndroidEnterprise_DevicesListResponse
 */
class Google_Service_AndroidEnterprise_DevicesListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'device';
    protected $internal_gapi_mappings = [];
    protected $deviceType = 'Google_Service_AndroidEnterprise_Device';
    protected $deviceDataType = 'array';

    /**
     * @param $device
     */
    public function setDevice($device)
    {
        $this->device = $device;
    }

    /**
     * @return mixed
     */
    public function getDevice()
    {
        return $this->device;
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
}

/**
 * Class Google_Service_AndroidEnterprise_Enterprise
 */
class Google_Service_AndroidEnterprise_Enterprise extends Google_Model
{
    public $id;
    public $kind;
    public $name;
    public $primaryDomain;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrimaryDomain()
    {
        return $this->primaryDomain;
    }

    /**
     * @param $primaryDomain
     */
    public function setPrimaryDomain($primaryDomain)
    {
        $this->primaryDomain = $primaryDomain;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_EnterpriseAccount
 */
class Google_Service_AndroidEnterprise_EnterpriseAccount extends Google_Model
{
    public $accountEmail;
    public $kind;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getAccountEmail()
    {
        return $this->accountEmail;
    }

    /**
     * @param $accountEmail
     */
    public function setAccountEmail($accountEmail)
    {
        $this->accountEmail = $accountEmail;
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
}

/**
 * Class Google_Service_AndroidEnterprise_EnterprisesListResponse
 */
class Google_Service_AndroidEnterprise_EnterprisesListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'enterprise';
    protected $internal_gapi_mappings = [];
    protected $enterpriseType = 'Google_Service_AndroidEnterprise_Enterprise';
    protected $enterpriseDataType = 'array';

    /**
     * @param $enterprise
     */
    public function setEnterprise($enterprise)
    {
        $this->enterprise = $enterprise;
    }

    /**
     * @return mixed
     */
    public function getEnterprise()
    {
        return $this->enterprise;
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
}

/**
 * Class Google_Service_AndroidEnterprise_Entitlement
 */
class Google_Service_AndroidEnterprise_Entitlement extends Google_Model
{
    public $kind;
    public $productId;
    public $reason;
    protected $internal_gapi_mappings = [];

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
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_EntitlementsListResponse
 */
class Google_Service_AndroidEnterprise_EntitlementsListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'entitlement';
    protected $internal_gapi_mappings = [];
    protected $entitlementType = 'Google_Service_AndroidEnterprise_Entitlement';
    protected $entitlementDataType = 'array';

    /**
     * @param $entitlement
     */
    public function setEntitlement($entitlement)
    {
        $this->entitlement = $entitlement;
    }

    /**
     * @return mixed
     */
    public function getEntitlement()
    {
        return $this->entitlement;
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
}

/**
 * Class Google_Service_AndroidEnterprise_GroupLicense
 */
class Google_Service_AndroidEnterprise_GroupLicense extends Google_Model
{
    public $acquisitionKind;
    public $approval;
    public $kind;
    public $numProvisioned;
    public $numPurchased;
    public $productId;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getAcquisitionKind()
    {
        return $this->acquisitionKind;
    }

    /**
     * @param $acquisitionKind
     */
    public function setAcquisitionKind($acquisitionKind)
    {
        $this->acquisitionKind = $acquisitionKind;
    }

    /**
     * @return mixed
     */
    public function getApproval()
    {
        return $this->approval;
    }

    /**
     * @param $approval
     */
    public function setApproval($approval)
    {
        $this->approval = $approval;
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
    public function getNumProvisioned()
    {
        return $this->numProvisioned;
    }

    /**
     * @param $numProvisioned
     */
    public function setNumProvisioned($numProvisioned)
    {
        $this->numProvisioned = $numProvisioned;
    }

    /**
     * @return mixed
     */
    public function getNumPurchased()
    {
        return $this->numPurchased;
    }

    /**
     * @param $numPurchased
     */
    public function setNumPurchased($numPurchased)
    {
        $this->numPurchased = $numPurchased;
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
}

/**
 * Class Google_Service_AndroidEnterprise_GroupLicenseUsersListResponse
 */
class Google_Service_AndroidEnterprise_GroupLicenseUsersListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'user';
    protected $internal_gapi_mappings = [];
    protected $userType = 'Google_Service_AndroidEnterprise_User';
    protected $userDataType = 'array';

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
     * @param $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_GroupLicensesListResponse
 */
class Google_Service_AndroidEnterprise_GroupLicensesListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'groupLicense';
    protected $internal_gapi_mappings = [];
    protected $groupLicenseType = 'Google_Service_AndroidEnterprise_GroupLicense';
    protected $groupLicenseDataType = 'array';

    /**
     * @param $groupLicense
     */
    public function setGroupLicense($groupLicense)
    {
        $this->groupLicense = $groupLicense;
    }

    /**
     * @return mixed
     */
    public function getGroupLicense()
    {
        return $this->groupLicense;
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
}

/**
 * Class Google_Service_AndroidEnterprise_Install
 */
class Google_Service_AndroidEnterprise_Install extends Google_Model
{
    public $installState;
    public $kind;
    public $productId;
    public $versionCode;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getInstallState()
    {
        return $this->installState;
    }

    /**
     * @param $installState
     */
    public function setInstallState($installState)
    {
        $this->installState = $installState;
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
    public function getVersionCode()
    {
        return $this->versionCode;
    }

    /**
     * @param $versionCode
     */
    public function setVersionCode($versionCode)
    {
        $this->versionCode = $versionCode;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_InstallsListResponse
 */
class Google_Service_AndroidEnterprise_InstallsListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'install';
    protected $internal_gapi_mappings = [];
    protected $installType = 'Google_Service_AndroidEnterprise_Install';
    protected $installDataType = 'array';

    /**
     * @param $install
     */
    public function setInstall($install)
    {
        $this->install = $install;
    }

    /**
     * @return mixed
     */
    public function getInstall()
    {
        return $this->install;
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
}

/**
 * Class Google_Service_AndroidEnterprise_Permission
 */
class Google_Service_AndroidEnterprise_Permission extends Google_Model
{
    public $description;
    public $kind;
    public $name;
    public $permissionId;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * @param $permissionId
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_Product
 */
class Google_Service_AndroidEnterprise_Product extends Google_Model
{
    public $authorName;
    public $detailsUrl;
    public $iconUrl;
    public $kind;
    public $productId;
    public $title;
    public $workDetailsUrl;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param $authorName
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    /**
     * @return mixed
     */
    public function getDetailsUrl()
    {
        return $this->detailsUrl;
    }

    /**
     * @param $detailsUrl
     */
    public function setDetailsUrl($detailsUrl)
    {
        $this->detailsUrl = $detailsUrl;
    }

    /**
     * @return mixed
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * @param $iconUrl
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getWorkDetailsUrl()
    {
        return $this->workDetailsUrl;
    }

    /**
     * @param $workDetailsUrl
     */
    public function setWorkDetailsUrl($workDetailsUrl)
    {
        $this->workDetailsUrl = $workDetailsUrl;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_ProductPermission
 */
class Google_Service_AndroidEnterprise_ProductPermission extends Google_Model
{
    public $permissionId;
    public $state;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * @param $permissionId
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_ProductPermissions
 */
class Google_Service_AndroidEnterprise_ProductPermissions extends Google_Collection
{
    public $kind;
    public $productId;
    protected $collection_key = 'permission';
    protected $internal_gapi_mappings = [];
    protected $permissionType = 'Google_Service_AndroidEnterprise_ProductPermission';
    protected $permissionDataType = 'array';

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
     * @param $permission
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }

    /**
     * @return mixed
     */
    public function getPermission()
    {
        return $this->permission;
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
}

/**
 * Class Google_Service_AndroidEnterprise_User
 */
class Google_Service_AndroidEnterprise_User extends Google_Model
{
    public $id;
    public $kind;
    public $primaryEmail;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
    }

    /**
     * @param $primaryEmail
     */
    public function setPrimaryEmail($primaryEmail)
    {
        $this->primaryEmail = $primaryEmail;
    }
}

/**
 * Class Google_Service_AndroidEnterprise_UserToken
 */
class Google_Service_AndroidEnterprise_UserToken extends Google_Model
{
    public $kind;
    public $token;
    public $userId;
    protected $internal_gapi_mappings = [];

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
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param $token
     */
    public function setToken($token)
    {
        $this->token = $token;
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
 * Class Google_Service_AndroidEnterprise_UsersListResponse
 */
class Google_Service_AndroidEnterprise_UsersListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'user';
    protected $internal_gapi_mappings = [];
    protected $userType = 'Google_Service_AndroidEnterprise_User';
    protected $userDataType = 'array';

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
     * @param $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
}
