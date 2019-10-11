<?php
/**
 * LegalDocument
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

namespace Acronis\Cloud\Client\Model\LegalDocument;

use Acronis\Cloud\Client\BaseModel;
/**
 * LegalDocument Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LegalDocument extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LegalDocument\LegalDocument';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'comment' => 'string',
            'common_part_update' => 'bool',
            'changed_items' => '\Acronis\Cloud\Client\Model\LegalDocument\LegalDocumentChangedItems',
            'covered_items' => '\Acronis\Cloud\Client\Model\LegalDocument\LegalDocumentCoveredItems',
            'added_items' => '\Acronis\Cloud\Client\Model\LegalDocument\LegalDocumentAddedItems',
            'grace_period' => 'int',
            'id' => 'string',
            'link' => 'string',
            'owner_tenant' => 'string',
            'added_by' => 'string',
            'published' => 'object',
            'document_type' => '\Acronis\Cloud\Client\Model\DocumentType',
            'document_version' => 'string',
            'created' => 'string',
            'version' => 'int'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'comment' => null,
            'common_part_update' => null,
            'changed_items' => null,
            'covered_items' => null,
            'added_items' => null,
            'grace_period' => 'int32',
            'id' => null,
            'link' => null,
            'owner_tenant' => null,
            'added_by' => null,
            'published' => null,
            'document_type' => null,
            'document_version' => null,
            'created' => null,
            'version' => 'int32'
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'comment' => 'comment',
            'common_part_update' => 'common_part_update',
            'changed_items' => 'changed_items',
            'covered_items' => 'covered_items',
            'added_items' => 'added_items',
            'grace_period' => 'grace_period',
            'id' => 'id',
            'link' => 'link',
            'owner_tenant' => 'owner_tenant',
            'added_by' => 'added_by',
            'published' => 'published',
            'document_type' => 'document_type',
            'document_version' => 'document_version',
            'created' => 'created',
            'version' => 'version'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'comment' => 'setComment',
            'common_part_update' => 'setCommonPartUpdate',
            'changed_items' => 'setChangedItems',
            'covered_items' => 'setCoveredItems',
            'added_items' => 'setAddedItems',
            'grace_period' => 'setGracePeriod',
            'id' => 'setId',
            'link' => 'setLink',
            'owner_tenant' => 'setOwnerTenant',
            'added_by' => 'setAddedBy',
            'published' => 'setPublished',
            'document_type' => 'setDocumentType',
            'document_version' => 'setDocumentVersion',
            'created' => 'setCreated',
            'version' => 'setVersion'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'comment' => 'getComment',
            'common_part_update' => 'getCommonPartUpdate',
            'changed_items' => 'getChangedItems',
            'covered_items' => 'getCoveredItems',
            'added_items' => 'getAddedItems',
            'grace_period' => 'getGracePeriod',
            'id' => 'getId',
            'link' => 'getLink',
            'owner_tenant' => 'getOwnerTenant',
            'added_by' => 'getAddedBy',
            'published' => 'getPublished',
            'document_type' => 'getDocumentType',
            'document_version' => 'getDocumentVersion',
            'created' => 'getCreated',
            'version' => 'getVersion'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'comment' => 'hasComment',
            'common_part_update' => 'hasCommonPartUpdate',
            'changed_items' => 'hasChangedItems',
            'covered_items' => 'hasCoveredItems',
            'added_items' => 'hasAddedItems',
            'grace_period' => 'hasGracePeriod',
            'id' => 'hasId',
            'link' => 'hasLink',
            'owner_tenant' => 'hasOwnerTenant',
            'added_by' => 'hasAddedBy',
            'published' => 'hasPublished',
            'document_type' => 'hasDocumentType',
            'document_version' => 'hasDocumentVersion',
            'created' => 'hasCreated',
            'version' => 'hasVersion'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'comment' => 'validateComment',
            'common_part_update' => 'validateCommonPartUpdate',
            'changed_items' => 'validateChangedItems',
            'covered_items' => 'validateCoveredItems',
            'added_items' => 'validateAddedItems',
            'grace_period' => 'validateGracePeriod',
            'id' => 'validateId',
            'link' => 'validateLink',
            'owner_tenant' => 'validateOwnerTenant',
            'added_by' => 'validateAddedBy',
            'published' => 'validatePublished',
            'document_type' => 'validateDocumentType',
            'document_version' => 'validateDocumentVersion',
            'created' => 'validateCreated',
            'version' => 'validateVersion'
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
        if (!empty($this->validateComment())) {
            $invalid_properties[] = $this->validateComment();
        }
        if (!empty($this->validateCommonPartUpdate())) {
            $invalid_properties[] = $this->validateCommonPartUpdate();
        }
        if (!empty($this->validateChangedItems())) {
            $invalid_properties[] = $this->validateChangedItems();
        }
        if (!empty($this->validateCoveredItems())) {
            $invalid_properties[] = $this->validateCoveredItems();
        }
        if (!empty($this->validateAddedItems())) {
            $invalid_properties[] = $this->validateAddedItems();
        }
        if (!empty($this->validateGracePeriod())) {
            $invalid_properties[] = $this->validateGracePeriod();
        }
        if (!empty($this->validateId())) {
            $invalid_properties[] = $this->validateId();
        }
        if (!empty($this->validateLink())) {
            $invalid_properties[] = $this->validateLink();
        }
        if (!empty($this->validateOwnerTenant())) {
            $invalid_properties[] = $this->validateOwnerTenant();
        }
        if (!empty($this->validateAddedBy())) {
            $invalid_properties[] = $this->validateAddedBy();
        }
        if (!empty($this->validatePublished())) {
            $invalid_properties[] = $this->validatePublished();
        }
        if (!empty($this->validateDocumentType())) {
            $invalid_properties[] = $this->validateDocumentType();
        }
        if (!empty($this->validateDocumentVersion())) {
            $invalid_properties[] = $this->validateDocumentVersion();
        }
        if (!empty($this->validateCreated())) {
            $invalid_properties[] = $this->validateCreated();
        }
        if (!empty($this->validateVersion())) {
            $invalid_properties[] = $this->validateVersion();
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
        if (!empty($this->validateComment())) {
            return false;
        }
        if (!empty($this->validateCommonPartUpdate())) {
            return false;
        }
        if (!empty($this->validateChangedItems())) {
            return false;
        }
        if (!empty($this->validateCoveredItems())) {
            return false;
        }
        if (!empty($this->validateAddedItems())) {
            return false;
        }
        if (!empty($this->validateGracePeriod())) {
            return false;
        }
        if (!empty($this->validateId())) {
            return false;
        }
        if (!empty($this->validateLink())) {
            return false;
        }
        if (!empty($this->validateOwnerTenant())) {
            return false;
        }
        if (!empty($this->validateAddedBy())) {
            return false;
        }
        if (!empty($this->validatePublished())) {
            return false;
        }
        if (!empty($this->validateDocumentType())) {
            return false;
        }
        if (!empty($this->validateDocumentVersion())) {
            return false;
        }
        if (!empty($this->validateCreated())) {
            return false;
        }
        if (!empty($this->validateVersion())) {
            return false;
        }
        return true;
    }


    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->offsetGet('comment');
    }

    /**
     * Checks comment
     * @return boolean
     */
    public function hasComment()
    {
        return $this->offsetExists('comment');
    }

    /**
     * Sets comment
     * @param string $comment Document description
     * @return $this
     */
    public function setComment($comment)
    {
        $this->offsetSet('comment', $comment);

        return $this;
    }

    /**
     * Unset comment
     */
    public function unsetComment() {
        $this->offsetUnset('comment');
    }

    /**
     * Valid comment
     * @return array|boolean
     */
    public function validateComment()
    {
        if (!$this->offsetExists('comment')) {
            return "Property 'comment' was not initialized.";
        }
        return false;
    }


    /**
     * Gets common_part_update
     * @return bool
     */
    public function getCommonPartUpdate()
    {
        return $this->offsetGet('common_part_update');
    }

    /**
     * Checks common_part_update
     * @return boolean
     */
    public function hasCommonPartUpdate()
    {
        return $this->offsetExists('common_part_update');
    }

    /**
     * Sets common_part_update
     * @param bool $common_part_update Flag that represents if document contains common part update
     * @return $this
     */
    public function setCommonPartUpdate($common_part_update)
    {
        $this->offsetSet('common_part_update', $common_part_update);

        return $this;
    }

    /**
     * Unset common_part_update
     */
    public function unsetCommonPartUpdate() {
        $this->offsetUnset('common_part_update');
    }

    /**
     * Valid common_part_update
     * @return array|boolean
     */
    public function validateCommonPartUpdate()
    {
        if (!$this->offsetExists('common_part_update')) {
            return "Property 'common_part_update' was not initialized.";
        }
        return false;
    }


    /**
     * Gets changed_items
     * @return \Acronis\Cloud\Client\Model\LegalDocument\LegalDocumentChangedItems
     */
    public function getChangedItems()
    {
        return $this->offsetGet('changed_items');
    }

    /**
     * Checks changed_items
     * @return boolean
     */
    public function hasChangedItems()
    {
        return $this->offsetExists('changed_items');
    }

    /**
     * Sets changed_items
     * @param \Acronis\Cloud\Client\Model\LegalDocument\LegalDocumentChangedItems $changed_items
     * @return $this
     */
    public function setChangedItems($changed_items)
    {
        $this->offsetSet('changed_items', $changed_items);

        return $this;
    }

    /**
     * Unset changed_items
     */
    public function unsetChangedItems() {
        $this->offsetUnset('changed_items');
    }

    /**
     * Valid changed_items
     * @return array|boolean
     */
    public function validateChangedItems()
    {
        if (!$this->offsetExists('changed_items')) {
            return "Property 'changed_items' was not initialized.";
        }
        return false;
    }


    /**
     * Gets covered_items
     * @return \Acronis\Cloud\Client\Model\LegalDocument\LegalDocumentCoveredItems
     */
    public function getCoveredItems()
    {
        return $this->offsetGet('covered_items');
    }

    /**
     * Checks covered_items
     * @return boolean
     */
    public function hasCoveredItems()
    {
        return $this->offsetExists('covered_items');
    }

    /**
     * Sets covered_items
     * @param \Acronis\Cloud\Client\Model\LegalDocument\LegalDocumentCoveredItems $covered_items
     * @return $this
     */
    public function setCoveredItems($covered_items)
    {
        $this->offsetSet('covered_items', $covered_items);

        return $this;
    }

    /**
     * Unset covered_items
     */
    public function unsetCoveredItems() {
        $this->offsetUnset('covered_items');
    }

    /**
     * Valid covered_items
     * @return array|boolean
     */
    public function validateCoveredItems()
    {
        if (!$this->offsetExists('covered_items')) {
            return "Property 'covered_items' was not initialized.";
        }
        return false;
    }


    /**
     * Gets added_items
     * @return \Acronis\Cloud\Client\Model\LegalDocument\LegalDocumentAddedItems
     */
    public function getAddedItems()
    {
        return $this->offsetGet('added_items');
    }

    /**
     * Checks added_items
     * @return boolean
     */
    public function hasAddedItems()
    {
        return $this->offsetExists('added_items');
    }

    /**
     * Sets added_items
     * @param \Acronis\Cloud\Client\Model\LegalDocument\LegalDocumentAddedItems $added_items
     * @return $this
     */
    public function setAddedItems($added_items)
    {
        $this->offsetSet('added_items', $added_items);

        return $this;
    }

    /**
     * Unset added_items
     */
    public function unsetAddedItems() {
        $this->offsetUnset('added_items');
    }

    /**
     * Valid added_items
     * @return array|boolean
     */
    public function validateAddedItems()
    {
        if (!$this->offsetExists('added_items')) {
            return false;
        }
        return false;
    }


    /**
     * Gets grace_period
     * @return int
     */
    public function getGracePeriod()
    {
        return $this->offsetGet('grace_period');
    }

    /**
     * Checks grace_period
     * @return boolean
     */
    public function hasGracePeriod()
    {
        return $this->offsetExists('grace_period');
    }

    /**
     * Sets grace_period
     * @param int $grace_period Grace period for accepting given document. Countdown will start after a first preposition to sign it
     * @return $this
     */
    public function setGracePeriod($grace_period)
    {
        $this->offsetSet('grace_period', $grace_period);

        return $this;
    }

    /**
     * Unset grace_period
     */
    public function unsetGracePeriod() {
        $this->offsetUnset('grace_period');
    }

    /**
     * Valid grace_period
     * @return array|boolean
     */
    public function validateGracePeriod()
    {
        if (!$this->offsetExists('grace_period')) {
            return "Property 'grace_period' was not initialized.";
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
            throw new \InvalidArgumentException('invalid length for $id when calling LegalDocument., must be smaller than or equal to 36.');
        }
        if ((strlen($id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling LegalDocument., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling LegalDocument., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
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
     * Gets link
     * @return string
     */
    public function getLink()
    {
        return $this->offsetGet('link');
    }

    /**
     * Checks link
     * @return boolean
     */
    public function hasLink()
    {
        return $this->offsetExists('link');
    }

    /**
     * Sets link
     * @param string $link URL
     * @return $this
     */
    public function setLink($link)
    {

        if ((!preg_match("/^[a-z0-9\\+]+:\/\/[^\\s\/$.?#].[^\\s]*/", $link))) {
            throw new \InvalidArgumentException("invalid value for $link when calling LegalDocument., must conform to the pattern /^[a-z0-9\\+]+:\/\/[^\\s\/$.?#].[^\\s]*/.");
        }

        $this->offsetSet('link', $link);

        return $this;
    }

    /**
     * Unset link
     */
    public function unsetLink() {
        $this->offsetUnset('link');
    }

    /**
     * Valid link
     * @return array|boolean
     */
    public function validateLink()
    {
        if (!$this->offsetExists('link')) {
            return "Property 'link' was not initialized.";
        }
            if ($this->offsetExists('link') && !preg_match("/^[a-z0-9\\+]+:\/\/[^\\s\/$.?#].[^\\s]*/", $this->offsetGet('link'))) {
                return "invalid value for 'link', must be conform to the pattern /^[a-z0-9\\+]+:\/\/[^\\s\/$.?#].[^\\s]*/.";
            }
        return false;
    }


    /**
     * Gets owner_tenant
     * @return string
     */
    public function getOwnerTenant()
    {
        return $this->offsetGet('owner_tenant');
    }

    /**
     * Checks owner_tenant
     * @return boolean
     */
    public function hasOwnerTenant()
    {
        return $this->offsetExists('owner_tenant');
    }

    /**
     * Sets owner_tenant
     * @param string $owner_tenant
     * @return $this
     */
    public function setOwnerTenant($owner_tenant)
    {
        if ((strlen($owner_tenant) > 36)) {
            throw new \InvalidArgumentException('invalid length for $owner_tenant when calling LegalDocument., must be smaller than or equal to 36.');
        }
        if ((strlen($owner_tenant) < 36)) {
            throw new \InvalidArgumentException('invalid length for $owner_tenant when calling LegalDocument., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $owner_tenant))) {
            throw new \InvalidArgumentException("invalid value for $owner_tenant when calling LegalDocument., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('owner_tenant', $owner_tenant);

        return $this;
    }

    /**
     * Unset owner_tenant
     */
    public function unsetOwnerTenant() {
        $this->offsetUnset('owner_tenant');
    }

    /**
     * Valid owner_tenant
     * @return array|boolean
     */
    public function validateOwnerTenant()
    {
        if (!$this->offsetExists('owner_tenant')) {
            return "Property 'owner_tenant' was not initialized.";
        }
            if ($this->offsetExists('owner_tenant') && strlen($this->offsetGet('owner_tenant')) > 36) {
                return "invalid value for 'owner_tenant', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('owner_tenant') && strlen($this->offsetGet('owner_tenant')) < 36) {
                return "invalid value for 'owner_tenant', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('owner_tenant') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('owner_tenant'))) {
                return "invalid value for 'owner_tenant', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }


    /**
     * Gets added_by
     * @return string
     */
    public function getAddedBy()
    {
        return $this->offsetGet('added_by');
    }

    /**
     * Checks added_by
     * @return boolean
     */
    public function hasAddedBy()
    {
        return $this->offsetExists('added_by');
    }

    /**
     * Sets added_by
     * @param string $added_by
     * @return $this
     */
    public function setAddedBy($added_by)
    {
        if (!is_null($added_by) && (strlen($added_by) > 36)) {
            throw new \InvalidArgumentException('invalid length for $added_by when calling LegalDocument., must be smaller than or equal to 36.');
        }
        if (!is_null($added_by) && (strlen($added_by) < 36)) {
            throw new \InvalidArgumentException('invalid length for $added_by when calling LegalDocument., must be bigger than or equal to 36.');
        }
        if (!is_null($added_by) && (!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $added_by))) {
            throw new \InvalidArgumentException("invalid value for $added_by when calling LegalDocument., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('added_by', $added_by);

        return $this;
    }

    /**
     * Unset added_by
     */
    public function unsetAddedBy() {
        $this->offsetUnset('added_by');
    }

    /**
     * Valid added_by
     * @return array|boolean
     */
    public function validateAddedBy()
    {
        if (!$this->offsetExists('added_by')) {
            return false;
        }
            if ($this->offsetExists('added_by') && strlen($this->offsetGet('added_by')) > 36) {
                return "invalid value for 'added_by', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('added_by') && strlen($this->offsetGet('added_by')) < 36) {
                return "invalid value for 'added_by', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('added_by') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('added_by'))) {
                return "invalid value for 'added_by', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }


    /**
     * Gets published
     * @return object
     */
    public function getPublished()
    {
        return $this->offsetGet('published');
    }

    /**
     * Checks published
     * @return boolean
     */
    public function hasPublished()
    {
        return $this->offsetExists('published');
    }

    /**
     * Sets published
     * @param object $published Publication time if document was made available for partners, null if document still could be changed
     * @return $this
     */
    public function setPublished($published)
    {
        $this->offsetSet('published', $published);

        return $this;
    }

    /**
     * Unset published
     */
    public function unsetPublished() {
        $this->offsetUnset('published');
    }

    /**
     * Valid published
     * @return array|boolean
     */
    public function validatePublished()
    {
        if (!$this->offsetExists('published')) {
            return "Property 'published' was not initialized.";
        }
        return false;
    }


    /**
     * Gets document_type
     * @return \Acronis\Cloud\Client\Model\DocumentType
     */
    public function getDocumentType()
    {
        return $this->offsetGet('document_type');
    }

    /**
     * Checks document_type
     * @return boolean
     */
    public function hasDocumentType()
    {
        return $this->offsetExists('document_type');
    }

    /**
     * Sets document_type
     * @param \Acronis\Cloud\Client\Model\DocumentType $document_type
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->offsetSet('document_type', $document_type);

        return $this;
    }

    /**
     * Unset document_type
     */
    public function unsetDocumentType() {
        $this->offsetUnset('document_type');
    }

    /**
     * Valid document_type
     * @return array|boolean
     */
    public function validateDocumentType()
    {
        if (!$this->offsetExists('document_type')) {
            return "Property 'document_type' was not initialized.";
        }
        return false;
    }


    /**
     * Gets document_version
     * @return string
     */
    public function getDocumentVersion()
    {
        return $this->offsetGet('document_version');
    }

    /**
     * Checks document_version
     * @return boolean
     */
    public function hasDocumentVersion()
    {
        return $this->offsetExists('document_version');
    }

    /**
     * Sets document_version
     * @param string $document_version Formatted date: YYYY-MM-DD
     * @return $this
     */
    public function setDocumentVersion($document_version)
    {
        if ((strlen($document_version) > 10)) {
            throw new \InvalidArgumentException('invalid length for $document_version when calling LegalDocument., must be smaller than or equal to 10.');
        }
        if ((strlen($document_version) < 10)) {
            throw new \InvalidArgumentException('invalid length for $document_version when calling LegalDocument., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/\\d{4}-\\d{2}-\\d{2}/", $document_version))) {
            throw new \InvalidArgumentException("invalid value for $document_version when calling LegalDocument., must conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.");
        }

        $this->offsetSet('document_version', $document_version);

        return $this;
    }

    /**
     * Unset document_version
     */
    public function unsetDocumentVersion() {
        $this->offsetUnset('document_version');
    }

    /**
     * Valid document_version
     * @return array|boolean
     */
    public function validateDocumentVersion()
    {
        if (!$this->offsetExists('document_version')) {
            return "Property 'document_version' was not initialized.";
        }
            if ($this->offsetExists('document_version') && strlen($this->offsetGet('document_version')) > 10) {
                return "invalid value for 'document_version', the character length must be smaller than or equal to 10.";
            }
            if ($this->offsetExists('document_version') && strlen($this->offsetGet('document_version')) < 10) {
                return "invalid value for 'document_version', the character length must be bigger than or equal to 10.";
            }
            if ($this->offsetExists('document_version') && !preg_match("/\\d{4}-\\d{2}-\\d{2}/", $this->offsetGet('document_version'))) {
                return "invalid value for 'document_version', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}/.";
            }
        return false;
    }


    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->offsetGet('created');
    }

    /**
     * Checks created
     * @return boolean
     */
    public function hasCreated()
    {
        return $this->offsetExists('created');
    }

    /**
     * Sets created
     * @param string $created RFC3339 Formatted date
     * @return $this
     */
    public function setCreated($created)
    {
        if ((strlen($created) > 32)) {
            throw new \InvalidArgumentException('invalid length for $created when calling LegalDocument., must be smaller than or equal to 32.');
        }
        if ((strlen($created) < 19)) {
            throw new \InvalidArgumentException('invalid length for $created when calling LegalDocument., must be bigger than or equal to 19.');
        }
        if ((!preg_match("/\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([\\+\\-]\\d{2}\\:\\d{2})?/", $created))) {
            throw new \InvalidArgumentException("invalid value for $created when calling LegalDocument., must conform to the pattern /\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([\\+\\-]\\d{2}\\:\\d{2})?/.");
        }

        $this->offsetSet('created', $created);

        return $this;
    }

    /**
     * Unset created
     */
    public function unsetCreated() {
        $this->offsetUnset('created');
    }

    /**
     * Valid created
     * @return array|boolean
     */
    public function validateCreated()
    {
        if (!$this->offsetExists('created')) {
            return "Property 'created' was not initialized.";
        }
            if ($this->offsetExists('created') && strlen($this->offsetGet('created')) > 32) {
                return "invalid value for 'created', the character length must be smaller than or equal to 32.";
            }
            if ($this->offsetExists('created') && strlen($this->offsetGet('created')) < 19) {
                return "invalid value for 'created', the character length must be bigger than or equal to 19.";
            }
            if ($this->offsetExists('created') && !preg_match("/\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([\\+\\-]\\d{2}\\:\\d{2})?/", $this->offsetGet('created'))) {
                return "invalid value for 'created', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([\\+\\-]\\d{2}\\:\\d{2})?/.";
            }
        return false;
    }


    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->offsetGet('version');
    }

    /**
     * Checks version
     * @return boolean
     */
    public function hasVersion()
    {
        return $this->offsetExists('version');
    }

    /**
     * Sets version
     * @param int $version Internal version (auto-incremented entity version)
     * @return $this
     */
    public function setVersion($version)
    {
        $this->offsetSet('version', $version);

        return $this;
    }

    /**
     * Unset version
     */
    public function unsetVersion() {
        $this->offsetUnset('version');
    }

    /**
     * Valid version
     * @return array|boolean
     */
    public function validateVersion()
    {
        if (!$this->offsetExists('version')) {
            return "Property 'version' was not initialized.";
        }
        return false;
    }

}


