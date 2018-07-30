-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2018 at 08:58 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosadixy_mowilex`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

CREATE TABLE `tbl_complain` (
  `id_complain` varchar(11) NOT NULL,
  `no_complain` varchar(50) NOT NULL,
  `tgl_complain` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `kode_toko` varchar(20) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `masalah` varchar(225) NOT NULL,
  `verifikasi` varchar(225) NOT NULL,
  `kesimpulan` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`id_complain`, `no_complain`, `tgl_complain`, `perihal`, `kode_toko`, `produk`, `batch`, `masalah`, `verifikasi`, `kesimpulan`, `username`) VALUES
('0001', '0001/COMP/BDG/01/2018', '2018-01-04', 'Mixer G5 ', 'SH000204', '-', '-', 'Belt pada mesin putus', 'Setelah di cek ternyata belt pada mesin putus, ganti belt yang baru', 'komplain di terima', 'S000490'),
('0002', '0002/COMP/BDG/01/2018', '2018-01-05', 'Property Printer', 'SH001293', '-', '-', 'Printer label nge gulung ', 'Setelah di cek ternyata terjadi kerusakan pada printer label, dimana penggulung pada printer tersebut rusak dan harus di ganti dengan yang baru. Ganti printer dymo baru. SN printer dymo terbaru 1750284-2215358', 'Komplain diterima', 'S000490'),
('0003', '0003/COMP/BDG/01/2018', '2018-01-05', 'TM280', 'sumberalam', '-', '-', 'Pompa tersangkut oleh griper', 'Setelah di cek ternyata mesin terjadi kerusakan karena pompa tersangkut dengan griper. Lepas pompa dari griper', 'Komplain diterima', 'S000490'),
('0004', '0004/COMP/BDG/01/2018', '2018-01-08', 'Property Stabilizer', 'SH000201', '-', '-', 'Mesin tidak mau menyala, tidak dapat di produksi mesin mowilex', 'Setelah di cek ternyata terjadi masalah pada stabilizer, dimana kabel stabilizer lepas sehingga mesin tidak dapat berjalan.', 'komplain di terima', 'S000490'),
('0005', '0005/COMP/BDG/01/2018', '2018-01-10', 'Nozzle Mampet', 'SH001236', '-', '-', 'Nozzle untuk colourant BK, VI, dan WT mampet, colourant tidak jatuh dengan sempurna', 'Setelah di cek ternyata terjadi kendala pada nozzle tersebut, dimana ke 3 nozzle tersebut mampet sehingga tidak dapat keluar dengan baik, ganti nozzle dan cuci nozzle.', 'komplain di terima', 'S000490'),
('0006', '0006/COMP/BDG/01/2018', '2018-01-12', 'Warna  Beda', 'SH000196', 'Acrylic Gloss Enamel 20 Liter', 'AGBB - 4580 - 4518', 'saat bikin 50 pail dengan kode N10-S 1055-B90G, produksi yang ke 47 terjadi error pada program colour composer, dimana program tersebut tidak dapat melanjutkan produksi.', 'Setelah di cek ternyata terjadi masalah pada program dimana program terjadi error, sehingga mengakibatkan error pada prgram, program tidak dapat di gunakan, setelah program di close, progrma dapat berjalan kembali, dan produk', 'komplain di terima', 'S000490'),
('0007', '0007/COMP/BDG/01/2018', '2018-01-15', 'CPU Lemot', 'SH000599-', '-', '-', 'komputer lemot', 'Defrag komputer ', 'komplain di terima', 'S000490'),
('0008', '0008/COMP/BDG/01/2018', '2018-01-17', 'TM 300', 'SH000859', '-', '-', 'Saat akan oplos cendana, sensor can tidak terdeteksi, gagal produksi', 'Setelah di cek ternyata terjadi kendala pada sensor, dimana saat sensor di dekatkan sensor tidak dapat berfungsi / lampu indikator sensor tidak menyala. setting sensitif sensor, atur biar pas saat ada can dapt berjalan.', 'komplain di terima', 'S000490'),
('0009', '0009/COMP/BDG/01/2018', '2018-01-19', 'TM 300', 'SH000583', '-', '-', 'komputer tidak dapat mendeteksi mesin karena saat awal start mesin tidak berputar', 'Setelah di cek ternyata terjadi kendala ada sensor turn table, dimana sensor nya tersebut terkena colourant sehingga lampu pada sensor selalu menyala. \r\nBersihkan sensor tersebut sehingga lampu indikator sensor tidak menyala ', 'komplain di terima', 'S000490'),
('0010', '0010/COMP/BDG/01/2018', '2018-01-22', 'Property Printer', 'SH000855', '-', '-', 'Printer hang, tidak dapat print label', 'Setelah di cek ternyata printer hang, lepas kabel power pada printer lalu end process hasil print yang belum keluar', 'komplain di terima', 'S000490'),
('0011', '0011/COMP/BDG/01/2018', '2018-01-22', 'TM 300', 'SH001061', '-', '-', 'Pompa nyangkut pada griper.', 'Setelah di cek ternyata terjadi kendala pada sensor, dimana sensor terkena clourant CY, di khawatirkan saat lagi mengeluarkan tinta, tinta CY jatoh terkena sensor, sehingga saat posisi di atas lalu sensor tidak dapat berputar', 'komplain di terima', 'S000490'),
('0012', '0012/COMP/BDG/01/2018', '2018-01-22', 'Property Komputer', 'SH001353', '-', '-', 'Komputer tidak terdeteksi sistem operasi windows', 'Setelah di cek pada tanggal 25 janurai 2018 setelah di kunjungi, ternyata terjadi kerusakan pada hardisk dimana hardisk tersebut tidak terdeteksi, sehingga mengakibatkan sistem operasi tidak dapat berjalan. Setelah di cek dan', 'komplain di terima', 'S000490'),
('0013', '0013/COMP/BDG/01/2018', '2018-01-24', 'G360L Mixer', 'SH001407', '-', '-', 'Mesin mixer beputar terus saat melakukan mix', 'Setelah di cek ternyata saat melakukan pemixingan ternyata base tersebut bocor, lalu mengenai sensor, dimana sensor tersebut terkena cat sehingga sensor mengira mesin masih berputar.\r\nPres stop button, lalu bersihkan kembali ', 'komplain di terima', 'S000490'),
('0014', '0014/COMP/BDG/01/2018', '2018-01-29', 'G360L Mixer', 'SH000196', '-', '-', 'Mixer belt putus', 'setelah di cek ternyata belt pada mesin mixer putus, harus di ganti dengan belt yang terbaru', 'komplain di terima', 'S000490'),
('0015', '0015/COMP/BDG/01/2018', '2018-01-29', 'Kerusakan property UPS dan Printer', 'SH000202', '-', '-', 'ups tidak dapat menyiimpan daya\r\ndan dymo tidak dapat print, karena pada pcb terbakar.', 'cek dokumen, perlengkapan untuk toko x persahabatan', 'komplain di terima', 'S000490'),
('0016', '0016/COMP/BDG/03/2018', '2018-02-01', 'Property Printer', 'SH001022', '-', '-', 'Property Printer hang, tidak dapat print label', 'Setelah di cek ternyata terjadi masalah pada printer, dimana printer tidak dapat melakukan print karena hang, sehingga kabel power harus di cabut sampai indikator warna biru ikut mati, lalu pasangkan kembali kabel power tersb', 'komplain di terima', 'S000490'),
('0017', '0017/COMP/BDG/03/2018', '2018-02-02', 'TM 300', 'SH001399', '-', '-', 'Nozzle CY dan DG mampet', 'Bersihkan nozzle tersebut sehingga nozzle tersebut tidak ada lagi colourant yang mampet', 'komplain di terima', 'S000490'),
('0018', '0018/COMP/BDG/03/2018', '2018-02-05', 'Dispanser Rondo', 'SH000196', '-', '-', 'Karet ruber sudah rusak dan harus di ganti', 'Setelah di cek ternyata karet ruber sudah rusak dan harus di ganti', 'komplain di terima', 'S000490'),
('0019', '0019/COMP/BDG/03/2018', '2018-02-06', 'TM 300', 'SH000200', '-', '-', 'Mesin berbunyi berdecit saat agitation', 'Setelah di cek ternyata terjadi kendala pada AS mesin dimana AS mesin berdebu sehingga tidak dapat melakukan agitaiton secara baik karena gesekan dari debu., Semportkan Chainlub ke ke AS tersebut', 'komplain di terima', 'S000490'),
('0020', '0020/COMP/BDG/03/2018', '2018-02-07', 'Mixer Jyro', 'SH000202', '-', '-', 'Mesin mixer jyro tidak dapat berputar', 'Setelah di cek ternyata terjadi banyak gumpalan cat didalam mesin mixer, sehingga gear dan mekanik yang lainnya tertutup sehingga tidak dapat berputar.\r\nPerbaiki mesin dan bersihkan mesin dari gumpalan cat.', 'komplain di terima', 'S000490');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance`
--

CREATE TABLE `tbl_maintenance` (
  `id_maintenance` int(11) NOT NULL,
  `kode_toko` varchar(20) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `dispanser_ket` varchar(225) NOT NULL,
  `mixer_ket` varchar(225) NOT NULL,
  `komputer_ket` varchar(225) NOT NULL,
  `perlengkapan` varchar(225) NOT NULL,
  `catatan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_maintenance`
--

INSERT INTO `tbl_maintenance` (`id_maintenance`, `kode_toko`, `tgl_kunjungan`, `dispanser_ket`, `mixer_ket`, `komputer_ket`, `perlengkapan`, `catatan`) VALUES
(1, 'SH001074', '2018-05-04', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mesin`
--

CREATE TABLE `tbl_mesin` (
  `id_mesin` int(11) NOT NULL,
  `kode_toko` varchar(20) NOT NULL,
  `dispanser_tipe` varchar(100) NOT NULL,
  `dispanser_sn` varchar(100) NOT NULL,
  `mixer_tipe` varchar(100) NOT NULL,
  `mixer_sn` varchar(100) NOT NULL,
  `cpu_tipe` varchar(100) NOT NULL,
  `cpu_sn` varchar(100) NOT NULL,
  `monitor_tipe` varchar(100) NOT NULL,
  `monitor_sn` varchar(100) NOT NULL,
  `ups_tipe` varchar(100) NOT NULL,
  `ups_sn` varchar(100) NOT NULL,
  `stabilizer_tipe` varchar(100) NOT NULL,
  `stabilizer_sn` varchar(100) NOT NULL,
  `printer_tipe` varchar(100) NOT NULL,
  `printer_sn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mesin`
--

INSERT INTO `tbl_mesin` (`id_mesin`, `kode_toko`, `dispanser_tipe`, `dispanser_sn`, `mixer_tipe`, `mixer_sn`, `cpu_tipe`, `cpu_sn`, `monitor_tipe`, `monitor_sn`, `ups_tipe`, `ups_sn`, `stabilizer_tipe`, `stabilizer_sn`, `printer_tipe`, `printer_sn`) VALUES
(1, 'SH000196', 'Rondo', 'RN 040011', 'G360L', '130305G360L068, 130410G360L055', 'Lenovo Thinkcenter A58', 'R840M4H', 'Lenovo', 'V162568', 'ICA', '1B1D21009766', 'Minamoto', '25G2T1000241', 'Dymo', '1750284-2201189'),
(2, 'SH000204', 'Rondo', 'RN 060008', 'G5', '150820000G5025', 'harus cek', 'harus cek', 'harus cek', 'harus cek', 'CE 1200', '1B1D21008411 ', 'Minamoto 2000 VA', 'harus cek', 'Seiko', 'SLP 420: 4206C047393'),
(3, 'SH000215', 'D250', 'D 2090118', 'M300ST', 'D9M0454', 'Atom CPU 230', 'harus cek', 'harus cek', 'harus cek', 'CE 1200', '1216X0901483', 'Minamoto 2000 VA', 'harus cek', 'Dymo', 'harus cek'),
(4, 'SH000189', 'TM300', '99973-15-00039C (04/22/10)', 'G5', 'harus cek', 'Lenovo', 'R840M2R', 'Lenovo', 'V217236', 'CE 1200', '1B1D21008025', 'Minamoto', '25G2S1000322', 'Dymo', '1750284-2012469'),
(5, 'SH000201', 'TM300', '99973-15-00072C (06/03/10)', 'Jyro', '99909073', 'Lenovo Thinkcenter A58', 'R840M3Z', 'Lenovo', 'V1C2612', 'CE 1200', '1B1D21008024', 'Minamoto', '25G2S1000275', 'Dymo', '1750284-2012446'),
(6, 'SH000202', 'TM300', '99973-15-00069C', 'Jyro', '99909094', 'Lenovo Thinkcenter A58', 'R842A2G', 'Lenovo', 'V1C3511', 'CE 1200', '1B1D21007949', 'Minamoto', '25G2S1000289', 'Dymo', '1750284-2012448'),
(7, 'SH000200', 'TM300', '99973-15-00071C (06/03/10)', 'Jyro', '99909097', 'Lenovo Thinkcenter A58', 'R840M1K', 'Lenovo', 'V1C3505', 'CE 1200', '1B1D21008030', 'Minamoto', '25G2S1000341', 'Dymo', '1750284-2012468'),
(8, 'SH000599', 'TM300', '99973-23-30158C', 'G360L', '130410G360L105', 'Lenovo Thinkcenter A58', 'PBAF36C', 'Lenovo', 'V1245954', 'CE 1200', '1C1HI1400015', 'Minamoto', '25G2T1400023', 'Dymo', '1750284-2127841'),
(9, 'SH000203', 'TM300', '99973-15-00063C (05/09/10)', 'Jyro', '99909032', 'Lenovo Thinkcenter A58', 'R8262DG', 'Lenovo', 'V1C3079', 'CE 1200', '1B1D21008020', 'Minamoto', '25G2S1000266', 'Dymo', '1750284-2012443'),
(10, 'SH000576', 'TM300', '99973-15-00080C', 'Jyro', '99909123', 'Lenovo', 'R88W9XP', 'Lenovo', 'V1P0838', 'CE 1200', '1B1D21008402', 'Minamoto', '25G2S1000269', 'Dymo', '1750284-2014634'),
(11, 'SH000211', 'TM300', '99973-15-00170C', 'Jyro', '99909132', 'Lenovo', 'R88W9HV', 'Lenovo', 'V230626', 'CE 1200', '1B1D21008355', 'Minamoto', '25G2S1000255', 'Dymo', '1750284-2014451'),
(12, 'SH000188', 'TM300', '99973-15-00159C', 'Jyro', '99909147', 'Lenovo', 'R88BK7C', 'Lenovo', 'V231156', 'CE 1200', '1B1D21008414', 'Minamoto', '25G2S1000111', 'Dymo', '1750284-2013690'),
(13, 'SH000467', 'TM300', '99973-15-00119C (07/03/10)', 'Jyro', '99909162', 'Lenovo', 'R8B55YY', 'Lenovo', 'V1LX744', 'CE 1200', '1B1D21008379', 'Minamoto', '25G2S1000249', 'Dymo', '1750284-2012462'),
(14, 'SH000579', 'TM300', '99973-23-15369C', 'Jyro', '120107000G5062', 'Lenovo', 'R8EV6MY', 'Lenovo', 'V1FWF53', 'CE 1200', '1C1G61203414', 'Minamoto', '25G2T1100664', 'Dymo', '1750284-2048743'),
(15, 'SH000583', 'TM300', '99973-23-20894C', 'G5', '120720000G5040', 'Lenovo', 'R8EV6EK', 'Lenovo', 'V1MTY83', 'CE 1200', '1C1G6120612', 'Minamoto', '25G2T1100685', 'Dymo', 'harus cek'),
(16, 'SH000584', 'TM300', '99973-23-20911C', 'G5', '120720000G5028', 'Lenovo', 'R8V7WK', 'Lenovo', 'V1MTY59', 'CE 1200', '1C1G6120115', 'Minamoto', '25G2T1100687', 'Dymo', '1750284-2079030'),
(17, 'SH000597', 'TM300', '99973-23-23202C', 'G5', '120720000G5058', 'Lenovo', 'PBX2360', 'Lenovo', 'V1MTY85', 'CE 1200', '1C1G61209076', 'Minamoto', '25G2T1100707', 'Dymo', '1750284-2078983'),
(18, 'SH000599-', 'TM300', '99973-23-23209C', 'G5', '120720000G5006', 'Lenovo', 'PBFXB17', 'Lenovo', 'V1PNX41', 'CE 1200', '1C1G61209957', 'Minamoto', '25G2T1100703', 'Dymo', '1750284-2679417'),
(19, 'SH000600', 'TM300', '99973-23-23214C', 'G5', '120720000G5055', 'Lenovo', 'PBGWE40', 'Lenovo', 'V1PNH02', 'CE 1200', '1C1G61209080', 'Minamoto', '25G2T1100777', 'Dymo', '1750284-2031369'),
(20, 'SH000851', 'TM300', '99973-23-25163C', 'G360L', '130201G360L008', 'Lenovo', 'DTVG5SN0013010136D9200', 'Lenovo', 'H3TDJ-D2M2F-V8X49-CTTYP-QJB6Y', 'CE 1200', '1C1HI1300024', 'Minamoto', '25G2T1300246', 'Dymo', '1750284-2055452'),
(21, 'SH000855', 'TM300', '99973-23-24654C', 'G360L', '130305G360L113', 'Acer', 'DTVG5SN0013010126179200', 'Acer', 'MMLX8SS006303009D8241', 'CE 1200', '1C1G61309041', 'Minamoto', '25G2T1300226', 'harus cek', 'harus cek'),
(22, 'SH000856', 'TM300', '99973-23-25159C', 'G360L', '130305G360L125', 'Lenovo', 'DTVG5SN001301012BA9200', 'Lenovo', 'MMLKPSS0062480CA448506', 'CE 1200', '1C1HI1300013', 'Minamoto', '25G2T1300259', 'Dymo', '1750284-2059147'),
(23, 'SH000857', 'TM300', '99973-23-24655C', 'G360L', '130305G360L062', 'Lenovo', 'DTVG5SN001301012AB9200', 'Lenovo', 'MMLKPSS0062460F1A48506', 'CE 1200', '1C1HI1300015', 'Minamoto', '25G2T1300237', 'Dymo', '1750284-2106570'),
(24, 'SH000859', 'TM300', '99973-23-26850C', 'G360L', '130305G360L114', 'Atom CPU 230', 'UDTVSSDO1432100780081', 'Acer', 'MMLTUSS00531106AA04239', 'CE 1200', '1C1HI1300126', 'Minamoto', '25G2T1300344', 'Dymo', '1750284-2106259'),
(25, 'SH000499', 'TM300', '99973-23-26844C', 'G360L', '130305G360L031', 'Atom CPU 230', 'UDVG5SD014321000780080', 'Acer', 'MMLTUSS00531106AC94239', 'CE 1200', '1C1HI1300078', 'Minamoto', '25G2T1300304', 'Dymo', '1750284-2106317'),
(26, 'SH000926', 'TM300', '99973-23-26853C', 'G360L', '130305G360L088', 'Lenovo Thinkcenter A58', 'DTVG5SN016317078D29200', 'Acer', 'MMLTUSS0531106AB24239', 'CE 1200', '1C1HI1300137', 'Minamoto', '25G2T1300354', 'Dymo', '1750284-21090441'),
(27, 'SH000945', 'TM300', '99973-23-27185C', 'G360L', '130305G360L034', 'Acer', 'DTVG5SN016314016FB9200', 'Acer', 'MMLX8SS0063040ABCE2401', 'CE 1200', '1C1G61300092', 'Minamoto', '25G2T1300199', 'harus cek', 'harus cek'),
(28, 'SH001020', 'TM300', '99973-23-28923C', 'G360L', '130305G360L093', 'Lenovo', 'PBZ28HZ', 'Lenovo', 'V3TY500', 'CE 1200', '1C1HI1300233', 'Minamoto', '25G2T1300755', 'Dymo', '1750284-2102362'),
(29, 'SH000962', 'TM300', '99973-23-27176C', 'mesin di sentosa', 'mesin di sentosa', 'Lenovo', 'PBZ28ER', 'Lenovo', 'V3TX932', 'CE 1200', '1C1HI1300139', 'Minamoto', '25G2T1300534', 'Dymo', '1750284-2108243'),
(30, 'SH001348', 'TM300', '99973-23-29265C', 'G360L', '130410G360L023', 'Lenovo', 'PBZ28ML', 'Lenovo', 'V3TX648', 'CE 1200', '1C1HI1300231', 'Minamoto', '25G2T1300754', 'Dymo', '1750284-2108416'),
(31, 'SH001022', 'TM300', '99973-23-29236C', 'G360L', '130410G360L068', 'Lenovo', 'PBZ28HE', 'Lenovo', 'V3TY351', 'CE 1200', '1C1HI1300308', 'Minamoto', '25G2T1300882', 'Dymo', '1750284-2106400'),
(32, 'SH001103', 'TM300', '99973-23-28167C', 'G360L', '130305G360L047', 'Lenovo', 'PBZ28KL', 'Lenovo', 'V3TY489', 'CE 1200', '1C1HI1300204', 'Minamoto', '25G2T1300765', 'Dymo', '1750284-2108219'),
(33, 'SH001053', 'TM300', '99973-23-28165C', 'Jyro', '99909065', 'Lenovo', 'DTVG5SN016314016F69200', 'Lenovo', 'MMLTUSS00531106B1A4239', 'CE 1200', '1C1HI1300093', 'Minamoto', '25G2T1300192', 'Dymo', '1750284-2103674'),
(34, 'SH001102', 'TM300', '99973-23-28172C', 'G360L', '130305G360L112', 'Lenovo', 'PBZ28HY', 'Lenovo', 'V3TX646', 'CE 1200', '1C1HI1300211', 'Minamoto', '25G2T1300767', 'Dymo', '1750284-2102400'),
(35, 'SH001407', 'TM300', '99973-23-29716C', 'G360L', '130410G360L018', 'Lenovo', 'PBZ28MC', 'Lenovo', 'V3TY492', 'CE 1200', '1C1HI1300302', 'Minamoto', '25G2T1300829', 'Dymo', '1750284-2105327'),
(36, 'SH001061', 'TM300', '99973-15-00162C', 'Jyro', '99909142', 'Lenovo', 'R88BH8V', 'Lenovo', 'V3TY510', 'CE 1200', '1B1D21008413', 'Minamoto', '25G2S1000357', 'Dymo', '1750284-2015073'),
(37, 'SH001184', 'TM300', '99973-23-28171C', 'G360L', '130305G360L053', 'Lenovo', 'PBZ28FV', 'Lenovo', 'H82C6-XCXKB-PW2TD-94RFD-XM7GJ', 'CE 1200', 'V3TX481', 'Minamoto', '1C1HI1300223', 'Dymo', '1750284-2102244'),
(38, 'SH001061-', 'TM300', '99973-23-28910C', 'G360L', '130305G360L119', 'Lenovo', 'PB9ZLZ2', 'Lenovo', '8X8YT-B2DTT-KHD7V-RF22M-CMFQP', 'CE 1200', 'V3TY510', 'Minamoto', '1C1HI1300222', 'Dymo', '1750284-2102362'),
(39, 'SH001074', 'TM300', '99973-23-30156C', 'G360L', '130410G360L055 - coret', 'Lenovo', 'PBAF26F', 'Lenovo', 'V1259939', 'CE 1200', '1C1HI1400036', 'Minamoto', '25G2T1400024', 'Dymo', '1750284-2127625'),
(40, 'SH001293', 'TM300', '99973-23-30160C', 'G360L', '130410G360L029', 'Lenovo', 'PBAF72R', 'Lenovo', 'V1245987', 'CE 1200', '1C1HI1400007', 'Minamoto', '25G2T1400015', 'Dymo', '1750284-2127844'),
(41, 'SH001356', 'TM300', '35716C', 'G5', '150331000G5012', 'Lenovo', 'PC02SEMM', 'Lenovo', 'V900X6NK', 'CE 1200', '191811500045', 'Minamoto SM 3000', '25G2T1500006', 'Dymo', '150331000G5012'),
(42, 'SH001258', 'TM300', '99973-23-24691C', 'G5', '120720000G5050', 'Lenovo', 'PBFGN52', 'Lenovo', 'V1PPC78', 'CE 1200', '191811500152', 'Minamoto', '25G2S1000314', 'Dymo', '1750284-2157833'),
(43, 'SH001399', 'TM300', '36125 C', 'G5', '150722000G5013', 'Lenovo', 'PC02SHFR', 'Lenovo', 'V90061F6', 'CE 1200', '191811500204', 'Minamoto', '25G2T1500270', 'Dymo', '1750284-2157999'),
(44, 'SH001437', 'TM300', '37438C', 'G5', '151013000G5023', 'Lenovo', 'PC025ELD', 'Lenovo', 'V1259333', 'CE 1200', '191811500129', 'Minamoto', '25G2T1500253', 'Dymo', '1750284-2157821'),
(45, 'SH001259', 'TM300', '37429C', 'G5', '151013000G5018', 'Lenovo', 'PC025EDV', 'Lenovo', 'V1284245', 'CE 1200', '191811500193', 'Minamoto', '25G2T1500459', 'Dymo', '1750284-2157828'),
(46, 'SH001025', 'TM300', '99973-23-29803C', 'G360L', '130410G360L033', 'Lenovo', 'PB9ZLR3', 'Lenovo', 'V3TX449', 'CE 1200', '1C1HI1300233', 'Minamoto', '25G2T1300813', 'Dymo', '1750284-2106622'),
(47, 'SH001390', 'TM300', '99973-15-00074C', 'G360L', '130305G360L054', 'Lenovo', 'R842A2F', 'Lenovo', 'V1M3525', '-', '-', 'Minamoto', '25G2S1000277', 'Dymo', '1750284-2106378'),
(48, 'SH001339', 'TM300', '39177C', 'Intramix', 'AGM0112-V03', 'Acer', 'SD6172050002', 'Acer', 'MMLXKSS022612047B44226', 'CE 1200', '191811600114', 'Minamoto', '25G2T1600559', 'Dymo', '1750284-2191168'),
(49, 'SH001236', 'TM300', '39146C', 'Intramix', 'AGMO114V03', 'Acer', 'SD6172050023', 'Acer', 'MMLY6SS01960307A178514', 'CE 1200', '191811600111', 'Minamoto', '25G2T1600583', 'Dymo', '1750284-2191166'),
(50, 'SH001241', 'TM300', '39091C', 'G5', '160401000G5027', 'Acer', 'SD6172040005', 'Acer', 'MMLXKSS022612048334226', 'CE 1200', '191811600127', 'Minamoto', '25G2T1600565', 'Dymo', '1750284-2191827'),
(51, 'SH000926-', 'TM300', '39331C', 'G5', '160719000G5010', 'Acer', 'SD6242970003', 'Acer', 'MMLXKSS022612045E94226', 'CE 1200', '191811600166', 'Minamoto', '25G2T1600536', 'Dymo', '1750284-2191960'),
(52, 'SH00148', 'TM300', '39162C', 'G5', '161017000G5009', 'Atom CPU 230', 'SD6486470017', 'Acer', 'MMT1KSS00761103718642', 'CE 1200', '191811600467', 'Minamoto', '25G2T1601080', 'Dymo', '1750284-2192868'),
(53, 'tbanda', 'TM300', '42067C', 'Intramix', 'A7M0378-V03', 'Atom CPU 230', 'SD7142630045', 'Acer', 'MMT0CSS047060346BB509', 'CE 1200', 'MMT0CSS047060346BB509', 'Minamoto', '191811700049', 'Dymo', '1750284-2201195'),
(54, 'duasaudara', 'TM300', '42086C', 'Intramix', 'A7M0381-V03', 'Atom CPU 230', 'SD7142630099', 'Acer', 'MMLXKSS02264901488742', 'CE 1200', '191811700086', 'Minamoto', '25G2T1700113', 'Dymo', '1750284-2201054'),
(55, 'sumberalam', 'TM300', '42863C', 'G5', '170410000G5014', 'Atom CPU 230', 'SD7142630064', 'Acer', 'MMT0CSS0047060B4748509', 'CE 1200', '191811700059', 'Minamoto', '25G2T1700167', 'Dymo', '1750284-2201074'),
(56, 'trisakti', 'TM300', '42847C', 'Intramix', 'A7M0251-V03', 'Atom CPU 230', 'SD7183380002', 'Acer', '70604405085', 'CE 1200', '191811700124', 'Minamoto', '25G2T1700209', 'Dymo', '1750284-2201245'),
(57, 'SH001353', 'TM300', '37435C', 'G5', '150820000G5002', 'Lenovo Thinkcenter A58', 'SD6081160019', 'Lenovo', 'MML46SS019603076DB8514', 'CE 1200', '191811600034', 'Minamoto', '25G2T1500455', 'Dymo', '1750284-2163974');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko`
--

CREATE TABLE `tbl_toko` (
  `kode_toko` varchar(20) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `tgl_installasi` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_toko`
--

INSERT INTO `tbl_toko` (`kode_toko`, `nama_toko`, `tgl_installasi`, `alamat`, `kota`) VALUES
('duasaudara', 'DUA SAUDARA', '2017-06-14', 'JL. ARDYASA NO 122 KOM. PASAR PARIGI ', 'Pangandaran'),
('SH000188', 'KARYA JAYA', '2011-03-09', 'Jl Arief Rahman Hakim No 32', 'Cianjur'),
('SH000189', 'SINAR PELANGI', '2010-04-11', 'Jl A Yani No 339', 'Garut'),
('SH000196', 'SENTOSA DAYA SEGARA', '2004-07-28', 'Jl Kopo No 576', 'Bandung'),
('SH000200', 'SINAR TERANG ABADI 1', '2010-08-12', 'Jl Raya Cilember No 264', 'Cimahi'),
('SH000201', 'RESTORE', '2010-08-11', 'Jl Ratnaniaga 23 Kota Baru Parahyangan', 'Padalarang'),
('SH000202', 'CIPTA KREASI', '2010-08-11', 'Komp IBCC Blok A6/8, Jl A Yani No 296', 'Bandung'),
('SH000203', 'TB JAYA SENTOSA MULIA', '2010-08-19', 'Komplek TKI III Ruko A No 05', 'Bandung'),
('SH000204', 'TB IRON', '2007-08-07', 'Jl Suniaraja No 53', 'Bandung'),
('SH000211', 'TIMUR JAYA 2', '2011-01-31', 'Jl Pagongan No 98', 'Cirebon'),
('SH000215', 'JAYA SENTOSA Tasik', '2009-08-19', 'Jl Mitra Batik No 156', 'Tasikmalaya'),
('SH000467', 'RODA MAS', '2011-04-26', 'Jl Stasion Timur No 05', 'Sukabumi'),
('SH000499', 'BANGUNAN MAJU', '2013-09-23', 'Jl Pungkur', 'Bandung'),
('SH000576', 'PD SELATAN', '2011-01-10', 'Jl Pungkur No 15', 'Bandung'),
('SH000579', 'SUMBER BANGUNAN', '2012-07-23', 'Jl Kapten Piere Tendean No 07 Ciledug', 'Cirebon'),
('SH000583', 'BUMI PADALARANG', '2012-10-01', 'Jl Padalarang Raya', 'Padalarang'),
('SH000584', 'TB SINAR MULIA', '2012-10-05', 'Jl Pengeran Suryanegara No 10', 'Cirebon'),
('SH000597', 'KATAPANG MAKMUR', '2013-01-07', 'Jl KH Wahid Hasyim Km 12 No 102', 'Bandung'),
('SH000599', 'PERSAHABATAN PEMBANGUNAN', '2010-08-19', 'Jl. Pacinan No 6', 'Cimahi'),
('SH000599-', 'HOU\'S MART', '2013-01-10', 'Jl Ratnaniaga 23-25 Kota Baru Parahyangan', 'Padalarang'),
('SH000600', 'TB SRI MEKAR WANGI', '2013-01-29', 'Jl Raya Lebakwangi (Luragung)', 'Kuningan'),
('SH000851', 'TB UMAS', '2013-03-12', 'Jl Ahmad Yani No 10', 'Subang'),
('SH000855', 'BERKAT BANGUNAN', '2013-03-24', 'Jl Logam No 48', 'Bandung'),
('SH000856', 'WARNA INDAH', '2013-05-28', 'Jl Ahmad Yani ', 'Indramayu'),
('SH000857', 'SUMBER JAYA', '2013-06-12', 'Jl Kanggraksan No.82/84', 'Cirebon'),
('SH000859', 'GARUDA', '2013-09-12', 'Jl Raya Dayeuhkolot', 'Bandung'),
('SH000926', 'JAYA LESTARI', '2013-10-08', 'Jl Batununggal Indah Raya', 'Bandung'),
('SH000926-', 'CAHAYA MAKMUR', '2016-11-06', 'Jl. Cikutra', 'Bandung'),
('SH000945', 'JAYA SENTOSA Garut', '2013-11-15', 'Jl Ahmad Yani No 194', 'Garut'),
('SH000962', 'GRAHA SENI BANGUNAN', '2013-12-26', 'Jl Ahmad Yani', 'Bandung'),
('SH001020', 'SINAR PUTRA', '2013-12-12', 'Jl Raya Cileunyi-Rancaekek', 'Bandung'),
('SH001022', 'KARYA PEMBANGUNAN', '2014-02-06', 'Jl Purwakarta', 'Bandung'),
('SH001025', 'KAWAN BARU', '2016-04-10', 'Jl Bandung', 'Cianjur'),
('SH001053', 'PRIMA JAYA', '2014-03-13', 'Jl Ir H Djuanda', 'Cirebon'),
('SH001061', 'RACHMAT PUTRA', '2014-04-14', 'Jl Ters Jakarta', 'Bandung'),
('SH001061-', 'SUMBER LOGAM SH001377', '2014-08-01', 'Jl Achmad Yani', 'Bandung'),
('SH001074', 'TB AGUNG', '2014-08-26', 'Jl Babakan No.47', 'Cimahi'),
('SH001102', 'SUMBER AGUNG', '2014-03-15', 'Jl Sumber', 'Cirebon'),
('SH001103', 'GUNA JAYA II', '2014-03-07', 'Jl Jend Sudirman No 9', 'Majalengka'),
('SH001184', 'SINAR OBOR', '2014-06-22', 'Jl Babakan Mambo 1', 'Indramayu'),
('SH001236', 'TB. CIGADUNG', '2016-06-26', 'jl. Cigadung', 'Bandung'),
('SH001241', 'MAJU MAPAN ', '2016-09-08', 'Jl. Pahlawan - Komplek Perum Bumi Asri Dawuan', 'Cirebon'),
('SH001258', 'BERDIKARI EXPO SUKABUMI', '2015-09-30', 'JL. RA. KOSASIH NO. 37 CIBEUREUM HILIR', 'Sukabumi'),
('SH001259', 'BERDIKARI EXPO CIANJUR', '2016-04-07', 'Jl Arief Rahman Hakim', 'Cianjur'),
('SH001293', 'JAYA SENTOSA 2', '2015-06-14', 'JL. Tarumanergara No. 51', 'Tasikmalaya'),
('SH001339', 'DEPO BANGUNAN', '2016-06-24', 'Jl. Soekarno Hatta', 'Bandung'),
('SH001348', 'RKM', '2014-01-24', 'Jl A.Yani', 'Bandung'),
('SH001353', 'RUMAH WARNA SEJAHTERA', '2016-05-03', 'JL. LETNAN SAMUJI NO. 51', 'Ciamis'),
('SH001356', 'SARANA INDAH', '2015-06-17', 'Jl. Kantor Pos (BKR)', 'Banjar'),
('SH001390', 'EGY ROYOM', '2016-05-27', 'Jamblang', 'Cirebon'),
('SH001399', 'SINDANG JAYA', '2015-11-01', 'Jl. A.H. Nasution No.23, Mandalajati, Kota Bandung, ', 'Bandung'),
('SH001407', 'MARTHEFA', '2014-04-04', 'Kota Baru Prahyangan', 'Padalarang'),
('SH001437', 'SINAR TERANG ABADI II', '2016-04-06', 'JL. Cimareme', 'Padalarang'),
('SH00148', 'GRAHA SS ', '2017-02-20', 'Jl. Mayor S.L Tobing No 123 A', 'Tasikmalaya'),
('sumberalam', 'TB PUTERA SUMBER ALAM', '2017-09-05', 'JL. Raya Tulung Agung', 'Indramayu'),
('tbanda', 'TB. ANDA', '2017-06-06', 'Jl. AHMAD YANI NO 26', 'Kuningan'),
('trisakti', 'TB TRISAKTI', '2017-09-13', 'JL. Merdeka', 'Pangandaran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `nama_lengkap`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator'),
('S000490', '81dc9bdb52d04dc20036dbd8313ed055', 'Adi Rosadi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  ADD PRIMARY KEY (`id_complain`);

--
-- Indexes for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  ADD PRIMARY KEY (`id_maintenance`);

--
-- Indexes for table `tbl_mesin`
--
ALTER TABLE `tbl_mesin`
  ADD PRIMARY KEY (`id_mesin`);

--
-- Indexes for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`kode_toko`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  MODIFY `id_maintenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_mesin`
--
ALTER TABLE `tbl_mesin`
  MODIFY `id_mesin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
