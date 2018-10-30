<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../data/database.php';

use App\ResultTable;
use App\User;
use App\Service\SortArray;

$users = [];
$finalData   = [];
foreach ( $database as $dataUser ) {
	$user          = new User();
	$user->id      = $dataUser['id'];
	$user->class   = $dataUser['class'];
	$user->name    = $dataUser['name'];
	$user->vehicle = $dataUser['vehicle'];
	$users[]       = $user;
}

$resultTable = new ResultTable();

foreach ( $users as $userData ) {
	$lap     = $resultTable->randomTimeLap();
	$penalty = $resultTable->randomTimePenalty();
	$win     = $resultTable->winner( $lap, $penalty );
	$userData->id;
	$userData->class;
	$userData->name;
	$userData->timeLap  = $lap;
	$userData->timeFail = $penalty;
	$userData->timeLap  = $lap;
	$userData->timeFail = $penalty;
	$userData->vehicle;
	$userData->winner = $win;

	$finalData[] = $userData;
}

$sortData = new SortArray();
$par         = 'class';
$par2        = 'winner';
$sortResultTable = $sortData->multiSortArr( $finalData, $par, $par2 );

if ( $sortResultTable ) {
	//Нужно вынести в класс а переменные сделать методами $lap, $penalty, $win
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
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
		echo '<tr>';
		echo '<td>' . $data->id . '</td>';
		echo '<td>' . $data->class . '</td>';
		echo '<td>' . $data->name . '</td>';
		echo '<td>' . $data->timeLap . '</td>';
		echo '<td>' . $data->timeFail . '</td>';
		echo '<td>' . $data->timeLap . '</td>';
		echo '<td>' . $data->timeFail . '</td>';
		echo '<td>' . $data->vehicle . '</td>';
		echo '<td>' . $data->winner . '</td>';
		echo '</tr>';
	}
	echo '</tbody >';
	echo '</table >';
}

