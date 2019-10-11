<?php
/**
 * SearchItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  Acronis\Cloud\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API v2 description for Multi-service Portal
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Acronis\Cloud\Client\Model\Search;

use Acronis\Cloud\Client\BaseModel;
/**
 * SearchItems Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SearchItems extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Search\SearchItems';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'obj_type' => '\Acronis\Cloud\Client\Model\ObjType',
            'id' => 'string',
            'parent_id' => 'string',
            'path' => 'string[]',
            'kind' => 'string',
            'login' => 'string',
            'name' => 'string',
            'first_name' => 'string',
            'last_name' => 'string'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'obj_type' => null,
            'id' => null,
            'parent_id' => null,
            'path' => null,
            'kind' => null,
            'login' => null,
            'name' => null,
            'first_name' => null,
            'last_name' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'obj_type' => 'obj_type',
            'id' => 'id',
            'parent_id' => 'parent_id',
            'path' => 'path',
            'kind' => 'kind',
            'login' => 'login',
            'name' => 'name',
            'first_name' => 'first_name',
            'last_name' => 'last_name'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'obj_type' => 'setObjType',
            'id' => 'setId',
            'parent_id' => 'setParentId',
            'path' => 'setPath',
            'kind' => 'setKind',
            'login' => 'setLogin',
            'name' => 'setName',
            'first_name' => 'setFirstName',
            'last_name' => 'setLastName'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'obj_type' => 'getObjType',
            'id' => 'getId',
            'parent_id' => 'getParentId',
            'path' => 'getPath',
            'kind' => 'getKind',
            'login' => 'getLogin',
            'name' => 'getName',
            'first_name' => 'getFirstName',
            'last_name' => 'getLastName'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'obj_type' => 'hasObjType',
            'id' => 'hasId',
            'parent_id' => 'hasParentId',
            'path' => 'hasPath',
            'kind' => 'hasKind',
            'login' => 'hasLogin',
            'name' => 'hasName',
            'first_name' => 'hasFirstName',
            'last_name' => 'hasLastName'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'obj_type' => 'validateObjType',
            'id' => 'validateId',
            'parent_id' => 'validateParentId',
            'path' => 'validatePath',
            'kind' => 'validateKind',
            'login' => 'validateLogin',
            'name' => 'validateName',
            'first_name' => 'validateFirstName',
            'last_name' => 'validateLastName'
        ];
    }

    

    

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!empty($this->validateObjType())) {
            $invalid_properties[] = $this->validateObjType();
        }
        if (!empty($this->validateId())) {
            $invalid_properties[] = $this->validateId();
        }
        if (!empty($this->validateParentId())) {
            $invalid_properties[] = $this->validateParentId();
        }
        if (!empty($this->validatePath())) {
            $invalid_properties[] = $this->validatePath();
        }
        if (!empty($this->validateKind())) {
            $invalid_properties[] = $this->validateKind();
        }
        if (!empty($this->validateLogin())) {
            $invalid_properties[] = $this->validateLogin();
        }
        if (!empty($this->validateName())) {
            $invalid_properties[] = $this->validateName();
        }
        if (!empty($this->validateFirstName())) {
            $invalid_properties[] = $this->validateFirstName();
        }
        if (!empty($this->validateLastName())) {
            $invalid_properties[] = $this->validateLastName();
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!empty($this->validateObjType())) {
            return false;
        }
        if (!empty($this->validateId())) {
            return false;
        }
        if (!empty($this->validateParentId())) {
            return false;
        }
        if (!empty($this->validatePath())) {
            return false;
        }
        if (!empty($this->validateKind())) {
            return false;
        }
        if (!empty($this->validateLogin())) {
            return false;
        }
        if (!empty($this->validateName())) {
            return false;
        }
        if (!empty($this->validateFirstName())) {
            return false;
        }
        if (!empty($this->validateLastName())) {
            return false;
        }
        return true;
    }


    /**
     * Gets obj_type
     * @return \Acronis\Cloud\Client\Model\ObjType
     */
    public function getObjType()
    {
        return $this->offsetGet('obj_type');
    }

    /**
     * Checks obj_type
     * @return boolean
     */
    public function hasObjType()
    {
        return $this->offsetExists('obj_type');
    }

    /**
     * Sets obj_type
     * @param \Acronis\Cloud\Client\Model\ObjType $obj_type
     * @return $this
     */
    public function setObjType($obj_type)
    {
        $this->offsetSet('obj_type', $obj_type);

        return $this;
    }

    /**
     * Unset obj_type
     */
    public function unsetObjType() {
        $this->offsetUnset('obj_type');
    }

    /**
     * Valid obj_type
     * @return array|boolean
     */
    public function validateObjType()
    {
        if (!$this->offsetExists('obj_type')) {
            return "Property 'obj_type' was not initialized.";
        }
        return false;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->offsetGet('id');
    }

    /**
     * Checks id
     * @return boolean
     */
    public function hasId()
    {
        return $this->offsetExists('id');
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        if ((strlen($id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling SearchItems., must be smaller than or equal to 36.');
        }
        if ((strlen($id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling SearchItems., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling SearchItems., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('id', $id);

        return $this;
    }

    /**
     * Unset id
     */
    public function unsetId() {
        $this->offsetUnset('id');
    }

    /**
     * Valid id
     * @return array|boolean
     */
    public function validateId()
    {
        if (!$this->offsetExists('id')) {
            return "Property 'id' was not initialized.";
        }
            if ($this->offsetExists('id') && strlen($this->offsetGet('id')) > 36) {
                return "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('id') && strlen($this->offsetGet('id')) < 36) {
                return "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('id') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('id'))) {
                return "invalid value for 'id', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }


    /**
     * Gets parent_id
     * @return string
     */
    public function getParentId()
    {
        return $this->offsetGet('parent_id');
    }

    /**
     * Checks parent_id
     * @return boolean
     */
    public function hasParentId()
    {
        return $this->offsetExists('parent_id');
    }

    /**
     * Sets parent_id
     * @param string $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        if ((strlen($parent_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $parent_id when calling SearchItems., must be smaller than or equal to 36.');
        }
        if ((strlen($parent_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $parent_id when calling SearchItems., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $parent_id))) {
            throw new \InvalidArgumentException("invalid value for $parent_id when calling SearchItems., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('parent_id', $parent_id);

        return $this;
    }

    /**
     * Unset parent_id
     */
    public function unsetParentId() {
        $this->offsetUnset('parent_id');
    }

    /**
     * Valid parent_id
     * @return array|boolean
     */
    public function validateParentId()
    {
        if (!$this->offsetExists('parent_id')) {
            return "Property 'parent_id' was not initialized.";
        }
            if ($this->offsetExists('parent_id') && strlen($this->offsetGet('parent_id')) > 36) {
                return "invalid value for 'parent_id', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('parent_id') && strlen($this->offsetGet('parent_id')) < 36) {
                return "invalid value for 'parent_id', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('parent_id') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('parent_id'))) {
                return "invalid value for 'parent_id', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }


    /**
     * Gets path
     * @return string[]
     */
    public function getPath()
    {
        return $this->offsetGet('path');
    }

    /**
     * Checks path
     * @return boolean
     */
    public function hasPath()
    {
        return $this->offsetExists('path');
    }

    /**
     * Sets path
     * @param string[] $path list of tenants' names between search root and found object
     * @return $this
     */
    public function setPath($path)
    {
        $this->offsetSet('path', $path);

        return $this;
    }

    /**
     * Unset path
     */
    public function unsetPath() {
        $this->offsetUnset('path');
    }

    /**
     * Valid path
     * @return array|boolean
     */
    public function validatePath()
    {
        if (!$this->offsetExists('path')) {
            return "Property 'path' was not initialized.";
        }
        return false;
    }


    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->offsetGet('kind');
    }

    /**
     * Checks kind
     * @return boolean
     */
    public function hasKind()
    {
        return $this->offsetExists('kind');
    }

    /**
     * Sets kind
     * @param string $kind Current implementations supports following values: root, partner, folder, customer, unit
     * @return $this
     */
    public function setKind($kind)
    {
        $this->offsetSet('kind', $kind);

        return $this;
    }

    /**
     * Unset kind
     */
    public function unsetKind() {
        $this->offsetUnset('kind');
    }

    /**
     * Valid kind
     * @return array|boolean
     */
    public function validateKind()
    {
        if (!$this->offsetExists('kind')) {
            return false;
        }
        return false;
    }


    /**
     * Gets login
     * @return string
     */
    public function getLogin()
    {
        return $this->offsetGet('login');
    }

    /**
     * Checks login
     * @return boolean
     */
    public function hasLogin()
    {
        return $this->offsetExists('login');
    }

    /**
     * Sets login
     * @param string $login user's login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->offsetSet('login', $login);

        return $this;
    }

    /**
     * Unset login
     */
    public function unsetLogin() {
        $this->offsetUnset('login');
    }

    /**
     * Valid login
     * @return array|boolean
     */
    public function validateLogin()
    {
        if (!$this->offsetExists('login')) {
            return false;
        }
        return false;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->offsetGet('name');
    }

    /**
     * Checks name
     * @return boolean
     */
    public function hasName()
    {
        return $this->offsetExists('name');
    }

    /**
     * Sets name
     * @param string $name tenant's name
     * @return $this
     */
    public function setName($name)
    {
        $this->offsetSet('name', $name);

        return $this;
    }

    /**
     * Unset name
     */
    public function unsetName() {
        $this->offsetUnset('name');
    }

    /**
     * Valid name
     * @return array|boolean
     */
    public function validateName()
    {
        if (!$this->offsetExists('name')) {
            return false;
        }
        return false;
    }


    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->offsetGet('first_name');
    }

    /**
     * Checks first_name
     * @return boolean
     */
    public function hasFirstName()
    {
        return $this->offsetExists('first_name');
    }

    /**
     * Sets first_name
     * @param string $first_name user's or tenant's contact first name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->offsetSet('first_name', $first_name);

        return $this;
    }

    /**
     * Unset first_name
     */
    public function unsetFirstName() {
        $this->offsetUnset('first_name');
    }

    /**
     * Valid first_name
     * @return array|boolean
     */
    public function validateFirstName()
    {
        if (!$this->offsetExists('first_name')) {
            return false;
        }
        return false;
    }


    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->offsetGet('last_name');
    }

    /**
     * Checks last_name
     * @return boolean
     */
    public function hasLastName()
    {
        return $this->offsetExists('last_name');
    }

    /**
     * Sets last_name
     * @param string $last_name user's or tenant's contact last name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->offsetSet('last_name', $last_name);

        return $this;
    }

    /**
     * Unset last_name
     */
    public function unsetLastName() {
        $this->offsetUnset('last_name');
    }

    /**
     * Valid last_name
     * @return array|boolean
     */
    public function validateLastName()
    {
        if (!$this->offsetExists('last_name')) {
            return false;
        }
        return false;
    }

}


