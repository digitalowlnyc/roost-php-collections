<?php
/**
 * Creator: Bryan Mayor
 * Company: Blue Nest Digital, LLC
 * License: (Blue Nest Digital LLC, All rights reserved)
 * Copyright: Copyright 2017 Blue Nest Digital LLC
 */

namespace Roost\Collections;

class CounterHashMap extends HashMap implements \Iterator
{
    function increment($key) {
        if(!$this->contains($key)) {
            $this->put($key, 1);
        } else {
            $this->put($key, $this->get($key) + 1);
        }
    }
}