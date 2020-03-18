<?php

namespace Traum;

/**
 * Class Entity
 *
 * @package Traum
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
abstract class Entity
{
    /**
     * @var array
     */
    private $data;

    /**
     * Entity constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    protected function getData($name)
    {
        return array_key_exists($name, $this->data) ? $this->data[$name] : null;
    }

    /**
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    protected function setData($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @return array
     */
    public function getRawData()
    {
        return $this->data;
    }
}
