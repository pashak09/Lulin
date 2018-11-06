<?php

namespace Lulu\Menu\Api\Data;

/**
 * @api
 * @since 100.0.2
 */
interface MenuInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const MENU_ID = 'id';
    const STATUS = 'status';
    const PUBLISH_AT = 'publish_at';
    const TITLE = 'title';
    const COMMENT = 'comment';
    /**

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Get Comment
     *
     * @return string|null
     */
    public function getComment();

    /**
     * Get Status
     *
     * @return string|null
     */
    public function getStatus();

    /**
     * Get PublishAt
     *
     * @return string|null
     */
    public function getPublishAt();

    /**
     * Set ID
     *
     * @param int $id
     * @return MenuInterface
     */
    public function setId($id);

    /**
     * Set Status
     *
     * @param string $title
     * @return MenuInterface
     */
    public function setStatus($status);

    /**
     * Set Title
     *
     * @param string $title
     * @return MenuInterface
     */
    public function setTitle($title);

    /**
     * Set Comment
     *
     * @param string $comment
     * @return MenuInterface
     */
    public function setComment($comment);

    /**
     * Set PublishAt
     *
     * @param string $setPublishAt
     * @return MenuInterface
     */
    public function setPublishAt($setPublishAt);
}
