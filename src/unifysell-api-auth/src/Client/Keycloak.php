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

namespace Unifysell\OAuth2\Client;

/**
 * Class Keycloak
 */
class Keycloak
{
    /**
     * @var \Stevenmaguire\OAuth2\Client\Provider\Keycloak
     */
    protected $provider;

    /**
     * @var \League\OAuth2\Client\Token\AccessToken
     */
    protected $accessToken;

    /**
     * Keycloak constructor.
     *
     * Has default configuration for accessing demo api.
     *
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct($clientId = 'demo-client', $clientSecret = 'f836f6d8-28d0-4e37-8ed0-a0015fc980a5')
    {
        $this->setProvider(
            new \Stevenmaguire\OAuth2\Client\Provider\Keycloak([
                'authServerUrl'         => 'https://login.unifysell.de/auth',
                'realm'                 => 'master',
                'clientId'              => $clientId,
                'clientSecret'          => $clientSecret,
                'encryptionAlgorithm'   => 'RS256'
            ])
        );
    }

    public function hasTokenExpired()
    {
        if (!$this->getAccessToken() || $this->getAccessToken()->hasExpired()) {
            return true;
        }
        return false;
    }

    public function setAccessTokenFromArray($jsonToken)
    {
        $tokenObject = new \League\OAuth2\Client\Token\AccessToken($jsonToken);
        $this->setAccessToken($tokenObject);
        return $this;
    }

    /**
     * get a new access token
     *
     * @return \League\OAuth2\Client\Token\AccessToken
     */
    public function createAccessToken()
    {
        try {
            $tokenObject = $this->getProvider()->getAccessToken('client_credentials');
            $this->setAccessToken($tokenObject);
            return $this->getAccessToken();
        } catch (\Exception $e) {
            exit('Failed to create access token: ' . $e->getMessage());
        }
    }

    /**
     * refresh a token if session is expired
     *
     * @return \League\OAuth2\Client\Token\AccessToken
     * @throws \Exception
     */
    public function refreshAccessToken()
    {
        $this->setAccessToken(
            $this->getProvider()->getAccessToken(
                'refresh_token',
                ['refresh_token' => $this->getAccessToken()->getRefreshToken()]
            )
        );
        return $this->getAccessToken();
    }

    /**
     * @return \Stevenmaguire\OAuth2\Client\Provider\Keycloak
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \Stevenmaguire\OAuth2\Client\Provider\Keycloak $provider
     * @return $this
     */
    protected function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return bool
     */
    public function tokenIsEmpty()
    {
        if ($this->accessToken) {
            return false;
        }
        return true;
    }

    /**
     * @return \League\OAuth2\Client\Token\AccessToken
     * @throws \Exception
     */
    public function getAccessToken()
    {
        if (!$this->accessToken) {
            throw new \Exception('You must first create a token before you can get it.');
        }
        return $this->accessToken;
    }

    /**
     * @param \League\OAuth2\Client\Token\AccessToken $accessToken
     * @return $this
     */
    protected function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }
}
