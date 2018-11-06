<?php

namespace Lulu\Menu\Model\Menu;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Lulu\Menu\Api\Data\Menu\ItemInterface;
use Lulu\Menu\ResourceModel\Menu\Item as ResourceModelItemMenu;

class Item extends AbstractModel implements IdentityInterface, \Lulu\Menu\Api\Data\Menu\ItemInterface
{
    const CACHE_TAG = 'menu_item_data';

    public function _construct()
    {
        $this->_init(ResourceModelItemMenu::class);
    }

    /**
     * @return mixed|string
     */
    public function getMenuId()
    {
        return $this->getData(self::MENU_ID);
    }

    /**
     * @return mixed|null|string
     */
    public function getPosition()
    {
        return $this->getData(self::POSITION);
    }

    /**
     * @return mixed|null|string
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @return mixed|null|string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @return mixed|null|string
     */
    public function getLink()
    {
        return $this->getData(self::LINK);
    }

    /**
     * @return mixed|null|string
     */
    public function getHtml()
    {
        return $this->getData(self::HTML);
    }

    /**
     * @return mixed|null|string
     */
    public function getJsonConfig()
    {
        return $this->getData(self::JSON_CONFIG);
    }

    /**
     * @param string $menuId
     * @return ItemInterface|Item
     */
    public function setMenuId($menuId)
    {
        return $this->setData(self::MENU_ID, $menuId);
    }

    /**
     * @param string $position
     * @return ItemInterface|Item
     */
    public function setPosition($position)
    {
        return $this->setData(self::POSITION, $position);
    }

    /**
     * @param string $status
     * @return ItemInterface|Item
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @param string $title
     * @return ItemInterface|Item
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * @param string $link
     * @return ItemInterface|Item
     */
    public function setLink($link)
    {
        return $this->setData(self::LINK, $link);
    }

    /**
     * @param string $html
     * @return ItemInterface|Item
     */
    public function setHtml($html)
    {
        return $this->setData(self::HTML, $html);
    }

    /**
     * @param string $JsonConfig
     * @return ItemInterface
     */
    public function setJsonConfig($JsonConfig)
    {
        return $this->setData(self::JSON_CONFIG, $JsonConfig);
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
