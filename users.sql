-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2021 pada 05.36
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id` int(9) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `dekripsi` varchar(255) NOT NULL,
  `harga` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id`, `judul`, `dekripsi`, `harga`) VALUES
(1, 'Pembuatan Website menggunakan HTML', 'Perluas jangkauan bisnis Anda dengan memasarkan produk dan perusahaan secara online. \r\n                  Dengan memiliki website, bisnis Anda akan mudah dijangkau semua orang yang terhubung ke internet. Gunakan jasa pembuatan website profesional di Fastwo', 300000),
(2, 'Percantik Websitemu dengan CSS', 'HTML dan CSS sudah menjadi bagian tak terpisahkan dari website modern. HTML digunakan untuk membuat konten atau kerangka logis dari halaman web, sedangkan CSS digunakan untuk mengatur tampilan dari website seperti warna background dan font yang digunakan.', 200000),
(3, 'Pembuatan Aplikasi berbasis JAVA!!!', 'Ada keperluan untuk pembuatan aplikasi Android tapi tidak punya skill untuk membuatnya? Jangan khawatir! Di Sribulancer, Anda akan menemukan banyak sekali tim yang dapat Anda rekrut untuk jasa pembuatan aplikasi Android dengan harga murah dan hasilnya ber', 200000),
(5, 'Interaktif menggunakan JavaScript', 'Fullstack Developer bertugas “ngoding” untuk membuat aplikasi dari nol sampai benar-benar jadi. Aplikasi apapun bisa dibuatnya. Menjadi Fullstack Developer apalagi yang spesialis NodeJS dan React biasanya sangat dibutuhkan di startup-startup, hingga bisa ', 100000),
(6, 'Pembuatan Website Native Cepat!', 'Bagi pemula, coding terdengar mengintimidasi. Bagaimana tidak? Anda berkomunikasi dengan komputer bukan menggunakan bahasa seperti biasanya, melainkan angka dan kombinasi karakter lainnya. Wajar bila pemula bingung harus memulai dari mana. Nah, di sini ka', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(9) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nama_kursus` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `harga` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `nama`, `nama_kursus`, `email`, `harga`) VALUES
(11, 'dfdfd', 'wqwqw', 'wqwqwq@sds.com', 'wqwq'),
(12, 'ada', 'dada', 'adad@dsd.li', 'qwqwqwq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(1, 'ardianta', 'ardianta_pargo@yahoo.co.id', '$2y$10$HIEq2w.8Et9RsJmY4TMKye4aVCxOd9xJTOtG4vyOEmo.GIBxaPQHK', 'Ardianta Pargo', 'default.svg'),
(3, 'petanikode', 'info@petanikode.com', '$2y$10$uXa.Hz9rr8gkv4ztaqf6FO84iW64gXHbeyEOy1tIQ5wmqMjTk0yQa', 'Petani Kode', 'default.svg'),
(4, 'sassa', 'saul@gmail.com', '$2y$10$VVZ.w9g9puy4A2HqdoxEUejOF0PKq6JcdMAf5zFu4.BwfN5SC/Prq', 'saul santo anju', 'default.svg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
