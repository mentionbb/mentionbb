<?php

namespace App\Util;

class AccessableReflection
{
    /**
     * This method allows you to call private functions, constants and properties in any class.
     *
     * @param  mixed $obj
     * @param  mixed $propertyOrConstantOrMethod
     * @param  mixed $args
     * @return boolean
     */
    public static function get(object $obj, string $propertyOrConstantOrMethod, array $args = [])
    {
        $refl = new \ReflectionObject($obj);

        if ($refl->hasProperty($propertyOrConstantOrMethod))
        {
            $property = $refl->getProperty($propertyOrConstantOrMethod);
            $property->setAccessible(true);

            return $property->getValue($obj);
        }
        else if ($refl->hasConstant($propertyOrConstantOrMethod))
        {
            return $refl->getConstant($propertyOrConstantOrMethod);
        }
        else if ($refl->hasMethod($propertyOrConstantOrMethod))
        {
            $method = $refl->getMethod($propertyOrConstantOrMethod);
            $method->setAccessible(true);

            return $method->invokeArgs($obj, $args);
        }

        return true;
    }
}
