<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterLingkupLayananTable extends Migration
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
            'category_id' => [
                'type' => 'INT',
                'constraint' => 5
            ],
            'layanan_title' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => "TIMESTAMP",
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('master_lingkup_layanan');
    }

    public function down()
    {
        $this->forge->dropTable('master_lingkup_layanan');
    }
}
