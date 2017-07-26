<?php
namespace zimtis\commonenums;

use CommerceGuys\Enum\AbstractEnum;

class HttpHeader extends AbstractEnum
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

    const IF_MODIFIRD_SINCE = 'If-Modified-Since';

    const IF_NONE_MATCH = 'If-None-Match';

    const IF_RANGE = 'If-Range';

    const IF_UNNMODIFIED_SINCE = 'If-Unmodified-Since';

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

    const CONTENT_MD5 = 'Content-MD5';

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