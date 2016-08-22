<?php
/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        
'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],


        'bot' => [
            'channelId' => '1477692710',
            'channelSecret' => 'cb0befa78d1a4a35806f66621c7e145a',
            'channelMid' => 'u8de9e8c0ce9d750af7169e23e9f1a8d3',
        ],
    ],
];
