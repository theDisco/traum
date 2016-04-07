<?php

namespace Traum;

abstract class Transformer
{
    private $fields;

    protected function addField($name, $value, $type)
    {
        if (is_null($value)) {
            return;
        }
        $this->fields[$name] = $this->normalize($value, $type);
    }

    protected function getFields()
    {
        return $this->fields;
    }

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

