<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../data/database.php';

use App\User;
use App\CreateTable;

$users = [];
foreach ( $database as $dataUser ) {
	$user          = new User();
	$user->id      = $dataUser['id'];
	$user->class   = $dataUser['class'];
	$user->name    = $dataUser['name'];
	$user->vehicle = $dataUser['vehicle'];
	$users[]       = $user;
}

$table        = new CreateTable( $users );
$par          = 'class';
$par2         = 'id';
$sortTableData = $table->multiSortArr( $users, $par, $par2 );

if ( $sortTableData ) {
	echo '<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">class</th>
      <th scope="col">name</th>
      <th scope="col">vehicle</th>
    </tr>
  </thead>
  <tbody>';
	foreach ( $sortTableData as $user ) {
		echo '<tr>';
		echo '<td>' . $user->id . '</td>';
		echo '<td>' . $user->class . '</td>';
		echo '<td>' . $user->name . '</td>';
		echo '<td>' . $user->vehicle . '</td>';
		echo '</tr>';
	}
	echo '</tbody >';
	echo '</table >';
}

