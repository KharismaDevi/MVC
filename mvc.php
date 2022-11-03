MODEL	VIEW	CONTROLLER
Tabel Anggota:
Struktur:
-	NIM varchar(10)
-	Nama varcar(50)
-	Prodi varchar(25)
-	Angkatan int (5)
-	Alamat varchar(100)
-	Jenis_kelamin(15)
Method:
-	Tambah_agt.php
-	Tampil_ agt.php
-	Edit_ agt.php
-	Cari_ agt.php
-	Hapus_ agt.php


Tabel petugas: 
Sruktur:
-	Kd_petugas varchar (10)
-	Nama varchar(50)
-	Jabatan varchar(15)
-	Jenis_kelamin(15)
-	Telp int(13)
-	Alamat varchar(100)
Method:
-	Ubah_data.php
-	Tampil_data.php
-	Tambah_data.php


Tabel Buku
Struktur:
-	Kd_buku varchar(10)
-	judul varchar(20)
-	penulis varchar(15)
-	penerbit(20)
-	thn_terbit date
method:
-	tampil_buku.php
-	tambah_buku.php
-	edit.php.php
-	cari.php.php
-	hapus_buku.php


Tabel Peminjaman
Struktur:
-	Kd_peminjaman varchar(10)
-	NIM varchar (10)
-	Kd_petugas varchar(10)
-	Kd_buku varchar(10)
-	Tanggal_pinjam date
-	Tanggal_kembali date
Method:
-	Tambah_pinjam.php
-	Edit_pinjam.php
-	Hapus_pinjam.php
-	Cetak_pinjam.php


Tabel Pengembalian
Struktur:
-	Kd_kembali varchar(10)
-	Tanggal_kembali date
-	Jatuh_tempo date
-	Denda char(15)
-	Kd_petugas varchar(10)
-	NIm varchar(10)
-	Kd_buku varchar(10)
Method:
-	Tampil_kembali.php
-	Tambah_kembali.php
-	Edit_kembali.php
-	Hapus_kembali.php
-	Cetak_kembali.php	-	Halaman form tambah anggota – tambah anggota


-	Halaman daftar anggota – tampil data
-	Halaman form pengupdate anggota – edit data
-	Halaman konfirmasi hapus – hapus data
-	Halaman cetak – cari dan tampil data
-	Halaman dashboard/index anggota
-	Halaman form login anggota


-	Halaman form tambah data petugas– tambah data petugas
-	Halaman daftar petugas – tampil data petugas
-	Halaman form pengupdate anggota petugas – edit data petugas
-	Halaman form login petugas


-	Halaman form tambah buku– tambah data buku
-	Halaman daftar buku– tampil data buku
-	Halaman form pengupdate buku – edit buku
-	Halaman cetak buku – cari dan tampil data buku
-	Halaman konfirmasi hapus – hapus buku



-	Halaman form tambah peminjaman – tambah peminjaman
-	Halaman cetak peminjaman – tampil data peminjaman
-	Halaman form pengupdate peminjaman – edit data peminjaman
-	Halaman konfirmasi hapus – hapus data peminjaman


-	Halaman form tambah pengembalian – tambah pengembalian
-	Halamantampil pengembalian– tampil data pengembalian
-	Halaman form pengupdate pengembalian – edit pengembalian
-	Halaman konfirmasi hapus – hapus data pengembalina
-	Halaman cetak – cari dan tampil data pengembalian
-	Halaman dashboard/index pengembalian

	Controller Anggota
Method:
-	Index() – halaman utama aplikasi perpustakaan USM berbasis web
•	Panggil view dashboard
-	Tampil() – tampil data berupa list daftar anggota
•	Panggil model anggota-tampil_agt()
•	Panggil view halaman daftar anggota


Controller Petugas
Method:
-	Index() – halaman utama petugas
•	Panggil view dashboard
-	Tampil() – tampil data berupa list daftar petugas
•	Panggil model petugas-tampil_data()
•	Panggil view halaman petugas


Controller buku
Method:
-	Index() – halaman utama form  buku
•	Panggil view dashboard halaman buku
-	Tampil() – tampil data berupa list daftar buku
•	Panggil model peminjaman-tampil_data_buku()
•	Panggil view halaman buku


Controller Peminjaman
Method:
-	Index() – halaman utama form  peminjaman
•	Panggil view dashboard halaman peminjaman
-	Tampil() – tampil data berupa list daftar peminjaman
•	Panggil model peminjaman-tampil_data_peminjaman()
•	Panggil view halaman peminjaman

Controller pengembalian
Method:
-	Index() – halaman utama form  pengembalian
•	Panggil view dashboard halaman pengembalian
-	Tampil() – tampil data berupa list daftar pengembalian
•	Panggil model pengembalian-tampil_data_pengembalian()
•	Panggil view halaman pengembalian
Anggota_a.php
Petugas_p.php
Buku_b.php
Peminjaman_p.php

Pengembalian_pb.php	Tambah_agt.php, tampil_agt.php, edit.php, konfirm.php, cari.php, main.php, login.php\

Tambah_data.php, tampil_data.php, tambah_data.php, main.php, login.php

tampil_buku.php
tambah_buku.php edit_buku.php, konfirm.php, cari_buku.php.
hapus_buku.php, main.php

Tambah_pinjam.php
Edit_pinjam.php
Hapus_pinjam.php, konform.php
Cetak_pinjam.php, main.php

Tampil_kembali.php
Tambah_kembali.php
Edit_kembali.php, konfirm.php
Hapus_kembali.php
Cetak_kembali.php, main.php	

Anggota.php

Petugas.php

Buku.php

Peminjaman.php

Pengembalian.php

