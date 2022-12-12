<?php
namespace Pattern\Designs\Model;

class SingletonClass extends \Magento\Framework\ObjectManager\Config\Data
{
    private static $instance;
    /**
     * Returns the singleton instance of this class.
     *
     * @return SingletonClass
     */
    public static function getInstance()
    {
        // It ensures that only one instance of the SingletonClass class is created,
        // and that the same instance is returned each time the getInstance() method is called.
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct()
    {
        $this->instance = $this;
    }
}

