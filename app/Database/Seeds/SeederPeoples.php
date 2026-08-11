<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;

class SeederPeoples extends Seeder{
    public function run(){
        $faker = Factory::create('id_ID');

        $data=[
            [
                'name'=>'William Lutfir',
                'address'=>'Jl. Tirta Kencana, Hutan, Percut Sei Tuan, Kab. Deli Serdang, Sumatera Utara, 20371',
                'created_at'=>Time::now('Asia/Jakarta','id_ID'),
                'updated_at'=>Time::now('Asia/Jakarta','id_ID')
            ],
            [
                'name'=>'Rahman Harjo',
                'address'=>'Jl. M. Yakub No.182 Medan Perjuangan, Kota Medan, Sumatera Utara, 20233',
                'created_at'=>Time::now('Asia/Jakarta','id_ID'),
                'updated_at'=>Time::now('Asia/Jakarta','id_ID')
            ],
        ];
        // Simple Queries
        // $this->db->query('INSERT INTO peoples (name, address, created_at, updated_at) VALUES(:name:, :address:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
                                   //Method insert() hanya 1 record
        // $this->db->table('peoples')->insert($data);
        $this->db->table('peoples')->insertBatch($data);

        for($i=0;$i<20;$i+=1){
            $data=[
                'name'=>$faker->name(),
                'address'=>$faker->address(),
                'created_at'=>Time::createFromTimestamp($faker->unixTime()),
                'updated_at'=>Time::now('Asia/Jakarta','id_ID')
            ];
            $this->db->table('peoples')->insert($data);
        }
    }
}