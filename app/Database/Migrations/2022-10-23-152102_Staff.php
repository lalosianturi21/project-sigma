<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Staff extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'namapengguna' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'umur' => [
                'type' => 'int',
                'constraint' => 255
            ],
            'profesi' => [
                'type' => 'varchar',
                'constraint' => 255
            ]
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('staff', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('staff');
    }
}
