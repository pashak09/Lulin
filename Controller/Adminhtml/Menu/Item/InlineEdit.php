<?php

namespace Lulu\Menu\Controller\Adminhtml\Menu\Item;

class InlineEdit extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Lulu_Menu::menu_save';
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;
    /**
     * @var \Magento\Framework\Registry
     */
    private $registry;
    /**
     * @var \Lulu\Menu\Api\Data\MenuInterfaceFactory
     */
    private $itemFactory;
    /**
     * @var \Lulu\Menu\Api\MenuRepositoryInterface
     */
    private $itemRepository;
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    private $jsonFactory;

    /**
     * InlineEdit constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Lulu\Menu\Api\Data\Menu\ItemInterfaceFactory $itemFactory
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
     * @param \Lulu\Menu\Api\Menu\ItemRepositoryInterface $itemRepository
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Lulu\Menu\Api\Data\Menu\ItemInterfaceFactory $itemFactory,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory,
        \Lulu\Menu\Api\Menu\ItemRepositoryInterface $itemRepository
    ) {
        $this->itemRepository = $itemRepository;
        $this->itemFactory = $itemFactory;
        $this->registry = $registry;
        $this->resultPageFactory = $resultPageFactory;
        $this->jsonFactory = $jsonFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $postData = current($this->_request->getParam('items', [])) ?? false;
        $infoArray = [
            'messages' => ['Your values has beeen submitted successfully.'],
            'error' => false
        ];
        if (isset($postData['link']) && strlen($postData['link']) >= 3 &&
            isset($postData['title']) && strlen($postData['title']) >=3 &&
            isset($postData['status']) && is_numeric($postData['status']) &&
            isset($postData['position']) && is_numeric($postData['position']) &&
            isset($postData['id']) && is_numeric($postData['id']) &&
            $this->_request->getParam('isAjax') && $this->itemRepository->getById($postData['id'])) {
            $menuRepository = $this->itemFactory->create();
            $menuRepository->setData($postData);
            $this->itemRepository->save($menuRepository);
        } else {
            $infoArray['messages'] = ['Something went wrong.'];
            $infoArray['error'] = true;
        }
        return $this->jsonFactory->create()->setData($infoArray);
    }
}
