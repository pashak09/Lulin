<?php

namespace Lulu\Menu\Api\Data\Menu;

/**
 * @api
 * @since 100.0.2
 */
interface ItemInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ITEM_ID = 'id';
    const MENU_ID = 'menu_id';
    const POSITION = 'position';
    const STATUS = 'status';
    const TITLE = 'title';
    const LINK = 'link';
    const HTML = 'html';
    const JSON_CONFIG = 'json_config';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get identifier
     *
     * @return string
     */
    public function getMenuId();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getPosition();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getStatus();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getLink();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getHtml();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getJsonConfig();

    /**
     * Set ID
     *
     * @param int $id
     * @return ItemInterface
     */
    public function setId($id);

    /**
     * Set ID
     *
     * @param string $menuId
     * @return ItemInterface
     */
    public function setMenuId($menuId);

    /**
     * Set ID
     *
     * @param string $position
     * @return ItemInterface
     */
    public function setPosition($position);

    /**
     * Set ID
     *
     * @param string $status
     * @return ItemInterface
     */
    public function setStatus($status);

    /**
     * Set ID
     *
     * @param string $title
     * @return ItemInterface
     */
    public function setTitle($title);

    /**
     * Set ID
     *
     * @param string $link
     * @return ItemInterface
     */
    public function setLink($link);

    /**
     * Set ID
     *
     * @param string $html
     * @return ItemInterface
     */
    public function setHtml($html);

    /**
     * Set ID
     *
     * @param string $JsonConfig
     * @return ItemInterface
     */
    public function setJsonConfig($JsonConfig);
}
