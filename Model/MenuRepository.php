<?php

namespace Lulu\Menu\Model;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Lulu\Menu\Api\Data\MenuInterface;
use Lulu\Menu\ResourceModel\CollectionFactory;
use Lulu\Menu\ResourceModel\Menu as ResourceMenu;
use Lulu\Menu\Model\MenuFactory;

class MenuRepository implements \Lulu\Menu\Api\MenuRepositoryInterface
{
    /**
     * @var ResourceMenu
     */
    private $resource;
    /**
     * @var MenuFactory
     */
    private $menuFactory;
    /**
     * @var MenuInterfaceFactory
     */
    private $menuInterfaceFactory;
    /**
     * @var MenuCollectionFactory
     */
    private $menuCollectionFactory;

    public function __construct(
        MenuFactory $menuFactory,
        ResourceMenu $resourceMenu,
        \Lulu\Menu\Api\Data\MenuInterfaceFactory $menuInterfaceFactory,
        CollectionFactory $menuCollectionFactory
    ) {
        $this->resource = $resourceMenu;
        $this->menuFactory = $menuFactory;
        $this->menuInterfaceFactory = $menuInterfaceFactory;
        $this->menuCollectionFactory = $menuCollectionFactory;
    }

    public function getById($menuId)
    {
        $menu = $this->menuFactory->create();
        $this->resource->load($menu, $menuId);
        if (!$menu->getId()) {
            return false;
        }
        return $menu;
    }

    public function save(MenuInterface $menu)
    {
        try {
            $this->resource->save($menu);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $menu;
    }

    public function delete(MenuInterface $menu)
    {
        try {
            $this->resource->delete($menu);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    public function deleteById($menuId)
    {
        return $this->delete($this->getById($menuId));
    }
}
