<?php


namespace App;


class CreateTable {

	public $data;

	public function __construct( $data ) {
		$this->data = $data;
	}

	public function multiSortArr( $arr, $par1, $par2  ) {
		$sortArray = array();

		foreach ( $arr as $item ) {
			foreach ( $item as $key => $value ) {
				if ( ! isset( $sortArray[ $key ] ) ) {
					$sortArray[ $key ] = array();
				}
				$sortArray[ $key ][] = $value;
			}
		}
		$orderBy = $par1;
		$orderBy2 = $par2;
		array_multisort(
			$sortArray[ $orderBy ], SORT_ASC, $arr ,
			$sortArray[ $orderBy2 ], SORT_ASC, $arr
		);
		return $arr;
	}

}

