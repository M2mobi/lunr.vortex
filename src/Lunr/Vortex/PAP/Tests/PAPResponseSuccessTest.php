<?php

/**
 * This file contains the PAPResponseSuccessTest class.
 *
 * @package    Lunr\Vortex\PAP
 * @author     Leonidas Diaamntis <leonidas@m2mobi.com>
 * @copyright  2014-2018, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Lunr\Vortex\PAP\Tests;

use Lunr\Vortex\PushNotificationStatus;

/**
 * This class contains tests for successful PAP dispatches.
 *
 * @covers Lunr\Vortex\PAP\PAPResponse
 */
class PAPResponseSuccessTest extends PAPResponseTest
{

    /**
     * Testcase Constructor.
     */
    public function setUp(): void
    {
        parent::setUpSuccess();
    }

    /**
     * Test that the status is set as error.
     */
    public function testStatusIsError(): void
    {
        $this->assertSame(PushNotificationStatus::SUCCESS, $this->get_reflection_property_value('status'));
    }

    /**
     * Test that the endpoint is set correctly.
     */
    public function testEndpointSetCorrectly(): void
    {
        $this->assertPropertySame('endpoint', '12345679');
    }

    /**
     * Test that the http code is set from the Response object.
     */
    public function testHttpCodeIsSetCorrectly(): void
    {
        $this->assertSame(200, $this->get_reflection_property_value('http_code'));
    }

    /**
     * Test that the payload is set correctly.
     */
    public function testPayloadIsSetCorrectly(): void
    {
        $this->assertPropertySame('payload', '<?xml version="1.0"?>');
    }

    /**
     * Test parse_pap_response() parses a response without a failure.
     *
     * @covers Lunr\Vortex\PAP\PAPResponse::parse_pap_response
     */
    public function testParsePAPResponseWithoutFailure(): void
    {
        $file = file_get_contents(TEST_STATICS . '/Vortex/pap/response.xml');

        $this->set_reflection_property_value('result', $file);
        $this->set_reflection_property_value('pap_response', []);

        $method = $this->get_accessible_reflection_method('parse_pap_response');
        $result = $method->invoke($this->class);

        $this->assertNull($result);
    }

    /**
     * Test that get_status() returns the dispatch status with correct endpoint.
     *
     * @covers Lunr\Vortex\PAP\PAPResponse::get_status
     */
    public function testGetStatusReturnsStatusForCorrectEndpoint(): void
    {
        $this->assertEquals($this->class->get_status('12345679'), PushNotificationStatus::SUCCESS);
    }

    /**
     * Test that get_status() returns unknown status with incorrect endpoint.
     *
     * @covers Lunr\Vortex\PAP\PAPResponse::get_status
     */
    public function testGetStatusReturnsUnknownStatusForIncorrectEndpoint(): void
    {
        $this->assertEquals($this->class->get_status('abcdefghi'), PushNotificationStatus::UNKNOWN);
    }

}

?>
