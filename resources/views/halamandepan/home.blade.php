@extends('halamandepan.master')
<!-- Theme style -->
 <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
@section('content')
<div class="content" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="{{ asset('images/pelajar.png') }}" alt="kartu KIP" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Tujuan PIP</strong></h1>
                            </div>
                        </div>
                        <p style="text-align: justify">PIP dirancang untuk membantu anak-anak usia sekolah dari keluarga miskin/rentan miskin/prioritas tetap mendapatkan layanan 
                            pendidikan sampai tamat pendidikan menengah, baik melalui jalur pendidikan formal (mulai SD/MI hingga anak Lulus SMA/SMK/MA) maupun pendidikan non formal 
                            (Paket A hingga Paket C serta kursus terstandar). Melalui program ini pemerintah berupaya mencegah peserta didik dari kemungkinan putus sekolah, 
                            dan diharapkan dapat menarik siswa putus sekolah agar kembali melanjutkan pendidikannya. PIP juga diharapkan dapat meringankan biaya personal pendidikan peserta didik, 
                            baik biaya langsung maupun tidak langsung.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="https://pip.kemdikbud.go.id/img/home/home-left.png" alt="kartu KIP" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Program Indonesia Pintar</strong></h1>
                            </div>
                        </div>
                        <p style="text-align: justify">Merupakan bantuan berupa uang tunai, perluasan akses, dan kesempatan belajar dari pemerintah yang diberikan kepada peserta didik dan mahasiswa yang berasal dari keluarga miskin atau rentan miskin untuk membiayai pendidikan melalui Kartu Indonesia Pintar (KIP)</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="https://pip.kemdikbud.go.id/img/home/penggunaan.png" alt="untuk apa dana PIP" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Pemanfaatan Dana PIP</strong></h1>
                            </div>
                        </div>
                        <p style="text-align: justify">Dana PIP dapat digunakan untuk membantu biaya pribadi peserta didik, seperti membeli perlengkapan sekolah/kursus, 
                            uang saku dan biaya transportasi, biaya praktik tambahan serta biaya uji kompetensi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="https://pip.kemdikbud.go.id/img/home/sasaran.png" alt="sasaran" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Prioritas Sasaran Penerima PIP</strong></h1>
                            </div>
                        </div>
                            <ul style="text-align: left; padding: 0px 0px 0px 15px;">
                                <li>Peserta Didik pemegang KIP</li>
                                <li>Peserta Didik dari keluarga miskin/rentan miskin dan/atau dengan pertimbangan khusus seperti:
                                    <ul style="text-align: left; padding: 0px 0px 0px 20px;">
                                        <li>Peserta Didik dari keluarga peserta Program Keluarga Harapan</li>
                                        <li>Peserta Didik dari keluarga pemegang KartuKeluarga Sejahtera</li>
                                        <li>Peserta Didik yang berstatus yatimpiatu/yatim/piatu dari sekolah/panti sosial/panti asuhan</li>
                                        <li>Peserta Didik yang terkena dampak bencana alam</li>
                                        <li>Peserta Didik yang tidak bersekolah (drop out) yang diharapkan kembali bersekolah</li>
                                        <li>Peserta Didik yang mengalami kelainan fisik, korban musibah, dari orang tua yang mengalami pemutusan hubungan kerja, di daerah konflik, dari keluarga terpidana, berada di Lembaga Pemasyarakatan, memiliki lebih dari 3 (tiga) saudara yang tinggal serumah</li>
                                        <li>Peserta pada lembaga kursus atau satuan pendidikan nonformal lainnya</li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="{{ asset('images/pelajar.png') }}" alt="kartu KIP" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Mengapa harus ada Kartu Indonesia Pintar (KIP?</strong></h1>
                            </div>
                        </div>
                        <p style="text-align: justify">KIP diberikan sebagai penanda/identitas penerima bantuan pendidikan PIP.
                            Kartu ini memberi jaminan dan kepastian anak-anak usia sekolah terdaftar sebagai penerima bantuan pendidikan.
                            Setiap anak penerima bantuan pendidikan PIP hanya berhak mendapatkan 1 (satu) KIP.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="{{ asset('images/pelajar.png') }}" alt="kartu KIP" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Bagaimana jika KIP hilang/rusak?</strong></h1>
                            </div>
                        </div>
                        <p style="text-align: justify">Kartu menjadi tanggung jawab pemilik. Jika KIP hilang/rusak, pemilik kartu dapat segera menghubungi kontak pengaduan PIP.
                            Untuk penggantian kartu baru, pemilik wajib memberitahukan nomor KIP dan menyertakan identitas diri.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection