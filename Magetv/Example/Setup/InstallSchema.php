<?php
declare(strict_types=1);

namespace Magetv\Example\Setup;

use Magento\Framework\Backup\Db;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
/* */
class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
      /* echo  __METHOD__ . PHP_EOL;*/

        $setup->startSetup();
        $tableName = 'mage_database_example';
        $table = $setup->getConnection()
            ->newTable($setup->getTable('mage_database_example'));
          $table->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' => true],
                'ID'
            );
           $table ->addColumn(
                'name',
                Table::TYPE_TEXT,
                124,
                ['nullable' => false],
                'Name'
            );
           $table ->addColumn(
                'description',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false, 'default' => ''],
                'description'
            );
            $table->addColumn(
                'is_enabled',
                Table::TYPE_BOOLEAN,
                null,
                ['default'=>0],
                'Value'
            );
                 $table->addColumn(
                     'created_at',
                     Table::TYPE_TIMESTAMP,
                     null,
                     ['default'=>Table::TIMESTAMP_INIT],
                     'created at');
        $table->addColumn(
            'updated_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['default'=>Table::TIMESTAMP_INIT_UPDATE],
            'update at');
        $table->addIndex(
            $setup->getIdxName($tableName, ['is_enabled']),
        ['is_enabled']
        );
        $table->addIndex(
            $setup->getIdxName($tableName, ['name'], AdapterInterface::INDEX_TYPE_UNIQUE),
            ['name'],
            ['type' => AdapterInterface::INDEX_TYPE_UNIQUE]
        );
             $table->addIndex(
                 $setup->getIdxName($tableName, ['description'], AdapterInterface::INDEX_TYPE_FULLTEXT),
                 ['description'],
                 ['type' => AdapterInterface::INDEX_TYPE_FULLTEXT]
             );

        $table->addColumn('store_id', Table::TYPE_SMALLINT, 5, [
            'unsigned' =>true,
            ]
        );

        $table->addForeignKey(
            $setup->getFkName( $tableName, 'store_id', 'store', 'store_id'),
            'store_id',
            'store',
            'store_id',
            AdapterInterface::FK_ACTION_CASCADE
        )
            ->setComment('About Your Table');
        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}
