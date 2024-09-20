<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Token extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true
      ],
      'token' => [
        'type' => 'TEXT'
      ]
    ]);

    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('token', TRUE);
  }

  public function down()
  {
    $this->forge->dropTable('token');
  }
}
