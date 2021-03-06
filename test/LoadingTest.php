<?php

use PHPUnit\Framework\TestCase;
use zimtis\commonenums\HttpHeader;
use zimtis\commonenums\HttpMimeType;
use zimtis\commonenums\HttpStatusCode;

class LoadingTest extends TestCase
{

    public function testLoadingHeader()
    {
        HttpHeader::ACCEPT;
        HttpHeader::ACCEPT();
    }

    public function testLoadingMimeType()
    {
        HttpMimeType::HTML;
        HttpMimeType::HTML();
    }

    public function testLoadingStatusCode()
    {
        HttpStatusCode::ACCEPTED_202;
        HttpStatusCode::ACCEPTED_202();
    }
}