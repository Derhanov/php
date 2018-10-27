<?php

namespace App;

use App\CreateTable;

class ResultTable extends CreateTable {

	private $timeLap;
	private $timeFail;


	public function __construct($data) {
		parent::__construct($data);
		// random time
	}

	public function randomTimeLap() {
		$this->timeLap = mt_rand( 0, 1 ) . ":" . str_pad( mt_rand( 30, 59 ), 2, "0", STR_PAD_LEFT );
		return $this->timeLap;
	}

	public function randomTimePenalty() {
		$this->timeFail = mt_rand( 0, 0 ) . ":" . str_pad( mt_rand( 4, 20 ), 2, "0", STR_PAD_LEFT );
		return $this->timeFail;
	}



//penalty_1


}