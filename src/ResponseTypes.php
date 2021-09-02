<?php

namespace Ebay\Commerce\Media;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getVideo' => [
            '200.' => 'Ebay\\Commerce\\Media\\Model\\Video',
        ],
    ];
}
