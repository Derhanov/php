<?php

namespace App;


class ResultTable extends CreateTable {

	public $timeLap;
	public $timeFail;
	public $winner;

	public function __construct($data) {
		parent::__construct($data);
	}

	public function randomTimeLap() {
		$this->timeLap = mt_rand( 0, 1 ) . ":" . str_pad( mt_rand( 30, 59 ), 2, "0", STR_PAD_LEFT );
		return $this->timeLap;
	}

	public function randomTimePenalty() {
		$this->timeFail = mt_rand( 0, 0 ) . ":" . str_pad( mt_rand( 4, 20 ), 2, "0", STR_PAD_LEFT );
		return $this->timeFail;
	}

	public function winner($a, $b){
		$this->winner = $a - $b ;
		return $this->winner;
	}

}