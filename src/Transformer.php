<?php

namespace Traum;

use League\Fractal\TransformerAbstract;

/**
 * Class Transformer
 *
 * @package Traum
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
abstract class Transformer extends TransformerAbstract
{
    /**
     * @var array
     */
    private $fields;

    /**
     * @param string                      $name
     * @param bool|int|string|double|null $value
     * @param string                      $type
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
     * @return void
     */
    protected function resetFields()
    {
        $this->fields = [];
    }

    /**
     * @param string                 $value
     * @param bool|int|string|double $type
     *
     * @return bool|int|string|double
     */
    private function normalize($value, $type)
    {
        if ($type == 'int') {
            return (int)$value;
        } elseif ($type == 'string') {
            return (string)$value;
        } elseif ($type == 'bool') {
            return (bool)$value;
        } elseif ($type == 'double') {
            return (double)$value;
        }

        throw new \RuntimeException("Unrecognized type `$type`");
    }
}
