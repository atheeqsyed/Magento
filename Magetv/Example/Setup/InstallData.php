<?php

namespace Magetv\Example\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        // __METHOD__	Used to represent the name of the class method where it is used.
        // PHP_EOL very useful for file handling, specially if you are writing multiple lines of content into a file.
        echo __METHOD__. PHP_EOL;
    }
}
