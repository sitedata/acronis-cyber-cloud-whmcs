<?php
/**
 * IdentityPost
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

namespace Acronis\Cloud\Client\Model\Idp;

use Acronis\Cloud\Client\BaseModel;
/**
 * IdentityPost Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IdentityPost extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Idp\IdentityPost';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'login' => 'string',
            'email' => 'string',
            'password' => 'string'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'login' => null,
            'email' => null,
            'password' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'login' => 'login',
            'email' => 'email',
            'password' => 'password'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'login' => 'setLogin',
            'email' => 'setEmail',
            'password' => 'setPassword'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'login' => 'getLogin',
            'email' => 'getEmail',
            'password' => 'getPassword'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'login' => 'hasLogin',
            'email' => 'hasEmail',
            'password' => 'hasPassword'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'login' => 'validateLogin',
            'email' => 'validateEmail',
            'password' => 'validatePassword'
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
        if (!empty($this->validateLogin())) {
            $invalid_properties[] = $this->validateLogin();
        }
        if (!empty($this->validateEmail())) {
            $invalid_properties[] = $this->validateEmail();
        }
        if (!empty($this->validatePassword())) {
            $invalid_properties[] = $this->validatePassword();
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
        if (!empty($this->validateLogin())) {
            return false;
        }
        if (!empty($this->validateEmail())) {
            return false;
        }
        if (!empty($this->validatePassword())) {
            return false;
        }
        return true;
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
     * @param string $login
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
            return "Property 'login' was not initialized.";
        }
        return false;
    }


    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->offsetGet('email');
    }

    /**
     * Checks email
     * @return boolean
     */
    public function hasEmail()
    {
        return $this->offsetExists('email');
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {

        if ((strlen($email) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email when calling IdentityPost., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/\\S+@\\S+/", $email))) {
            throw new \InvalidArgumentException("invalid value for $email when calling IdentityPost., must conform to the pattern /\\S+@\\S+/.");
        }

        $this->offsetSet('email', $email);

        return $this;
    }

    /**
     * Unset email
     */
    public function unsetEmail() {
        $this->offsetUnset('email');
    }

    /**
     * Valid email
     * @return array|boolean
     */
    public function validateEmail()
    {
        if (!$this->offsetExists('email')) {
            return "Property 'email' was not initialized.";
        }
            if ($this->offsetExists('email') && strlen($this->offsetGet('email')) < 3) {
                return "invalid value for 'email', the character length must be bigger than or equal to 3.";
            }
            if ($this->offsetExists('email') && !preg_match("/\\S+@\\S+/", $this->offsetGet('email'))) {
                return "invalid value for 'email', must be conform to the pattern /\\S+@\\S+/.";
            }
        return false;
    }


    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->offsetGet('password');
    }

    /**
     * Checks password
     * @return boolean
     */
    public function hasPassword()
    {
        return $this->offsetExists('password');
    }

    /**
     * Sets password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->offsetSet('password', $password);

        return $this;
    }

    /**
     * Unset password
     */
    public function unsetPassword() {
        $this->offsetUnset('password');
    }

    /**
     * Valid password
     * @return array|boolean
     */
    public function validatePassword()
    {
        if (!$this->offsetExists('password')) {
            return "Property 'password' was not initialized.";
        }
        return false;
    }

}


