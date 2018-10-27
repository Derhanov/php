<?php
require_once __DIR__ . '/../data/database.php';
require_once __DIR__ . '/../src/CreateTable.php';
require_once __DIR__ . '/../src/Vehicle.php';

use App\Vehicle;
use App\CreateTable;

$table = new CreateTable( $database );

if($database) { ?>
<table class="table">;
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">class</th>
      <th scope="col">name</th>
      <th scope="col">vehicle</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ( $database as $data ) { ?>
    <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['class'] ?></td>
        <td><?php echo $data['name'] ?></td>
        <td><?php echo $data['vehicle'] ?></td>
    </tr>
<?php } ?>
</tbody>
</table>
<?php } ?>

