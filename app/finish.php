<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../data/database.php';

use App\ResultTable;
use App\User;

$users = [];
$arr = [];
foreach ( $database as $dataUser ) {
	$user          = new User();
	$user->id      = $dataUser['id'];
	$user->class   = $dataUser['class'];
	$user->name    = $dataUser['name'];
	$user->vehicle = $dataUser['vehicle'];
	$users[]       = $user;
}

$resultTable        = new ResultTable( $users );
$par          = 'class';
$par2         = 'id';
$sortResultTable = $resultTable->multiSortArr( $users, $par, $par2 );

//$arr = [];
//$i = 0;

if ( $sortResultTable ) {
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
//	foreach($sortResultData as $data ){
//		foreach(array_keys($data) as $key){
//			$i+=1;

//			array_unique($arr);
//			echo '<td>' . $key . '</td>';
//		}
//	}
	echo '<th scope="col">#</th>';
	echo '<th scope="col">class</th>';
	echo '<th scope="col">name</th>';
	echo '<th scope="col">lap 1</th>';
	echo '<th scope="col">penalty 1</th>';
	echo '<th scope="col">lap 2</th>';
	echo '<th scope="col">penalty 2</th>';
	echo '<th scope="col">vehicle</th>';
	echo '<th scope="col">place</th>';
	echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
  foreach ( $sortResultTable as $data ) {
		$lap     = $resultTable->randomTimeLap();
		$penalty = $resultTable->randomTimePenalty();
		echo '<tr>';
		echo '<td>' . $data->id . '</td>';
		echo '<td>' . $data->class . '</td>';
		echo '<td>' . $data->name. '</td>';
		echo '<td>' . $data->timeLap = $lap . '</td>';
		echo '<td>' . $data->timeFail = $penalty . '</td>';
		echo '<td>' . $data->timeLap = $lap . '</td>';
		echo '<td>' . $data->timeFail = $penalty . '</td>';
		echo '<td>' . $data->vehicle . '</td>';
		echo '</tr>';
//		$arr[]= $data;
	}

	echo '</tbody >';
	echo '</table >';
}
