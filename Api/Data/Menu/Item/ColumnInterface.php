<?php

namespace Lulu\Menu\Api\Data\Menu\Item;

/**
 * @api
 * @since 100.0.2
 */
interface ColumnInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const COLUMN_ID = 'id';
    const MENU_ITEM_ID = 'menu_item_id';
    const STATUS = 'status';
    const COLUMN_NUM = 'column_num';
    const TYPE = 'type';
    const CMS_BLOCK_ID = 'cms_block_id';
    const TITLE = 'title';
    const LINK = 'link';
    const HTML = 'html';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get MenuItemId
     *
     * @return string
     */
    public function getMenuItemId();

    /**
     * Get Status
     *
     * @return string
     */
    public function getStatus();

    /**
     * Get ColumnNum
     *
     * @return string
     */
    public function getColumnNum();

    /**
     * Get Type
     *
     * @return string|null
     */
    public function getType();

    /**
     * Get CmsBlockId
     *
     * @return string|null
     */
    public function getCmsBlockId();

    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get Link
     *
     * @return string|null
     */
    public function getLink();

    /**
     * Get Html
     *
     * @return string|null
     */
    public function getHtml();

    /**
     * Set ID
     *
     * @param int $id
     * @return ColumnInterface
     */
    public function setId($id);

    /**
     * Set Menu Item Id
     *
     * @param string $columnId
     * @return ColumnInterface
     */
    public function setMenuItemId($columnId);

    /**
     * Set Status
     *
     * @param string $status
     * @return ColumnInterface
     */
    public function setStatus($status);

    /**
     * Set column num
     *
     * @param string $columnNum
     * @return ColumnInterface
     */
    public function setColumnNum($columnNum);

    /**
     * Set column num
     *
     * @param string $type
     * @return ColumnInterface
     */
    public function setType($type);

    /**
     * Set Link
     *
     * @param string $link
     * @return ColumnInterface
     */
    public function setLink($link);

    /**
     * Set Title
     *
     * @param string $title
     * @return ColumnInterface
     */
    public function setTitle($title);

    /**
     * Set Html
     *
     * @param string $html
     * @return ColumnInterface
     */
    public function setHtml($html);

}
