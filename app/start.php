<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../data/database.php';

use App\User;
use App\CreateTable;
use App\Service\SortArray;

$users = [];
foreach ( $database as $dataUser ) {
	$user          = new User();
	$user->id      = $dataUser['id'];
	$user->class   = $dataUser['class'];
	$user->name    = $dataUser['name'];
	$user->vehicle = $dataUser['vehicle'];
	$users[]       = $user;
}

$sortUsers     = new SortArray();
$par           = 'class';
$par2          = 'name';
$sortTableData = $sortUsers->multiSortArr( $users, $par, $par2 );

if ( $sortTableData ) {
	$table = new CreateTable();
	$table->createTable( $sortTableData );
}


