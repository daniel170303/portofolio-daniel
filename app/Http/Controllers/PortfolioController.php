<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $projects = [
        [
            'title' => 'One Gym',
            'description' => 'Pembuatan situs web tentang GYM untuk pelanggan, serta sistem manajemen untuk Admin. Dibuat menggunakan Laravel sebagai Front End dan juga Laravel API sebagai Backend. Situs web ini dibuat untuk memudahkan pengguna untuk mendaftar Membership dan dapat melihat berbagai jenis penawaran yang ada dalam situs web ONE GYM.',
            'images' => ['/images/projects/OneGym.jpeg', '/images/projects/OneGym2.jpeg'],
            'github_link' => 'https://github.com/danielpascalis/one-gym',
            'demo_link' => 'https://demo.one-gym.com',
            'duration' => 'Agu 2024 - Des 2024',
            'institution' => 'Universitas Atma Jaya Yogyakarta'
        ],
        [
            'title' => 'Lika Liku Laki',
            'description' => 'Mengembangkan game visual novel interaktif "Lika Liku Laki" menggunakan Unity dengan bahasa pemrograman C#. Berfokus pada pembuatan scene awal, sistem dialog interaktif, serta alur cerita bercabang yang menghasilkan ending berbeda.',
            'images' => ['/images/projects/ProyekGame.jpeg'],
            'github_link' => 'https://github.com/danielpascalis/lika-liku-laki',
            'demo_link' => 'https://demo.lika-liku-laki.com',
            'duration' => 'Mei 2024 - Mei 2024',
            'institution' => 'Universitas Atma Jaya Yogyakarta'
        ]
    ];

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects', ['projects' => $this->projects]);
    }

    public function contact()
    {
        return view('contact');
    }
}
