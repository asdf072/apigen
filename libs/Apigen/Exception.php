<?php

/**
 * ApiGen - API Generator.
 *
 * Copyright (c) 2010 David Grudl (http://davidgrudl.com)
 * Copyright (c) 2011 Ondřej Nešpor (http://andrewsville.cz)
 * Copyright (c) 2011 Jaroslav Hanslík (http://kukulich.cz)
 *
 * This source file is subject to the "Nette license", and/or
 * GPL license. For more information please see http://nette.org
 */

namespace Apigen;

/**
 * ApiGen exception.
 *
 * This is the topmost exception class. Exceptions of this class are caught in the apigen.php script.
 *
 * @author Jaroslav Hanslík
 */
class Exception extends \Exception
{
	/**
	 * Invalid configuration.
	 *
	 * @var integer
	 */
	const INVALID_CONFIG = 1;
}
