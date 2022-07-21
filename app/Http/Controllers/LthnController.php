<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LthnController extends Controller
{
    public function hallo()
        {
            $f = 1;
            $total = $f * 100;
            if($total >= 1000){
                return'Diatas Seribu';
            }else{
                return'Di Bawah Seribu';                
            }
            
        }

        public function profile()
        {
            return view('profile');
        }

        public function perkalian($perkalian, $nama)
        {
            $calculator = 1 + 5;
        $hasilperkalian = $calculator * $perkalian;
        $jk = 10;
        return view('about',compact('nama','hasilperkalian','jk'));
        }

        public function berat_badan($berat, $tinggi)
        {
            $bmi1 = $tinggi / 100;
            $bmi2 = $berat / ($bmi1 * $bmi1); 
            return view ('pages.berat_badan', compact('bmi2', 'berat', 'tinggi'));
        }

        public function siswa()
        {
            $a = [
                array('id' =>1, 'nama' => 'dadang','age' =>15, 
                    'hobi' => [
                    'mancing','futsal','push renk'
                ]),
                array('id' =>2, 'nama' => 'dudung', 'age' =>18,
                'hobi' => [
                    'ngurek','badminton','sunmori'
                ]),
            ];
            //dd($a),
            return view('pages.siswa', ['siswa' => $a]);
        }

        
//latihan
        public function kampus(){
            $dosen = [
                
                array('id' =>1, 'nama' => 'dadang','age' =>10001,
                'siswa' => 'ujang', 'nik' =>9001,'jurusan' => 'RPL',
                'mata_kuliah' => [
                    'MTK','IPS','PPKN'
                ],
                
            ),
                array('id' =>2, 'nama' => 'iyus','age' =>10002,
                'siswa' => 'Bedul', 'nik' =>9002,'jurusan' => 'RPL',
                'mata_kuliah' => [
                    'MTK','IPS','PPKN'
                ],
                
            ),
                array('id' =>3, 'nama' => 'jeje','age' =>10003,
                'siswa' => 'Ubed', 'nik' =>9003,'jurusan' => 'RPL',
                'mata_kuliah' => [
                    'MTK','IPS','PPKN'
                ],
                
            ),
            ];
            return view('pages.kampus', ['kampus' => $dosen]);
        }
        //latihan3
        public function kelas(){
            $b =[
                [
                    'nama' => 'Agus',
                    'jurusan' => 'TKR',
                    'mapel'=> [
                        [
                        
                            'pelajaran' => 'B.Indonesia',
                            'nilai' => 80,
                            
                        ],
                        [
                        
                            'pelajaran' => 'B.Inggris',
                            'nilai' => 97,
                            
                        ],[
                        
                            'pelajaran' => 'Produktif',
                            'nilai' => 67,
                            
                        ],[
                        
                            'pelajaran' => 'Matematika',
                            'nilai' => 100,
                            
                       ],
                    ],
                ],
                [
                    'nama' => 'Mahmud',
                    'jurusan' => 'TKR',
                    'mapel'=> [
                        [
                        
                            'pelajaran' => 'B.Indonesia',
                            'nilai' => 78,
                            
                        ],
                        [
                        
                            'pelajaran' => 'B.Inggris',
                            'nilai' => 86,
                            
                        ],[
                        
                            'pelajaran' => 'Produktif',
                            'nilai' => 90,
                            
                        ],[
                        
                            'pelajaran' => 'Matematika',
                            'nilai' => 67,
                            
                       ],
                    ],
                ],
                [
                    'nama' => 'Rendi',
                    'jurusan' => 'TBSM',
                    'mapel'=> [
                        [
                        
                            'pelajaran' => 'B.Indonesia',
                            'nilai' => 90,
                            
                        ],
                        [
                        
                            'pelajaran' => 'B.Inggris',
                            'nilai' => 50,
                            
                        ],[
                        
                            'pelajaran' => 'Produktif',
                            'nilai' => 65,
                            
                        ],[
                        
                            'pelajaran' => 'Matematika',
                            'nilai' => 78,
                            
                       ],
                    ],
                ],
                [
                    'nama' => 'Firman',
                    'jurusan' => 'TBSM',
                    'mapel'=> [
                        [
                        
                            'pelajaran' => 'B.Indonesia',
                            'nilai' => 78,
                            
                        ],
                        [
                        
                            'pelajaran' => 'B.Inggris',
                            'nilai' => 90,
                            
                        ],[
                        
                            'pelajaran' => 'Produktif',
                            'nilai' => 56,
                            
                        ],[
                        
                            'pelajaran' => 'Matematika',
                            'nilai' => 78,
                            
                       ],
                    ],
                ],
                [
                    'nama' => 'Abdul',
                    'jurusan' => 'TKR',
                    'mapel'=> [
                        [
                        
                            'pelajaran' => 'B.Indonesia',
                            'nilai' => 89,
                            
                        ],
                        [
                        
                            'pelajaran' => 'B.Inggris',
                            'nilai' => 67,
                            
                        ],[
                        
                            'pelajaran' => 'Produktif',
                            'nilai' => 80,
                            
                        ],[
                        
                            'pelajaran' => 'Matematika',
                            'nilai' => 90,
                            
                       ],
                    ],
                ],   
            ];
            return view('pages.kelas', ['kelas' => $b]);
        }

        //belalanja
        public function belanja(){
            $c = [
                [
                    'nama' => 'Alfian',
                    'belanja' => [
                        ['produk' => 'sepatu', 'harga' => 250000],
                        ['produk' => 'baju', 'harga' => 100000],
                        ['produk' => 'celana', 'harga' => 150000],
                        ['produk' => 'jaket', 'harga' => 100000]
                    ]
                    ],

                    [
                        'nama' => 'dida',
                    'belanja' => [
                        ['produk' => 'topi', 'harga' => 100000],
                        ['produk' => 'baju', 'harga' => 750000],
                        ['produk' => 'celana', 'harga' => 125000]
                    ]
                ]
            ];
            //($belanja);
            return view('pages.belanja', ['belanja' => $c]);
        }
}


