<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DINDUKCAPIL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: white;
            padding-top: 70px;
        }
        .navbar {
            margin-bottom: -20px;
            background-color: #17a2b8;
        }
        .navbar-brand, .nav-link, .navbar-toggler-icon {
            color: white !important;
        }
        .navbar-toggler {
            border: none;
        }
        .header {
            background-color: white;
            color: black;
            padding: 20px 0;
            text-align: center;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
        .dropdown-menu a {
            color: #007bff !important;
        }

        /* Tambahan style untuk card */
        .card-body {
            display: flex;
            flex-direction: row;
            gap: 20px;
            padding: 20px;
        }

        .card-content {
            flex: 0 0 auto;
            max-width: 310px;
        }

        .card-info {
            margin-top: 65px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content:space-around;
        }

        .card-text {
            margin-bottom: 20px;
        }

        .btn-container {
            text-align: right;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .card-body {
                flex-direction: column;
            }
            
            .card-content {
                max-width: 100%;
            }

            .btn-container {
                text-align: center;
            }
        }
        .footer {
            color: black;
            text-align: center;
            font-size: 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
   <div style="display: flex;">
       <a class="navbar-brand" href="#">
            <img src="{{ asset('vendor/adminlte/dist/img/logobms.png') }}" alt="Logo" style="width: 48px; height: 48px;" class="mr-2">
        </a> 
        <h4 style="color: white; margin-top: 5px;">Dinas Kependudukan dan <br> Pencatatan Sipil</h4>
   </div>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Login
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="{{ route('login') }}" target="_blank">Admin</a>
                   <a class="dropdown-item" href="{{ route('login') }}" target="_blank">User</a>
               </div>
           </li>
       </ul>
   </div>
</nav>

<div class="header">
            <marquee direction="left" bgcolor="grey" scrollamount="-5">Dapatkan informasi terkini dan pemberitahuan penting | </marquee>
            <h1>Selamat Datang di Portal Informasi Instansi Pemerintah</h1>
</div>

<div class="container">
    <h2 class="text-center my-4">Berita terbaru</h2>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-content">
                <h5 class="card-title">INFO TERKINI</h5>
                <p>2 Maret</p>
                <img src="{{ asset('vendor/imghome/pegawai.jpg') }}" style="width: 300px; height: 300px; font-weight:bold;" class="card-img-top" alt="Pemberitahuan 1">
            </div>
            <div class="card-info">
                <b>Adminduk Banyumas “Ora Nganti Sejam”, Tidak Jadi Akan Diantar</b>
                <p>BANYUMAS – Jajaran pegawai Dinas Kependudukan dan Catatan Sipil Kabupaten Banyumas menyampaikan tekad di hadapan Bupati Banyumas Achmad Husein, bahwa mulai Sabtu (29/2/2020) pelayanan administrasi kependudukan selesai dalam waktu satu jam. Hal tersebut disampaikan usai Bupati Banyumas memberi motivasi dan arahan kepada seluruh pegawai Dindukcapil agar melayani masyarakat dengan maksimal.
                Kepala Dindukcapil Wisnu Sujatmiko menjelaskan perubahan perilaku para pegawai Dindukcapil termasuk tata cara pelayanan, serta pembenahan sarana prasarana yang ada, sebagai respon atas ketidaksukaan bupati saat kunjungan beberapa waktu lalu. Saat itu pelayanan di kantornya terlihat ramai dan tidak teratur.</p>
                <a href="https://jatengprov.go.id/beritadaerah/banyumas-terima-10-000-blangko-e-ktp-antrean-200-ribu/" target="_blank" class="btn btn-info">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-content">
                <h5 class="card-title">INFO TERKINI</h5>
                <p>24 Maret</p>
                <img src="{{ asset('vendor/imghome/dirjen.jpg') }}" style="width: 300px; height: 300px; font-weight:bold;" class="card-img-top" alt="Pemberitahuan 2">
            </div>
            <div class="card-info">
                <b>Adminduk Banyumas “Ora Nganti Sejam”, Tidak Jadi Akan Diantar</b>
                <p>BANYUMAS, Joglo Jateng – Dinas Kependudukan dan Pencatatan Sipil (Dindukcapil) Kabupaten Banyumas mendapat apresiasi dari Direktur Jenderal Kependudukan dan Pencatatan Sipil (Dirjen Dukcapil) Teguh Setyabudi atas kinerja dan inovasi yang telah dilakukan. Hal itu karena Dindukcapil Banyumas mampu memenuhi target nasional untuk perekaman, pencetakan Kartu Tanda Penduduk Elektronik (e-KTP), dan penerbitan Kartu Identitas Anak (KIA).
                “Kinerja Dindukcapil Banyumas sudah bagus, karena target nasional mampu dilampaui. Meskipun begitu, pelayanan harus terus ditingkatkan. Terlebih menjelang Pemilu 2024, Dindukcapil secara keseluruhan di semua wilayah, termasuk Banyumas, harus mampu menyajikan data yang valid,” kata Dirjen Dukcapil, Jumat (17/3).</p>
                <a href="https://jatengprov.go.id/beritadaerah/banyumas-terima-10-000-blangko-e-ktp-antrean-200-ribu/" target="_blank" class="btn btn-info">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="faq-sectioon">
    <h2 class="textcenter my-4"> FAQ</h2>
    <div class="according" id="faqAccording">
        <div class="card-faq">
            <div class="card-header" id="faqOne">
                <h5 class="mb-0">
                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">STANDAR PELAYANAN PENERBITAN KARTU KELUARGA</button>
                </h5>
            </div>
            <div class="collapse"  id="collapseOne" aria-labelledby="faqOne" data-parent="#faqAccordion">
                <div class="faq-body">
                    <p>Silakan gunakan layanan online di <a href="http://gratiskabeh.banyumaskab.go.id" target="_blank" rel="noopener noreferrer"></a> dan pilih salah satu link yang tersedia. Pastikan menggunakan email aktif saat mengajukan dokumen kependudukan.<br><br></p>
                    <strong> KK BARU UNTUK PENDUDUK WNI :</strong><br>
                                            <p>
                                                &emsp;∘ Baru Nikah/Kutipan akta perkawinan/perceraian. <br>
                                                &emsp;∘ Surat Keterangan pindah/datang bagi penduduk dalam wilayah NKRI. <br>
                                                &emsp;∘ Surat keterangan pindah luar negeri yang diterbitkan oleh dindukcapil Kabupaten/Kota bagi WNI yang datang dari luar wilayah NKRI karena pindah. <br>
                                                &emsp;∘ Surat keterangan pengganti penduduk rentan <br>
                                            </p>
                                        <strong>KK BARU UNTUK PENDUDUK ORANG ASING</strong>
                                            <p>
                                                &emsp;∘ izin tetap tinggal <br>
                                                &emsp;∘ Buku nikah/kutipan akta perkawinan/perceraian <br>
                                                &emsp;∘ Surat keterangan pindah/surat ketarangan pindah datang bagi penduduk yang pindah dalam wilayah NKRI <br>
                                                &emsp;∘ Dokumen perjalanan dan Surat pernyataan tanggungJawab mutlak perkawinan/perceraian belum tercata.<br>
                                            </p>
                                        <strong>KARENA PERUBAHAN DATA (PERISTIWA KEPENDUDUKAN)</strong>
                                            <p>
                                                &emsp;∘ KK lama <br>
                                                &emsp;∘ Surat keterangan/bukti perubahan peristiwa Kependudukan <br>
                                            </p>
                                        <strong>KARENA PERUBAHAN DATA (PERISTIWA PENTING)</strong>
                                            <p>
                                                &emsp;∘ KK lama <br>
                                                &emsp;∘ Surat keterangan/bukti perubahan peristiwa penting<br>
                                            </p>
                                        <strong> KARENA PERTJBAHAN DATA (ELEMEN DATA)</strong>
                                            <p>
                                                &emsp;∘ KK lama <br>
                                                &emsp;∘ Surat keterangan/bukti perubahan element penting<br>
                                            </p>
                                        <strong>KARENA HILANG ATAU RUSAK BAGI WNI:</strong>
                                            <p>
                                                &emsp;∘ Surat keterangan hilang dari kepolisian atau KK yang rusak; <br>
                                                &emsp;∘ KTP-el <br>
                                                &emsp;∘ Surat pernyataan penyebab terjadinya hilang/rusak.<br>
                                            </p>
                                        <strong>BAGI PENDUDUK ORANG ASING:</strong>
                                            <p>
                                                &emsp;∘ Surat keterangan hilang dari kepolisian atau KK yang rusak; <br>
                                                &emsp;∘ KTP-el <br>
                                                &emsp;∘ Kartu izin tetap tinggal <br>
                                                &emsp;∘ Surat pernyataan penyebab terjadinya hilang/rusak.<br>
                                            </p>                
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="card-faq">
                <div class="card-header" id="faqTwo">
                    <h5 class="mb-0"><button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">STANDAR PELAYANAN PENERBITAN KARTU TANDA PENDUDUK ELEKTRONIK</button></h5>
                </div>
                <div class="collapse" id="collapsetwo" aria-labelledby="faqTwo" data-parent="#faqAccordion">
                    <div class="faq-body">
                        <p>Silakan gunakan layanan online di <a href="http://gratiskabeh.banyumaskab.go.id" target="_blank" rel="noopener noreferrer"></a> dan pilih salah satu link yang tersedia. Pastikan menggunakan email aktif saat mengajukan dokumen kependudukan.<br><br></p>
                        <strong>KTP-el BARU BAGI WNI</strong><br>
                                        <p>
                                            &emsp;∘ KK <br>
                                            &emsp;∘ Telah Berusia 17Tahun,Sudah  Menikah, atau pemah kawin <br>
                                        </p>
                                        <strong>KARENA HILANG ATAU RUSAK BAGI PENDUDUK WNI ATAU ORANG ASING YANG MEMILIKI IZIN TINGGAL TETAP</strong><br>
                                        <strong> &emsp;Hilang Bagi WNI</strong>
                                        <p>
                                            &emsp;&emsp;∘ Surat keterangan hilang dari kepolisinan <br>
                                            &emsp;&emsp;∘ KK <br>
                                            &emsp;&emsp;∘ Dokumen perjalanan RI <br>
                                        </p>
                                        <strong> &emsp;Hilang Bagi WNA</strong>
                                        <p>
                                            &emsp;&emsp;∘ Surat keterangan hilang dari kepolisinan <br>
                                            &emsp;&emsp;∘ KK <br>
                                            &emsp;&emsp;∘ Dokumen perjalanan <br>
                                            &emsp;&emsp;∘ Kartu Izin Tetap Tinggal <br>
                                        </p>
                                        <strong> &emsp;Rusak Bagi WNI</strong>
                                        <p>
                                            &emsp;&emsp;∘ KTP-el yang rusak <br>
                                            &emsp;&emsp;∘ KK <br>
                                        </p>
                                        <strong> &emsp;Rusak Bagi WNA</strong>
                                        <p>
                                            &emsp;&emsp;∘ KTP-el yang tusak <br>
                                            &emsp;&emsp;∘ KK <br>
                                            &emsp;&emsp;∘ Dokumen perjalanan dan Kartu izin tinggal tetap.                                            <br>
                                        </p>
                                        <strong> &emsp;KARENA PINDAH DATANG PENDUDUK WNI DALAM WILAYAH NKRI DAN PENDUDUK WNI YANG BERTRANSMIGRASI</strong>
                                        <p>
                                            &emsp;&emsp;∘ Surat keterangan pindah dar, Dindukcapil Kab/Kota atau Dindukcapil Kab/Kota daerah asa <br>
                                            &emsp;&emsp;∘ KK <br>
                                        </p>
                                        <strong> &emsp; KARENA PINDAH DATANG WNI YANG DATANG DARI LUAR WILAYAH NKRI</strong>
                                        <p>
                                            &emsp;&emsp;∘ Surat keterangan pindah dari Perwakilan RI <br>
                                            &emsp;&emsp;∘ KK <br>
                                            &emsp;&emsp;∘ Dokumen perjalanan<br>
                                            &emsp;&emsp;∘ SKPLN<br>
                                        </p>
                                        <strong> &emsp;KARENA PINDAH DATANG ORANG ASING YANG MEMILIKI IZIN TINGGAL TETAP</strong>
                                        <p>
                                            &emsp;&emsp;∘ Suratketerangan pindah <br>
                                            &emsp;&emsp;∘ Kartu izin tinggal tetap<br>
                                            &emsp;&emsp;∘ Dokumen perjalanan<br>
                                            &emsp;&emsp;∘ KK<br>
                                            &emsp;&emsp;∘ KTP-el daerah asa<br>
                                        </p>
                                        <strong> &emsp; KARENA PERUBAHAN DATA PENDUDUK WNI DAN PENDUDUK ORANG ASING YANG MEMILIKI IZIN TINGGAL TETAP</strong>
                                        <p>
                                            &emsp;&emsp;∘ KTP-el Lama <br>
                                            &emsp;&emsp;∘ KK <br>
                                            &emsp;&emsp;∘ Kartu izin tetap<br>
                                            &emsp;&emsp;∘ Surat keterangan bukti perubahan peristiwa kependudukan dan peristiwa penting.<br>
                                        </p>
                                        <strong> &emsp;KTP-eI KARENA PERPANJANGAN BAGI WNA YANG MEMILIKI IZIN TINGGAL TETAP</strong>
                                        <p>
                                            &emsp;&emsp;∘ KTP-el Lamak <br>
                                            &emsp;&emsp;∘ KK <br>
                                            &emsp;&emsp;∘ Kartu izin tinggal tetap. <br>
                                        </p>
                                        <strong> &emsp;PENERBITAN KARTU TANDA PENDUDUK ELEKTRONIK DILUAR DOMISI</strong><br>
                                        <strong>&emsp;&emsp;&emsp; Penduduk WNI</strong>
                                        <p>
                                            &emsp;&emsp;&emsp;&emsp;∘ KK <br>
                                            &emsp;&emsp;&emsp;&emsp;∘ Tidak melakukan perubahan data penduduk
                                        </p>
                                        <strong>&emsp;&emsp;&emsp; Penduduk WNA</strong>
                                        <p>
                                            &emsp;&emsp;&emsp;&emsp;∘ Dokumen Perjalanan <br>
                                            &emsp;&emsp;&emsp;&emsp;∘ Kartu Izin Tetap Tinggal <br>
                                        </p>
                                        <strong>CATATAN: Sudah melakukan perekaman biometric dan tercantum dalam basis keoendudukan</strong>             
                    </div>
                </div>
            </div>
            <div class="card-faq">
                <div class="card-header" id="faqThree">
                    <h5 class="mb-0"><button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Dimana lokasi kantor kami?</button></h5>
                </div>
                <div class="collapse" id="collapseThree" aria-labelledby="faqThree" data-parent="#faqAccordion">
                    <div class="faq-body">
                        <p>Anda bisa langsung mengakses atau memeriksa lokasi melalui tautan berikut: <a href="https://maps.app.goo.gl/pX1sMYrfJsNtATnN6" target="_blank" rel="noopener noreferrer"><strong>DINDUKCAPIL PURWOKERTO</strong></a></p>
                        <br><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3369963895957!2d109.23710957643993!3d-7.427908673175181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e62c2310019%3A0xaf005e0fa2a22b6a!2sDepartment%20of%20Population%20and%20Civil%20Registration%20Banyumas!5e0!3m2!1sen!2sid!4v1731049704208!5m2!1sen!2sid" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
        <p>&copy;2024 Dinas Kependudukan dan Pencatatan Sipil.</p>
</div>
    
</body>
</html>