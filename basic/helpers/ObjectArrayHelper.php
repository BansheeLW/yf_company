<?php

namespace app\helpers;

/**
 * Description of ObjectArrayHelper
 *
 * @author yangxs
 */
class ObjectArrayHelper {

    /**
     * 提取对象数组，获取数组中所有对象某一属性的值，组成数组
     * @param array $objectArr
     * @param string $propertyName
     * @return array
     */
    public static function array_column($objectArr, $propertyName) {
        $result = [];
        if (is_array($objectArr) === false || count($objectArr) < 1) {
            return $result;
        }
        foreach ($objectArr as $object) {
            if (isset($object->$propertyName)) {
                $result[] = $object->$propertyName;
            } elseif (isset($object[$propertyName])) {
                $result[] = $object[$propertyName];
            } else {
                $result[] = null;
            }
        }
        return $result;
    }

    /**
     * 把关联数组转化成对象，传入的目标对象或者类名称无效时返回null
     * @param array $accosArray 源数组
     * @param mixed 目标类名称或者目标对象
     * @return mixed object or null
     */
    public static function accosArrayToObject($accosArray, $class) {
        $targetObject = $class;
        if (is_string($class) && class_exists($class)) {
            $targetObject = new $class();
        }
        if (!is_object($targetObject) || empty($accosArray)) {
            return null;
        }
        foreach ($accosArray as $key => $value) {
            if (self::existsProperty($targetObject, $key)) {
                $targetObject->$key = $value;
            }
        }
        return $targetObject;
    }

    /**
     * 把源对象转化成目标对象
     * @param mixed $sourceObject 源对象
     * @param mixed $targetClass 目标类名称或者目标对象
     * @param array $excludeAttributes 排除的赋值字段名称
     * @return mixed object or null
     */
    public static function objectToObject($sourceObject, $targetClass, $excludeAttributes = []) {
        if (!is_object($sourceObject)) {
            return null;
        }
        $targetObject = $targetClass;
        if (is_string($targetClass) && class_exists($targetClass)) {
            $targetObject = new $targetClass();
        }
        if (!is_object($targetObject)) {
            return null;
        }
        $sourceAccosArray = get_object_vars($sourceObject);
        foreach ($sourceAccosArray as $key => $value) {
            if (self::existsProperty($targetObject, $key) && !in_array($key, $excludeAttributes)) {
                $targetObject->$key = $value;
            }
        }
        return $targetObject;
    }

    /**
     * 判断字段在对象中是否存在，包含的AR/Object的判断
     * @param \yii\db\ActiveRecord $targetObject
     * @param string $key
     * @return bool
     */
    private static function existsProperty($targetObject, $key) {
        if ($targetObject instanceof \yii\db\ActiveRecord) {
            if ($targetObject->hasAttribute($key)) {
                return true;
            }
        }

        if ($targetObject instanceof \yii\base\Object) {
            return $targetObject->hasProperty($key);
        } else {
            return property_exists($targetObject, $key);
        }
    }

}
