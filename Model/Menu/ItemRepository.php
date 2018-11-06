<?php

namespace Lulu\Menu\Model\Menu;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Lulu\Menu\Api\Data\Menu\ItemInterface;
use Lulu\Menu\ResourceModel\Menu\Collection as ItemCollectionFactory;
use Lulu\Menu\ResourceModel\Menu\Item as ResourceMenuItem;

class ItemRepository implements \Lulu\Menu\Api\Menu\ItemRepositoryInterface
{
    /**
     * @var ResourceMenuItem
     */
    private $resource;
    /**
     * @var ItemInterfaceFactory
     */
    private $itemFactory;
    /**
     * @var MenuCollectionFactory
     */
    private $itemCollectionFactory;

    public function __construct(
        ResourceMenuItem $resourceItem,
        \Lulu\Menu\Api\Data\Menu\ItemInterfaceFactory $itemMenuFactory,
        ItemCollectionFactory $itemCollectionFactory
    ) {
        $this->resource = $resourceItem;
        $this->itemFactory = $itemMenuFactory;
        $this->itemCollectionFactory = $itemCollectionFactory;
    }

    public function getById($itemMenuId)
    {
        $itemMenu = $this->itemFactory->create();
        $this->resource->load($itemMenu, $itemMenuId);
        if (!$itemMenu->getId()) {
            throw new NoSuchEntityException(__('Item with id "%1" does not exist.', $itemMenuId));
        }
        return $itemMenu;
    }

    public function save(ItemInterface $itemMenu)
    {
        try {
            $this->resource->save($itemMenu);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $itemMenu;
    }

    public function delete(ItemInterface $itemMenu)
    {
        try {
            $this->resource->delete($itemMenu);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    public function deleteById($itemMenuId)
    {
        return $this->delete($this->getById($itemMenuId));
    }
}
