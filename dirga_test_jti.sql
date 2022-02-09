-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
<<<<<<< HEAD
-- Waktu pembuatan: 08 Feb 2022 pada 22.39
=======
-- Waktu pembuatan: 09 Feb 2022 pada 08.57
>>>>>>> fix login
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
<<<<<<< HEAD
  `nomor_hp` varchar(13) NOT NULL,
  `provider` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
=======
  `nomor_hp` text NOT NULL,
  `provider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nomor_hp`, `provider`) VALUES
(6, 'e6e78cb923f17a4faaa2f26cd683d5ab36bdcbc4e23588dc885dba9d6da16dd704b423a14c25fbb269a970971256a7a06ceed3092430866448e4dce9cdef86c9NnuOsBeVE2/EBGnmfe6OOu++fxAY8igmiaZO7aCPAPE=', 'a1d6a85103a3012390c4f8c86b7cff9a4dd0d5af504f4e75c6fe84fff18a39b4afbdd355e2b3e9034923b27a6d114fb4ec9346e5815587dcac3f07a4b74fe4fbxihvcMDkgbMuD6dh5xLnOL7FMlOVXz1NYtFfO8gFT5o='),
(8, 'b661a08d2646efbed015ca002ce2285f867e6b0f00de6b8328b87b30983366a19290506be7663de56188bbea2d4b2ca7480d06e6d4453d3de79ec9cb11cfb56dq3gr1o1tuTqLB0Tda4KBIIxbDoNiIg33e9iqvpSBt0g=', '4030db0b13a37db7804b6930a26f7ed08513285928a2ce339b456a0768db9b66ae01e67754ff5ec9bab0a62932d730df2b378fe53285fb9beee7cae5b1838018b4dztHl0XprjlJr+9vXLVyf1Udqfzy7uXaWJJWc0CDo='),
(10, 'd1731328348492ff0c6c5f25a87a8eeafb5cfa822139059676a10bca0384908da672e80829eda8ded13638b30d8c7877b2511684ffec667f60008bdf0058f19bJ0HCm+RyGwhy4JcAp6o9s8zEMWGHTy3PwShZE9tnIfc=', '138cb6c2451e38ad5468a234cfcc3393cf90311dbb8668a5b8ee9b46cecaf9aa71b2bfb1cc24499d9572fa1615aa2196d2054c58cf2fb6c829d9005454279a5aHs/JTaJjbztmHYRJZIiNrmN2g8aL8ltZRghYKlmPxpw='),
(63, '9ab1fa2118bf007a3df23cddc65a8154a3bf7b0467a9ea7ea61afe8cd6cf2721907bff31de0ed6b5b56f2eca290126d9e2b8a6c22260086d90431032a8032cc2CKTLuz/vlRiFgmZ+7y8THqMGjNwO0ni70FQxr8uudkE=', '2908347a93474aade6ed2fc770d218f7ddfb7263ed6a4d27de8647d0d3fe6143a028ac24cd8d025376bd8d2ea56372b0b4f937fcd57ef685e788f29ebcd69618kFLQH0Xobo/wOlHNDhBLR7DVMfzpHLwF+r1FOGtIUu0='),
(64, 'f60907fce1151cc81e8f85eea029b04eede838689582e8f9bc3fbb7473d33b3ca62d1c5eb1d474d98b12b5d129576b01471fb2c3f29323bfb19d2892c342a699dFImwr8udotWcTp0edToUgb2yYtcBwvAGWJcdfNWRio=', '95faad2eb98874486e3169d8d2e4f4b6c21c48619721558d69e237a8094412428f8a8d5f508bf38373cee0bf07d18c1ce34a0ea40a807f6fb6e7bfce90f507cdGA7wkQYwGAFQRDlS9rRRHrG4fKtSyRQE96smtUKmeRk='),
(65, 'ad60c706ab3b04f4c9db59551f71cf4fb2370a1a2620a392e8006853945f6479e3e0ed08f20f7b349d650a74fe1efebc870a39d75f09c3e35948af597c14b5abMyrBG2pJEFFE8MQJ2qL0rtmUGjOErrHT05bsN8A8gTg=', '2b0f3e5aecce647eaa2d2cddadac94e761b32195d2c3ac7aa85572f5c12642f6a42b04b89207d57c9d656638a9ff16477733de611b2dad31fe0c9293abca2fddxeYredG9HV2cMqK2FIUObiade1KjAmvR2/1YWXEbkRQ='),
(66, 'be1949a8b61d9e6d409a9480a657611d77209157e6d2bd3bf93fc093f231b6638ccf2ff7db82fcc7f13857085ea669759a52fdf318a0c34baa464d637ae0bde72wy7OdGFW4RV2PVNlPTJjDyQT79mgrv47S1V8Mgw++c=', 'fd2aa5817ce8779c74ca44a6385a349d29867942098603913b7a90c7e12adea47698c405a49c18693199858583d58cd4d5d0520f8c5507f861cb096cdde5151dmnHi08WfXTPWJxTyjJmnfNAvoBTbe7n9zJI4dHSIlfA='),
(67, '89b80385cfa3781a2dc87531763b9d41b83cc8cc70748b5fb279dd9fce3d7020bf238deb5eb2b1782382ce3486573cb62911dc5224c6b13266d19ca1d0d4eec7RE+SObxEh1Fwrp9xFx2HS6a7EWUqlZLHnP1i6NKc2JU=', '1e074394f1e92e2023cbc100603e8921873b3655dcc12ff469c8fb4ef76eb690149ccf9258cfa174dcb5bfa4a2c6ceb3946d0d5f85ff19980757adc7a1ffab83OwJoiz0vfUv1sYFAiwXUxv8DmEo5jt0sj4umRawCfqg='),
(68, '99e3867534881116d4d1552ff5e268961cc3fec2f0b4d72980ac544657d31d8d76112e145d055d1c4db1fe7a01bf529c579c4b94507c5bf2bc79ab54ad87c42ed6OI++J9kMaOGirNcq9he+rP0FE9W6ui6FmagIpckmg=', '36e814341c38ef389c9d3b1f801dc9d47dee0a885bc71025d2959b7bef65927cca5c871a978f2299d2f9a9e1ac4f2a91fbfb303a82a86eb16bb26e5ac4755ec3hBkmG5M0xiRStt9aSVQkB4Xl5fzf+vA8p62Vkww2AZs='),
(69, 'd28e46d0fd10e536f3b9e46f84d740178d97ba2743fe68be4379e700d147290994c4aa12e78557243c1c78b80d3a25076403bcd3094ed789bb1432200850f9fcAE09UOaq2z7fILNVs/JDyJ9hHercVrdtyizrW1GLDAc=', 'c8571ab23150ee1f871aa53e7fe4b8bc7ae980f78f496c91a6d27bd5723fb1143947247e003f399f25e6cb344691dc00887d50d4ee09351cb9f444920212d6c1tH/bFo3TdX+QfeP39OxcHJCwziUQCQRKMAIoBYwi3E0='),
(70, '694d4aed578b014efc989439324e7ad230be421d2ce354ced72d7a2272a1cb5be376bda0e326a37a9fae130679d8fc904b19d45be304dea6853b3e4107ce1722xSU+i4PS07vuJgf68YGLOeijrTqOyauX9HZcdtXh2Ic=', '7af55106d05ae103411ba94a345d7b13bdb2f4f5f317c3596417fab57b67a7e533a200e4ca7455888bb90e4c0d920b2c379305a4ef2561429d88d950dfd59e44r2ITVejmNpXo1EpAJtDzBKcxLiE9OMreFeb4C5AKIgg='),
(71, 'fbd02f960f8a5c076b08d68bd756cba15d1bddf7a2f74e6fd605d49bee69f2c47f90c9c1d4d499f94e47438cf240ed24b42e86976c8d0136147436d2a2cde348I9Ow3h2hyTvdRueSWn6vGkuKPrBH9pkHa1nE85z4URI=', '6cd1c67d8c734233bb2fa266d674e0ff2ccb14d8a5ee020461de9c64a940c843a6a9e6210d457c5c48d263050df93744e987f70bc8022d82ae2da6fee495fecbZ91b1BDDwGmxixaWuXJ/NF+yEWh3jTB/rOoG8L+fBeE='),
(72, 'ef86fa2739ba145d4496c9d404e6ca6b0044f6fc57348b4026f9389604d0e4fac42444e71602225f8318f03bca840cfda140d6489c3a58daa54fce4b8ed1d9aaG8mn1I+WWgZYOHeJ6L0ZzmtWf1jMX6H+D9NB0PcvA8A=', 'a392edfa5715db6aaf0462d307cc9a6e3a4bebdb53f44d8349c412a78e984a2a7c214eb9ff79f00cd4369d8dd3545eaa8cdfe09b9e8f26d0589181833cb4d770Nvbi5cFMsf5EqeblAIY95wCZWjY9Wx1asQVoL9iwfrI='),
(73, 'caa465dc35bf5b13903c734c18e6e82bf52f1c71b80b099a77e4c3b0804a83c40844cb227b32e8287afbbdd275a86a2cc13f0925cc45728ef5b86aebfe69b078Zv48zU+MZ0TifadEYXiBSUtURqaoU0dy7rddvqoGo0E=', '544e0ed3e244e42af611d363a5d59710397e12f3a1d6e601515d98a765c4e1454dbcc52c400dfb4afb76f37ab12430dad921be5e05567b8f1ba6aa65baf728d8d3dqSzUwyVyF9uzVZEUZvmyq7bKw7wujzI98EO5iHRY=');

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
(1, '110582372253485825749', 'Dirga', 'Febriansyah', 'muh.dirga.f@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJymgaJKYVlf4viTXXcKrhnjao9dkjpZ8sb8OLfB=s96-c', '2022-02-09 08:46:57', '2022-02-09 08:57:44');

--
>>>>>>> fix login
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
<<<<<<< HEAD
=======
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
>>>>>>> fix login
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
<<<<<<< HEAD
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> fix login
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
