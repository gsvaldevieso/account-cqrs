<?php

namespace Bank\Drivers;

interface KeyValueDatabase
{
    /**
     * @param string $key
     * @param        $value
     * @return void
     */
    public function set(string $key, $value): void;


    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key): mixed;
}
