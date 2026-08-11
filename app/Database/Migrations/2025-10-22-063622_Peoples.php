<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peoples extends Migration{
                 // Method up utk membuat skema tabel didlm database
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                // 'constraint' utk menentukn panjang karakter yg dpt di simpan pd suatu field
                // 'constraint'     => 5,
                // 'unsigned' utk menentukn nilai yg disimpan hanya positif
                'unsigned'=>true,
                'auto_increment'=>true,
            ],
            'name'=>[
                'type'       => 'TEXT'/*,
                'constraint' => '100',*/
            ],
            'address'=>[
                'type'=>'TEXT'/*,
                'null' => true,*/
            ],
            'created_at'=>[
                'type'=>'DATETIME',
                'null'=>true
            ],
            'updated_at'=>[
                'type'=>'DATETIME',
                'null'=>true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('peoples');
    }
                 // Method down utk menghapus tabel didlm database
    public function down(){
        $this->forge->dropTable('peoples');
    }
}