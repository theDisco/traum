<?php

namespace Traum;

/**
 * Class Collection
 *
 * @package Traum
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
abstract class Collection implements \Iterator
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var int
     */
    private $pointer = 0;

    /**
     * Collection constructor.
     *
     * @param array $data
     * @param bool  $embedded
     */
    public function __construct(array $data, $embedded = true)
    {
        if (!$embedded) {
            $data = [
                '_embedded' => [
                    $this->collection() => $data
                ]
            ];
        }

        $this->data = $data;
    }

    /**
     * @param  array $data
     * @return static
     */
    public static function fromArray(array $data)
    {
        return new static($data, false);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed|Entity
     */
    public function current()
    {
        $data = $this->data['_embedded'][$this->collection()][$this->pointer];

        return $this->createEntity($data);
    }

    /**
     *
     */
    public function next()
    {
        // TODO add support for pagination
        ++$this->pointer;
    }

    /**
     * @return bool|float|int|string|null
     */
    public function key()
    {
        return $this->pointer;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return array_key_exists($this->pointer, $this->data['_embedded'][$this->collection()]);
    }

    /**
     *
     */
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
     *
     * @return \Traum\Entity
     */
    abstract protected function createEntity(array $data);
}
