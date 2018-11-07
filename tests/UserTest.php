<?php

namespace Tests;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../data/database.php';

use App\User;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase {
	public function testUser() {
		$user = new User();
	}

	public function testEmpty() {
		$stack = [];
		$this->assertEmpty( $stack );
		return $stack;
	}

	public function testTrueAssetsToTrue() {
		$condition = true;
		$this->assertTrue( $condition );
	}



}