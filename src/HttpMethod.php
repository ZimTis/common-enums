<?php
/**
 * Created by PhpStorm.
 * User: ZimTis
 * Date: 09.01.2018
 * Time: 11:04
 */

namespace zimtis\commonenums;

use MyCLabs\Enum\Enum;

/**
 * Class HttpMethod
 * @package zimtis\commonenums
 *
 * @method static HttpMethod GET()
 * @method static HttpMethod HEAD()
 * @method static HttpMethod POST()
 * @method static HttpMethod PUT()
 * @method static HttpMethod DELETE()
 * @method static HttpMethod TRACE()
 * @method static HttpMethod OPTIONS()
 * @method static HttpMethod CONNECT()
 */
class HttpMethod extends Enum
{
    const GET = 'get';

    const HEAD = 'head';

    const POST = 'post';

    const PUT = 'put';

    const DELETE = 'delete';

    const TRACE = 'trace';

    const OPTIONS = 'options';

    const CONNECT = 'connect';

    /**
     * Returns the value as upper case
     *
     * @return string
     */
    public function getValueUpperCase()
    {
        return strtoupper(parent::getValue());
    }

    /**
     * Returns the value as lower case
     *
     * @return string
     */
    public function getValueLowerCase()
    {
        return strtolower(parent::getValue());
    }
}