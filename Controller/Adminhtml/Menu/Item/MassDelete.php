<?php

namespace Lulu\Menu\Controller\Adminhtml\Menu\Item;

use Magento\Backend\App\Action;
use Magento\Ui\Component\MassAction\Filter;

class MassDelete extends \Magento\Backend\App\Action
{
    /**
     * @var Filter
     */
    private $filter;
    /**
     * @var \Lulu\Menu\Model\MenuRepository
     */
    private $repository;
    /**
     * @var \Lulu\Menu\ResourceModel\Menu\Collection
     */
    private $collection;

    /**
     * MassDelete constructor.
     * @param Action\Context $context
     * @param Filter $filter
     * @param \Lulu\Menu\ResourceModel\CollectionFactory $collection
     * @param \Lulu\Menu\Model\MenuRepository $repository
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        Filter $filter,
        \Lulu\Menu\ResourceModel\Menu\CollectionFactory $collection,
        \Lulu\Menu\Model\Menu\ItemRepository $repository
    ) {
        $this->filter = $filter;
        $this->collection = $collection;
        $this->repository = $repository;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $collection = $this->filter->getCollection($this->collection->create());
            $collectionSize = $collection->getSize();
            if ($collectionSize) {
                foreach ($collection as $item) {
                    $this->repository->delete($item);
                }
                $this->messageManager->addSuccess(__('Deleted Successfully'));
                $editedMenuId = $collection->getFirstItem()->getMenuId();
            } else {
                $this->messageManager->addError("Delete error");
            }
        } catch (\Exception $e) {
            $this->messageManager->addError("Delete error");
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath("lulu/menu/edit", ['id' => $editedMenuId]);
    }
}
