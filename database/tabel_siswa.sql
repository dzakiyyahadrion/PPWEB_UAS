-- BUAT TABLE SISWA
CREATE TABLE siswa (
	id int(11) NOT NULL AUTO_INCREMENT,
	nis varchar(25) NOT NULL,
	nama varchar(50) NOT NULL,
	tempat_lahir varchar(25) NOT NULL,
	tgl_lahir date NOT NULL,
	jenis_kelamin enum('Laki-laki','Perempuan') NOT NULL,
	angkatan varchar(9) NOT NULL,
	status_siswa enum('Aktif','DO','Lulus') NOT NULL,
	foto varchar(50) NULL,
 PRIMARY KEY (id)
);

-- INSERT TABLE SISWA
INSERT INTO  siswa (nis, nama, tempat_lahir, tgl_lahir, jenis_kelamin, angkatan, status_siswa) VALUES
('20150001', 'LILIS HAPIPAH', 'Depok', '2004-10-01', 'Perempuan', '2015/2016', 'Aktif'),
('20150002', 'ATIKA AJI LESTARI', 'Depok', '2004-10-02', 'Perempuan', '2015/2016', 'Aktif'),
('20150003', 'MAULIDINIA MUSLIM', 'Depok', '2004-10-03', 'Perempuan', '2015/2016', 'Aktif'),
('20150004', 'RIZKY DWI LESTARI', 'Depok', '2004-10-04', 'Perempuan', '2015/2016', 'Aktif'),
('20150005', 'FAJAR PUTRA CHAELLAN', 'Depok', '2004-10-05', 'Laki-laki', '2015/2016', 'Aktif'),
('20150006', 'PANDU IMAM TITI ANTO', 'Depok', '2004-10-06', 'Laki-laki', '2015/2016', 'Aktif'),
('20150007', 'GHINA LUQYANA', 'Depok', '2004-10-07', 'Perempuan', '2015/2016', 'Aktif'),
('20150008', 'MUHAMMAD FAA`IQ ABDILLAH', 'Depok', '2004-10-08', 'Laki-laki', '2015/2016', 'Aktif'),
('20150009', 'NAURAH RAHADATUL`AISY', 'Depok', '2004-10-09', 'Perempuan', '2015/2016', 'Aktif'),
('20150010', 'RATIH PURWASIH', 'Tangerang', '2004-10-10', 'Perempuan', '2015/2016', 'Aktif'),
('20150011', 'HALIMAH SA`DIYAH', 'Tangerang', '2004-10-11', 'Perempuan', '2015/2016', 'Aktif'),
('20150012', 'ELOK DIYAH AYU LARASATI', 'Tangerang', '2004-10-12', 'Perempuan', '2015/2016', 'Aktif'),
('20150013', 'ABDURRAHMAN PAUJI ISHAK', 'Tangerang', '2004-10-13', 'Laki-laki', '2015/2016', 'Aktif'),
('20150014', 'VILDA FEMILIA', 'Tangerang', '2004-10-14', 'Perempuan', '2015/2016', 'Aktif'),
('20150015', 'TAZKIYATUL MUNA', 'Tangerang', '2004-10-15', 'Perempuan', '2015/2016', 'Aktif'),
('20150016', 'ASMA KARIMATUNNISA', 'Tangerang', '2004-10-16', 'Perempuan', '2015/2016', 'Aktif'),
('20150017', 'AULIA NUR FADILLAH', 'Tangerang', '2004-10-17', 'Perempuan', '2015/2016', 'Aktif'),
('20150018', 'KHAERUL FARHAN', 'Tangerang', '2004-10-18', 'Laki-laki', '2015/2016', 'Aktif'),
('20150019', 'DEWI ROCHAYATI', 'Tangerang', '2004-10-19', 'Perempuan', '2015/2016', 'Aktif'),
('20150020', 'RIZKI USWAR PRATAMA', 'Tangerang', '2004-10-20', 'Laki-laki', '2015/2016', 'Aktif'),
('20160001', 'MUHAMMAD KODRI KOSTOLANI', 'Jakarta', '2005-10-01', 'Laki-laki', '2016/2017', 'Aktif'),
('20160002', 'MUHAMMAD RENALDI', 'Jakarta', '2005-10-02', 'Laki-laki', '2016/2017', 'Aktif'),
('20160003', 'NABIL BADRUTTAMAMI', 'Jakarta', '2005-10-03', 'Laki-laki', '2016/2017', 'Aktif'),
('20160004', 'ANANDA VIKA WAHYU PUTRANTI', 'Jakarta', '2005-10-04', 'Perempuan', '2016/2017', 'Aktif'),
('20160005', 'NISRIINA SUFIKA', 'Jakarta', '2005-10-05', 'Perempuan', '2016/2017', 'Aktif'),
('20160006', 'RIKI MAULANA ', 'Jakarta', '2005-10-06', 'Laki-laki', '2016/2017', 'Aktif'),
('20160007', 'DINA ANDRIANI', 'Jakarta', '2005-10-07', 'Perempuan', '2016/2017', 'Aktif'),
('20160008', 'AFIFAH HANIFATUSH SHOLIHAH', 'Jakarta', '2005-10-08', 'Perempuan', '2016/2017', 'Aktif'),
('20160009', 'SINDY INDAH OKTAVIA', 'Jakarta', '2005-10-09', 'Perempuan', '2016/2017', 'Aktif'),
('20160010', 'ALBA AHMAD ASSEGAF', 'Depok', '2005-10-10', 'Laki-laki', '2016/2017', 'Aktif'),
('20160011', 'ASEP APANDI NOVAL', 'Depok', '2005-10-11', 'Laki-laki', '2016/2017', 'Aktif'),
('20160012', 'TITIK AINUN HATINAH', 'Depok', '2005-10-12', 'Perempuan', '2016/2017', 'Aktif'),
('20160013', 'JAELANI ANTON PRATAMA PUTRA', 'Depok', '2005-10-13', 'Laki-laki', '2016/2017', 'Aktif'),
('20160014', 'AHMAD SYAIROFI', 'Depok', '2005-10-14', 'Laki-laki', '2016/2017', 'Aktif'),
('20160015', 'MUSTAFA KAMAL ALMAROGHI', 'Depok', '2005-10-15', 'Laki-laki', '2016/2017', 'Aktif'),
('20160016', 'KAMILLIA INSANI', 'Depok', '2005-10-16', 'Perempuan', '2016/2017', 'Aktif'),
('20160017', 'NURUL DINDA AULIA', 'Depok', '2005-10-17', 'Perempuan', '2016/2017', 'Aktif'),
('20160018', 'ALBI SYARAH', 'Depok', '2005-10-18', 'Perempuan', '2016/2017', 'Aktif'),
('20160019', 'NURUSYIFA KHOFIFAH', 'Tangerang', '2005-10-19', 'Perempuan', '2016/2017', 'Aktif'),
('20160020', 'DITA SABILASARI', 'Tangerang', '2005-10-20', 'Perempuan', '2016/2017', 'Aktif'),
('20170001', 'RIZIQ FAUQI', 'Tangerang', '2006-10-01', 'Laki-laki', '2017/2018', 'Aktif'),
('20170002', 'SYARIFAH LATIFAH', 'Tangerang', '2006-10-02', 'Perempuan', '2017/2018', 'Aktif'),
('20170003', 'MIA AMALYA AMANDA', 'Tangerang', '2006-10-03', 'Perempuan', '2017/2018', 'Aktif'),
('20170004', 'ISNA KHAIRUNASRI ISLAMAY', 'Tangerang', '2006-10-04', 'Perempuan', '2017/2018', 'Aktif'),
('20170005', 'NAZAIRAH', 'Tangerang', '2006-10-05', 'Perempuan', '2017/2018', 'Aktif'),
('20170006', 'FAQIHUDIN', 'Tangerang', '2006-10-06', 'Laki-laki', '2017/2018', 'Aktif'),
('20170007', 'AENUN GHURROH', 'Tangerang', '2006-10-07', 'Perempuan', '2017/2018', 'Aktif'),
('20170008', 'DIAN ASHRI MAULIDIYAH', 'Tangerang', '2006-10-08', 'Perempuan', '2017/2018', 'Aktif'),
('20170009', 'MUHAMAD YUSRON ULUL ALBAB', 'Tangerang', '2006-10-09', 'Laki-laki', '2017/2018', 'Aktif'),
('20170010', 'HANIFAH USWATUN HASANAH', 'Jakarta', '2006-10-10', 'Perempuan', '2017/2018', 'Aktif'),
('20170011', 'NUGROHO EKA PRASETIO', 'Jakarta', '2006-10-11', 'Laki-laki', '2017/2018', 'Aktif'),
('20170012', 'AHMAD NAJIB', 'Jakarta', '2006-10-12', 'Laki-laki', '2017/2018', 'Aktif'),
('20170013', 'FARHAH NAILUL MUNA KADMAS', 'Jakarta', '2006-10-13', 'Perempuan', '2017/2018', 'Aktif'),
('20170014', 'RAMADANTI AULIA PUTRI', 'Jakarta', '2006-10-14', 'Perempuan', '2017/2018', 'Aktif'),
('20170015', 'ABI YAZID AL BUSTOMI', 'Jakarta', '2006-10-15', 'Laki-laki', '2017/2018', 'Aktif'),
('20170016', 'NUHA AZIZAH', 'Jakarta', '2006-10-16', 'Perempuan', '2017/2018', 'Aktif'),
('20170017', 'MULYAWATI RAHMATUL WAHIDA', 'Jakarta', '2006-10-17', 'Perempuan', '2017/2018', 'Aktif'),
('20170018', 'KHAEIRUL UMAM', 'Jakarta', '2006-10-18', 'Laki-laki', '2017/2018', 'Aktif'),
('20170019', 'MOHAMAD YAZID ABRORI', 'Jakarta', '2006-10-19', 'Laki-laki', '2017/2018', 'Aktif'),
('20170020', 'VINNE OCTALIVIA HANIF AZIZ', 'Jakarta', '2006-10-20', 'Perempuan', '2017/2018', 'Aktif');
