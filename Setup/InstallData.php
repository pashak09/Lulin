<?php

namespace Lulu\Menu\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * @var \Lulu\Menu\Api\Data\Menu\ItemInterfaceFactory
     */
    private $itemFactory;

    /**
     * @var \Lulu\Menu\Model\Menu\ItemRepository
     */
    private $itemRepository;

    /**
     * @var \Lulu\Menu\Api\Data\MenuInterfaceFactory
     */
    private $menuFactory;

    /**
     * @var \Lulu\Menu\Model\MenuRepository
     */
    private $menuRepository;

    /**
     * InstallData constructor.
     * @param \Lulu\Menu\Model\Menu\ItemRepository $itemRepository
     */
    public function __construct(
        \Lulu\Menu\Api\Data\Menu\ItemInterfaceFactory $itemFactory,
        \Lulu\Menu\Api\Menu\ItemRepositoryInterface $itemRepository,
        \Lulu\Menu\Api\Data\MenuInterfaceFactory $menuFactory,
        \Lulu\Menu\Api\MenuRepositoryInterface $menuRepository
    ) {
        $this->itemFactory = $itemFactory;
        $this->itemRepository = $itemRepository;
        $this->menuFactory = $menuFactory;
        $this->menuRepository = $menuRepository;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Exception
     */
    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $data = [
            0 => [
                'menu_id' => 1,
                'position' => '0',
                'status' => '1',
                'title' => 'New',
                'link' => 'new',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            1 => [
                'menu_id' => 1,
                'position' => '10',
                'status' => '1',
                'title' => 'Rugs',
                'link' => 'rugs',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "New Rugs",
                "link": "rugs/new-rugs",
                "is_bold": "1"
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "Trends",
                "link": "",
                "is_bold": "1"
            },
            "4": {
                "title": "Tribal Kilim",
                "link": "rugs/trends/tribal-kilim"
            },
            "5": {
                "title": "Moroccan ",
                "link": "rugs/trends/moroccan"
            },
            "6": {
                "title": "Traditional Reinvented ",
                "link": "rugs/trends/traditional-reinvented"
            },
            "7": {
                "title": "Watercolor ",
                "link": "rugs/trends/watercolor"
            },
            "8": {
                "title": "Tropical Leaves",
                "link": "rugs/trends/tropical-leaves"
            },
            "9": {
                "title": "Art Deco Floral",
                "link": "rugs/trends/art-deco-floral"
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Designer Collection",
                "link": "rugs/designer-collection",
                "is_bold": "1"
            },
            "2": {
                "title": "Glitter Guide",
                "link": "elodie-rug-by-glitter-guide"
            },
            "3": {
                "title": "Gal Meets Glam",
                "link": "garden-party-rug-by-gal-meets-glam"
            },
            "5": {
                "title": "Justina Blakeney",
                "link": "rugs/designer-collection/justina-blakeney"
            },
            "6": {
                "title": "Kate Spade New York",
                "link": "rugs/designer-collection/kate-spade-new-york"
            },
            "7": {
                "title": "Novogratz",
                "link": "rugs/designer-collection/novogratz"
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "Design:",
                "link": "",
                "is_bold": "1"
            },
            "10": {
                "title": "Striped",
                "link": "rugs/striped"
            },
            "11": {
                "title": "Solid",
                "link": "rugs/solid"
            },
            "12": {
                "title": "Patterned",
                "link": "rugs/patterned"
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Features:",
                "link": "rugs/features",
                "is_bold": "1"
            },
            "2": {
                "title": "Shags + Flokatis",
                "link": "rugs/shags-flokatis"
            },
            "3": {
                "title": "Sheepskins",
                "link": "rugs/sheepskins"
            },
            "4": {
                "title": "One-of-a-Kind",
                "link": "rugs/one-of-a-kind"
            },
            "5": {
                "title": "Indoor\\/Outdoor",
                "link": "rugs/indoor-outdoor"
            },
            "6": {
                "title": "Doormats",
                "link": "rugs/doormats"
            },
            "7": {
                "title": "Rug Pads",
                "link": "rug-pads"
            },
            "8": {
                "title": "Material:",
                "link": "",
                "is_bold": "1"
            },
            "9": {
                "title": "Wool ",
                "link": "rugs/wool"
            },
            "10": {
                "title": "Natural Fiber",
                "link": "rugs/natural-fiber"
            },
            "11": {
                "title": "Synthetic",
                "link": "rugs/synthetic"
            },
            "12": {
                "title": "Cotton",
                "link": "rugs/cotton"
            },
            "13": {
                "title": "Viscose",
                "link": "rugs/viscose"
            },
            "14": {
                "title": "Silk",
                "link": "rugs/silk"
            },
            "15": {
                "title": "Hair on hide",
                "link": "rugs/hair-on-hide"
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Construction:",
                "link": "",
                "is_bold": "1"
            },
            "2": {
                "title": "Flatweave",
                "link": "rugs/flatweave"
            },
            "3": {
                "title": "Hand Knotted",
                "link": "rugs/hand-knotted"
            },
            "4": {
                "title": "Hand Made",
                "link": "rugs/hand-made"
            },
            "5": {
                "title": "Machine Made",
                "link": "rugs/machine-made"
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-rugs",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            2 => [
                'menu_id' => 1,
                'position' => '20',
                'status' => '1',
                'title' => 'Furniture',
                'link' => 'furniture',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "New Furniture",
                "link": "furniture/new-furniture",
                "is_bold": "1"
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "Trends",
                "link": "",
                "is_bold": "1"
            },
            "4": {
                "title": "Marble + Gold",
                "link": "furniture/trends/marble-gold"
            },
            "5": {
                "title": "Velvet",
                "link": "furniture/trends/velvet"
            },
            "6": {
                "title": "Blush",
                "link": "furniture/trends/blush"
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "Living Room",
                "link": "furniture/living-room",
                "is_bold": "1"
            },
            "9": {
                "title": "Sofas + Sectionals",
                "link": "furniture/living-room/sofas-sectionals"
            },
            "10": {
                "title": "Accent Chairs",
                "link": "furniture/living-room/accent-chairs"
            },
            "11": {
                "title": "Coffee, Side + Console tables",
                "link": "furniture/living-room/coffee-side-console-tables"
            },
            "12": {
                "title": "Ottomans, Stools, + Benches",
                "link": "furniture/living-room/ottomans-stools-benches"
            },
            "13": {
                "title": "Media Consoles + Cabinets",
                "link": "furniture/living-room/media-consoles-cabinets"
            },
            "14": {
                "title": "Bookcases + Shelving",
                "link": "furniture/living-room/bookcases-shelving"
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Bedroom",
                "link": "furniture/bedroom",
                "is_bold": "1"
            },
            "2": {
                "title": "Beds",
                "link": "furniture/bedroom/beds"
            },
            "3": {
                "title": "Headboards",
                "link": "furniture/bedroom/headboards"
            },
            "4": {
                "title": "Nightstands + Dressers",
                "link": "furniture/bedroom/nightstands-dressers"
            },
            "5": {
                "title": "Benches, Ottomans, + Stools",
                "link": "furniture/bedroom/benches-ottomans-stools"
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "Dining Room",
                "link": "furniture/dining-room",
                "is_bold": "1"
            },
            "8": {
                "title": "Dining Tables",
                "link": "furniture/dining-room/dinning-tables"
            },
            "9": {
                "title": "Dining Chairs",
                "link": "furniture/dining-room/dinning-chairs"
            },
            "10": {
                "title": "Buffets + Cabinets",
                "link": "furniture/dining-room/buffets-cabinets"
            },
            "11": {
                "title": "Bar + Counter Stools",
                "link": "furniture/dining-room/bar-counter-stools"
            },
            "12": {
                "title": "Bar Carts",
                "link": "furniture/dining-room/bar-carts"
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Office",
                "link": "furniture/office",
                "is_bold": "1"
            },
            "2": {
                "title": "Desks",
                "link": "furniture/office/desks"
            },
            "3": {
                "title": "Desk Chairs",
                "link": "furniture/office/desk-chairs"
            },
            "4": {
                "title": "Office Storage",
                "link": "furniture/office/office-storage"
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "Indoor\\/Outdoor",
                "link": "furniture/indoor-outdoor",
                "is_bold": "1"
            },
            "7": {
                "title": "Seating",
                "link": "furniture/indoor-outdoor/seating"
            },
            "8": {
                "title": "Tables",
                "link": "furniture/indoor-outdoor/tables"
            },
            "9": {
                "title": "Accents",
                "link": "furniture/indoor-outdoor/accents"
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-furniture",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            3 => [
                'menu_id' => 1,
                'position' => '30',
                'status' => '1',
                'title' => 'Pillows + Décor',
                'link' => 'pillows-decor',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "New Pillows + D\\u00e9cor",
                "link": "pillows-decor/new-pillows-decor",
                "is_bold": "1"
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "Trends",
                "link": "",
                "is_bold": "1"
            },
            "4": {
                "title": "African Baskets + Textiles",
                "link": "pillows-decor/trends/african-baskets-textiles"
            },
            "5": {
                "title": "Shibori ",
                "link": "pillows-decor/trends/shibori"
            },
            "6": {
                "title": "Cactus Silk",
                "link": "pillows-decor/trends/cactus-silk"
            },
            "7": {
                "title": "Tropical D\\u00e9cor",
                "link": "pillows-decor/trends/tropical-decor"
            },
            "8": {
                "title": "Rug Pillows",
                "link": "pillows-decor/trends/rug-pillows"
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Pillows",
                "link": "pillows-decor/pillows",
                "is_bold": "1"
            },
            "2": {
                "title": "Throw Pillows",
                "link": "pillows-decor/pillows/throw-pillows"
            },
            "3": {
                "title": "Floor Pillows",
                "link": "pillows-decor/pillows/floor-pillows"
            },
            "4": {
                "title": "One-of-a-Kind",
                "link": "pillows-decor/pillows/one-of-a-kind"
            },
            "5": {
                "title": "Indoor\\/Outdoor",
                "link": "pillows-decor/pillows/indoor-outdoor"
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "Poufs",
                "link": "pillows-decor/poufs",
                "is_bold": "1"
            },
            "8": {
                "title": "Throws",
                "link": "pillows-decor/throws",
                "is_bold": "1"
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Accessories",
                "link": "pillows-decor/accessories",
                "is_bold": "1"
            },
            "2": {
                "title": "Decorative Objects",
                "link": "pillows-decor/accessories/decorative-objects"
            },
            "3": {
                "title": "Vases",
                "link": "pillows-decor/accessories/vases"
            },
            "4": {
                "title": "Trays",
                "link": "pillows-decor/accessories/trays"
            },
            "5": {
                "title": "Baskets",
                "link": "pillows-decor/accessories/baskets"
            },
            "6": {
                "title": "Pots + Planters",
                "link": "pillows-decor/accessories/pots-planters"
            },
            "7": {
                "title": "Picture Frames",
                "link": "pillows-decor/accessories/picture-frames"
            },
            "8": {
                "title": "Candleholders + Hurricanes",
                "link": "pillows-decor/accessories/candleholders-hurricanes"
            },
            "9": {
                "title": "Bookends",
                "link": "pillows-decor/accessories/bookends"
            },
            "10": {
                "title": "Desk Accessories",
                "link": "pillows-decor/accessories/desk-accessories"
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Tabletop",
                "link": "pillows-decor/tabletop",
                "is_bold": "1"
            },
            "2": {
                "title": "Dinnerware",
                "link": "pillows-decor/tabletop/dinnerware"
            },
            "3": {
                "title": "Bar + Glassware",
                "link": "pillows-decor/tabletop/bar-glassware"
            },
            "4": {
                "title": "Flatware",
                "link": "pillows-decor/tabletop/flatware"
            },
            "5": {
                "title": "Serveware",
                "link": "pillows-decor/tabletop/serveware"
            },
            "6": {
                "title": "Table Linens",
                "link": "pillows-decor/tabletop/table-linens"
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-pillows-and-decor",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            4 => [
                'menu_id' => 1,
                'position' => '40',
                'status' => '1',
                'title' => 'Lighting',
                'link' => 'lighting',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "New Lighting",
                "link": "lighting/new-lighting",
                "is_bold": "1"
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "Trend",
                "link": "",
                "is_bold": "1"
            },
            "4": {
                "title": "Globe ",
                "link": "lighting/trends/globe"
            },
            "5": {
                "title": "Crystal",
                "link": "lighting/trends/crystal"
            },
            "6": {
                "title": "Concrete",
                "link": "lighting/trends/concrete"
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Type",
                "link": "",
                "is_bold": "1"
            },
            "2": {
                "title": "Table Lamps",
                "link": "lighting/table-lamps"
            },
            "3": {
                "title": "Floor Lamps",
                "link": "lighting/floor-lamps"
            },
            "4": {
                "title": "Ceiling Lamps",
                "link": "lighting/ceiling"
            },
            "5": {
                "title": "Sconces",
                "link": "lighting/sconces"
            },
            "6": {
                "title": "Lighting Accessories",
                "link": "lighting/lighting-accessories"
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-lighting",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            5 => [
                'menu_id' => 1,
                'position' => '50',
                'status' => '1',
                'title' => 'Walls',
                'link' => 'walls',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "New Walls",
                "link": "walls/new-walls",
                "is_bold": "1"
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "Trends",
                "link": "",
                "is_bold": "1"
            },
            "4": {
                "title": "Vacation Vibes",
                "link": "walls/trends/vacation-vibes"
            },
            "5": {
                "title": "Desert Life",
                "link": "walls/trends/desert-life"
            },
            "6": {
                "title": "Oversized Round Mirrors",
                "link": "walls/trends/oversized-round-mirrors"
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Wallpaper",
                "link": "walls/wallpaper",
                "is_bold": "1"
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "Mirrors",
                "link": "walls/mirrors",
                "is_bold": "1"
            },
            "4": {
                "title": "Round + Oval",
                "link": "walls/mirrors/round-oval"
            },
            "5": {
                "title": "Rectangle + Square",
                "link": "walls/mirrors/rectangle-square"
            },
            "6": {
                "title": "Full Length ",
                "link": "walls/mirrors/full-length"
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Wall Art",
                "link": "walls/wall-art",
                 "is_bold": "1"
            },
            "2": {
                "title": "Photography",
                "link": "walls/wall-art/photography"
            },
            "3": {
                "title": "Illustration",
                "link": "walls/wall-art/illustration"
            },
            "4": {
                "title": "Typography",
                "link": "walls/wall-art/typography"
            },
            "5": {
                "title": "Mixed Media",
                "link": "walls/wall-art/mixed-media"
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "Wall Hangings",
                "link": "walls/wall-hangings",
                "is_bold": "1"
            },
            "8": {
                "title": "Sculptural Wall Decor",
                "link": "walls/sculptural-wall-decor",
                "is_bold": "1"
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-walls",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            6 => [
                'menu_id' => 1,
                'position' => '70',
                'status' => '1',
                'title' => 'Bed + Bath',
                'link' => 'bed-and-bath',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "New Bed + Bath",
                "link": "bed-and-bath/new",
                "is_bold": "1"
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "Trends",
                "link": "",
                "is_bold": "1"
            },
            "4": {
                "title": "White Bedding",
                "link": "bed-and-bath/trends/white-bedding"
            },
            "5": {
                "title": "Washed Linen",
                "link": "bed-and-bath/trends/washed-linen"
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Bedding",
                "link": "bed-and-bath/bedding",
                "is_bold": "1"
            },
            "2": {
                "title": "Duvet Covers + Shams",
                "link": "bed-and-bath/bedding/duvet-covers"
            },
            "3": {
                "title": "Sheets",
                "link": "bed-and-bath/bedding/sheets"
            },
            "4": {
                "title": "Quilts + Coverlets",
                "link": "bed-and-bath/bedding/quilts-coverlets"
            },
            "5": {
                "title": "Pillow + Duvet Inserts",
                "link": "bed-and-bath/bedding/pillow-duvet-inserts"
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Bath",
                "link": "bed-and-bath/bath",
                "is_bold": "1"
            },
            "2": {
                "title": "Bath towels",
                "link": "bed-and-bath/bath/bath-towels"
            },
            "3": {
                "title": "Bath rugs",
                "link": "bed-and-bath/bath/bath-rugs"
            },
            "4": {
                "title": "Bath accessories",
                "link": "bed-and-bath/bath/bath-accessories"
            },
            "5": {
                "title": "Bath storage",
                "link": "bed-and-bath/bath/bath-storage"
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-bed-and-bath",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            7 => [
                'menu_id' => 1,
                'position' => '80',
                'status' => '1',
                'title' => 'Sale',
                'link' => 'sale',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Rugs",
                "link": "sale/rugs"
            },
            "2": {
                "title": "Furniture",
                "link": "sale/furniture"
            },
            "3": {
                "title": "Pillows + D\\u00e9cor",
                "link": "sale/pillows-decor"
            },
            "4": {
                "title": "Wall Art + Mirrors",
                "link": "sale/wall-art-mirrors"
            },
            "5": {
                "title": "Lighting",
                "link": "sale/lighting"
            },
            "6": {
                "title": "Bed + Bath",
                "link": "sale/bed-bath"
            },
            "7": {
                "title": "Gifts",
                "link": "sale/gifts"
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-sale",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            8 => [
                'menu_id' => 1,
                'position' => '85',
                'status' => '1',
                'title' => 'Gifts',
                'link' => 'gifts',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Gift Cards",
                "link": "gifts/gift-cards"
            },
            "2": {
                "title": "Hostess + Housewarming",
                "link": "gifts/hostess-and-housewarming"
            },
            "3": {
                "title": "Candles",
                "link": "gifts/candles"
            },
            "4": {
                "title": "Picture Frames",
                "link": "gifts/picture-frames"
            },
            "5": {
                "title": "Newly Engaged",
                "link": "gifts/newly-engaged"
            },
            "6": {
                "title": "Baby Gifts",
                "link": "gifts/baby-gifts"
            },
            "7": {
                "title": "Holiday",
                "link": "gifts/holiday"
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "Under $25",
                "link": "gifts/under-25"
            },
            "10": {
                "title": "$25 - $50",
                "link": "gifts/25-50"
            },
            "11": {
                "title": "$50 - $100",
                "link": "gifts/50-100"
            },
            "12": {
                "title": "Above $100",
                "link": "gifts/above-100"
            },
            "13": {
                "title": "",
                "link": ""
            },
            "14": {
                "title": "",
                "link": ""
            },
            "15": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-gifts",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            },
            "13": {
                "title": "",
                "link": ""
            },
            "14": {
                "title": "",
                "link": ""
            },
            "15": {
                "title": "",
                "link": ""
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            },
            "13": {
                "title": "",
                "link": ""
            },
            "14": {
                "title": "",
                "link": ""
            },
            "15": {
                "title": "",
                "link": ""
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            },
            "13": {
                "title": "",
                "link": ""
            },
            "14": {
                "title": "",
                "link": ""
            },
            "15": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            },
            "13": {
                "title": "",
                "link": ""
            },
            "14": {
                "title": "",
                "link": ""
            },
            "15": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            },
            "13": {
                "title": "",
                "link": ""
            },
            "14": {
                "title": "",
                "link": ""
            },
            "15": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            9 => [
                'menu_id' => 1,
                'position' => '90',
                'status' => '1',
                'title' => 'Collections',
                'link' => 'collections',
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "L & G Exclusive Collaborations",
                "link": "l-g-exclusive-collaborations",
                "is_bold": "1"
            },
            "2": {
                "title": "Glitter Guide",
                "link": "l-g-exclusive-collaborations/glitter-guide"
            },
            "3": {
                "title": "Gal Meets Glam",
                "link": "l-g-exclusive-collaborations/gal-meets-glam"
            },
            "4": {
                "title": "Cara Loren",
                "link": "l-g-exclusive-collaborations/cara-loren"
            },
            "5": {
                "title": "Studio McGee",
                "link": "l-g-exclusive-collaborations/studio-mcgee"
            },
            "6": {
                "title": "Sarah Sherman Samuel",
                "link": "l-g-exclusive-collaborations/sarah-sherman-samuel"
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Designer Collections",
                "link": "designer-collections",
                "is_bold": "1"
            },
            "2": {
                "title": "Justina Blakeney",
                "link": "designer-collections/justina-blakeney"
            },
            "3": {
                "title": "Cupcakes and Cashmere",
                "link": "designer-collections/cupcakes-and-cashmere"
            },
            "4": {
                "title": "Kate Spade New York",
                "link": "designer-collections/kate-spade-new-york"
            },
            "5": {
                "title": "Jonathan Adler",
                "link": "designer-collections/jonathan-adler"
            },
            "6": {
                "title": "Kelly Hoppen",
                "link": "designer-collections/kelly-hoppen"
            },
            "7": {
                "title": "Novogratz",
                "link": "designer-collections/novogratz"
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Luxe Studio",
                "link": "",
                "is_bold": "1"
            },
            "2": {
                "title": "Furniture",
                "link": "luxe-studio-collection/furniture"
            },
            "3": {
                "title": "Rugs",
                "link": "luxe-studio-collection/rugs"
            },
            "4": {
                "title": "Lighting",
                "link": "luxe-studio-collection/lighting"
            },
            "5": {
                "title": "Walls",
                "link": "luxe-studio-collection/walls"
            },
            "6": {
                "title": "Pillows + D\\u00e9cor",
                "link": "luxe-studio-collection/pillows-decor"
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "One-of-a-Kind",
                "link": "one-of-a-kinds",
                "is_bold": "1"
            },
            "2": {
                "title": "Rugs",
                "link": "one-of-a-kinds/rugs"
            },
            "3": {
                "title": "Pillows + D\\u00e9cor",
                "link": "one-of-a-kinds/pillows-decor"
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "Trends:",
                "link": "",
                "is_bold": "1"
            },
            "6": {
                "title": "Tropical Vibes",
                "link": "collections/trends/tropical-vibes"
            },
            "7": {
                "title": "California Casual",
                "link": "collections/trends/california-casual"
            },
            "8": {
                "title": "Desert Tribal",
                "link": "collections/trends/desert-tribal"
            },
            "9": {
                "title": "Rose + Gold",
                "link": "collections/trends/rose-gold"
            },
            "10": {
                "title": "Scandinavian Minimalism",
                "link": "collections/trends/scandinavian-minimalism"
            },
            "11": {
                "title": "French Style",
                "link": "collections/trends/french-style"
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-collections",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}',
            ],
            10 => [
                'menu_id' => 1,
                'position' => '100',
                'status' => '0',
                'title' => 'The Edit',
                'link' => null,
                'html' => null,
                'json_config' => '{
    "1": {
        "id": "1",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Get the Look",
                "link": "",
                "is_bold": "1"
            },
            "2": {
                "title": "Mountain Modern",
                "link": ""
            },
            "3": {
                "title": "Desert Neutrals",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "Home Tours",
                "link": "",
                "is_bold": "1"
            },
            "6": {
                "title": "901 Salon",
                "link": ""
            },
            "7": {
                "title": "Cara Loren",
                "link": ""
            },
            "8": {
                "title": "Karlie Kloss",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "2": {
        "id": "2",
        "display_mode": "list",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "Interviews",
                "link": "",
                "is_bold": "1"
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "Style Advice",
                "link": "",
                "is_bold": "1"
            },
            "4": {
                "title": "Rug Guide",
                "link": ""
            },
            "5": {
                "title": "How to make your bed",
                "link": ""
            },
            "6": {
                "title": "How to style your mantel",
                "link": ""
            },
            "7": {
                "title": "How to create a gallery wall",
                "link": ""
            },
            "8": {
                "title": "How to style one-of-a-kind rugs",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "3": {
        "id": "3",
        "display_mode": "cms_block",
        "cms_block_identifier": "menu-slider-the-edit",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "4": {
        "id": "4",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "5": {
        "id": "5",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    },
    "6": {
        "id": "6",
        "display_mode": "empty",
        "cms_block_id": "",
        "lines": {
            "1": {
                "title": "",
                "link": ""
            },
            "2": {
                "title": "",
                "link": ""
            },
            "3": {
                "title": "",
                "link": ""
            },
            "4": {
                "title": "",
                "link": ""
            },
            "5": {
                "title": "",
                "link": ""
            },
            "6": {
                "title": "",
                "link": ""
            },
            "7": {
                "title": "",
                "link": ""
            },
            "8": {
                "title": "",
                "link": ""
            },
            "9": {
                "title": "",
                "link": ""
            },
            "10": {
                "title": "",
                "link": ""
            },
            "11": {
                "title": "",
                "link": ""
            },
            "12": {
                "title": "",
                "link": ""
            }
        }
    }
}'
            ]
        ];
        /** @var \Lulu\Menu\Model\Menu $menuRepository */
        $menuRepository = $this->menuFactory->create();
        $menuRepository->setData([
            'status' => 1,
            'title' => 'Main Menu',
        ]);
        $this->menuRepository->save($menuRepository);
        foreach ($data as $menuItemData) {
            /** @var \Lulu\Menu\Model\Menu\Item $model */
            $model = $this->itemFactory->create();
            $menuItemData['menu_id'] = $menuRepository->getId();
            $model->addData($menuItemData);
            $this->itemRepository->save($model);
        }
    }
}
