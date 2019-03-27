<?php
/**
 * Creator: Bryan Mayor
 * Company: Blue Nest Digital, LLC
 * License: (Blue Nest Digital LLC, All rights reserved)
 * Copyright: Copyright 2017 Blue Nest Digital LLC
 */

namespace Roost\Collections;

class HashMap implements \Iterator
{
    private $hashMap = [];

    function put($key, $val) {
        $this->hashMap[$key] = $val;
    }

    function get($key) {
        return $this->hashMap[$key];
    }

    function contains($key) {
        return arrayKeyExists($key, $this->hashMap);
    }

    // Append to a key as an array entry
    function append($key, $val) {
        if(!arrayKeyExists($key, $this->hashMap)) {
            $this->hashMap[$key] = [];
        }

        $this->hashMap[$key][] = $val;
    }

    public function rewind() {
        reset($this->hashMap);
    }

    public function current() {
        return current($this->hashMap);
    }

    public function key() {
        return key($this->hashMap);
    }

    public function next() {
        return next($this->hashMap);
    }

    public function valid() {
        $key = key($this->hashMap);
        $var = ($key !== null && $key !== false);
        return $var;
    }

    public function values() {
        return $this->hashMap;
    }
}
