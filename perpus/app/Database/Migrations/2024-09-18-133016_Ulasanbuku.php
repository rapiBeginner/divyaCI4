<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ulasanbuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'UlasanID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'UserID' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'Ulasan' => [
                'type' => 'TEXT',
            ],
            'TanggalPengembalian' => [
                'type' => 'date',
            ],
            'StatusPeminjaman' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addkey('UlasanID', true);
        $this->forge->createTable('Ulasanbuku');

    }

    public function down()
    {
        $this->forge->dropTable('Ulasanbuku');
    }
}
