<?php

namespace Lulu\Menu\Api\Menu\Item;

use Lulu\Menu\Api\Data\Menu\Item\ColumnInterface;

interface ColumnRepositoryInterface
{
    /**
     * Save column.
     *
     * @param  ColumnInterface $column
     * @return ColumnInterface
     */
    public function save(ColumnInterface $column);

    /**
     * Retrieve column.
     *
     * @param int $columnId
     * @return ColumnInterface
     */
    public function getById($columnId);

    /**
     * Delete column.
     *
     * @param ColumnInterface $column
     * @return bool true on success
     * @throws ColumnInterface
     */
    public function delete(ColumnInterface $column);

    /**
     * Delete item by ID.
     *
     * @param int $columnId
     * @return bool true on success
     */
    public function deleteById($columnId);
}
