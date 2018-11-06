<?php

namespace Lulu\Menu\Api\Menu;

use Lulu\Menu\Api\Data\Menu\ItemInterface;

interface ItemRepositoryInterface
{
    /**
     * Save item item.
     *
     * @param  ItemInterface $itemMenu
     * @return ItemInterface
     */
    public function save(ItemInterface $itemMenu);

    /**
     * Retrieve item.
     *
     * @param int $menuItemId
     * @return ItemInterface
     */
    public function getById($menuItemId);

    /**
     * Delete item.
     *
     * @param ItemInterface $menuItem
     * @return bool true on success
     * @throws ItemInterface
     */
    public function delete(ItemInterface $menuItem);

    /**
     * Delete item by ID.
     *
     * @param int $menuItemId
     * @return bool true on success
     */
    public function deleteById($menuItemId);
}
