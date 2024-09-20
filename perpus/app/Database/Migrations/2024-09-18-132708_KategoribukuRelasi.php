<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoribukuRelasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KategoriBukuID' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'BukuID' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    // 'auto_increment' => true,
                ],
            'KategoriID' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    // 'auto_increment' => true,
            ],

            ]);
            $this->forge->addkey('KategoriBukuID', true);
            $this->forge->createTable('KategoribukuRelasi');
        //
    }

    public function down()
    {
        $this->forge->dropTabel('KategoribukuRelasi');
        //
    }
}
