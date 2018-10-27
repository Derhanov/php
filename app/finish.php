<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../data/database.php';
//require_once __DIR__ . '/../src/CreateTable.php';
//require_once __DIR__ . '/../src/Vehicle.php';

//use App\CreateTable;
use App\ResultTable;

$resultTable = new ResultTable( $database );


$sortResultData = $resultTable->sortArr( $database, 'class' );


if ( $sortResultData ) {
	echo '<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">class</th>
      <th scope="col">name</th>
      <th scope="col">lap 1</th>
      <th scope="col">penalty 1</th>
      <th scope="col">lap 2</th>
      <th scope="col">penalty 2</th>
      <th scope="col">vehicle</th>
    </tr>
  </thead>
  <tbody>';
	foreach ( $sortResultData as $data ) {
		$lap = $resultTable->randomTimeLap();
		$penalty = $resultTable->randomTimePenalty();
		echo '<tr>';
		echo '<td>' . $data['id'] . '</td>';
		echo '<td>' . $data['class'] . '</td>';
		echo '<td>' . $data['name'] . '</td>';
		echo '<td>' . $data['lap_1'] = $lap . '</td>';
		echo '<td>' . $data['penalty_1'] = $penalty . '</td>';
		echo '<td>' . $data['lap_2'] = $lap . '</td>';
		echo '<td>' . $data['penalty_1'] = $penalty . '</td>';
		echo '<td>' . $data['vehicle'] . '</td>';
		echo '</tr>';
	}
	echo '</tbody >';
	echo '</table >';
}