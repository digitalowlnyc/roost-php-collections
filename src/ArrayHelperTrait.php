<?php
/**
 * Creator: Bryan Mayor
 * Company: Blue Nest Digital, LLC
 * License: (Blue Nest Digital LLC, All rights reserved)
 * Copyright: Copyright 2020 Blue Nest Digital LLC
 */

namespace Roost\Collections;

trait ArrayHelperTrait {
	function arrayKeyExists($key, $arr) {
		if(array_key_exists($key, $arr)) {
			return true;
		}
		if($arr instanceof \ArrayAccess) {
			return $arr->offsetExists($key);
		}

		return false;
	}
}