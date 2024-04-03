<?php

namespace App\Util;

class AccessableReflection
{
    /**
     * This method allows you to call private functions, constants and properties in any class.
     *
     * @param  object $obj
     * @param  string $propertyOrConstantOrMethod
     * @param  array $args
     * @return mixed
     */
    public static function get(object $obj, string $propertyOrConstantOrMethod, array $args = [], $parentClass = false)
    {
        $refl = new \ReflectionObject($obj);

        if ($parentClass)
        {
            $refl = $refl->getParentClass();
        }

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
