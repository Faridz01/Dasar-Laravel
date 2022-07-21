<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['nama' => 'Abdul','nis' => '202202301', 'jenis_kelamin' => 'L',
            'tgl_lahir' => '1998-08-15', 'alamat' => 'Bandung',
            ],
            ['nama' => 'Silvanna','nis' => '202202302', 'jenis_kelamin' => 'P',
            'tgl_lahir' => '1999-11-13', 'alamat' => 'Jakarta',
            ],
        ];
    BD::table('siswas')->insert($sample);
    }
}
