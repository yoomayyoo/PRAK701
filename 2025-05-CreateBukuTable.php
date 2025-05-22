<?php 
 
namespace App\Database\Migrations; 
use CodeIgniter\Database\Migration; 
 
class CreateBukuTable extends Migration { 
    public function up() 
    { 
        $this->forge->addField([ 
            'id_buku' => ['type' => 'INT', 'auto_increment' => true], 
            'judul' => ['type' => 'VARCHAR', 'constraint' => 255], 
            'penulis' => ['type' => 'VARCHAR', 'constraint' => 255], 
            'penerbit' => ['type' => 'VARCHAR', 'constraint' => 255], 
            'tahun_terbit' => ['type' => 'INT'], 
            'created_at' => ['type' => 'DATETIME', 'null' => true], 
            'updated_at' => ['type' => 'DATETIME', 'null' => true], 
        ]); 
        $this->forge->addKey('id_buku', true); 
        $this->forge->createTable('buku'); 
    } 
 
    public function down() 
    { 
        $this->forge->dropTable('buku'); 
    } 
} 