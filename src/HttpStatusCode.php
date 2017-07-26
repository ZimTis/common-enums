<?php
namespace zimtis\commonenums;

use CommerceGuys\Enum\AbstractEnum;

class HttpStatusCode extends AbstractEnum
{

    const OK_200 = 200;

    const CREATED_201 = 201;

    const BAD_REQUEST_400 = 400;

    const UNAUTHORIZED_401 = 401;

    const FORBIDDEN_403 = 403;

    const NOT_FOUND_404 = 404;

    const METHOD_NOT_ALLOWED_405 = 405;

    const NOT_ACCEPTABLE_406 = 406;
}