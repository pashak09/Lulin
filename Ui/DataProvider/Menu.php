<?php

namespace Lulu\Menu\Ui\DataProvider;

use \Lulu\Menu\ResourceModel\CollectionFactory;

class Menu extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /** @var array */
    private $loadedData;


    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $colectionMenu
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $colectionMenu,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $colectionMenu->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        foreach ($items as $article) {
            $this->loadedData[$article->getId()] = $article->getData();
        }
        return $this->loadedData;
    }
}
