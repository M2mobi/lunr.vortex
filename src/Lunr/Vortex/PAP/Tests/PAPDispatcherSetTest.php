<?php

/**
 * This file contains the PAPDispatcherSetTest class.
 *
 * @package    Lunr\Vortex\PAP
 * @author     Leonidas Diamantis <leonidas@m2mobi.com>
 * @copyright  2014-2018, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Lunr\Vortex\PAP\Tests;

/**
 * This class contains tests for the setters of the PAPDispatcher class.
 *
 * @covers Lunr\Vortex\PAP\PAPDispatcher
 */
class PAPDispatcherSetTest extends PAPDispatcherTest
{

    /**
     * Test that set_auth_token() sets the auth_token.
     *
     * @covers Lunr\Vortex\PAP\PAPDispatcher::set_auth_token
     */
    public function testSetAuthTokenSetsAuthToken(): void
    {
        $auth_token = 'auth_token';
        $this->class->set_auth_token($auth_token);

        $this->assertPropertyEquals('auth_token', 'auth_token');
    }

    /**
     * Test the fluid interface of set_auth_token().
     *
     * @covers Lunr\Vortex\PAP\PAPDispatcher::set_auth_token
     */
    public function testSetAuthTokenReturnsSelfReference(): void
    {
        $auth_token = 'auth_token';
        $this->assertEquals($this->class, $this->class->set_auth_token($auth_token));
    }

    /**
     * Test that set_password() sets the password.
     *
     * @covers Lunr\Vortex\PAP\PAPDispatcher::set_password
     */
    public function testSetPasswordSetsPassword(): void
    {
        $password = 'password';
        $this->class->set_password($password);

        $this->assertPropertyEquals('password', 'password');
    }

    /**
     * Test the fluid interface of set_password().
     *
     * @covers Lunr\Vortex\PAP\PAPDispatcher::set_password
     */
    public function testSetPasswordReturnsSelfReference(): void
    {
        $password = 'password';
        $this->assertEquals($this->class, $this->class->set_password($password));
    }

    /**
     * Test that set_content_provider_id() sets the cid.
     *
     * @covers Lunr\Vortex\PAP\PAPDispatcher::set_content_provider_id
     */
    public function testSetContentProviderIdSetsCid(): void
    {
        $cid = 'cid';
        $this->class->set_content_provider_id($cid);

        $this->assertPropertyEquals('cid', 'cid');
    }

    /**
     * Test the fluid interface of set_content_provider_id().
     *
     * @covers Lunr\Vortex\PAP\PAPDispatcher::set_content_provider_id
     */
    public function testSetContentProviderIdReturnsSelfReference(): void
    {
        $cid = 'cid';
        $this->assertEquals($this->class, $this->class->set_content_provider_id($cid));
    }

}

?>
