<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * UpdateItemModifierListsRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class UpdateItemModifierListsRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'item_ids' => 'string[]',
        'modifier_lists_to_enable' => 'string[]',
        'modifier_lists_to_disable' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'item_ids' => 'item_ids',
        'modifier_lists_to_enable' => 'modifier_lists_to_enable',
        'modifier_lists_to_disable' => 'modifier_lists_to_disable'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'item_ids' => 'setItemIds',
        'modifier_lists_to_enable' => 'setModifierListsToEnable',
        'modifier_lists_to_disable' => 'setModifierListsToDisable'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'item_ids' => 'getItemIds',
        'modifier_lists_to_enable' => 'getModifierListsToEnable',
        'modifier_lists_to_disable' => 'getModifierListsToDisable'
    );
  
    /**
      * $item_ids The `CatalogItem](#type-catalogitem)s whose [CatalogModifierList`s are being updated.
      * @var string[]
      */
    protected $item_ids;
    /**
      * $modifier_lists_to_enable The set of `CatalogModifierList](#type-catalogmodifierlist)s (referenced by ID) to enable for the [CatalogItem`.
      * @var string[]
      */
    protected $modifier_lists_to_enable;
    /**
      * $modifier_lists_to_disable The set of `CatalogModifierList](#type-catalogmodifierlist)s (referenced by ID) to disable for the [CatalogItem`.
      * @var string[]
      */
    protected $modifier_lists_to_disable;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["item_ids"])) {
              $this->item_ids = $data["item_ids"];
            } else {
              $this->item_ids = null;
            }
            if (isset($data["modifier_lists_to_enable"])) {
              $this->modifier_lists_to_enable = $data["modifier_lists_to_enable"];
            } else {
              $this->modifier_lists_to_enable = null;
            }
            if (isset($data["modifier_lists_to_disable"])) {
              $this->modifier_lists_to_disable = $data["modifier_lists_to_disable"];
            } else {
              $this->modifier_lists_to_disable = null;
            }
        }
    }
    /**
     * Gets item_ids
     * @return string[]
     */
    public function getItemIds()
    {
        return $this->item_ids;
    }
  
    /**
     * Sets item_ids
     * @param string[] $item_ids The `CatalogItem](#type-catalogitem)s whose [CatalogModifierList`s are being updated.
     * @return $this
     */
    public function setItemIds($item_ids)
    {
        $this->item_ids = $item_ids;
        return $this;
    }
    /**
     * Gets modifier_lists_to_enable
     * @return string[]
     */
    public function getModifierListsToEnable()
    {
        return $this->modifier_lists_to_enable;
    }
  
    /**
     * Sets modifier_lists_to_enable
     * @param string[] $modifier_lists_to_enable The set of `CatalogModifierList](#type-catalogmodifierlist)s (referenced by ID) to enable for the [CatalogItem`.
     * @return $this
     */
    public function setModifierListsToEnable($modifier_lists_to_enable)
    {
        $this->modifier_lists_to_enable = $modifier_lists_to_enable;
        return $this;
    }
    /**
     * Gets modifier_lists_to_disable
     * @return string[]
     */
    public function getModifierListsToDisable()
    {
        return $this->modifier_lists_to_disable;
    }
  
    /**
     * Sets modifier_lists_to_disable
     * @param string[] $modifier_lists_to_disable The set of `CatalogModifierList](#type-catalogmodifierlist)s (referenced by ID) to disable for the [CatalogItem`.
     * @return $this
     */
    public function setModifierListsToDisable($modifier_lists_to_disable)
    {
        $this->modifier_lists_to_disable = $modifier_lists_to_disable;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
