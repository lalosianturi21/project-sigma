<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNomorTelepon extends Migration
{
    public function up()
    {
        $this->forge->addColumn('items', [
            'nomor_telepon' => [
                'type'          => 'int',
                'constraint'    => '255'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('items', 'nomor_telepon');
    }
}
