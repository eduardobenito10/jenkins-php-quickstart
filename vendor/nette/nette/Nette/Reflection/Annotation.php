<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

namespace Nette\Reflection;

use Nette;


/**
 * Basic annotation implementation.
 *
 * @author     David Grudl
 */
class Annotation extends Nette\Object implements IAnnotation
{

	public function __construct(array $values)
	{
		foreach ($values as $k => $v) {
			$this->$k = $v;
		}
	}


	/**
	 * Returns default annotation.
	 * @return string
	 */
	public function __toString()
	{
		return $this->value;
	}

}
