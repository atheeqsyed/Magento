<?php

namespace Magetv\Example\Setup;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        echo __METHOD__ . PHP_EOL;

        // Check if table exists
      //  $tableName= "mage_database_example";
        //Adding a column
        $columnName = 'image_url';
     //   $maxLength = 512;
      /*  $setup->getConnection()->addColumn($setup->getTable($tableName), $columnName, [
            'type' => Table::TYPE_TEXT,
            'length' => 255,
            'nullable'=> true,
            'after'=> 'description',
            'comment' => 'Image URL'
        ]);*/

        //changing existing column
     /*   $setup->getConnection()->changeColumn($setup->getTable($tableName), $columnName,  $columnName, [
            'type' => Table::TYPE_TEXT,
            'length' => $maxLength,
            'nullable'=> true,
            'after'=> 'description',
            'comment' => 'Image URL'
        ]);*/

        // Rename the table name
   /*     $newTableName = 'mage_example_table';
        $setup->getConnection()->renameTable(
            $setup->getTable($tableName),
            $setup->getTable($newTableName)
        );*/

        //Add index
      /*  $setup->getConnection()->addIndex(
            $setup->getTable($tableName),
            $setup->getIdxName($tableName, ['product_id', 'store_id'], AdapterInterface::INDEX_TYPE_UNIQUE),
            ['product_id',  'store_id'],
            AdapterInterface::INDEX_TYPE_UNIQUE
        );*/

        //Add foreign key
      /*  $setup->getConnection()->addForeignKey(
            $setup->getFkName($tableName, 'product_id',
                'catalog_product_entity', 'entity_id'),
            $setup->getTable($tableName),
            'product_id',
        $setup->getTable('catalog_product_entity'),
        'entity_id',
        AdapterInterface::FK_ACTION_CASCADE,
        true
            );*/

       // $setup->tableExists($tableName);
      //  $setup->getConnection()->isTableExists(($setup->getTable($tableName)));
        //Check if column exists
      //  $setup->getConnection()->tableColumnExists($setup->getTable($tableName), 'description');

        //detailed info about columns
    /*    $tableInfo = $setup->getConnection()->describeTable($setup->getTable($tableName));
    print_r($tableInfo);
    exit();*/

    //listing index and foreign keys
       /* print_r($setup->getConnection()->getIndexList($setup->getTable($tableName)));
        exit();*/


    }




}
