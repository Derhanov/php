<?php
require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ . '/../data/database.php';
//require_once __DIR__ . '/../src/CreateTable.php';
//require_once __DIR__ . '/../src/Vehicle.php';

use App\Vehicle;
use App\CreateTable;


$table = new CreateTable( $database );
$order = 'class';
$sortDatabase = $table->sortArr($database, $order);

if($sortDatabase) {
	echo '<table class="table">;
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">class</th>
      <th scope="col">name</th>
      <th scope="col">vehicle</th>
    </tr>
  </thead>
  <tbody>';
	foreach ( $sortDatabase as $data ) {
		echo '<tr>';
		echo '<td>' . $data['id'] . '</td>';
		echo '<td>' . $data['class'] . '</td>';
		echo '<td>' . $data['name'] . '</td>';
		echo '<td>' . $data['vehicle'] . '</td>';
		echo '</tr>';
	}
	echo '</tbody >';
    echo  '</table >';
}

