<?php

namespace Traum;

/**
 * Class Transformer
 * @package Traum
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
abstract class Transformer
{
    /**
     * @var array
     */
    private $fields;

    /**
     * @param $name
     * @param $value
     * @param $type
     */
    protected function addField($name, $value, $type)
    {
        if (is_null($value)) {
            return;
        }
        $this->fields[$name] = $this->normalize($value, $type);
    }

    /**
     * @return array
     */
    protected function getFields()
    {
        return $this->fields;
    }

    /**
     * @param $value
     * @param $type
     * @return bool|int|string
     */
    private function normalize($value, $type)
    {
        if ($type == 'int') {
            return (int) $value;
        } elseif ($type == 'string') {
            return (string) $value;
        } elseif ($type == 'bool') {
            return (bool) $value;
        }

        throw new \RuntimeException("Unrecognized type `$type`");
    }
}

