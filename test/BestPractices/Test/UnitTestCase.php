<?php
namespace BestPractices\Test;

class UnitTestCase extends \PHPUnit_Framework_TestCase
{

    /**
     * Make a method accessible and return the reflection
     * @param string $class Class the method belongs to
     * @param string $name Name of the method
     * @return ReflectionMethod
     */
    protected static function getMethod($class, $name)
    {
        $class = new \ReflectionClass($class);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method;
    }

    /**
     * Make a method accessible and call the method
     * @param string $object Object the method belongs to
     * @param string $name Name of the method
     * @return ReflectionMethod
     */
    protected static function callMethod($object, $name, $arguments)
    {
        $reflection = new \ReflectionClass($object);
        $method = $reflection->getMethod($name);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $arguments);
    }

    /**
     * Make a property accessible and set value
     *
     * @param String $exposeClassName Class name will be reflected
     * @param String $property The private property that you want to access to
     * @param Object $obj Object will be assigned $value
     * @param mixed $value
     */
    protected static function setPropertyAccessible($exposeClassName, $property, $obj, $value)
    {
        $reflection = new \ReflectionClass($exposeClassName);
        $properties = $reflection->getProperty($property);
        $properties->setAccessible(true);
        $properties->setValue($obj, $value);
    }

    /**
     * Print debug output to CLI
     * @param string $message
     */
    public static function debug($message)
    {

        file_put_contents('php://stderr', print_r($message, true));
    }
}