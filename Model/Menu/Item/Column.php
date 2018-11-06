<?php

namespace Lulu\Menu\Model\Menu\Item;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Lulu\Menu\ResourceModel\Menu\Item\Column\Column as ResourceModelColumn;

class Column extends AbstractModel implements IdentityInterface, \Lulu\Menu\Api\Data\Menu\Item\ColumnInterface
{
    const CACHE_TAG = 'menu_item_item_data';

    public function _construct()
    {
        $this->_init(ResourceModelColumn::class);
    }

    public function getId()
    {
        return $this->getData(self::COLUMN_ID);
    }

    /**
     * @return mixed|string
     */
    public function getMenuItemId()
    {
        return $this->getData(self::MENU_ITEM_ID);
    }

    /**
     * @return mixed|string
     */
    public function getColumnNum()
    {
        return $this->getData(self::COLUMN_NUM);
    }
    /**
     * @return mixed|string
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }
    /**
     * @return mixed|string
     */
    public function getType()
    {
        return $this->getData(self::TYPE);
    }
    /**
     * @return mixed|string
     */
    public function getCmsBlockId()
    {
        return $this->getData(self::CMS_BLOCK_ID);
    }
    /**
     * @return mixed|string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }
    /**
     * @return mixed|string
     */
    public function getLink()
    {
        return $this->getData(self::LINK);
    }
    /**
     * @return mixed|string
     */
    public function getHtml()
    {
        return $this->getData(self::HTML);
    }
    /**
     * @return mixed|string
     */
    public function setColumnId($columnId)
    {
        return $this->setData(self::COLUMN_ID, $columnId);
    }

    /**
     * @param string $status
     * @return \Lulu\Menu\Api\Data\ColumnInterface|Column
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @param string $columnId
     * @return \Lulu\Menu\Api\Data\ColumnInterface|Column
     */
    public function setMenuItemId($columnId)
    {
        return $this->setData(self::MENU_ITEM_ID, $columnId);
    }

    public function setColumnNum($columnNum)
    {
        return $this->setData(self::COLUMN_NUM, $columnNum);
    }

    public function setType($type)
    {
        return $this->setData(self::TYPE, $type);
    }

    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    public function setLink($link)
    {
        return $this->setData(self::LINK, $link);
    }

    /**
     * @param string $html
     * @return \Lulu\Menu\Api\Data\ColumnInterface|Column
     */
    public function setHtml($html)
    {
        return $this->setData(self::HTML, $html);
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