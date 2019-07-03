<?php
/**
 * Marketplace
 *
 * PHP version 5
 *
 * @category Class
 * @package  Unifysell\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UnifysellApi
 *
 * The unified endpoint to eCommerce APIs.
 *
 * OpenAPI spec version: 0.0.1
 * Contact: info@unifysell.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.9
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Unifysell\SDK\Model;

use \ArrayAccess;
use \Unifysell\SDK\ObjectSerializer;

/**
 * Marketplace Class Doc Comment
 *
 * @category Class
 * @description Each marketplace exists in relation to a channel. It represents a subset of the channels market. On ebay and amazon for example a marketplace represents differnts countries markets. A platform also splits into separate marketplaces for selling, shipping and payment; e.g. on amazon. Some platforms like hood and rakuten don&#x27;t have an internal marketplace representation. They still owe a single marketplace in the unifysell context. This is for generic purpose.
 * @package  Unifysell\SDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Marketplace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Marketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'website_id' => 'string',
'title' => 'string',
'sync_activated' => 'bool',
'store_id' => 'string',
'site_id' => 'string',
'site' => 'string',
'seller_id' => 'string',
'name' => 'string',
'marketplace_url' => 'string',
'marketplace_id' => 'string',
'is_active' => 'bool',
'id' => 'int',
'has_seller_suspended_listings' => 'bool',
'group_id' => 'string',
'domain_name' => 'string',
'default_language_code' => 'string',
'default_currency_code' => 'string',
'default_country_code' => 'string',
'date_created' => 'string',
'date_changed' => 'string',
'country_iso_code' => 'string',
'country' => 'string',
'code' => 'string',
'channel_id' => 'int',
'abbreviation' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'website_id' => null,
'title' => null,
'sync_activated' => null,
'store_id' => null,
'site_id' => null,
'site' => null,
'seller_id' => null,
'name' => null,
'marketplace_url' => null,
'marketplace_id' => null,
'is_active' => null,
'id' => null,
'has_seller_suspended_listings' => null,
'group_id' => null,
'domain_name' => null,
'default_language_code' => null,
'default_currency_code' => null,
'default_country_code' => null,
'date_created' => 'datetime',
'date_changed' => 'datetime',
'country_iso_code' => null,
'country' => null,
'code' => null,
'channel_id' => null,
'abbreviation' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'website_id' => 'websiteId',
'title' => 'title',
'sync_activated' => 'syncActivated',
'store_id' => 'storeId',
'site_id' => 'siteId',
'site' => 'site',
'seller_id' => 'sellerId',
'name' => 'name',
'marketplace_url' => 'marketplaceUrl',
'marketplace_id' => 'marketplaceId',
'is_active' => 'isActive',
'id' => 'id',
'has_seller_suspended_listings' => 'hasSellerSuspendedListings',
'group_id' => 'groupId',
'domain_name' => 'domainName',
'default_language_code' => 'defaultLanguageCode',
'default_currency_code' => 'defaultCurrencyCode',
'default_country_code' => 'defaultCountryCode',
'date_created' => 'dateCreated',
'date_changed' => 'dateChanged',
'country_iso_code' => 'countryIsoCode',
'country' => 'country',
'code' => 'code',
'channel_id' => 'channelId',
'abbreviation' => 'abbreviation'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'website_id' => 'setWebsiteId',
'title' => 'setTitle',
'sync_activated' => 'setSyncActivated',
'store_id' => 'setStoreId',
'site_id' => 'setSiteId',
'site' => 'setSite',
'seller_id' => 'setSellerId',
'name' => 'setName',
'marketplace_url' => 'setMarketplaceUrl',
'marketplace_id' => 'setMarketplaceId',
'is_active' => 'setIsActive',
'id' => 'setId',
'has_seller_suspended_listings' => 'setHasSellerSuspendedListings',
'group_id' => 'setGroupId',
'domain_name' => 'setDomainName',
'default_language_code' => 'setDefaultLanguageCode',
'default_currency_code' => 'setDefaultCurrencyCode',
'default_country_code' => 'setDefaultCountryCode',
'date_created' => 'setDateCreated',
'date_changed' => 'setDateChanged',
'country_iso_code' => 'setCountryIsoCode',
'country' => 'setCountry',
'code' => 'setCode',
'channel_id' => 'setChannelId',
'abbreviation' => 'setAbbreviation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'website_id' => 'getWebsiteId',
'title' => 'getTitle',
'sync_activated' => 'getSyncActivated',
'store_id' => 'getStoreId',
'site_id' => 'getSiteId',
'site' => 'getSite',
'seller_id' => 'getSellerId',
'name' => 'getName',
'marketplace_url' => 'getMarketplaceUrl',
'marketplace_id' => 'getMarketplaceId',
'is_active' => 'getIsActive',
'id' => 'getId',
'has_seller_suspended_listings' => 'getHasSellerSuspendedListings',
'group_id' => 'getGroupId',
'domain_name' => 'getDomainName',
'default_language_code' => 'getDefaultLanguageCode',
'default_currency_code' => 'getDefaultCurrencyCode',
'default_country_code' => 'getDefaultCountryCode',
'date_created' => 'getDateCreated',
'date_changed' => 'getDateChanged',
'country_iso_code' => 'getCountryIsoCode',
'country' => 'getCountry',
'code' => 'getCode',
'channel_id' => 'getChannelId',
'abbreviation' => 'getAbbreviation'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['website_id'] = isset($data['website_id']) ? $data['website_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['sync_activated'] = isset($data['sync_activated']) ? $data['sync_activated'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['marketplace_url'] = isset($data['marketplace_url']) ? $data['marketplace_url'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['has_seller_suspended_listings'] = isset($data['has_seller_suspended_listings']) ? $data['has_seller_suspended_listings'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['domain_name'] = isset($data['domain_name']) ? $data['domain_name'] : null;
        $this->container['default_language_code'] = isset($data['default_language_code']) ? $data['default_language_code'] : null;
        $this->container['default_currency_code'] = isset($data['default_currency_code']) ? $data['default_currency_code'] : null;
        $this->container['default_country_code'] = isset($data['default_country_code']) ? $data['default_country_code'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['date_changed'] = isset($data['date_changed']) ? $data['date_changed'] : null;
        $this->container['country_iso_code'] = isset($data['country_iso_code']) ? $data['country_iso_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['abbreviation'] = isset($data['abbreviation']) ? $data['abbreviation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets website_id
     *
     * @return string
     */
    public function getWebsiteId()
    {
        return $this->container['website_id'];
    }

    /**
     * Sets website_id
     *
     * @param string $website_id The id of a magentos marketplaces related website.
     *
     * @return $this
     */
    public function setWebsiteId($website_id)
    {
        $this->container['website_id'] = $website_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title A name identifying the marketplace. A name every marketplace gets asociated by unifysell.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets sync_activated
     *
     * @return bool
     */
    public function getSyncActivated()
    {
        return $this->container['sync_activated'];
    }

    /**
     * Sets sync_activated
     *
     * @param bool $sync_activated True, if the related entities of the marketplace is currently getting synced.
     *
     * @return $this
     */
    public function setSyncActivated($sync_activated)
    {
        $this->container['sync_activated'] = $sync_activated;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param string $store_id The magento internal store id, where a magento store equals a unifysell marketplace.
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets site_id
     *
     * @return string
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param string $site_id An ebays internal identifier for a marketplace.
     *
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param string $site Ebays site is similar to the unifysell marketplace. This property is giving a name of the site.
     *
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string $seller_id Amazons `sellerId` property.
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Another name identifying the marketplace. Given only by some platforms.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets marketplace_url
     *
     * @return string
     */
    public function getMarketplaceUrl()
    {
        return $this->container['marketplace_url'];
    }

    /**
     * Sets marketplace_url
     *
     * @param string $marketplace_url The url referencing the marketplaces location.
     *
     * @return $this
     */
    public function setMarketplaceUrl($marketplace_url)
    {
        $this->container['marketplace_url'] = $marketplace_url;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The amazon property `marketplaceId`.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Tells if a magento marketplace is activated.
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The unique identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets has_seller_suspended_listings
     *
     * @return bool
     */
    public function getHasSellerSuspendedListings()
    {
        return $this->container['has_seller_suspended_listings'];
    }

    /**
     * Sets has_seller_suspended_listings
     *
     * @param bool $has_seller_suspended_listings Tells if an amazon marketplace has suspended listings.
     *
     * @return $this
     */
    public function setHasSellerSuspendedListings($has_seller_suspended_listings)
    {
        $this->container['has_seller_suspended_listings'] = $has_seller_suspended_listings;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id The id of the group of a magento marketplace.
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets domain_name
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string $domain_name An amazon marketplaces domain name.
     *
     * @return $this
     */
    public function setDomainName($domain_name)
    {
        $this->container['domain_name'] = $domain_name;

        return $this;
    }

    /**
     * Gets default_language_code
     *
     * @return string
     */
    public function getDefaultLanguageCode()
    {
        return $this->container['default_language_code'];
    }

    /**
     * Sets default_language_code
     *
     * @param string $default_language_code The default language of an amazon marketplace.
     *
     * @return $this
     */
    public function setDefaultLanguageCode($default_language_code)
    {
        $this->container['default_language_code'] = $default_language_code;

        return $this;
    }

    /**
     * Gets default_currency_code
     *
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return $this->container['default_currency_code'];
    }

    /**
     * Sets default_currency_code
     *
     * @param string $default_currency_code The default currency for payments on an amazon marketplace.
     *
     * @return $this
     */
    public function setDefaultCurrencyCode($default_currency_code)
    {
        $this->container['default_currency_code'] = $default_currency_code;

        return $this;
    }

    /**
     * Gets default_country_code
     *
     * @return string
     */
    public function getDefaultCountryCode()
    {
        return $this->container['default_country_code'];
    }

    /**
     * Sets default_country_code
     *
     * @param string $default_country_code The country code an amazon marketplace defaults to.
     *
     * @return $this
     */
    public function setDefaultCountryCode($default_country_code)
    {
        $this->container['default_country_code'] = $default_country_code;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string $date_created Timestamp of the latest update to the listing.
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_changed
     *
     * @return string
     */
    public function getDateChanged()
    {
        return $this->container['date_changed'];
    }

    /**
     * Sets date_changed
     *
     * @param string $date_changed Timestamp of creation of the listing.
     *
     * @return $this
     */
    public function setDateChanged($date_changed)
    {
        $this->container['date_changed'] = $date_changed;

        return $this;
    }

    /**
     * Gets country_iso_code
     *
     * @return string
     */
    public function getCountryIsoCode()
    {
        return $this->container['country_iso_code'];
    }

    /**
     * Sets country_iso_code
     *
     * @param string $country_iso_code When a platform differs marketplaces by differnt countries, this property gives the related marketplaces country code.
     *
     * @return $this
     */
    public function setCountryIsoCode($country_iso_code)
    {
        $this->container['country_iso_code'] = $country_iso_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The country the ebay marketplace is located in.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The magento store code number.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets channel_id
     *
     * @return int
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     *
     * @param int $channel_id The unifysell identifier of the related channel entity.
     *
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets abbreviation
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->container['abbreviation'];
    }

    /**
     * Sets abbreviation
     *
     * @param string $abbreviation Short version of the ebay country property.
     *
     * @return $this
     */
    public function setAbbreviation($abbreviation)
    {
        $this->container['abbreviation'] = $abbreviation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
