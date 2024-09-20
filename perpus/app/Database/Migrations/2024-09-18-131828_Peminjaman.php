<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        // Menghapus tabel 'peminjaman' jika sudah ada sebelumnya
        $this->forge->dropTable('peminjaman', true);

        // Membuat struktur tabel 'peminjaman'
        $this->forge->addField([
            'peminjamanID' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'UserID' => [
                'type'       => 'INT',
                'unsigned'   => true, // Tambahkan jika ini foreign key
                'null'       => false,
            ],
            'BukuID' => [
                'type'       => 'INT',
                'unsigned'   => true, // Tambahkan jika ini foreign key
                'null'       => false,
            ],
            'TanggalPeminjaman' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'TanggalPengembalian' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'StatusPeminjaman' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => false,
            ],
        ]);

        // Menambahkan primary key
        $this->forge->addKey('peminjamanID', true);

        // Buat tabel 'peminjaman'
        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        // Menghapus tabel 'peminjaman' jika rollback dilakukan
        $this->forge->dropTable('peminjaman');
    }
}
