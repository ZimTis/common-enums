<?php
/**
 * Created by PhpStorm.
 * User: ZimTis
 * Date: 09.01.2018
 * Time: 15:24
 */

namespace zimtis\commonenums;

use MyCLabs\Enum\Enum;

/**
 * Class StringEnum
 * @package zimtis\commonenums
 */
abstract class StringEnum extends Enum
{
    /**
     * @return string
     */
    public function getValueUpperCase()
    {
        return strtoupper($this->getValue());
    }

    /**
     * @return string
     */
    public function getValueLowerCase()
    {
        return strtolower($this->getValue());
    }
}