<?php
/**
 * Creator: Bryan Mayor
 * Company: Blue Nest Digital, LLC
 * License: (Blue Nest Digital LLC, All rights reserved)
 * Copyright: Copyright 2017 Blue Nest Digital LLC
 */

namespace Roost\Collections;

class HashSet extends HashMap implements \Iterator
{
    private $hashMap = [];

    function put($key, $val) {
        throw new \Exception("Unsupported");
    }

    function add($key) {
        if(!parent::contains($key)) {
            parent::put($key, true);
        }
    }

    function addAll($keys) {
        foreach($keys as $key) {
            $this->add($key);
        }
    }

    function values() {
        return array_keys(parent::values());
    }
}