<?php

namespace Traum;

/**
 * Class Collection
 * @package Traum
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
abstract class Collection implements \Iterator
{
    private $data;

    private $pointer = 0;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function current()
    {
        $data = $this->data['_embedded'][$this->collection()][$this->pointer];

        return $this->createEntity($data);
    }

    public function next()
    {
        // TODO add support for pagination
        ++$this->pointer;
    }

    public function key()
    {
        return $this->pointer;
    }

    public function valid()
    {
        return array_key_exists($this->pointer, $this->data['_embedded'][$this->collection()]);
    }

    public function rewind()
    {
        $this->pointer = 0;
    }

    /**
     * @return string
     */
    abstract protected function collection();

    /**
     * @param array $data
     * @return \Traum\Entity
     */
    abstract function createEntity(array $data);
}
