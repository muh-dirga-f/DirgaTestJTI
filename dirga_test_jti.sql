-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Feb 2022 pada 10.07
-- Versi server: 10.3.32-MariaDB-0ubuntu0.20.04.1
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dirga_test_jti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nomor_hp` text NOT NULL,
  `provider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nomor_hp`, `provider`) VALUES
(1, '53b6058b3333f3c5dffc7428f678c32759e3f1d4bdfe2caea4cc7db8429136bc8025c738b1efd75ee6eb56b2ac6bf5ab3c69aafca7d8e7293c715b212085dd51EjaIZavLM/XBzr1f09Dy1gMm1qBgzr8zNLLdkjyUTD0=', '8e3e99c2b1b40033664ea3e2ce88881d030ba5a438a1aaa4626c43249f7f5fa5048d4192678ea9b824bbb7cb7038789393c05bbe593a4822cc18ab655a94eab3aMghjHGsz75ERFh45MYxEOludnOiDZnvWNqmXO122QY='),
(2, 'd12348dde461c9429897617a071d3d832d00d0931e50d7b9a448ae19387189ead169f4b260a11695684cb4c88fc4aa88e355cb7761e4d9ef7e13e493fc0e08afxLCgUuj+Egyc45dZGV7AIAw4tZ4XOyg8zyHzWN889Fs=', '1f92565225d4c989d7884cadac6ea9d092387e40e39c52ec9be618a4eb696d1e72848d005efc9c647525a16f9acb9c75514e50af918c28cda475f2ee862f30e0jpIQDxHukAzay/ELDPjuW2UxSKXVGVOpyqzD4t+FtbU='),
(3, '46c3ea20041973e4ec5d0c6bb625c774b25792396036c1f1aa3bc7f940cd5a1939c6ac65293df60a95d09d4f7e3351daaff57c815a935b8b1e00a513cf29f24bZj17LEyrRNJiPGyHFnF5SN9lrK+WwaHXwXIHRWuHpPY=', '3372d7645b2bc148123386987f1419eb978698a9b64ec876a09f255b208cc78fda81ddda3c21014962c8ef5d31bfcbf9e2994ead82cb7b84ad3b9270715254eaLZ1Dge145WoNpEodW1y02G9ukXC81/KzkENT1b0bVcM='),
(4, 'c36f28e0705ee160b9c73543ce4dbc5c25546a199aef292ebe4f1f0ba5570e53da9a9cb6470157a2e74bce384b05f7b70ff1fe3df0b3f873ddfbc2e29a42e933oOGbOP2x7SX/Qsr4p5k3GTOupSJqQzXLaqi39K2Th/k=', '6dbaa975a05b975223cb9df80d2520d361af9d1e1e32d4a707a8621a263376e27d7e212fb9b854f5f1807c9d15ea132b851b975945078b211b3fe009342d8b7fquMWsCAN6K3Ph0EPxnOD+h2n3mE8nfbYlplr+GopBOc='),
(5, '3c72f1b427758c554c2ba6c37a8896ff916d41ef78fcbff4f250220fcf72c5f84358b8895a83f6dcbe8735edd16bf70e2ab4344200433c9efa037fd9e32f3b124oDEUHDQUVvfOZ5FJfNkdL/P/CILuDzmvfG3nq4Ow/Q=', 'a697140f6f80ae4b54ea81d19aeaf94fe4783cd4f850e14c8891e42c58e2ab374ab79d5f556ee3776a54f45e880115ff79d23a0b9c6009aa32cf2826b70828d9ipxYFHc1yhl30A9H8Fwe3fNZ1Bfpp/xMreGrjJ+eZ7I=');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login_oauth_uid` varchar(100) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_address` text NOT NULL,
  `profile_picture` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `login_oauth_uid`, `first_name`, `last_name`, `email_address`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, '110582372253485825749', 'Dirga', 'Febriansyah', 'muh.dirga.f@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJymgaJKYVlf4viTXXcKrhnjao9dkjpZ8sb8OLfB=s96-c', '2022-02-09 10:06:12', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
