<?php

namespace Lulu\Menu\Model\Menu\Item;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Lulu\Menu\Api\Data\Menu\Item\ColumnInterface;
use Lulu\Menu\ResourceModel\Menu\Item\Column as ResourceColumn;

class ColumnRepository implements \Lulu\Menu\Api\Menu\Item\ColumnRepositoryInterface
{
    /**
     * @var ResourceColumn
     */
    private $resource;
    /**
     * @var ColumnInterface
     */
    private $columnFactory;
    /**
     * @var ColumnInterface
     */
    private $columnCollectionFactory;

    public function __construct(
        ResourceColumn $resourceItem,
        \Lulu\Menu\Api\Data\Menu\Item\ColumnInterface $columnFactory,
        \Lulu\Menu\ResourceModel\Menu\Item\Collection $columnCollectionFactory
    ) {
        $this->resource = $resourceItem;
        $this->columnFactory = $columnFactory;
        $this->columnCollectionFactory = $columnCollectionFactory;
    }

    public function getById($menuId)
    {
        $column = $this->columnFactory->create();
        $this->resource->load($column, $menuId);
        if (!$column->getId()) {
            throw new NoSuchEntityException(__('Column with id "%1" does not exist.', $menuId));
        }
        return $column;
    }

    public function save(ColumnInterface $column)
    {
        if (empty($column->getStoreId())) {
            $column->setStoreId($this->storeManager->getStore()->getId());
        }

        try {
            $this->resource->save($column);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $column;
    }

    public function delete(ColumnInterface $column)
    {
        try {
            $this->resource->delete($column);
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
