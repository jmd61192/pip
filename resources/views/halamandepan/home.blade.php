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
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Apa itu PIP?</strong></h1>
                            </div>
                        </div>
                        <p style="text-align: justify">Program Indonesia Pintar (PIP) melalui Kartu Indonesia Pintar <strong>(KIP)</strong>
                            adalah pemberian bantuan tunai pendidikan kepada anak usia sekolah (usia 6 - 21 tahun) 
                            yang berasal dari keluarga miskin, rentan miskin: pemilik Kartu Keluarga Sejahtera (KKS),
                            peserta Program Keluarga Harapan (PKH), yatim piatu, penyandang disabilitas,korban bencana alam/musibah.
                            PIP merupakan bagian dari penyempurnaan program Bantuan Siswa Miskin (BSM).</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="{{ asset('images/pelajar.png') }}" alt="kartu KIP" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Apa tujuan PIP?</strong></h1>
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
                <div class="col-lg-12">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="{{ asset('images/pelajar.png') }}" alt="kartu KIP" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Bagaimana jika siswa miskin belum menerima KIP?</strong></h1>
                            </div>
                        </div>
                        <p style="text-align: justify">Siswa dapat mendaftar dengan membawa Kartu Keluarga Sejahtera (KKS) orang tuanya ke lembaga pendidikan terdekat. 
                            Jika siswa tersebut tidak memiliki KKS, orang tuanya dapat meminta Surat Keterangan Tidak Mampu (SKTM) dari RT/RW dan Kelurahan/Desa 
                            terlebih dahulu agar dapat melengkapi syarat pendaftaran.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="{{ asset('images/pelajar.png') }}" alt="kartu KIP" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Apa Kewajiban peserta didik penerima dana PIP?</strong></h1>
                            </div>
                        </div>
                            <ol style="text-align: left; padding: 0px 0px 0px 15px;">
                                <li>Menyimpan dan menjaga KIP dengan baik;</li>
                                <li>PIP merupakan bantuan pendidikan. Dana Manfaatnya harus digunakan untuk keperluan yang relevan;</li>
                                <li>Terus belajar dan bersekolah (tidak putus sekolah) dengan rajin, disiplin dan tekun.</li>
                            </ol>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="callout callout-danger">
                        <div class="row">
                            <div class="col-sm-3 float-right">
                                <img src="{{ asset('images/pelajar.png') }}" alt="kartu KIP" alt="Responsive Image" class="img-fluid float-left" style="max-width: 150px;">
                            </div>
                            <div class="col-sm-9 float-left">
                                <h1 style="text-align: right; padding: 20px 10px 0px 0px; font-style: bold;"><strong>Untuk apa saja penggunaan dana PIP?</strong></h1>
                            </div>
                        </div>
                        <p style="text-align: justify">Dana PIP dapat digunakan untuk membantu biaya pribadi peserta didik, seperti membeli perlengkapan sekolah/kursus, 
                            uang saku dan biaya transportasi, biaya praktik tambahan serta biaya uji kompetensi.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
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
                <div class="col-lg-12">
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
            card
        </div>
    </div>
</div>
@endsection