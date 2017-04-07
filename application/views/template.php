<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kejaksaan Republik Indonesia - TP4</title>


    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url() ?>assets/css/theme-default.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url() ?>assets/builder/css/builder.css"/>
    <!-- EOF CSS INCLUDE -->

    <style>
        .footer li a {
            text-decoration: none;
            color: whitesmoke;
        }
    </style>


</head>
<body>

<div class="page-container page-navigation-top page-navigation-top-custom">
    <div class="page-content-header" style="height: 120px;">
        <div class="col-md-1 col-xs-3">
            <img src="<?php echo base_url(); ?>assets/img/logo/logo.png" alt="" width="100px">
        </div>
        <div class="col-md-9 col-xs-6">
            <br>
            <a href="#" style="text-decoration: none"><h4><b>TIM PENGAWALAN PENGAMANAN PEMERINTAH DAN PEMBANGUNAN</b>
                </h4></a>
            <a href="#" style="text-decoration: none"><h4><b>KEJAKSAAN REPUBLIK INDONESIA</b></h4></a>
        </div>
    </div>

    <!--    Menu    -->
    <ul class="x-navigation x-navigation-horizontal">
        <li class="xn-navigation-control">
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li>
            <a href="<?php echo base_url()?>portal">
                <span class="xn-text">DASHBOARD</span>
            </a>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="xn-text">PROFIL</span></a>
            <ul>
                <li><a href="<?php echo base_url()?>profil/latar_belakang">LATAR BELAKANG</a></li>
                <li><a href="<?php echo base_url()?>profil/tentang_tp4">TENTANG TP4</a></li>
                <li><a href="<?php echo base_url()?>profil/visi_misi">VISI DAN MISI</a></li>
                <li><a href="<?php echo base_url()?>profil/tugas_wewenang">TUGAS DAN WEWENANG</a></li>
                <li><a href="<?php echo base_url()?>profil/mekanisme">MEKANISME BEKERJA</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="xn-text">KEGIATAN</span></a>
            <ul>
                <li><a href="<?php echo base_url()?>kegiatan/walman">KEGIATAN WALMAN</a></li>
                <li><a href="<?php echo base_url()?>kegiatan/tp4d">TP4 D</a></li>
                <li><a href="<?php echo base_url()?>kegiatan/tp4p">TP4 P</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="xn-text">PERATURAN</span></a>
            <ul>
                <li><a href="<?php echo base_url()?>peraturan/uu">UU</a></li>
                <li><a href="<?php echo base_url()?>peraturan/pp">PP</a></li>
                <li><a href="<?php echo base_url()?>peraturan/kepres">KEPRES</a></li>
                <li><a href="<?php echo base_url()?>peraturan/perda">PERDA</a></li>
                <li><a href="<?php echo base_url()?>peraturan/permen">PERMEN</a></li>
                <li><a href="<?php echo base_url()?>peraturan/perja">PERJA</a></li>
                <li><a href="<?php echo base_url()?>peraturan/bumn">BUMN</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="xn-text">KEMITRAAN</span></a>
            <ul>
                <li><a href="<?php echo base_url()?>kemitraan/kementrian">KEMENTRIAN</a></li>
                <li><a href="<?php echo base_url()?>kemitraan/bumn">BUMN</a></li>
                <li><a href="<?php echo base_url()?>kemitraan/bumd">BMUD</a></li>
                <li><a href="<?php echo base_url()?>kemitraan/pemerintah_profinsi">PEMERINTAH PROVINSI</a></li>
                <li><a href="<?php echo base_url()?>kemitraan/pemerintah_kota_daerah">PEMERINTAH KOTA / DAERAH</a></li>
            </ul>
        </li>
        <li><a href="<?php echo base_url()?>program_kerja">PROGRAM KERJA</a></li>
        <li><a href="<?php echo base_url()?>laporan">LAPORAN</a></li>
        <li class="pull-right">
            <a href="#">LOG IN <i class="fa fa-sign-in"></i></a>
        </li>
    </ul>
    <!--    End menu    -->
</div>


<!-- Iklan tulisan berjalan-->
<div class="row" style="background-color:#1f272f;">
    <div class="col-md-12">
        <marquee>
            <div style="color: #d0e8ff"><b>Pengumuman :</b> Launching Situs Perdana TP4 Kejaksaan Republik Indonesia</div>
        </marquee>
    </div>
</div>
<!-- EndIklan tulisan berjalan-->

<div class="row">
    <div class="panel panel-default">
        <div class="panel-body padding-0">
            <div class="chart-holder" id="dashboard-line-1" style="height: 250px;"></div>
        </div>
    </div>
</div>



<div class="page-content-wrap">
    <?php echo $contents; ?>
</div>

<!-- FOOTER -->
<div class="row">
    <footer class="footer" style="background-color:#1f272f;">
        <div class="container" style="background-color:#1f272f;">
            <h3 class="text-muted">Kejaksaan Republik Indonesia</h3>
            <div class="row">
                <div class="col-sm-3 col-md-3 text-muted">
                    <div class="weight">
                        <strong>Tentang Kami</strong>
                        <p>Lorem ipsum dolor sit amet, onsectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus.</p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 text-muted">
                    <div class="weight">
                        <strong>Profil</strong>
                        <ul>
                            <li><a href="#">Latar Belakang</a></li>
                            <li><a href="#">Tentang T4</a></li>
                            <li><a href="#">Visi dan Misi</a></li>
                            <li><a href="#">Tugas dan Wewenang</a></li>
                            <li><a href="#">Mekanisme Bekerja</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 text-muted">
                    <div class="weight">
                        <strong>Kegiatan</strong>
                        <ul>
                            <li><a href="#">Kegiatan Walman</a></li>
                            <li><a href="#">TP4 D</a></li>
                            <li><a href="#">TP4 P</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-2 col-md-2 text-muted">
                    <div class="weight">
                        <strong>Kemitraan</strong>
                        <ul>
                            <li><a href="#">Kementrian</a></li>
                            <li><a href="#">BUMN</a></li>
                            <li><a href="#">BUMD</a></li>
                            <li><a href="#">Pemerintah Provinsi</a></li>
                            <li><a href="#">Pemerintah Kota / Daerah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3  text-muted">
                    <div class="weight">
                        <strong>Kontak Kami</strong>
                        <p>PUSAT PENERANGAN HUKUM KEJAKSAAN AGUNG R.I</p>
                        <p>Jl. Sultan Hasanuddin No.1 Kebayoran Baru Jakarta Selatan - Indonesia</p>
                        <p>Tel: +62 21 722 1269 <br/>Email: humas.puspenkum@kejaksaan.go.id
                        </p>
                    </div>
                </div>
            </div>

            <hr>
            <p class="text-muted">@2017 Kejaksaan Republik Indonesia</p>
        </div>
    </footer>
</div>

<!--    End Footer -->


<!--    Import Js    -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url() ?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/icheck/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/actions.js"></script>
<!--    End import JS   -->


</body>
</html>