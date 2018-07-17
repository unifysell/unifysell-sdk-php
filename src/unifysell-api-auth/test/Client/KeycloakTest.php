<?php
/**
 * nepda Internetdienstleistungen
 * Nepomuk Fraedrich
 * Zschopauer Str. 159
 * 09126 Chemnitz
 * info@nepda.eu
 * http://nepda.eu/
 * tel 0176 270 68 7 68
 * USt-IdNr.: DE287190901
 *
 * PHP Version >= 7.0
 *
 * @author    Thomas Rueckert <t.rueckert@nepda.eu>
 * @author    Nepomuk Fraedrich <info@nepda.eu>
 * @copyright 2018 Nepomuk Fraedrich
 */

namespace Unifysell\OAuth2\Test\Client;

use Unifysell\OAuth2\Client\Keycloak;

class KeycloakTest extends \PHPUnit_Framework_TestCase
{

    public function testAuthorize()
    {
        $keycloak = new Keycloak();
        $keycloak->authorize();
    }

    public function testRefreshToken()
    {
        $keycloak = new Keycloak();
        $keycloak->refreshToken();
    }
}
