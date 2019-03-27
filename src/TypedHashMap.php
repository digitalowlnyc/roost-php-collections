<?php
/**
 * Creator: Bryan Mayor
 * Company: Blue Nest Digital, LLC
 * License: (Blue Nest Digital LLC, All rights reserved)
 * Copyright: Copyright 2017 Blue Nest Digital LLC
 */

namespace Roost\Collections;

class TypedHashMap extends HashMap
{
	private $keyType;

	function __construct($keyType) {
		$this->keyType = $keyType;
	}

	function checkKey($key) {
		if(gettype($key) !== $this->keyType) {
			throw new \RuntimeException("Key must be of type: " . $this->keyType);
		}
	}

	function put($key, $val) {
		$this->checkKey($key);
        $this->hashMap[$key] = $val;
    }

    function append($key, $val) {
		$this->checkKey($key);
        if(!array_key_exists($key, $this->hashMap)) {
            $this->hashMap[$key] = [];
        }

        $this->hashMap[$key][] = $val;
    }

    function get($key) {
		$this->checkKey($key);
        if(!arrayKeyExists($key, $this->hashMap)) {
            return null;
        }
        return $this->hashMap[$key];
    }

    function contains($key) {
		$this->checkKey($key);
        return arrayKeyExists($key, $this->hashMap);
    }

    function putIntoArray($key, $val) {
		$this->checkKey($key);

        if(!arrayKeyExists($key, $this->hashMap)) {
            $this->hashMap[$key] = [];
        }

        $this->hashMap[$key][] = $val;
    }
}
