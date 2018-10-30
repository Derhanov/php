<?php

namespace App\Service;


class SortArray {

	public function multiSortArr( $arr, $par1, $par2  ) {
		$sortArray1 = array();
		$sortArray2 = array();

		foreach ( $arr as $item ) {
			foreach ( $item as $key => $value ) {
//				if ( ! isset( $sortArray[ $key ] ) ) {
//					$sortArray[ $key ] = array();
//				}
				$sortArray1[ $key ][] = $value;
				$sortArray2[ $key ][] = $value;
			}
		}
		$orderBy = $par1;
		$orderBy2 = $par2;
		array_multisort(
			$sortArray1[ $orderBy ], SORT_ASC
			, $sortArray2[ $orderBy2 ], SORT_ASC, $arr
		);
		return $arr;

	}
}