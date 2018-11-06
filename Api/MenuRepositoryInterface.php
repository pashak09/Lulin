<?php

namespace Lulu\Menu\Api;

use Lulu\Menu\Api\Data\MenuInterface;

interface MenuRepositoryInterface
{
    /**
     * Save menu.
     *
     * @param  MenuInterface $menu
     * @return MenuInterface
     */
    public function save(MenuInterface $menu);

    /**
     * Retrieve menu.
     *
     * @param int $menuId
     * @return MenuInterface
     */
    public function getById($menuId);

    /**
     * Delete menu.
     *
     * @param MenuInterface $menu
     * @return bool true on success
     * @throws MenuInterface
     */
    public function delete(MenuInterface $menu);

    /**
     * Delete menu by ID.
     *
     * @param int $menuId
     * @return bool true on success
     */
    public function deleteById($menuId);
}
