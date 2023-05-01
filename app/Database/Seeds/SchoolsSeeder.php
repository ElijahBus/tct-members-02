<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SchoolsSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('schools')->truncate();

        $this->db->table('schools')->insertBatch(
            [
                ['name' => 'Super Awesome school'],
                ['name' => 'The Best In Two Edu'],
                ['name' => 'Fly Eagle Nursery'],
            ]
        );

    }
}
