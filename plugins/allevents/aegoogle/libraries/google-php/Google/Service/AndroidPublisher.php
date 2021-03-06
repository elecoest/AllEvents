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
 * Service definition for AndroidPublisher (v2).
 *
 * <p>
 * Lets Android application developers access their Google Play accounts.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/android-publisher" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_AndroidPublisher extends Google_Service
{
    /** View and manage your Google Play Developer account. */
    const ANDROIDPUBLISHER =
        "https://www.googleapis.com/auth/androidpublisher";

    public $edits;
    public $edits_apklistings;
    public $edits_apks;
    public $edits_details;
    public $edits_expansionfiles;
    public $edits_images;
    public $edits_listings;
    public $edits_testers;
    public $edits_tracks;
    public $inappproducts;
    public $purchases_products;
    public $purchases_subscriptions;


    /**
     * Constructs the internal representation of the AndroidPublisher service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'androidpublisher/v2/applications/';
        $this->version = 'v2';
        $this->serviceName = 'androidpublisher';

        $this->edits = new Google_Service_AndroidPublisher_Edits_Resource(
            $this,
            $this->serviceName,
            'edits',
            [
                'methods' => [
                    'commit' => [
                        'path' => '{packageName}/edits/{editId}:commit',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'delete' => [
                        'path' => '{packageName}/edits/{editId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => '{packageName}/edits/{editId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'insert' => [
                        'path' => '{packageName}/edits',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'validate' => [
                        'path' => '{packageName}/edits/{editId}:validate',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->edits_apklistings = new Google_Service_AndroidPublisher_EditsApklistings_Resource(
            $this,
            $this->serviceName,
            'apklistings',
            [
                'methods' => [
                    'delete' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/listings/{language}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'deleteall' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/listings',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/listings/{language}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/listings',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/listings/{language}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'update' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/listings/{language}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->edits_apks = new Google_Service_AndroidPublisher_EditsApks_Resource(
            $this,
            $this->serviceName,
            'apks',
            [
                'methods' => [
                    'addexternallyhosted' => [
                        'path' => '{packageName}/edits/{editId}/apks/externallyHosted',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => '{packageName}/edits/{editId}/apks',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'upload' => [
                        'path' => '{packageName}/edits/{editId}/apks',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->edits_details = new Google_Service_AndroidPublisher_EditsDetails_Resource(
            $this,
            $this->serviceName,
            'details',
            [
                'methods' => [
                    'get' => [
                        'path' => '{packageName}/edits/{editId}/details',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => '{packageName}/edits/{editId}/details',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'update' => [
                        'path' => '{packageName}/edits/{editId}/details',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->edits_expansionfiles = new Google_Service_AndroidPublisher_EditsExpansionfiles_Resource(
            $this,
            $this->serviceName,
            'expansionfiles',
            [
                'methods' => [
                    'get' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/expansionFiles/{expansionFileType}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                            'expansionFileType' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/expansionFiles/{expansionFileType}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                            'expansionFileType' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'update' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/expansionFiles/{expansionFileType}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                            'expansionFileType' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'upload' => [
                        'path' => '{packageName}/edits/{editId}/apks/{apkVersionCode}/expansionFiles/{expansionFileType}',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'apkVersionCode' => [
                                'location' => 'path',
                                'type' => 'integer',
                                'required' => true,
                            ],
                            'expansionFileType' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->edits_images = new Google_Service_AndroidPublisher_EditsImages_Resource(
            $this,
            $this->serviceName,
            'images',
            [
                'methods' => [
                    'delete' => [
                        'path' => '{packageName}/edits/{editId}/listings/{language}/{imageType}/{imageId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageType' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'deleteall' => [
                        'path' => '{packageName}/edits/{editId}/listings/{language}/{imageType}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageType' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => '{packageName}/edits/{editId}/listings/{language}/{imageType}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageType' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'upload' => [
                        'path' => '{packageName}/edits/{editId}/listings/{language}/{imageType}',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageType' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->edits_listings = new Google_Service_AndroidPublisher_EditsListings_Resource(
            $this,
            $this->serviceName,
            'listings',
            [
                'methods' => [
                    'delete' => [
                        'path' => '{packageName}/edits/{editId}/listings/{language}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'deleteall' => [
                        'path' => '{packageName}/edits/{editId}/listings',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => '{packageName}/edits/{editId}/listings/{language}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => '{packageName}/edits/{editId}/listings',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => '{packageName}/edits/{editId}/listings/{language}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'update' => [
                        'path' => '{packageName}/edits/{editId}/listings/{language}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'language' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->edits_testers = new Google_Service_AndroidPublisher_EditsTesters_Resource(
            $this,
            $this->serviceName,
            'testers',
            [
                'methods' => [
                    'get' => [
                        'path' => '{packageName}/edits/{editId}/testers/{track}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'track' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => '{packageName}/edits/{editId}/testers/{track}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'track' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'update' => [
                        'path' => '{packageName}/edits/{editId}/testers/{track}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'track' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->edits_tracks = new Google_Service_AndroidPublisher_EditsTracks_Resource(
            $this,
            $this->serviceName,
            'tracks',
            [
                'methods' => [
                    'get' => [
                        'path' => '{packageName}/edits/{editId}/tracks/{track}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'track' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'list' => [
                        'path' => '{packageName}/edits/{editId}/tracks',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'patch' => [
                        'path' => '{packageName}/edits/{editId}/tracks/{track}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'track' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'update' => [
                        'path' => '{packageName}/edits/{editId}/tracks/{track}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'editId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'track' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->inappproducts = new Google_Service_AndroidPublisher_Inappproducts_Resource(
            $this,
            $this->serviceName,
            'inappproducts',
            [
                'methods' => [
                    'batch' => [
                        'path' => 'inappproducts/batch',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ], 'delete' => [
                        'path' => '{packageName}/inappproducts/{sku}',
                        'httpMethod' => 'DELETE',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sku' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => '{packageName}/inappproducts/{sku}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sku' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'insert' => [
                        'path' => '{packageName}/inappproducts',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'autoConvertMissingPrices' => [
                                'location' => 'query',
                                'type' => 'boolean',
                            ],
                        ],
                    ], 'list' => [
                        'path' => '{packageName}/inappproducts',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'token' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'startIndex' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                            'maxResults' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ], 'patch' => [
                        'path' => '{packageName}/inappproducts/{sku}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sku' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'autoConvertMissingPrices' => [
                                'location' => 'query',
                                'type' => 'boolean',
                            ],
                        ],
                    ], 'update' => [
                        'path' => '{packageName}/inappproducts/{sku}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sku' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'autoConvertMissingPrices' => [
                                'location' => 'query',
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->purchases_products = new Google_Service_AndroidPublisher_PurchasesProducts_Resource(
            $this,
            $this->serviceName,
            'products',
            [
                'methods' => [
                    'get' => [
                        'path' => '{packageName}/purchases/products/{productId}/tokens/{token}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'token' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
        $this->purchases_subscriptions = new Google_Service_AndroidPublisher_PurchasesSubscriptions_Resource(
            $this,
            $this->serviceName,
            'subscriptions',
            [
                'methods' => [
                    'cancel' => [
                        'path' => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}:cancel',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'subscriptionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'token' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'defer' => [
                        'path' => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}:defer',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'subscriptionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'token' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'get' => [
                        'path' => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'subscriptionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'token' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'refund' => [
                        'path' => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}:refund',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'subscriptionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'token' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ], 'revoke' => [
                        'path' => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}:revoke',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'packageName' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'subscriptionId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                            'token' => [
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
 * The "edits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $edits = $androidpublisherService->edits;
 *  </code>
 */
class Google_Service_AndroidPublisher_Edits_Resource extends Google_Service_Resource
{

    /**
     * Commits/applies the changes made in this edit back to the app. (edits.commit)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function commit($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('commit', [$params], "Google_Service_AndroidPublisher_AppEdit");
    }

    /**
     * Deletes an edit for an app. Creating a new edit will automatically delete any
     * of your previous edits so this method need only be called if you want to
     * preemptively abandon an edit. (edits.delete)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function delete($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Returns information about the edit specified. Calls will fail if the edit is
     * no long active (e.g. has been deleted, superseded or expired). (edits.get)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_AppEdit");
    }

    /**
     * Creates a new edit for an app, populated with the app's current state.
     * (edits.insert)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                            being updated; for example, "com.spiffygame".
     * @param Google_AppEdit|Google_Service_AndroidPublisher_AppEdit $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function insert($packageName, Google_Service_AndroidPublisher_AppEdit $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [$params], "Google_Service_AndroidPublisher_AppEdit");
    }

    /**
     * Checks that the edit can be successfully committed. The edit's changes are
     * not applied to the live app. (edits.validate)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function validate($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('validate', [$params], "Google_Service_AndroidPublisher_AppEdit");
    }
}

/**
 * The "apklistings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $apklistings = $androidpublisherService->apklistings;
 *  </code>
 */
class Google_Service_AndroidPublisher_EditsApklistings_Resource extends Google_Service_Resource
{

    /**
     * Deletes the APK-specific localized listing for a specified APK and language
     * code. (apklistings.delete)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                               being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The APK version code whose APK-specific listings
     *                               should be read or modified.
     * @param string $language The language code (a BCP-47 language tag) of the APK-
     *                               specific localized listing to read or modify. For example, to select Austrian
     *                               German, pass "de-AT".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function delete($packageName, $editId, $apkVersionCode, $language, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode, 'language' => $language];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Deletes all the APK-specific localized listings for a specified APK.
     * (apklistings.deleteall)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                               being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The APK version code whose APK-specific listings
     *                               should be read or modified.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function deleteall($packageName, $editId, $apkVersionCode, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode];
        $params = array_merge($params, $optParams);

        return $this->call('deleteall', [$params]);
    }

    /**
     * Fetches the APK-specific localized listing for a specified APK and language
     * code. (apklistings.get)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                               being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The APK version code whose APK-specific listings
     *                               should be read or modified.
     * @param string $language The language code (a BCP-47 language tag) of the APK-
     *                               specific localized listing to read or modify. For example, to select Austrian
     *                               German, pass "de-AT".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $editId, $apkVersionCode, $language, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode, 'language' => $language];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_ApkListing");
    }

    /**
     * Lists all the APK-specific localized listings for a specified APK.
     * (apklistings.listEditsApklistings)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                               being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The APK version code whose APK-specific listings
     *                               should be read or modified.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function listEditsApklistings($packageName, $editId, $apkVersionCode, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidPublisher_ApkListingsListResponse");
    }

    /**
     * Updates or creates the APK-specific localized listing for a specified APK and
     * language code. This method supports patch semantics. (apklistings.patch)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                                     being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The APK version code whose APK-specific listings
     *                                                                                     should be read or modified.
     * @param string $language The language code (a BCP-47 language tag) of the APK-
     *                                                                                     specific localized listing to read or modify. For example, to select Austrian
     *                                                                                     German, pass "de-AT".
     * @param Google_ApkListing|Google_Service_AndroidPublisher_ApkListing $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function patch($packageName, $editId, $apkVersionCode, $language, Google_Service_AndroidPublisher_ApkListing $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode, 'language' => $language, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidPublisher_ApkListing");
    }

    /**
     * Updates or creates the APK-specific localized listing for a specified APK and
     * language code. (apklistings.update)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                                     being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The APK version code whose APK-specific listings
     *                                                                                     should be read or modified.
     * @param string $language The language code (a BCP-47 language tag) of the APK-
     *                                                                                     specific localized listing to read or modify. For example, to select Austrian
     *                                                                                     German, pass "de-AT".
     * @param Google_ApkListing|Google_Service_AndroidPublisher_ApkListing $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function update($packageName, $editId, $apkVersionCode, $language, Google_Service_AndroidPublisher_ApkListing $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode, 'language' => $language, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidPublisher_ApkListing");
    }
}

/**
 * The "apks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $apks = $androidpublisherService->apks;
 *  </code>
 */
class Google_Service_AndroidPublisher_EditsApks_Resource extends Google_Service_Resource
{

    /**
     * Creates a new APK without uploading the APK itself to Google Play, instead
     * hosting the APK at a specified URL. This function is only available to
     * enterprises using Google Play for Work whose application is configured to
     * restrict distribution to the enterprise domain. (apks.addexternallyhosted)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                                                                          being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param Google_ApksAddExternallyHostedRequest|Google_Service_AndroidPublisher_ApksAddExternallyHostedRequest $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function addexternallyhosted($packageName, $editId, Google_Service_AndroidPublisher_ApksAddExternallyHostedRequest $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('addexternallyhosted', [$params], "Google_Service_AndroidPublisher_ApksAddExternallyHostedResponse");
    }

    /**
     * (apks.listEditsApks)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function listEditsApks($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidPublisher_ApksListResponse");
    }

    /**
     * (apks.upload)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function upload($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('upload', [$params], "Google_Service_AndroidPublisher_Apk");
    }
}

/**
 * The "details" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $details = $androidpublisherService->details;
 *  </code>
 */
class Google_Service_AndroidPublisher_EditsDetails_Resource extends Google_Service_Resource
{

    /**
     * Fetches app details for this edit. This includes the default language and
     * developer support contact information. (details.get)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_AppDetails");
    }

    /**
     * Updates app details for this edit. This method supports patch semantics.
     * (details.patch)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                                  being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param Google_AppDetails|Google_Service_AndroidPublisher_AppDetails $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function patch($packageName, $editId, Google_Service_AndroidPublisher_AppDetails $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidPublisher_AppDetails");
    }

    /**
     * Updates app details for this edit. (details.update)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                                  being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param Google_AppDetails|Google_Service_AndroidPublisher_AppDetails $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function update($packageName, $editId, Google_Service_AndroidPublisher_AppDetails $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidPublisher_AppDetails");
    }
}

/**
 * The "expansionfiles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $expansionfiles = $androidpublisherService->expansionfiles;
 *  </code>
 */
class Google_Service_AndroidPublisher_EditsExpansionfiles_Resource extends Google_Service_Resource
{

    /**
     * Fetches the Expansion File configuration for the APK specified.
     * (expansionfiles.get)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                               being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The version code of the APK whose Expansion File
     *                               configuration is being read or modified.
     * @param string $expansionFileType
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $editId, $apkVersionCode, $expansionFileType, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode, 'expansionFileType' => $expansionFileType];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_ExpansionFile");
    }

    /**
     * Updates the APK's Expansion File configuration to reference another APK's
     * Expansion Files. To add a new Expansion File use the Upload method. This
     * method supports patch semantics. (expansionfiles.patch)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                                           being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The version code of the APK whose Expansion File
     *                                                                                           configuration is being read or modified.
     * @param string $expansionFileType
     * @param Google_ExpansionFile|Google_Service_AndroidPublisher_ExpansionFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function patch($packageName, $editId, $apkVersionCode, $expansionFileType, Google_Service_AndroidPublisher_ExpansionFile $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode, 'expansionFileType' => $expansionFileType, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidPublisher_ExpansionFile");
    }

    /**
     * Updates the APK's Expansion File configuration to reference another APK's
     * Expansion Files. To add a new Expansion File use the Upload method.
     * (expansionfiles.update)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                                           being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The version code of the APK whose Expansion File
     *                                                                                           configuration is being read or modified.
     * @param string $expansionFileType
     * @param Google_ExpansionFile|Google_Service_AndroidPublisher_ExpansionFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function update($packageName, $editId, $apkVersionCode, $expansionFileType, Google_Service_AndroidPublisher_ExpansionFile $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode, 'expansionFileType' => $expansionFileType, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidPublisher_ExpansionFile");
    }

    /**
     * Uploads and attaches a new Expansion File to the APK specified.
     * (expansionfiles.upload)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                               being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param int $apkVersionCode The version code of the APK whose Expansion File
     *                               configuration is being read or modified.
     * @param string $expansionFileType
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function upload($packageName, $editId, $apkVersionCode, $expansionFileType, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'apkVersionCode' => $apkVersionCode, 'expansionFileType' => $expansionFileType];
        $params = array_merge($params, $optParams);

        return $this->call('upload', [$params], "Google_Service_AndroidPublisher_ExpansionFilesUploadResponse");
    }
}

/**
 * The "images" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $images = $androidpublisherService->images;
 *  </code>
 */
class Google_Service_AndroidPublisher_EditsImages_Resource extends Google_Service_Resource
{

    /**
     * Deletes the image (specified by id) from the edit. (images.delete)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $language The language code (a BCP-47 language tag) of the
     *                            localized listing whose images are to read or modified. For example, to
     *                            select Austrian German, pass "de-AT".
     * @param string $imageType
     * @param string $imageId Unique identifier an image within the set of images
     *                            attached to this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function delete($packageName, $editId, $language, $imageType, $imageId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'imageType' => $imageType, 'imageId' => $imageId];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Deletes all images for the specified language and image type.
     * (images.deleteall)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $language The language code (a BCP-47 language tag) of the
     *                            localized listing whose images are to read or modified. For example, to
     *                            select Austrian German, pass "de-AT".
     * @param string $imageType
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function deleteall($packageName, $editId, $language, $imageType, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'imageType' => $imageType];
        $params = array_merge($params, $optParams);

        return $this->call('deleteall', [$params], "Google_Service_AndroidPublisher_ImagesDeleteAllResponse");
    }

    /**
     * Lists all images for the specified language and image type.
     * (images.listEditsImages)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $language The language code (a BCP-47 language tag) of the
     *                            localized listing whose images are to read or modified. For example, to
     *                            select Austrian German, pass "de-AT".
     * @param string $imageType
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function listEditsImages($packageName, $editId, $language, $imageType, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'imageType' => $imageType];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidPublisher_ImagesListResponse");
    }

    /**
     * Uploads a new image and adds it to the list of images for the specified
     * language and image type. (images.upload)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $language The language code (a BCP-47 language tag) of the
     *                            localized listing whose images are to read or modified. For example, to
     *                            select Austrian German, pass "de-AT".
     * @param string $imageType
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function upload($packageName, $editId, $language, $imageType, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'imageType' => $imageType];
        $params = array_merge($params, $optParams);

        return $this->call('upload', [$params], "Google_Service_AndroidPublisher_ImagesUploadResponse");
    }
}

/**
 * The "listings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $listings = $androidpublisherService->listings;
 *  </code>
 */
class Google_Service_AndroidPublisher_EditsListings_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified localized store listing from an edit. (listings.delete)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $language The language code (a BCP-47 language tag) of the
     *                            localized listing to read or modify. For example, to select Austrian German,
     *                            pass "de-AT".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function delete($packageName, $editId, $language, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'language' => $language];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Deletes all localized listings from an edit. (listings.deleteall)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function deleteall($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('deleteall', [$params]);
    }

    /**
     * Fetches information about a localized store listing. (listings.get)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $language The language code (a BCP-47 language tag) of the
     *                            localized listing to read or modify. For example, to select Austrian German,
     *                            pass "de-AT".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $editId, $language, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'language' => $language];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_Listing");
    }

    /**
     * Returns all of the localized store listings attached to this edit.
     * (listings.listEditsListings)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function listEditsListings($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidPublisher_ListingsListResponse");
    }

    /**
     * Creates or updates a localized store listing. This method supports patch
     * semantics. (listings.patch)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $language The language code (a BCP-47 language tag) of the
     *                                                                            localized listing to read or modify. For example, to select Austrian German,
     *                                                                            pass "de-AT".
     * @param Google_Listing|Google_Service_AndroidPublisher_Listing $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function patch($packageName, $editId, $language, Google_Service_AndroidPublisher_Listing $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidPublisher_Listing");
    }

    /**
     * Creates or updates a localized store listing. (listings.update)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $language The language code (a BCP-47 language tag) of the
     *                                                                            localized listing to read or modify. For example, to select Austrian German,
     *                                                                            pass "de-AT".
     * @param Google_Listing|Google_Service_AndroidPublisher_Listing $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function update($packageName, $editId, $language, Google_Service_AndroidPublisher_Listing $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'language' => $language, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidPublisher_Listing");
    }
}

/**
 * The "testers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $testers = $androidpublisherService->testers;
 *  </code>
 */
class Google_Service_AndroidPublisher_EditsTesters_Resource extends Google_Service_Resource
{

    /**
     * (testers.get)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $track
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $editId, $track, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'track' => $track];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_Testers");
    }

    /**
     * (testers.patch)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $track
     * @param Google_Service_AndroidPublisher_Testers|Google_Testers $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function patch($packageName, $editId, $track, Google_Service_AndroidPublisher_Testers $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'track' => $track, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidPublisher_Testers");
    }

    /**
     * (testers.update)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $track
     * @param Google_Service_AndroidPublisher_Testers|Google_Testers $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function update($packageName, $editId, $track, Google_Service_AndroidPublisher_Testers $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'track' => $track, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidPublisher_Testers");
    }
}

/**
 * The "tracks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $tracks = $androidpublisherService->tracks;
 *  </code>
 */
class Google_Service_AndroidPublisher_EditsTracks_Resource extends Google_Service_Resource
{

    /**
     * Fetches the track configuration for the specified track type. Includes the
     * APK version codes that are in this track. (tracks.get)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $track The track type to read or modify.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $editId, $track, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'track' => $track];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_Track");
    }

    /**
     * Lists all the track configurations for this edit. (tracks.listEditsTracks)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                            being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function listEditsTracks($packageName, $editId, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidPublisher_TracksListResponse");
    }

    /**
     * Updates the track configuration for the specified track type. When halted,
     * the rollout track cannot be updated without adding new APKs, and adding new
     * APKs will cause it to resume. This method supports patch semantics.
     * (tracks.patch)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                        being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $track The track type to read or modify.
     * @param Google_Service_AndroidPublisher_Track|Google_Track $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function patch($packageName, $editId, $track, Google_Service_AndroidPublisher_Track $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'track' => $track, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidPublisher_Track");
    }

    /**
     * Updates the track configuration for the specified track type. When halted,
     * the rollout track cannot be updated without adding new APKs, and adding new
     * APKs will cause it to resume. (tracks.update)
     *
     * @param string $packageName Unique identifier for the Android app that is
     *                                                                        being updated; for example, "com.spiffygame".
     * @param string $editId Unique identifier for this edit.
     * @param string $track The track type to read or modify.
     * @param Google_Service_AndroidPublisher_Track|Google_Track $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function update($packageName, $editId, $track, Google_Service_AndroidPublisher_Track $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'editId' => $editId, 'track' => $track, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidPublisher_Track");
    }
}

/**
 * The "inappproducts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $inappproducts = $androidpublisherService->inappproducts;
 *  </code>
 */
class Google_Service_AndroidPublisher_Inappproducts_Resource extends Google_Service_Resource
{

    /**
     * (inappproducts.batch)
     *
     * @param Google_InappproductsBatchRequest|Google_Service_AndroidPublisher_InappproductsBatchRequest $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function batch(Google_Service_AndroidPublisher_InappproductsBatchRequest $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('batch', [$params], "Google_Service_AndroidPublisher_InappproductsBatchResponse");
    }

    /**
     * Delete an in-app product for an app. (inappproducts.delete)
     *
     * @param string $packageName Unique identifier for the Android app with the in-
     *                            app product; for example, "com.spiffygame".
     * @param string $sku Unique identifier for the in-app product.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function delete($packageName, $sku, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'sku' => $sku];
        $params = array_merge($params, $optParams);

        return $this->call('delete', [$params]);
    }

    /**
     * Returns information about the in-app product specified. (inappproducts.get)
     *
     * @param string $packageName
     * @param string $sku Unique identifier for the in-app product.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $sku, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'sku' => $sku];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_InAppProduct");
    }

    /**
     * Creates a new in-app product for an app. (inappproducts.insert)
     *
     * @param string $packageName Unique identifier for the Android app; for
     *                                                                                      example, "com.spiffygame".
     * @param Google_InAppProduct|Google_Service_AndroidPublisher_InAppProduct $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @opt_param bool autoConvertMissingPrices If true the prices for all regions
     * targeted by the parent app that don't have a price specified for this in-app
     * product will be auto converted to the target currency based on the default
     * price. Defaults to false.
     */
    public function insert($packageName, Google_Service_AndroidPublisher_InAppProduct $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('insert', [$params], "Google_Service_AndroidPublisher_InAppProduct");
    }

    /**
     * List all the in-app products for an Android app, both subscriptions and
     * managed in-app products.. (inappproducts.listInappproducts)
     *
     * @param string $packageName Unique identifier for the Android app with in-app
     *                            products; for example, "com.spiffygame".
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @opt_param string token
     * @opt_param string startIndex
     * @opt_param string maxResults
     */
    public function listInappproducts($packageName, $optParams = [])
    {
        $params = ['packageName' => $packageName];
        $params = array_merge($params, $optParams);

        return $this->call('list', [$params], "Google_Service_AndroidPublisher_InappproductsListResponse");
    }

    /**
     * Updates the details of an in-app product. This method supports patch
     * semantics. (inappproducts.patch)
     *
     * @param string $packageName Unique identifier for the Android app with the in-
     *                                                                                      app product; for example, "com.spiffygame".
     * @param string $sku Unique identifier for the in-app product.
     * @param Google_InAppProduct|Google_Service_AndroidPublisher_InAppProduct $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @opt_param bool autoConvertMissingPrices If true the prices for all regions
     * targeted by the parent app that don't have a price specified for this in-app
     * product will be auto converted to the target currency based on the default
     * price. Defaults to false.
     */
    public function patch($packageName, $sku, Google_Service_AndroidPublisher_InAppProduct $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'sku' => $sku, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('patch', [$params], "Google_Service_AndroidPublisher_InAppProduct");
    }

    /**
     * Updates the details of an in-app product. (inappproducts.update)
     *
     * @param string $packageName Unique identifier for the Android app with the in-
     *                                                                                      app product; for example, "com.spiffygame".
     * @param string $sku Unique identifier for the in-app product.
     * @param Google_InAppProduct|Google_Service_AndroidPublisher_InAppProduct $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     * @opt_param bool autoConvertMissingPrices If true the prices for all regions
     * targeted by the parent app that don't have a price specified for this in-app
     * product will be auto converted to the target currency based on the default
     * price. Defaults to false.
     */
    public function update($packageName, $sku, Google_Service_AndroidPublisher_InAppProduct $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'sku' => $sku, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('update', [$params], "Google_Service_AndroidPublisher_InAppProduct");
    }
}

/**
 * The "purchases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $purchases = $androidpublisherService->purchases;
 *  </code>
 */
class Google_Service_AndroidPublisher_Purchases_Resource extends Google_Service_Resource
{
}

/**
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $products = $androidpublisherService->products;
 *  </code>
 */
class Google_Service_AndroidPublisher_PurchasesProducts_Resource extends Google_Service_Resource
{

    /**
     * Checks the purchase and consumption status of an inapp item. (products.get)
     *
     * @param string $packageName The package name of the application the inapp
     *                            product was sold in (for example, 'com.some.thing').
     * @param string $productId The inapp product SKU (for example,
     *                            'com.some.thing.inapp1').
     * @param string $token The token provided to the user's device when the inapp
     *                            product was purchased.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $productId, $token, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'productId' => $productId, 'token' => $token];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_ProductPurchase");
    }
}

/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $subscriptions = $androidpublisherService->subscriptions;
 *  </code>
 */
class Google_Service_AndroidPublisher_PurchasesSubscriptions_Resource extends Google_Service_Resource
{

    /**
     * Cancels a user's subscription purchase. The subscription remains valid until
     * its expiration time. (subscriptions.cancel)
     *
     * @param string $packageName The package name of the application for which this
     *                               subscription was purchased (for example, 'com.some.thing').
     * @param string $subscriptionId The purchased subscription ID (for example,
     *                               'monthly001').
     * @param string $token The token provided to the user's device when the
     *                               subscription was purchased.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function cancel($packageName, $subscriptionId, $token, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'subscriptionId' => $subscriptionId, 'token' => $token];
        $params = array_merge($params, $optParams);

        return $this->call('cancel', [$params]);
    }

    /**
     * Defers a user's subscription purchase until a specified future expiration
     * time. (subscriptions.defer)
     *
     * @param string $packageName The package name of the application for which this
     *                                                                                                                                   subscription was purchased (for example, 'com.some.thing').
     * @param string $subscriptionId The purchased subscription ID (for example,
     *                                                                                                                                   'monthly001').
     * @param string $token The token provided to the user's device when the
     *                                                                                                                                   subscription was purchased.
     * @param Google_Service_AndroidPublisher_SubscriptionPurchasesDeferRequest|Google_SubscriptionPurchasesDeferRequest $postBody
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function defer($packageName, $subscriptionId, $token, Google_Service_AndroidPublisher_SubscriptionPurchasesDeferRequest $postBody, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'subscriptionId' => $subscriptionId, 'token' => $token, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);

        return $this->call('defer', [$params], "Google_Service_AndroidPublisher_SubscriptionPurchasesDeferResponse");
    }

    /**
     * Checks whether a user's subscription purchase is valid and returns its expiry
     * time. (subscriptions.get)
     *
     * @param string $packageName The package name of the application for which this
     *                               subscription was purchased (for example, 'com.some.thing').
     * @param string $subscriptionId The purchased subscription ID (for example,
     *                               'monthly001').
     * @param string $token The token provided to the user's device when the
     *                               subscription was purchased.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function get($packageName, $subscriptionId, $token, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'subscriptionId' => $subscriptionId, 'token' => $token];
        $params = array_merge($params, $optParams);

        return $this->call('get', [$params], "Google_Service_AndroidPublisher_SubscriptionPurchase");
    }

    /**
     * Refunds a user's subscription purchase, but the subscription remains valid
     * until its expiration time and it will continue to recur.
     * (subscriptions.refund)
     *
     * @param string $packageName The package name of the application for which this
     *                               subscription was purchased (for example, 'com.some.thing').
     * @param string $subscriptionId The purchased subscription ID (for example,
     *                               'monthly001').
     * @param string $token The token provided to the user's device when the
     *                               subscription was purchased.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function refund($packageName, $subscriptionId, $token, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'subscriptionId' => $subscriptionId, 'token' => $token];
        $params = array_merge($params, $optParams);

        return $this->call('refund', [$params]);
    }

    /**
     * Refunds and immediately revokes a user's subscription purchase. Access to the
     * subscription will be terminated immediately and it will stop recurring.
     * (subscriptions.revoke)
     *
     * @param string $packageName The package name of the application for which this
     *                               subscription was purchased (for example, 'com.some.thing').
     * @param string $subscriptionId The purchased subscription ID (for example,
     *                               'monthly001').
     * @param string $token The token provided to the user's device when the
     *                               subscription was purchased.
     * @param array $optParams Optional parameters.
     *
     * @return expected_class|Google_Http_Request
     */
    public function revoke($packageName, $subscriptionId, $token, $optParams = [])
    {
        $params = ['packageName' => $packageName, 'subscriptionId' => $subscriptionId, 'token' => $token];
        $params = array_merge($params, $optParams);

        return $this->call('revoke', [$params]);
    }
}


/**
 * Class Google_Service_AndroidPublisher_Apk
 */
class Google_Service_AndroidPublisher_Apk extends Google_Model
{
    public $versionCode;
    protected $internal_gapi_mappings = [];
    protected $binaryType = 'Google_Service_AndroidPublisher_ApkBinary';
    protected $binaryDataType = '';

    /**
     * @param Google_Service_AndroidPublisher_ApkBinary $binary
     */
    public function setBinary(Google_Service_AndroidPublisher_ApkBinary $binary)
    {
        $this->binary = $binary;
    }

    /**
     * @return mixed
     */
    public function getBinary()
    {
        return $this->binary;
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
 * Class Google_Service_AndroidPublisher_ApkBinary
 */
class Google_Service_AndroidPublisher_ApkBinary extends Google_Model
{
    public $sha1;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getSha1()
    {
        return $this->sha1;
    }

    /**
     * @param $sha1
     */
    public function setSha1($sha1)
    {
        $this->sha1 = $sha1;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ApkListing
 */
class Google_Service_AndroidPublisher_ApkListing extends Google_Model
{
    public $language;
    public $recentChanges;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getRecentChanges()
    {
        return $this->recentChanges;
    }

    /**
     * @param $recentChanges
     */
    public function setRecentChanges($recentChanges)
    {
        $this->recentChanges = $recentChanges;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ApkListingsListResponse
 */
class Google_Service_AndroidPublisher_ApkListingsListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'listings';
    protected $internal_gapi_mappings = [];
    protected $listingsType = 'Google_Service_AndroidPublisher_ApkListing';
    protected $listingsDataType = 'array';

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
     * @param $listings
     */
    public function setListings($listings)
    {
        $this->listings = $listings;
    }

    /**
     * @return mixed
     */
    public function getListings()
    {
        return $this->listings;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ApksAddExternallyHostedRequest
 */
class Google_Service_AndroidPublisher_ApksAddExternallyHostedRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $externallyHostedApkType = 'Google_Service_AndroidPublisher_ExternallyHostedApk';
    protected $externallyHostedApkDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_ExternallyHostedApk $externallyHostedApk
     */
    public function setExternallyHostedApk(Google_Service_AndroidPublisher_ExternallyHostedApk $externallyHostedApk)
    {
        $this->externallyHostedApk = $externallyHostedApk;
    }

    /**
     * @return mixed
     */
    public function getExternallyHostedApk()
    {
        return $this->externallyHostedApk;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ApksAddExternallyHostedResponse
 */
class Google_Service_AndroidPublisher_ApksAddExternallyHostedResponse extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $externallyHostedApkType = 'Google_Service_AndroidPublisher_ExternallyHostedApk';
    protected $externallyHostedApkDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_ExternallyHostedApk $externallyHostedApk
     */
    public function setExternallyHostedApk(Google_Service_AndroidPublisher_ExternallyHostedApk $externallyHostedApk)
    {
        $this->externallyHostedApk = $externallyHostedApk;
    }

    /**
     * @return mixed
     */
    public function getExternallyHostedApk()
    {
        return $this->externallyHostedApk;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ApksListResponse
 */
class Google_Service_AndroidPublisher_ApksListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'apks';
    protected $internal_gapi_mappings = [];
    protected $apksType = 'Google_Service_AndroidPublisher_Apk';
    protected $apksDataType = 'array';

    /**
     * @param $apks
     */
    public function setApks($apks)
    {
        $this->apks = $apks;
    }

    /**
     * @return mixed
     */
    public function getApks()
    {
        return $this->apks;
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
 * Class Google_Service_AndroidPublisher_AppDetails
 */
class Google_Service_AndroidPublisher_AppDetails extends Google_Model
{
    public $contactEmail;
    public $contactPhone;
    public $contactWebsite;
    public $defaultLanguage;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param $contactEmail
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * @return mixed
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param $contactPhone
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    }

    /**
     * @return mixed
     */
    public function getContactWebsite()
    {
        return $this->contactWebsite;
    }

    /**
     * @param $contactWebsite
     */
    public function setContactWebsite($contactWebsite)
    {
        $this->contactWebsite = $contactWebsite;
    }

    /**
     * @return mixed
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * @param $defaultLanguage
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
    }
}

/**
 * Class Google_Service_AndroidPublisher_AppEdit
 */
class Google_Service_AndroidPublisher_AppEdit extends Google_Model
{
    public $expiryTimeSeconds;
    public $id;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getExpiryTimeSeconds()
    {
        return $this->expiryTimeSeconds;
    }

    /**
     * @param $expiryTimeSeconds
     */
    public function setExpiryTimeSeconds($expiryTimeSeconds)
    {
        $this->expiryTimeSeconds = $expiryTimeSeconds;
    }

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
}

/**
 * Class Google_Service_AndroidPublisher_ExpansionFile
 */
class Google_Service_AndroidPublisher_ExpansionFile extends Google_Model
{
    public $fileSize;
    public $referencesVersion;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param $fileSize
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return mixed
     */
    public function getReferencesVersion()
    {
        return $this->referencesVersion;
    }

    /**
     * @param $referencesVersion
     */
    public function setReferencesVersion($referencesVersion)
    {
        $this->referencesVersion = $referencesVersion;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ExpansionFilesUploadResponse
 */
class Google_Service_AndroidPublisher_ExpansionFilesUploadResponse extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $expansionFileType = 'Google_Service_AndroidPublisher_ExpansionFile';
    protected $expansionFileDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_ExpansionFile $expansionFile
     */
    public function setExpansionFile(Google_Service_AndroidPublisher_ExpansionFile $expansionFile)
    {
        $this->expansionFile = $expansionFile;
    }

    /**
     * @return mixed
     */
    public function getExpansionFile()
    {
        return $this->expansionFile;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ExternallyHostedApk
 */
class Google_Service_AndroidPublisher_ExternallyHostedApk extends Google_Collection
{
    public $applicationLabel;
    public $certificateBase64s;
    public $externallyHostedUrl;
    public $fileSha1Base64;
    public $fileSha256Base64;
    public $fileSize;
    public $iconBase64;
    public $maximumSdk;
    public $minimumSdk;
    public $nativeCodes;
    public $packageName;
    public $usesFeatures;
    public $versionCode;
    public $versionName;
    protected $collection_key = 'usesPermissions';
    protected $internal_gapi_mappings = [];
    protected $usesPermissionsType = 'Google_Service_AndroidPublisher_ExternallyHostedApkUsesPermission';
    protected $usesPermissionsDataType = 'array';

    /**
     * @return mixed
     */
    public function getApplicationLabel()
    {
        return $this->applicationLabel;
    }

    /**
     * @param $applicationLabel
     */
    public function setApplicationLabel($applicationLabel)
    {
        $this->applicationLabel = $applicationLabel;
    }

    /**
     * @return mixed
     */
    public function getCertificateBase64s()
    {
        return $this->certificateBase64s;
    }

    /**
     * @param $certificateBase64s
     */
    public function setCertificateBase64s($certificateBase64s)
    {
        $this->certificateBase64s = $certificateBase64s;
    }

    /**
     * @return mixed
     */
    public function getExternallyHostedUrl()
    {
        return $this->externallyHostedUrl;
    }

    /**
     * @param $externallyHostedUrl
     */
    public function setExternallyHostedUrl($externallyHostedUrl)
    {
        $this->externallyHostedUrl = $externallyHostedUrl;
    }

    /**
     * @return mixed
     */
    public function getFileSha1Base64()
    {
        return $this->fileSha1Base64;
    }

    /**
     * @param $fileSha1Base64
     */
    public function setFileSha1Base64($fileSha1Base64)
    {
        $this->fileSha1Base64 = $fileSha1Base64;
    }

    /**
     * @return mixed
     */
    public function getFileSha256Base64()
    {
        return $this->fileSha256Base64;
    }

    /**
     * @param $fileSha256Base64
     */
    public function setFileSha256Base64($fileSha256Base64)
    {
        $this->fileSha256Base64 = $fileSha256Base64;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param $fileSize
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return mixed
     */
    public function getIconBase64()
    {
        return $this->iconBase64;
    }

    /**
     * @param $iconBase64
     */
    public function setIconBase64($iconBase64)
    {
        $this->iconBase64 = $iconBase64;
    }

    /**
     * @return mixed
     */
    public function getMaximumSdk()
    {
        return $this->maximumSdk;
    }

    /**
     * @param $maximumSdk
     */
    public function setMaximumSdk($maximumSdk)
    {
        $this->maximumSdk = $maximumSdk;
    }

    /**
     * @return mixed
     */
    public function getMinimumSdk()
    {
        return $this->minimumSdk;
    }

    /**
     * @param $minimumSdk
     */
    public function setMinimumSdk($minimumSdk)
    {
        $this->minimumSdk = $minimumSdk;
    }

    /**
     * @return mixed
     */
    public function getNativeCodes()
    {
        return $this->nativeCodes;
    }

    /**
     * @param $nativeCodes
     */
    public function setNativeCodes($nativeCodes)
    {
        $this->nativeCodes = $nativeCodes;
    }

    /**
     * @return mixed
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * @param $packageName
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
    }

    /**
     * @return mixed
     */
    public function getUsesFeatures()
    {
        return $this->usesFeatures;
    }

    /**
     * @param $usesFeatures
     */
    public function setUsesFeatures($usesFeatures)
    {
        $this->usesFeatures = $usesFeatures;
    }

    /**
     * @param $usesPermissions
     */
    public function setUsesPermissions($usesPermissions)
    {
        $this->usesPermissions = $usesPermissions;
    }

    /**
     * @return mixed
     */
    public function getUsesPermissions()
    {
        return $this->usesPermissions;
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

    /**
     * @return mixed
     */
    public function getVersionName()
    {
        return $this->versionName;
    }

    /**
     * @param $versionName
     */
    public function setVersionName($versionName)
    {
        $this->versionName = $versionName;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ExternallyHostedApkUsesPermission
 */
class Google_Service_AndroidPublisher_ExternallyHostedApkUsesPermission extends Google_Model
{
    public $maxSdkVersion;
    public $name;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getMaxSdkVersion()
    {
        return $this->maxSdkVersion;
    }

    /**
     * @param $maxSdkVersion
     */
    public function setMaxSdkVersion($maxSdkVersion)
    {
        $this->maxSdkVersion = $maxSdkVersion;
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
}

/**
 * Class Google_Service_AndroidPublisher_Image
 */
class Google_Service_AndroidPublisher_Image extends Google_Model
{
    public $id;
    public $sha1;
    public $url;
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
    public function getSha1()
    {
        return $this->sha1;
    }

    /**
     * @param $sha1
     */
    public function setSha1($sha1)
    {
        $this->sha1 = $sha1;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ImagesDeleteAllResponse
 */
class Google_Service_AndroidPublisher_ImagesDeleteAllResponse extends Google_Collection
{
    protected $collection_key = 'deleted';
    protected $internal_gapi_mappings = [];
    protected $deletedType = 'Google_Service_AndroidPublisher_Image';
    protected $deletedDataType = 'array';


    /**
     * @param $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ImagesListResponse
 */
class Google_Service_AndroidPublisher_ImagesListResponse extends Google_Collection
{
    protected $collection_key = 'images';
    protected $internal_gapi_mappings = [];
    protected $imagesType = 'Google_Service_AndroidPublisher_Image';
    protected $imagesDataType = 'array';


    /**
     * @param $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ImagesUploadResponse
 */
class Google_Service_AndroidPublisher_ImagesUploadResponse extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $imageType = 'Google_Service_AndroidPublisher_Image';
    protected $imageDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_Image $image
     */
    public function setImage(Google_Service_AndroidPublisher_Image $image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
}

/**
 * Class Google_Service_AndroidPublisher_InAppProduct
 */
class Google_Service_AndroidPublisher_InAppProduct extends Google_Model
{
    public $defaultLanguage;
    public $packageName;
    public $purchaseType;
    public $sku;
    public $status;
    public $subscriptionPeriod;
    public $trialPeriod;
    protected $internal_gapi_mappings = [];
    protected $defaultPriceType = 'Google_Service_AndroidPublisher_Price';
    protected $defaultPriceDataType = '';
    protected $listingsType = 'Google_Service_AndroidPublisher_InAppProductListing';
    protected $listingsDataType = 'map';
    protected $pricesType = 'Google_Service_AndroidPublisher_Price';
    protected $pricesDataType = 'map';
    protected $seasonType = 'Google_Service_AndroidPublisher_Season';
    protected $seasonDataType = '';

    /**
     * @return mixed
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * @param $defaultLanguage
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
    }

    /**
     * @param Google_Service_AndroidPublisher_Price $defaultPrice
     */
    public function setDefaultPrice(Google_Service_AndroidPublisher_Price $defaultPrice)
    {
        $this->defaultPrice = $defaultPrice;
    }

    /**
     * @return mixed
     */
    public function getDefaultPrice()
    {
        return $this->defaultPrice;
    }

    /**
     * @param $listings
     */
    public function setListings($listings)
    {
        $this->listings = $listings;
    }

    /**
     * @return mixed
     */
    public function getListings()
    {
        return $this->listings;
    }

    /**
     * @return mixed
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * @param $packageName
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
    }

    /**
     * @param $prices
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
    }

    /**
     * @return mixed
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @return mixed
     */
    public function getPurchaseType()
    {
        return $this->purchaseType;
    }

    /**
     * @param $purchaseType
     */
    public function setPurchaseType($purchaseType)
    {
        $this->purchaseType = $purchaseType;
    }

    /**
     * @param Google_Service_AndroidPublisher_Season $season
     */
    public function setSeason(Google_Service_AndroidPublisher_Season $season)
    {
        $this->season = $season;
    }

    /**
     * @return mixed
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionPeriod()
    {
        return $this->subscriptionPeriod;
    }

    /**
     * @param $subscriptionPeriod
     */
    public function setSubscriptionPeriod($subscriptionPeriod)
    {
        $this->subscriptionPeriod = $subscriptionPeriod;
    }

    /**
     * @return mixed
     */
    public function getTrialPeriod()
    {
        return $this->trialPeriod;
    }

    /**
     * @param $trialPeriod
     */
    public function setTrialPeriod($trialPeriod)
    {
        $this->trialPeriod = $trialPeriod;
    }
}

/**
 * Class Google_Service_AndroidPublisher_InAppProductListing
 */
class Google_Service_AndroidPublisher_InAppProductListing extends Google_Model
{
    public $description;
    public $title;
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
 * Class Google_Service_AndroidPublisher_InAppProductListings
 */
class Google_Service_AndroidPublisher_InAppProductListings extends Google_Model
{
}

/**
 * Class Google_Service_AndroidPublisher_InAppProductPrices
 */
class Google_Service_AndroidPublisher_InAppProductPrices extends Google_Model
{
}

/**
 * Class Google_Service_AndroidPublisher_InappproductsBatchRequest
 */
class Google_Service_AndroidPublisher_InappproductsBatchRequest extends Google_Collection
{
    protected $collection_key = 'entrys';
    protected $internal_gapi_mappings = [];
    protected $entrysType = 'Google_Service_AndroidPublisher_InappproductsBatchRequestEntry';
    protected $entrysDataType = 'array';


    /**
     * @param $entrys
     */
    public function setEntrys($entrys)
    {
        $this->entrys = $entrys;
    }

    /**
     * @return mixed
     */
    public function getEntrys()
    {
        return $this->entrys;
    }
}

/**
 * Class Google_Service_AndroidPublisher_InappproductsBatchRequestEntry
 */
class Google_Service_AndroidPublisher_InappproductsBatchRequestEntry extends Google_Model
{
    public $batchId;
    public $methodName;
    protected $internal_gapi_mappings = [];
    protected $inappproductsinsertrequestType = 'Google_Service_AndroidPublisher_InappproductsInsertRequest';
    protected $inappproductsinsertrequestDataType = '';
    protected $inappproductsupdaterequestType = 'Google_Service_AndroidPublisher_InappproductsUpdateRequest';
    protected $inappproductsupdaterequestDataType = '';

    /**
     * @return mixed
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * @param $batchId
     */
    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
    }

    /**
     * @param Google_Service_AndroidPublisher_InappproductsInsertRequest $inappproductsinsertrequest
     */
    public function setInappproductsinsertrequest(Google_Service_AndroidPublisher_InappproductsInsertRequest $inappproductsinsertrequest)
    {
        $this->inappproductsinsertrequest = $inappproductsinsertrequest;
    }

    /**
     * @return mixed
     */
    public function getInappproductsinsertrequest()
    {
        return $this->inappproductsinsertrequest;
    }

    /**
     * @param Google_Service_AndroidPublisher_InappproductsUpdateRequest $inappproductsupdaterequest
     */
    public function setInappproductsupdaterequest(Google_Service_AndroidPublisher_InappproductsUpdateRequest $inappproductsupdaterequest)
    {
        $this->inappproductsupdaterequest = $inappproductsupdaterequest;
    }

    /**
     * @return mixed
     */
    public function getInappproductsupdaterequest()
    {
        return $this->inappproductsupdaterequest;
    }

    /**
     * @return mixed
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * @param $methodName
     */
    public function setMethodName($methodName)
    {
        $this->methodName = $methodName;
    }
}

/**
 * Class Google_Service_AndroidPublisher_InappproductsBatchResponse
 */
class Google_Service_AndroidPublisher_InappproductsBatchResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'entrys';
    protected $internal_gapi_mappings = [];
    protected $entrysType = 'Google_Service_AndroidPublisher_InappproductsBatchResponseEntry';
    protected $entrysDataType = 'array';

    /**
     * @param $entrys
     */
    public function setEntrys($entrys)
    {
        $this->entrys = $entrys;
    }

    /**
     * @return mixed
     */
    public function getEntrys()
    {
        return $this->entrys;
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
 * Class Google_Service_AndroidPublisher_InappproductsBatchResponseEntry
 */
class Google_Service_AndroidPublisher_InappproductsBatchResponseEntry extends Google_Model
{
    public $batchId;
    protected $internal_gapi_mappings = [];
    protected $inappproductsinsertresponseType = 'Google_Service_AndroidPublisher_InappproductsInsertResponse';
    protected $inappproductsinsertresponseDataType = '';
    protected $inappproductsupdateresponseType = 'Google_Service_AndroidPublisher_InappproductsUpdateResponse';
    protected $inappproductsupdateresponseDataType = '';

    /**
     * @return mixed
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * @param $batchId
     */
    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
    }

    /**
     * @param Google_Service_AndroidPublisher_InappproductsInsertResponse $inappproductsinsertresponse
     */
    public function setInappproductsinsertresponse(Google_Service_AndroidPublisher_InappproductsInsertResponse $inappproductsinsertresponse)
    {
        $this->inappproductsinsertresponse = $inappproductsinsertresponse;
    }

    /**
     * @return mixed
     */
    public function getInappproductsinsertresponse()
    {
        return $this->inappproductsinsertresponse;
    }

    /**
     * @param Google_Service_AndroidPublisher_InappproductsUpdateResponse $inappproductsupdateresponse
     */
    public function setInappproductsupdateresponse(Google_Service_AndroidPublisher_InappproductsUpdateResponse $inappproductsupdateresponse)
    {
        $this->inappproductsupdateresponse = $inappproductsupdateresponse;
    }

    /**
     * @return mixed
     */
    public function getInappproductsupdateresponse()
    {
        return $this->inappproductsupdateresponse;
    }
}

/**
 * Class Google_Service_AndroidPublisher_InappproductsInsertRequest
 */
class Google_Service_AndroidPublisher_InappproductsInsertRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $inappproductType = 'Google_Service_AndroidPublisher_InAppProduct';
    protected $inappproductDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_InAppProduct $inappproduct
     */
    public function setInappproduct(Google_Service_AndroidPublisher_InAppProduct $inappproduct)
    {
        $this->inappproduct = $inappproduct;
    }

    /**
     * @return mixed
     */
    public function getInappproduct()
    {
        return $this->inappproduct;
    }
}

/**
 * Class Google_Service_AndroidPublisher_InappproductsInsertResponse
 */
class Google_Service_AndroidPublisher_InappproductsInsertResponse extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $inappproductType = 'Google_Service_AndroidPublisher_InAppProduct';
    protected $inappproductDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_InAppProduct $inappproduct
     */
    public function setInappproduct(Google_Service_AndroidPublisher_InAppProduct $inappproduct)
    {
        $this->inappproduct = $inappproduct;
    }

    /**
     * @return mixed
     */
    public function getInappproduct()
    {
        return $this->inappproduct;
    }
}

/**
 * Class Google_Service_AndroidPublisher_InappproductsListResponse
 */
class Google_Service_AndroidPublisher_InappproductsListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'inappproduct';
    protected $internal_gapi_mappings = [];
    protected $inappproductType = 'Google_Service_AndroidPublisher_InAppProduct';
    protected $inappproductDataType = 'array';
    protected $pageInfoType = 'Google_Service_AndroidPublisher_PageInfo';
    protected $pageInfoDataType = '';
    protected $tokenPaginationType = 'Google_Service_AndroidPublisher_TokenPagination';
    protected $tokenPaginationDataType = '';


    /**
     * @param $inappproduct
     */
    public function setInappproduct($inappproduct)
    {
        $this->inappproduct = $inappproduct;
    }

    /**
     * @return mixed
     */
    public function getInappproduct()
    {
        return $this->inappproduct;
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
     * @param Google_Service_AndroidPublisher_PageInfo $pageInfo
     */
    public function setPageInfo(Google_Service_AndroidPublisher_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param Google_Service_AndroidPublisher_TokenPagination $tokenPagination
     */
    public function setTokenPagination(Google_Service_AndroidPublisher_TokenPagination $tokenPagination)
    {
        $this->tokenPagination = $tokenPagination;
    }

    /**
     * @return mixed
     */
    public function getTokenPagination()
    {
        return $this->tokenPagination;
    }
}

/**
 * Class Google_Service_AndroidPublisher_InappproductsUpdateRequest
 */
class Google_Service_AndroidPublisher_InappproductsUpdateRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $inappproductType = 'Google_Service_AndroidPublisher_InAppProduct';
    protected $inappproductDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_InAppProduct $inappproduct
     */
    public function setInappproduct(Google_Service_AndroidPublisher_InAppProduct $inappproduct)
    {
        $this->inappproduct = $inappproduct;
    }

    /**
     * @return mixed
     */
    public function getInappproduct()
    {
        return $this->inappproduct;
    }
}

/**
 * Class Google_Service_AndroidPublisher_InappproductsUpdateResponse
 */
class Google_Service_AndroidPublisher_InappproductsUpdateResponse extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $inappproductType = 'Google_Service_AndroidPublisher_InAppProduct';
    protected $inappproductDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_InAppProduct $inappproduct
     */
    public function setInappproduct(Google_Service_AndroidPublisher_InAppProduct $inappproduct)
    {
        $this->inappproduct = $inappproduct;
    }

    /**
     * @return mixed
     */
    public function getInappproduct()
    {
        return $this->inappproduct;
    }
}

/**
 * Class Google_Service_AndroidPublisher_Listing
 */
class Google_Service_AndroidPublisher_Listing extends Google_Model
{
    public $fullDescription;
    public $language;
    public $shortDescription;
    public $title;
    public $video;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getFullDescription()
    {
        return $this->fullDescription;
    }

    /**
     * @param $fullDescription
     */
    public function setFullDescription($fullDescription)
    {
        $this->fullDescription = $fullDescription;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param $shortDescription
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
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
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ListingsListResponse
 */
class Google_Service_AndroidPublisher_ListingsListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'listings';
    protected $internal_gapi_mappings = [];
    protected $listingsType = 'Google_Service_AndroidPublisher_Listing';
    protected $listingsDataType = 'array';

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
     * @param $listings
     */
    public function setListings($listings)
    {
        $this->listings = $listings;
    }

    /**
     * @return mixed
     */
    public function getListings()
    {
        return $this->listings;
    }
}

/**
 * Class Google_Service_AndroidPublisher_MonthDay
 */
class Google_Service_AndroidPublisher_MonthDay extends Google_Model
{
    public $day;
    public $month;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }
}

/**
 * Class Google_Service_AndroidPublisher_PageInfo
 */
class Google_Service_AndroidPublisher_PageInfo extends Google_Model
{
    public $resultPerPage;
    public $startIndex;
    public $totalResults;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getResultPerPage()
    {
        return $this->resultPerPage;
    }

    /**
     * @param $resultPerPage
     */
    public function setResultPerPage($resultPerPage)
    {
        $this->resultPerPage = $resultPerPage;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }
}

/**
 * Class Google_Service_AndroidPublisher_Price
 */
class Google_Service_AndroidPublisher_Price extends Google_Model
{
    public $currency;
    public $priceMicros;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getPriceMicros()
    {
        return $this->priceMicros;
    }

    /**
     * @param $priceMicros
     */
    public function setPriceMicros($priceMicros)
    {
        $this->priceMicros = $priceMicros;
    }
}

/**
 * Class Google_Service_AndroidPublisher_ProductPurchase
 */
class Google_Service_AndroidPublisher_ProductPurchase extends Google_Model
{
    public $consumptionState;
    public $developerPayload;
    public $kind;
    public $purchaseState;
    public $purchaseTimeMillis;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getConsumptionState()
    {
        return $this->consumptionState;
    }

    /**
     * @param $consumptionState
     */
    public function setConsumptionState($consumptionState)
    {
        $this->consumptionState = $consumptionState;
    }

    /**
     * @return mixed
     */
    public function getDeveloperPayload()
    {
        return $this->developerPayload;
    }

    /**
     * @param $developerPayload
     */
    public function setDeveloperPayload($developerPayload)
    {
        $this->developerPayload = $developerPayload;
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
    public function getPurchaseState()
    {
        return $this->purchaseState;
    }

    /**
     * @param $purchaseState
     */
    public function setPurchaseState($purchaseState)
    {
        $this->purchaseState = $purchaseState;
    }

    /**
     * @return mixed
     */
    public function getPurchaseTimeMillis()
    {
        return $this->purchaseTimeMillis;
    }

    /**
     * @param $purchaseTimeMillis
     */
    public function setPurchaseTimeMillis($purchaseTimeMillis)
    {
        $this->purchaseTimeMillis = $purchaseTimeMillis;
    }
}

/**
 * Class Google_Service_AndroidPublisher_Season
 */
class Google_Service_AndroidPublisher_Season extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $endType = 'Google_Service_AndroidPublisher_MonthDay';
    protected $endDataType = '';
    protected $startType = 'Google_Service_AndroidPublisher_MonthDay';
    protected $startDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_MonthDay $end
     */
    public function setEnd(Google_Service_AndroidPublisher_MonthDay $end)
    {
        $this->end = $end;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param Google_Service_AndroidPublisher_MonthDay $start
     */
    public function setStart(Google_Service_AndroidPublisher_MonthDay $start)
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }
}

/**
 * Class Google_Service_AndroidPublisher_SubscriptionDeferralInfo
 */
class Google_Service_AndroidPublisher_SubscriptionDeferralInfo extends Google_Model
{
    public $desiredExpiryTimeMillis;
    public $expectedExpiryTimeMillis;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getDesiredExpiryTimeMillis()
    {
        return $this->desiredExpiryTimeMillis;
    }

    /**
     * @param $desiredExpiryTimeMillis
     */
    public function setDesiredExpiryTimeMillis($desiredExpiryTimeMillis)
    {
        $this->desiredExpiryTimeMillis = $desiredExpiryTimeMillis;
    }

    /**
     * @return mixed
     */
    public function getExpectedExpiryTimeMillis()
    {
        return $this->expectedExpiryTimeMillis;
    }

    /**
     * @param $expectedExpiryTimeMillis
     */
    public function setExpectedExpiryTimeMillis($expectedExpiryTimeMillis)
    {
        $this->expectedExpiryTimeMillis = $expectedExpiryTimeMillis;
    }
}

/**
 * Class Google_Service_AndroidPublisher_SubscriptionPurchase
 */
class Google_Service_AndroidPublisher_SubscriptionPurchase extends Google_Model
{
    public $autoRenewing;
    public $expiryTimeMillis;
    public $kind;
    public $startTimeMillis;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getAutoRenewing()
    {
        return $this->autoRenewing;
    }

    /**
     * @param $autoRenewing
     */
    public function setAutoRenewing($autoRenewing)
    {
        $this->autoRenewing = $autoRenewing;
    }

    /**
     * @return mixed
     */
    public function getExpiryTimeMillis()
    {
        return $this->expiryTimeMillis;
    }

    /**
     * @param $expiryTimeMillis
     */
    public function setExpiryTimeMillis($expiryTimeMillis)
    {
        $this->expiryTimeMillis = $expiryTimeMillis;
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
    public function getStartTimeMillis()
    {
        return $this->startTimeMillis;
    }

    /**
     * @param $startTimeMillis
     */
    public function setStartTimeMillis($startTimeMillis)
    {
        $this->startTimeMillis = $startTimeMillis;
    }
}

/**
 * Class Google_Service_AndroidPublisher_SubscriptionPurchasesDeferRequest
 */
class Google_Service_AndroidPublisher_SubscriptionPurchasesDeferRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $deferralInfoType = 'Google_Service_AndroidPublisher_SubscriptionDeferralInfo';
    protected $deferralInfoDataType = '';


    /**
     * @param Google_Service_AndroidPublisher_SubscriptionDeferralInfo $deferralInfo
     */
    public function setDeferralInfo(Google_Service_AndroidPublisher_SubscriptionDeferralInfo $deferralInfo)
    {
        $this->deferralInfo = $deferralInfo;
    }

    /**
     * @return mixed
     */
    public function getDeferralInfo()
    {
        return $this->deferralInfo;
    }
}

/**
 * Class Google_Service_AndroidPublisher_SubscriptionPurchasesDeferResponse
 */
class Google_Service_AndroidPublisher_SubscriptionPurchasesDeferResponse extends Google_Model
{
    public $newExpiryTimeMillis;
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getNewExpiryTimeMillis()
    {
        return $this->newExpiryTimeMillis;
    }

    /**
     * @param $newExpiryTimeMillis
     */
    public function setNewExpiryTimeMillis($newExpiryTimeMillis)
    {
        $this->newExpiryTimeMillis = $newExpiryTimeMillis;
    }
}

/**
 * Class Google_Service_AndroidPublisher_Testers
 */
class Google_Service_AndroidPublisher_Testers extends Google_Collection
{
    public $googleGroups;
    public $googlePlusCommunities;
    protected $collection_key = 'googlePlusCommunities';
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getGoogleGroups()
    {
        return $this->googleGroups;
    }

    /**
     * @param $googleGroups
     */
    public function setGoogleGroups($googleGroups)
    {
        $this->googleGroups = $googleGroups;
    }

    /**
     * @return mixed
     */
    public function getGooglePlusCommunities()
    {
        return $this->googlePlusCommunities;
    }

    /**
     * @param $googlePlusCommunities
     */
    public function setGooglePlusCommunities($googlePlusCommunities)
    {
        $this->googlePlusCommunities = $googlePlusCommunities;
    }
}

/**
 * Class Google_Service_AndroidPublisher_TokenPagination
 */
class Google_Service_AndroidPublisher_TokenPagination extends Google_Model
{
    public $nextPageToken;
    public $previousPageToken;
    protected $internal_gapi_mappings = [];

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

    /**
     * @return mixed
     */
    public function getPreviousPageToken()
    {
        return $this->previousPageToken;
    }

    /**
     * @param $previousPageToken
     */
    public function setPreviousPageToken($previousPageToken)
    {
        $this->previousPageToken = $previousPageToken;
    }
}

/**
 * Class Google_Service_AndroidPublisher_Track
 */
class Google_Service_AndroidPublisher_Track extends Google_Collection
{
    public $track;
    public $userFraction;
    public $versionCodes;
    protected $collection_key = 'versionCodes';
    protected $internal_gapi_mappings = [];

    /**
     * @return mixed
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @param $track
     */
    public function setTrack($track)
    {
        $this->track = $track;
    }

    /**
     * @return mixed
     */
    public function getUserFraction()
    {
        return $this->userFraction;
    }

    /**
     * @param $userFraction
     */
    public function setUserFraction($userFraction)
    {
        $this->userFraction = $userFraction;
    }

    /**
     * @return mixed
     */
    public function getVersionCodes()
    {
        return $this->versionCodes;
    }

    /**
     * @param $versionCodes
     */
    public function setVersionCodes($versionCodes)
    {
        $this->versionCodes = $versionCodes;
    }
}

/**
 * Class Google_Service_AndroidPublisher_TracksListResponse
 */
class Google_Service_AndroidPublisher_TracksListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'tracks';
    protected $internal_gapi_mappings = [];
    protected $tracksType = 'Google_Service_AndroidPublisher_Track';
    protected $tracksDataType = 'array';

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
     * @param $tracks
     */
    public function setTracks($tracks)
    {
        $this->tracks = $tracks;
    }

    /**
     * @return mixed
     */
    public function getTracks()
    {
        return $this->tracks;
    }
}
