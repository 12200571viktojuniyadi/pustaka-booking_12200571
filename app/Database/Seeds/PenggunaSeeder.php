<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Vikto Juniyadi',
                'password'  => md5('12200571')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200571',
                'password'  => md5('viktojuniyadi')
            ],
           
        ];
        $p = new pengguna();
        $p->insertBatch($data);
    }
}
