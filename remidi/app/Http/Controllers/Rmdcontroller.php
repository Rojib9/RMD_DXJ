<?php
//ripjjkddakkndfkhs
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rmdcontroller extends Controller
{
    public function home()
    {
        $data=[
            ['id' => 1,'nama' => 'universitas bumigora','deskripsi'=>'Terkenal Akan Jurusan Kmoputernya yang tiada duanya, selalu memenangi kejuaraan komputer di daerah NTB','foto' => 'ubgg.jpg'],
            ['id' => 2,'nama' => 'universitas mataram','deskripsi'=>'Unram saat ini menjadi salah satu perguruan tinggi negeri unggul dengan peningkatan kualitas penyelenggaraan pendidikan yang signifikan.','foto' => 'unram.jpeg'],
            ['id' => 3,'nama' => 'UIN (State Islamic University of Mataram)','deskripsi'=>' perguruan tinggi Islam negeri di Indonesia yang menyelenggarakan pendidikan akademik pada sejumlah disiplin ilmu pengetahuan, termasuk ilmu pengetahuan di luar Studi keislaman,','foto' => 'UIN.jpg'],
            ['id' => 4,'nama' => 'Undikma (Universitas Pendidikan Mandalika)','deskripsi'=>'Institut Keguruan dan Ilmu Pendidikan Mataram yang kini menjadi Universitas Pendidikan Mandalika sejak 2019.','foto' => 'undikma.jpg'],
            ['id' => 5,'nama' => 'Universitas Nahdlatul Wathan Mataram','deskripsi'=>'Perguruan tinggi swasta terbesar di NTB di bawah organisasi Nahdlatul Wathan.','foto' => 'unw.jpg'],
            ['id' => 6,'nama' => 'Unizar (Universitas Islam Al-Azhar)','deskripsi'=>'Salah satu perguruan tinggi Islam swasta unggulan di Nusa Tenggara Barat yang mencetak pemimpin berlandaskan Pancasila dan UUD 1945.','foto' => 'unizar.webp'],
        ];
        return view('home', compact('data'));
    }

  public function post($id)
    {
        // seperti di home tapi untuk post
        $data = [
         1=>['id' => 1,'nama' => 'universitas bumigora','deskripsi'=>'Terkenal Akan Jurusan Kmoputernya yang tiada duanya, selalu memenangi kejuaraan komputer di daerah NTB','foto' => 'ubgg.jpg'],
         2=>['id' => 2,'nama' => 'universitas mataram','deskripsi'=>'Unram saat ini menjadi salah satu perguruan tinggi negeri unggul dengan peningkatan kualitas penyelenggaraan pendidikan yang signifikan.','foto' => 'unram.jpeg'],
         3=>['id' => 3,'nama' => 'UIN (State Islamic University of Mataram)','deskripsi'=>' perguruan tinggi Islam negeri di Indonesia yang menyelenggarakan pendidikan akademik pada sejumlah disiplin ilmu pengetahuan, termasuk ilmu pengetahuan di luar Studi keislaman,','foto' => 'UIN.jpg'],
         4=>['id' => 4,'nama' => 'Undikma (Universitas Pendidikan Mandalika)','deskripsi'=>'Institut Keguruan dan Ilmu Pendidikan Mataram yang kini menjadi Universitas Pendidikan Mandalika sejak 2019.','foto' => 'undikma.jpg'],
         5=>['id' => 5,'nama' => 'Universitas Nahdlatul Wathan Mataram','deskripsi'=>'Perguruan tinggi swasta terbesar di NTB di bawah organisasi Nahdlatul Wathan.','foto' => 'unw.jpg'],
         6=>['id' => 6,'nama' => 'Unizar (Universitas Islam Al-Azhar)','deskripsi'=>'Salah satu perguruan tinggi Islam swasta unggulan di Nusa Tenggara Barat yang mencetak pemimpin berlandaskan Pancasila dan UUD 1945.','foto' => 'unizar.webp'],
        ];

        // Cek apakah ID ada
        if (!isset($data[$id])) {
            abort(404, 'Data tidak ditemukan');
        }

        $post = $data[$id];

        return view('post', compact('post'));
    }

    Public function about()
    {
        return view('about');
    }

}
