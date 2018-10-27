<?php


namespace App;


class CreateTable {

//	public function __construct($name, $class, $id ) {
//		$this->name = $name;
//		$this->class = $class;
//		$this->id = $id;
//	}

	public function __construct( $data ) {
		$this->data = $data;
	}

	public function sortArr( $arr, $string ) {
		$sortArray = array();

		foreach ( $arr as $item ) {
			foreach ( $item as $key => $value ) {
				if ( ! isset( $sortArray[ $key ] ) ) {
					$sortArray[ $key ] = array();
				}
				$sortArray[ $key ][] = $value;
			}
		}
		$orderBy = $string;
		array_multisort( $sortArray[ $orderBy ], SORT_ASC, $arr );

		return $arr;
	}

	public function startTable( $data ) {

	}
}

;


