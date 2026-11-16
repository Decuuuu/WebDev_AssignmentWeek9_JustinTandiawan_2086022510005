<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. 10 Data untuk Tabel PROFILES (Baris 1 tetap profil utamamu + 9 fokus keahlian portofolio)
        DB::table('profiles')->truncate();
        DB::table('profiles')->insert([
            [
                'name' => 'Justin Tandiawan',
                'role' => 'Informatics Student & Full-Stack Developer',
                'bio' => 'Membangun solusi digital yang elegan, efisien, dan responsif. Berfokus pada pengembangan aplikasi mobile dan web dengan arsitektur perangkat lunak yang kokoh.',
            ],
            [
                'name' => 'Justin Tandiawan — Mobile Dev',
                'role' => 'Flutter & Dart Specialist',
                'bio' => 'Merancang antarmuka mobile multi-screen yang responsif dengan manajemen state yang terstruktur.',
            ],
            [
                'name' => 'Justin Tandiawan — Backend Dev',
                'role' => 'Java & Spring Boot Engineer',
                'bio' => 'Mengembangkan logika bisnis sisi server, integrasi REST API, dan pemrograman berorientasi objek.',
            ],
            [
                'name' => 'Justin Tandiawan — Web Dev',
                'role' => 'Laravel MVC & Tailwind Builder',
                'bio' => 'Membangun aplikasi web dinamis berbasis pola Model-View-Controller dengan desain minimalis modern.',
            ],
            [
                'name' => 'Justin Tandiawan — Software Architect',
                'role' => 'MVVM & Clean Code Practitioner',
                'bio' => 'Memisahkan lapisan UI, logika bisnis, dan repositori data agar aplikasi mudah dirawat dan dikembangkan.',
            ],
            [
                'name' => 'Justin Tandiawan — Database Designer',
                'role' => 'MySQL & SQLite Data Modeling',
                'bio' => 'Menyusun skema tabel relasional, migrasi database, dan pengelolaan data terstruktur yang efisien.',
            ],
            [
                'name' => 'Justin Tandiawan — UI/UX Enthusiast',
                'role' => 'Minimalist & Monochrome Design',
                'bio' => 'Menerapkan tata letak bersih, tipografi jelas, dan pengalaman pengguna yang intuitif di setiap layar.',
            ],
            [
                'name' => 'Justin Tandiawan — IoT & Systems',
                'role' => 'OOP & Hardware Simulation',
                'bio' => 'Mengimplementasikan abstraksi, enkapsulasi, dan polimorfisme untuk simulasi kontrol perangkat pintar.',
            ],
            [
                'name' => 'Justin Tandiawan — Network Learner',
                'role' => 'Subnetting & Topology Design',
                'bio' => 'Merancang pengalamatan IP, perhitungan CIDR, serta simulasi topologi jaringan komputer.',
            ],
            [
                'name' => 'Justin Tandiawan — Tech Collaborator',
                'role' => 'Git Workflow & Team Leadership',
                'bio' => 'Mengelola repositori kode versi terdistribusi dan memimpin koordinasi tim dalam pengembangan proyek.',
            ],
        ]);

        // 2. 10 Data untuk Tabel SKILLS (Halaman About)
        DB::table('skills')->truncate();
        DB::table('skills')->insert([
            ['name' => 'Flutter & Dart', 'category' => 'Mobile Development', 'level' => 'Advanced'],
            ['name' => 'Java & Spring Boot', 'category' => 'Backend & OOP', 'level' => 'Intermediate'],
            ['name' => 'Laravel & PHP', 'category' => 'Full-Stack Web', 'level' => 'Intermediate'],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend Styling', 'level' => 'Advanced'],
            ['name' => 'MySQL & SQLite', 'category' => 'Database Management', 'level' => 'Intermediate'],
            ['name' => 'HTML5 & JavaScript', 'category' => 'Web Fundamentals', 'level' => 'Advanced'],
            ['name' => 'Git & GitHub', 'category' => 'Version Control', 'level' => 'Advanced'],
            ['name' => 'C++ Programming', 'category' => 'Algorithms & Logic', 'level' => 'Intermediate'],
            ['name' => 'MVVM Architecture', 'category' => 'Software Design', 'level' => 'Intermediate'],
            ['name' => 'Figma UI/UX', 'category' => 'Interface Design', 'level' => 'Intermediate'],
        ]);

        // 3. 10 Data untuk Tabel PROJECTS (Halaman Blog / Portfolio)
        DB::table('projects')->truncate();
        DB::table('projects')->insert([
            [
                'title' => 'Makan Z Kuy! App',
                'description' => 'Aplikasi pemesanan makanan multi-screen berbasis Flutter dengan tata letak responsif, fitur pencarian menu, dan ringkasan keranjang belanja.',
                'tech_stack' => 'Flutter • Dart',
            ],
            [
                'title' => 'Smart Home Hub Controller',
                'description' => 'Sistem pengendali jaringan perangkat IoT berbasis Java yang mengimplementasikan prinsip OOP, abstract class, dan multiple interfaces.',
                'tech_stack' => 'Java • OOP • IoT',
            ],
            [
                'title' => 'University Library System',
                'description' => 'Aplikasi sistem manajemen perpustakaan berbasis arsitektur MVVM lengkap dengan logika peminjaman, batas waktu pengembalian, dan denda otomatis.',
                'tech_stack' => 'Flutter • Dart • MVVM',
            ],
            [
                'title' => 'Personal Portfolio Web',
                'description' => 'Website portofolio dinamis berbasis pola MVC Laravel dan SQLite dengan antarmuka minimalis responsif.',
                'tech_stack' => 'Laravel • Tailwind CSS • SQLite',
            ],
            [
                'title' => 'Binary Tree Visualizer',
                'description' => 'Implementasi struktur data Full Binary Tree dengan fitur Insertion Sort, BFS, dan berbagai metode traversal.',
                'tech_stack' => 'Java • Gradle • Data Structures',
            ],
            [
                'title' => 'Sistem Kasir Warung Digital',
                'description' => 'Aplikasi pencatatan transaksi harian, manajemen stok barang, dan laporan pemasukan berbasis web.',
                'tech_stack' => 'Spring Boot • Thymeleaf • MySQL',
            ],
            [
                'title' => 'Event & UKM Management Portal',
                'description' => 'Sistem informasi pengelolaan anggota, jadwal latihan rutin, dan rekrutmen kepanitiaan organisasi kampus.',
                'tech_stack' => 'PHP • MySQL • Tailwind CSS',
            ],
            [
                'title' => 'Network Subnet Calculator',
                'description' => 'Alat bantu perhitungan prefix CIDR, alokasi subnet mask, dan simulasi topologi jaringan komputer.',
                'tech_stack' => 'JavaScript • Computer Networking',
            ],
            [
                'title' => '2-Bit Synchronous Counter',
                'description' => 'Perancangan diagram Finite State Machine (FSM) dan analisis Moore state machine untuk rangkaian sistem digital.',
                'tech_stack' => 'Digital Systems • Logic Design',
            ],
            [
                'title' => 'Task & Habit Tracker',
                'description' => 'Aplikasi pencatat produktivitas harian dengan pengelompokan prioritas tugas dan penyimpanan lokal.',
                'tech_stack' => 'Flutter • SQLite',
            ],
        ]);
    }
}