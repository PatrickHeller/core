<?php
/**
 * Copyright (c) 2014 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace OC\Debug;

use OCP\Debug\IQueryLogger;

class DummyQueryLogger implements IQueryLogger {
	/**
	 * @param string $sql
	 * @param array $params
	 * @param array $types
	 */
	public function startQuery($sql, array $params = null, array $types = null) {
	}

	public function stopQuery() {
	}

	/**
	 * @return \OCP\Debug\IQuery[]
	 */
	public function getQueries() {
		return array();
	}
}
