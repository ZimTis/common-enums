<?php
/**
 * Created by PhpStorm.
 * User: ZimTis
 * Date: 09.01.2018
 * Time: 15:23
 */

namespace zimtis\commonenums;

use MyCLabs\Enum\Enum;

/**
 * Class UrlScheme
 * @package zimtis\commonenums
 *
 * @method static UrlScheme HTTP()
 * @method static UrlScheme HTTPS()
 */
class UrlScheme extends Enum
{
    const HTTP = 'http';

    const HTTPS = 'https';
}