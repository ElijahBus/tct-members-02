<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSchoolsTable extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
              'type' => 'INT',
              'constraint' => 10,
              'unsigned' => true,
              'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
        ];

        $this->forge->addKey('id');
        $this->forge->addField($fields);
        $this->forge->createTable('schools');
    }

    public function down()
    {
        $this->forge->dropTable('schools');
    }
}
