<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storage/control/v2/storage_control.proto

namespace Google\Cloud\Storage\Control\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateFolder. This operation is only applicable to a
 * hierarchical namespace enabled bucket.
 * Hierarchical namespace buckets are in allowlist preview.
 *
 * Generated from protobuf message <code>google.storage.control.v2.CreateFolderRequest</code>
 */
class CreateFolderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the bucket in which the folder will reside. The bucket
     * must be a hierarchical namespace enabled bucket.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Properties of the new folder being created.
     * The bucket and name of the folder are specified in the parent and folder_id
     * fields, respectively. Populating those fields in `folder` will result in an
     * error.
     *
     * Generated from protobuf field <code>.google.storage.control.v2.Folder folder = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $folder = null;
    /**
     * Required. The full name of a folder, including all its parent folders.
     * Folders use single '/' characters as a delimiter.
     * The folder_id must end with a slash.
     * For example, the folder_id of "books/biographies/" would create a new
     * "biographies/" folder under the "books/" folder.
     *
     * Generated from protobuf field <code>string folder_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $folder_id = '';
    /**
     * Optional. If true, parent folder doesn't have to be present and all missing
     * ancestor folders will be created atomically.
     *
     * Generated from protobuf field <code>bool recursive = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $recursive = false;
    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string                                  $parent   Required. Name of the bucket in which the folder will reside. The bucket
     *                                                          must be a hierarchical namespace enabled bucket. Please see
     *                                                          {@see StorageControlClient::bucketName()} for help formatting this field.
     * @param \Google\Cloud\Storage\Control\V2\Folder $folder   Required. Properties of the new folder being created.
     *                                                          The bucket and name of the folder are specified in the parent and folder_id
     *                                                          fields, respectively. Populating those fields in `folder` will result in an
     *                                                          error.
     * @param string                                  $folderId Required. The full name of a folder, including all its parent folders.
     *                                                          Folders use single '/' characters as a delimiter.
     *                                                          The folder_id must end with a slash.
     *                                                          For example, the folder_id of "books/biographies/" would create a new
     *                                                          "biographies/" folder under the "books/" folder.
     *
     * @return \Google\Cloud\Storage\Control\V2\CreateFolderRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Storage\Control\V2\Folder $folder, string $folderId): self
    {
        return (new self())
            ->setParent($parent)
            ->setFolder($folder)
            ->setFolderId($folderId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the bucket in which the folder will reside. The bucket
     *           must be a hierarchical namespace enabled bucket.
     *     @type \Google\Cloud\Storage\Control\V2\Folder $folder
     *           Required. Properties of the new folder being created.
     *           The bucket and name of the folder are specified in the parent and folder_id
     *           fields, respectively. Populating those fields in `folder` will result in an
     *           error.
     *     @type string $folder_id
     *           Required. The full name of a folder, including all its parent folders.
     *           Folders use single '/' characters as a delimiter.
     *           The folder_id must end with a slash.
     *           For example, the folder_id of "books/biographies/" would create a new
     *           "biographies/" folder under the "books/" folder.
     *     @type bool $recursive
     *           Optional. If true, parent folder doesn't have to be present and all missing
     *           ancestor folders will be created atomically.
     *     @type string $request_id
     *           Optional. A unique identifier for this request. UUID is the recommended
     *           format, but other formats are still accepted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storage\Control\V2\StorageControl::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the bucket in which the folder will reside. The bucket
     * must be a hierarchical namespace enabled bucket.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the bucket in which the folder will reside. The bucket
     * must be a hierarchical namespace enabled bucket.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Properties of the new folder being created.
     * The bucket and name of the folder are specified in the parent and folder_id
     * fields, respectively. Populating those fields in `folder` will result in an
     * error.
     *
     * Generated from protobuf field <code>.google.storage.control.v2.Folder folder = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Storage\Control\V2\Folder|null
     */
    public function getFolder()
    {
        return $this->folder;
    }

    public function hasFolder()
    {
        return isset($this->folder);
    }

    public function clearFolder()
    {
        unset($this->folder);
    }

    /**
     * Required. Properties of the new folder being created.
     * The bucket and name of the folder are specified in the parent and folder_id
     * fields, respectively. Populating those fields in `folder` will result in an
     * error.
     *
     * Generated from protobuf field <code>.google.storage.control.v2.Folder folder = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Storage\Control\V2\Folder $var
     * @return $this
     */
    public function setFolder($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Storage\Control\V2\Folder::class);
        $this->folder = $var;

        return $this;
    }

    /**
     * Required. The full name of a folder, including all its parent folders.
     * Folders use single '/' characters as a delimiter.
     * The folder_id must end with a slash.
     * For example, the folder_id of "books/biographies/" would create a new
     * "biographies/" folder under the "books/" folder.
     *
     * Generated from protobuf field <code>string folder_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFolderId()
    {
        return $this->folder_id;
    }

    /**
     * Required. The full name of a folder, including all its parent folders.
     * Folders use single '/' characters as a delimiter.
     * The folder_id must end with a slash.
     * For example, the folder_id of "books/biographies/" would create a new
     * "biographies/" folder under the "books/" folder.
     *
     * Generated from protobuf field <code>string folder_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFolderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->folder_id = $var;

        return $this;
    }

    /**
     * Optional. If true, parent folder doesn't have to be present and all missing
     * ancestor folders will be created atomically.
     *
     * Generated from protobuf field <code>bool recursive = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getRecursive()
    {
        return $this->recursive;
    }

    /**
     * Optional. If true, parent folder doesn't have to be present and all missing
     * ancestor folders will be created atomically.
     *
     * Generated from protobuf field <code>bool recursive = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setRecursive($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive = $var;

        return $this;
    }

    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique identifier for this request. UUID is the recommended
     * format, but other formats are still accepted.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}
