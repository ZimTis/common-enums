<?php

namespace zimtis\commonenums;

use MyCLabs\Enum\Enum;

/**
 * Class HttpHeader
 * @package zimtis\commonenums
 *
 * @method static HttpHeader ACCEPT()
 * @method static HttpHeader ACCEPT_CHARSET()
 * @method static HttpHeader ACCEPT_ENCODING()
 * @method static HttpHeader ACCEPT_LANGUAGE()
 * @method static HttpHeader AUTHORIZATION()
 * @method static HttpHeader CACHE_CONTROL()
 * @method static HttpHeader CONNECTION()
 * @method static HttpHeader COOKIE()
 * @method static HttpHeader CONTENT_LENGTH()
 * @method static HttpHeader CONTENT_MD5()
 * @method static HttpHeader CONTENT_TYPE()
 * @method static HttpHeader DATE()
 * @method static HttpHeader EXPECT()
 * @method static HttpHeader FROM()
 * @method static HttpHeader HOST()
 * @method static HttpHeader IF_MATCH()
 * @method static HttpHeader IF_MODIFIED_SINCE()
 * @method static HttpHeader IF_NONE_MATCH()
 * @method static HttpHeader IF_RANGE()
 * @method static HttpHeader IF_UNMODIFIED_SINCE()
 * @method static HttpHeader MAX_FORWARDS()
 * @method static HttpHeader PRAGMA()
 * @method static HttpHeader PROXY_AUTHORIZATION()
 * @method static HttpHeader RANGE()
 * @method static HttpHeader REFERER()
 * @method static HttpHeader TE()
 * @method static HttpHeader TRANSFER_ENCODING()
 * @method static HttpHeader UPGRADE()
 * @method static HttpHeader USER_AGENT()
 * @method static HttpHeader VIA()
 * @method static HttpHeader WARNING()
 * @method static HttpHeader ACCEPT_RANGES()
 * @method static HttpHeader AGE()
 * @method static HttpHeader ALLOW()
 * @method static HttpHeader CONTENT_ENCODING()
 * @method static HttpHeader CONTENT_LANGUAGE()
 * @method static HttpHeader CONTENT_DISPOSITION()
 * @method static HttpHeader CONTENT_RANGE()
 * @method static HttpHeader CONTENT_SECURITY_POLICY()
 * @method static HttpHeader ETAG()
 * @method static HttpHeader EXPIRES()
 * @method static HttpHeader LAST_MODIFIED()
 * @method static HttpHeader LINK()
 * @method static HttpHeader LOCATION()
 * @method static HttpHeader P3P()
 * @method static HttpHeader PROXY_AUTHENTICATE()
 * @method static HttpHeader REFRESH()
 * @method static HttpHeader RETRY_AFTER()
 * @method static HttpHeader SERVER()
 * @method static HttpHeader SET_COOKIE()
 * @method static HttpHeader TRAILER()
 * @method static HttpHeader VARY()
 * @method static HttpHeader WWW_AUTHENTICATE()
 *
 */
class HttpHeader extends Enum
{
    const ACCEPT = "Accept";

    const ACCEPT_CHARSET = "Accept-Charset";

    const ACCEPT_ENCODING = 'Accept-Encoding';

    const ACCEPT_LANGUAGE = 'Accept-Language';

    const AUTHORIZATION = 'Authorization';

    const CACHE_CONTROL = 'Cache-Control';

    const CONNECTION = 'Connection';

    const COOKIE = 'Cookie';

    const CONTENT_LENGTH = 'Content-Length';

    const CONTENT_MD5 = 'Content-MD5';

    const CONTENT_TYPE = 'Content-Type';

    const DATE = 'Date';

    const EXPECT = 'Expect';

    const FROM = 'From';

    const HOST = 'Host';

    const IF_MATCH = 'If-Match';

    const IF_MODIFIED_SINCE = 'If-Modified-Since';

    const IF_NONE_MATCH = 'If-None-Match';

    const IF_RANGE = 'If-Range';

    const IF_UNMODIFIED_SINCE = 'If-Unmodified-Since';

    const MAX_FORWARDS = 'Max-Forwards';

    const PRAGMA = 'Pragma';

    const PROXY_AUTHORIZATION = 'Proxy-Authorization';

    const RANGE = 'Range';

    const REFERER = 'Referer';

    const TE = 'TE';

    const TRANSFER_ENCODING = 'Transfer-Encoding';

    const UPGRADE = 'Upgrade';

    const USER_AGENT = 'User-Agent';

    const VIA = 'Via';

    const WARNING = 'Warning';

    const ACCEPT_RANGES = 'Accept-Ranges';

    const AGE = 'Age';

    const ALLOW = 'Allow';

    const CONTENT_ENCODING = 'Content-Encoding';

    const CONTENT_LANGUAGE = 'Content-Language';

    const CONTENT_DISPOSITION = 'Content-Disposition';

    const CONTENT_RANGE = 'Content-Range';

    const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';

    const ETAG = 'ETag';

    const EXPIRES = 'Expires';

    const LAST_MODIFIED = 'Last-Modified';

    const LINK = 'Link';

    const LOCATION = 'Location';

    const P3P = 'P3P';

    const PROXY_AUTHENTICATE = 'Proxy-Authenticate';

    const REFRESH = 'Refresh';

    const RETRY_AFTER = 'Retry-After';

    const SERVER = 'Server';

    const SET_COOKIE = 'Set-Cookie';

    const TRAILER = 'Trailer';

    const VARY = 'Vary';

    const WWW_AUTHENTICATE = 'WWW-Authenticate';
}