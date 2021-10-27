<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_name' => 'Studi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'category_name' => 'Survey dan Penelitian',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'category_name' => 'Perencanaan Teknis',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'category_name' => 'Supervisi Konstruksi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'category_name' => 'Manajemen Konstruksi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'category_name' => 'Technical Assistant',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];
        
        foreach($data as $key => $item) {
            $this->db->table('category')->insert($item);
        }
    }
}
