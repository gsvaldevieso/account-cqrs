<?php

namespace Bank\Drivers;

/**
 * Class InMemoryDatabase
 * @package Bank\Drivers
 * @todo    use php in memory here
 */
final class InMemoryDatabase implements KeyValueDatabase
{
    /**
     * @var array
     */
    private $storage = [];


    /**
     * @param string $key
     * @param        $value
     * @return void
     */
    public function set(string $key, $value): void
    {
        $this->storage[$key] = $value;
    }


    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key): mixed
    {
        if (!array_key_exists($key, $this->storage)) {
            return null;
        }

        return $this->storage[$key];
    }
}
