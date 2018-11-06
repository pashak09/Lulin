<?php

namespace Lulu\Menu\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Lulu\Menu\ResourceModel\Menu as ResourceModelMenu;

class Menu extends AbstractModel implements IdentityInterface, \Lulu\Menu\Api\Data\MenuInterface
{
    const CACHE_TAG = 'menu_data';

    public function _construct()
    {
        $this->_init(ResourceModelMenu::class);
    }

    /**
     * @return int|mixed|null
     */
    public function getId()
    {
        return $this->getData(self::MENU_ID);
    }

    /**
     * @return mixed|null|string
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @return mixed|string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @return mixed|null|string
     */
    public function getPublishAt()
    {
        return $this->getData(self::PUBLISH_AT);
    }

    /**
     * @return mixed|null|string
     */
    public function getComment()
    {
        return $this->getData(self::COMMENT);
    }

    /**
     * @param int|mixed $id
     * @return AbstractModel|\Lulu\Menu\Api\Data\MenuInterface|Menu
     */
    public function setId($id)
    {
        return $this->setData(self::MENU_ID, $id);
    }

    /**
     * @param string $title
     * @return \Lulu\Menu\Api\Data\MenuInterface|Menu
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * @param string $coment
     * @return \Lulu\Menu\Api\Data\MenuInterface|Menu
     */
    public function setComment($coment)
    {
        return $this->setData(self::COMMENT, $coment);
    }

    /**
     * @param string $publishAt
     * @return \Lulu\Menu\Api\Data\MenuInterface|Menu
     */
    public function setPublishAt($publishAt)
    {
        return $this->setData(self::PUBLISH_AT, $publishAt);
    }

    /**
     * @param $status
     * @return \Lulu\Menu\Api\Data\MenuInterface|Menu
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
