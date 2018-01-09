<?php

namespace zimtis\commonenums;

use MyCLabs\Enum\Enum;

/**
 * Class HttpMimeType
 * @package zimtis\commonenums
 *
 * @method static HttpMimeType JSON()
 * @method static HttpMimeType HTML()
 * @method static HttpMimeType XML()
 */
class HttpMimeType extends Enum
{
    const JSON = 'application/json';

    const HTML = 'text/html';

    const XML = 'application/xml';
}