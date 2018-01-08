<?php

namespace zimtis\commonenums;

use MyCLabs\Enum\Enum;

/**
 * Class HttpStatusCode
 * @package zimtis\commonenums
 *
 * @method static HttpStatusCode CONTINUE_100()
 * @method static HttpStatusCode SWITCHING_PROTOCOLS_101()
 * @method static HttpStatusCode PROCESSING_102()
 * @method static HttpStatusCode OK_200()
 * @method static HttpStatusCode CREATED_201()
 * @method static HttpStatusCode ACCEPTED_202()
 * @method static HttpStatusCode NON_AUTHORITATIVE_INFORMATION_203()
 * @method static HttpStatusCode NO_CONTENT_204()
 * @method static HttpStatusCode RESET_CONTENT_205()
 * @method static HttpStatusCode PARTIAL_CONTENT_206()
 * @method static HttpStatusCode MULTI_STATUS_207()
 * @method static HttpStatusCode ALREADY_REPORTED_208()
 * @method static HttpStatusCode IM_USED_226()
 * @method static HttpStatusCode MULTIPLE_CHOICES_300()
 * @method static HttpStatusCode MOVED_PERMANENTLY_301()
 * @method static HttpStatusCode FOUND_MOVED_TEMPORARILY_302()
 * @method static HttpStatusCode SEE_OTHER_303()
 * @method static HttpStatusCode NOT_MODIFIED_304()
 * @method static HttpStatusCode USE_PROXY_305()
 * @method static HttpStatusCode TEMPORARY_REDIRECT_307()
 * @method static HttpStatusCode PERMANENT_REDIRECT_308()
 * @method static HttpStatusCode BAD_REQUEST_400()
 * @method static HttpStatusCode UNAUTHORIZED_401()
 * @method static HttpStatusCode PAYMENT_REQUIRED_402()
 * @method static HttpStatusCode FORBIDDEN_403()
 * @method static HttpStatusCode NOT_FOUND_404()
 * @method static HttpStatusCode METHOD_NOT_ALLOWED_405()
 * @method static HttpStatusCode NOT_ACCEPTABLE_406()
 * @method static HttpStatusCode PROXY_AUTHENTICATION_REQUIRED_407()
 * @method static HttpStatusCode REQUEST_TIME_OUT_408()
 * @method static HttpStatusCode CONFLICT_409()
 * @method static HttpStatusCode GONE_410()
 * @method static HttpStatusCode LENGTH_REQUIRED_411()
 * @method static HttpStatusCode PRECONDITION_FAILED_412()
 * @method static HttpStatusCode REQUEST_ENTITY_TOO_LARGE_413()
 * @method static HttpStatusCode REQUEST_URL_TOO_LONG_414()
 * @method static HttpStatusCode UNSUPPORTED_MEDIA_TYPE_415()
 * @method static HttpStatusCode REQUESTED_RANGE_NOT_SATISFIABLE_416()
 * @method static HttpStatusCode EXPECTATION_FAILED_417()
 * @method static HttpStatusCode IM_A_TEAPOT_418()
 * @method static HttpStatusCode POLICY_NOT_FULFILLED_420()
 * @method static HttpStatusCode MISDIRECTED_REQUEST_421()
 * @method static HttpStatusCode UNPROCESSABLE_ENTITY_422()
 * @method static HttpStatusCode LOCKED_423()
 * @method static HttpStatusCode FAILED_DEPENDENCY_424()
 * @method static HttpStatusCode UNORDERED_COLLECTION_425()
 * @method static HttpStatusCode UPGRADE_REQUIRED_426()
 * @method static HttpStatusCode PRECONDITION_REQUIRED_428()
 * @method static HttpStatusCode TOO_MANY_REQUESTS_429()
 * @method static HttpStatusCode REQUEST_HEADER_FIELDS_TOO_LARGE_431()
 * @method static HttpStatusCode UNAVAILABLE_FOR_LEGAL_REASONS_451()
 * @method static HttpStatusCode INTERNAL_SERVER_ERROR_500()
 * @method static HttpStatusCode NOT_IMPLEMENTED_501()
 * @method static HttpStatusCode BAD_GATEWAY_502()
 * @method static HttpStatusCode SERVICE_UNAVAILABLE_503()
 * @method static HttpStatusCode GATEWAY_TIME_OUT_504()
 * @method static HttpStatusCode HTTP_VERSION_NOT_SUPPORTED_505()
 * @method static HttpStatusCode VARIANT_ALSO_NEGOTIATES_506()
 * @method static HttpStatusCode INSUFFICIENT_STORAGE_507()
 * @method static HttpStatusCode LOOP_DETECTED_508()
 * @method static HttpStatusCode BANDWIDTH_LIMIT_EXCEEDED_509()
 * @method static HttpStatusCode NOT_EXTENDED_510()
 * @method static HttpStatusCode NETWORK_AUTHENTICATION_REQUIRED_511()
 */
class HttpStatusCode extends Enum
{
    const CONTINUE_100 = 100;

    const SWITCHING_PROTOCOLS_101 = 101;

    const PROCESSING_102 = 102;

    const OK_200 = 200;

    const CREATED_201 = 201;

    const ACCEPTED_202 = 202;

    const NON_AUTHORITATIVE_INFORMATION_203 = 203;

    const NO_CONTENT_204 = 204;

    const RESET_CONTENT_205 = 205;

    const PARTIAL_CONTENT_206 = 206;

    const MULTI_STATUS_207 = 207;

    const ALREADY_REPORTED_208 = 208;

    const IM_USED_226 = 226;

    const MULTIPLE_CHOICES_300 = 300;

    const MOVED_PERMANENTLY_301 = 301;

    const FOUND_MOVED_TEMPORARILY_302 = 302;

    const SEE_OTHER_303 = 303;

    const NOT_MODIFIED_304 = 304;

    const USE_PROXY_305 = 305;

    const TEMPORARY_REDIRECT_307 = 307;

    const PERMANENT_REDIRECT_308 = 308;

    const BAD_REQUEST_400 = 400;

    const UNAUTHORIZED_401 = 401;

    const PAYMENT_REQUIRED_402 = 402;

    const FORBIDDEN_403 = 403;

    const NOT_FOUND_404 = 404;

    const METHOD_NOT_ALLOWED_405 = 405;

    const NOT_ACCEPTABLE_406 = 406;

    const PROXY_AUTHENTICATION_REQUIRED_407 = 407;

    const REQUEST_TIME_OUT_408 = 408;

    const CONFLICT_409 = 409;

    const GONE_410 = 410;

    const LENGTH_REQUIRED_411 = 411;

    const PRECONDITION_FAILED_412 = 412;

    const REQUEST_ENTITY_TOO_LARGE_413 = 413;

    const REQUEST_URL_TOO_LONG_414 = 414;

    const UNSUPPORTED_MEDIA_TYPE_415 = 415;

    const REQUESTED_RANGE_NOT_SATISFIABLE_416 = 416;

    const EXPECTATION_FAILED_417 = 417;

    const IM_A_TEAPOT_418 = 418;

    const POLICY_NOT_FULFILLED_420 = 420;

    const MISDIRECTED_REQUEST_421 = 421;

    const UNPROCESSABLE_ENTITY_422 = 422;

    const LOCKED_423 = 423;

    const FAILED_DEPENDENCY_424 = 424;

    const UNORDERED_COLLECTION_425 = 425;

    const UPGRADE_REQUIRED_426 = 426;

    const PRECONDITION_REQUIRED_428 = 428;

    const TOO_MANY_REQUESTS_429 = 429;

    const REQUEST_HEADER_FIELDS_TOO_LARGE_431 = 431;

    const UNAVAILABLE_FOR_LEGAL_REASONS_451 = 451;

    const INTERNAL_SERVER_ERROR_500 = 500;

    const NOT_IMPLEMENTED_501 = 501;

    const BAD_GATEWAY_502 = 502;

    const SERVICE_UNAVAILABLE_503 = 503;

    const GATEWAY_TIME_OUT_504 = 504;

    const HTTP_VERSION_NOT_SUPPORTED_505 = 505;

    const VARIANT_ALSO_NEGOTIATES_506 = 506;

    const INSUFFICIENT_STORAGE_507 = 507;

    const LOOP_DETECTED_508 = 508;

    const BANDWIDTH_LIMIT_EXCEEDED_509 = 509;

    const NOT_EXTENDED_510 = 510;

    const NETWORK_AUTHENTICATION_REQUIRED_511 = 511;
}