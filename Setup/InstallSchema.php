<?php

namespace Lulu\Menu\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();
        $tableName = $installer->getTable('lulu_menu');

        $table = $installer->getConnection()
            ->newTable($tableName)
            ->addColumn('id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, [
                'identity' => true,
                'nullable' => false,
                'unsigned' => true,
                'primary' => true,
            ], 'Id')
            ->addColumn('status', \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT, null, [
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
            ], 'Status')
            ->addColumn('publish_at', \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME, null, [], 'Publish At')
            ->addColumn('title', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Title')
            ->addColumn('comment', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null, [], 'Comment')
            ->setComment('Menu');

        if ($installer->tableExists('lulu_menu')) {
            $installer->getConnection()->dropTable($tableName);
        }
        $installer->getConnection()->createTable($table);

        $tableName = $installer->getTable('lulu_menu_item');

        $table = $installer->getConnection()
            ->newTable($tableName)
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'unsigned' => true,
                    'primary' => true,
                ],
                'Id'
            )
            ->addColumn(
                'menu_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'unsigned' => true,
                    'nullable' => false,
                    'default' => '0'
                ],
                'Status'
            )
            ->addColumn(
                'position',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'unsigned' => true,
                    'nullable' => false,
                    'default' => '0',
                ],
                'Position'
            )
            ->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                [
                    'unsigned' => true,
                    'nullable' => false,
                    'default' => '0',
                ],
                'Status'
            )
            ->addColumn('title', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Title')
            ->addColumn('link', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Link')
            ->addColumn('html', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Html')
            ->addColumn('json_config', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'json config')
            ->addForeignKey(
                $installer->getFkName(
                    $installer->getTable('lulu_menu'),
                    'id',
                    $installer->getTable('lulu_menu_item'),
                    'menu_id'
                ),
                'menu_id',
                $installer->getTable('lulu_menu'),
                'id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )
            ->setComment(
                'Menu Item'
            );

        if ($installer->tableExists('lulu_menu_item')) {
            $installer->getConnection()->dropTable($tableName);
        }
        $installer->getConnection()->createTable($table);

        $tableName = $installer->getTable('lulu_menu_item_item');

        $table = $installer->getConnection()
            ->newTable($tableName)
            ->addColumn('id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, [
                'identity' => true,
                'nullable' => false,
                'unsigned' => true,
                'primary' => true,
            ], 'Id')
            ->addColumn('menu_item_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null,
                [
                    'unsigned' => true,
                    'nullable' => false,
                ],
                'Menu Item ID')
            ->addColumn('status', \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT, null, [
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
            ], 'Status')
            ->addColumn('column_num', \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT, null, [
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
            ], 'Column')
            ->addColumn('type', \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT, null, [
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
            ], 'Type')
            ->addColumn('cms_block_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null,
                [
                    'unsigned' => true,
                    'nullable' => false,
                ],
                'CMS block id')
            ->addColumn('title', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Title')
            ->addColumn('link', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Link')
            ->addColumn('html', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, null, [], 'Html')
            ->addForeignKey(
                $installer->getFkName(
                    $installer->getTable('lulu_menu_item'),
                    'id',
                    $installer->getTable('lulu_menu_item_item'),
                    'menu_item_id'
                ),
                'menu_item_id',
                $installer->getTable('lulu_menu_item'),
                'id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )
            ->setComment('Menu Item Item');

        if ($installer->tableExists('lulu_menu_item_item')) {
            $installer->getConnection()->dropTable($tableName);
        }
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
