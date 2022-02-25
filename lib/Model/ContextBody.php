<?php
/**
 * ContextBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Store API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Store API
 *
 * OpenAPI spec version: 6.4.8.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ContextBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContextBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'context_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_id' => 'string',
'language_id' => 'string',
'billing_address_id' => 'string',
'shipping_address_id' => 'string',
'payment_method_id' => 'string',
'shipping_method_id' => 'string',
'country_id' => 'string',
'country_state_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency_id' => null,
'language_id' => null,
'billing_address_id' => null,
'shipping_address_id' => null,
'payment_method_id' => null,
'shipping_method_id' => null,
'country_id' => null,
'country_state_id' => null    ];

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
        'currency_id' => 'currencyId',
'language_id' => 'languageId',
'billing_address_id' => 'billingAddressId',
'shipping_address_id' => 'shippingAddressId',
'payment_method_id' => 'paymentMethodId',
'shipping_method_id' => 'shippingMethodId',
'country_id' => 'countryId',
'country_state_id' => 'countryStateId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_id' => 'setCurrencyId',
'language_id' => 'setLanguageId',
'billing_address_id' => 'setBillingAddressId',
'shipping_address_id' => 'setShippingAddressId',
'payment_method_id' => 'setPaymentMethodId',
'shipping_method_id' => 'setShippingMethodId',
'country_id' => 'setCountryId',
'country_state_id' => 'setCountryStateId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_id' => 'getCurrencyId',
'language_id' => 'getLanguageId',
'billing_address_id' => 'getBillingAddressId',
'shipping_address_id' => 'getShippingAddressId',
'payment_method_id' => 'getPaymentMethodId',
'shipping_method_id' => 'getShippingMethodId',
'country_id' => 'getCountryId',
'country_state_id' => 'getCountryStateId'    ];

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
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['language_id'] = isset($data['language_id']) ? $data['language_id'] : null;
        $this->container['billing_address_id'] = isset($data['billing_address_id']) ? $data['billing_address_id'] : null;
        $this->container['shipping_address_id'] = isset($data['shipping_address_id']) ? $data['shipping_address_id'] : null;
        $this->container['payment_method_id'] = isset($data['payment_method_id']) ? $data['payment_method_id'] : null;
        $this->container['shipping_method_id'] = isset($data['shipping_method_id']) ? $data['shipping_method_id'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['country_state_id'] = isset($data['country_state_id']) ? $data['country_state_id'] : null;
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
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id Currency
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets language_id
     *
     * @return string
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param string $language_id Language
     *
     * @return $this
     */
    public function setLanguageId($language_id)
    {
        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets billing_address_id
     *
     * @return string
     */
    public function getBillingAddressId()
    {
        return $this->container['billing_address_id'];
    }

    /**
     * Sets billing_address_id
     *
     * @param string $billing_address_id Billing Address
     *
     * @return $this
     */
    public function setBillingAddressId($billing_address_id)
    {
        $this->container['billing_address_id'] = $billing_address_id;

        return $this;
    }

    /**
     * Gets shipping_address_id
     *
     * @return string
     */
    public function getShippingAddressId()
    {
        return $this->container['shipping_address_id'];
    }

    /**
     * Sets shipping_address_id
     *
     * @param string $shipping_address_id Shipping Address
     *
     * @return $this
     */
    public function setShippingAddressId($shipping_address_id)
    {
        $this->container['shipping_address_id'] = $shipping_address_id;

        return $this;
    }

    /**
     * Gets payment_method_id
     *
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param string $payment_method_id Payment Method
     *
     * @return $this
     */
    public function setPaymentMethodId($payment_method_id)
    {
        $this->container['payment_method_id'] = $payment_method_id;

        return $this;
    }

    /**
     * Gets shipping_method_id
     *
     * @return string
     */
    public function getShippingMethodId()
    {
        return $this->container['shipping_method_id'];
    }

    /**
     * Sets shipping_method_id
     *
     * @param string $shipping_method_id Shipping Method
     *
     * @return $this
     */
    public function setShippingMethodId($shipping_method_id)
    {
        $this->container['shipping_method_id'] = $shipping_method_id;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string $country_id Country
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets country_state_id
     *
     * @return string
     */
    public function getCountryStateId()
    {
        return $this->container['country_state_id'];
    }

    /**
     * Sets country_state_id
     *
     * @param string $country_state_id Country State
     *
     * @return $this
     */
    public function setCountryStateId($country_state_id)
    {
        $this->container['country_state_id'] = $country_state_id;

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
