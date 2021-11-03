<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gamers</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/fonts/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/fonts/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/fonts/material-icons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/Article-Dual-Column.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/Article-List.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/brackets.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/brackets2.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/Footer-Dark.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/iframe-1.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/Login-Form-Dark.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/Newsletter-v2.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/styles.css')?>">
</head>
<body class="body-index">
<?php $this->load->view('user/_partials/topmenu')?>
    <section class="user-info">
        <div class="d-inline-flex user-info-image pad-user"><img class="rounded-circle" src="<?php echo  site_url('template/assets/img/'.$this->session->userdata('poto'))?>"></div>
        <div class="text-name pad-user"><span><?= $this->session->userdata('nama');?></span></div>
        <div class="button-user pad-user"><a class="btn btn-primary btn-user left1" role="button" href="#addteam" data-toggle="modal">+ Add Team</a><a class="btn btn-primary btn-user right1" role="button" href="#addevent" data-toggle="modal">+ Add Event</a></div>
    </section>
    <section class="section-category">
        <div class="row row-category">
            <div class="col-3 col-category">
                <a class="link-category" href="<?= site_url('user/tournament')?>">
                    <div><img class="image-category" src="<?php echo  site_url('template/assets/img/IconMenu/trophy.png')?>" style="/*box-shadow: 0px 0px 11px 0px rgb(255,255,255);*//*border-radius: 34px;*/"></div><span>Tournament</span></a>
            </div>
            <div class="col-3 col-category">
                <a class="link-category" href="turnamen.html">
                    <div><img class="image-category" src="<?php echo  site_url('template/assets/img/IconMenu/live-streaming.png')?>"></div><span>Live Stream</span></a>
            </div>
            <div class="col-3 col-category">
                <a class="link-category" href="news.html">
                    <div><img class="image-category" src="<?php echo  site_url('template/assets/img/IconMenu/news.png')?>"></div><span>News</span></a>
            </div>
            <div class="col-3 col-category">
                <a class="link-category" href="<?php echo site_url ('user/comingsoon')?> ">
                    <div><img class="image-category" src="<?php echo  site_url('template/assets/img/IconMenu/gold-medal.png')?>"></div><span>League</span></a>
            </div>
            <div class="col-3 col-category">
                <a class="link-category" href="<?php echo site_url ('user/comingsoon')?> ">
                    <div><img class="image-category" src="<?php echo  site_url('template/assets/img/IconMenu/carts.png')?>"></div><span>Store</span></a>
            </div>
        </div>
    </section>
    <section class="background-trans section-border">
        <div class="scroll-list"><button class="btn btn-primary button-list button-style" type="button">Mobile Legend</button><button class="btn btn-primary button-list button-style" type="button">Free Fire</button><button class="btn btn-primary button-list button-style" type="button">Dota 2</button>
            <button
                class="btn btn-primary button-list button-style" type="button">CSGO</button><button class="btn btn-primary button-list button-style" type="button">PUBG</button><button class="btn btn-primary button-list button-style" type="button">PUBG Mobile</button><button class="btn btn-primary button-list button-style"
                    type="button">PUBG Mobile</button><button class="btn btn-primary button-list button-style" type="button">PUBG Mobile</button></div>
    </section>
    <section class="background-trans section-border">
        <div class="scroll-list">
            <div class="image-banner background-trans"><img class="list-image" src="<?php echo  site_url('template/assets/img/EventBanner/newsbanner.jpeg')?>"><img class="list-image" src="<?php echo  site_url('template/assets/img/optimized_large_thumb_stage.jpeg')?>"><img class="list-image" src="<?php echo  site_url('template/assets/img/EventBanner/newsbanner.jpeg')?>"><img class="list-image" src="<?php echo  site_url('template/assets/img/EventBanner/newsbanner.jpeg')?>"></div>
        </div>
    </section>
    <div class="article-list news-section">
        <div class="container">
            <div class="intro">
                <h2 class="text-center heading-intro">Latest News</h2>
                <p class="text-center">Latest news about E-Sports Community</p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#modnews1" data-toggle="modal"><img class="img-fluid" src="<?php echo  site_url('template/assets/img/news1.jpeg"></')?>a>
                    <h3 class="name">Mobile Legends</h3>
                    <p class="description">Anti Kalah! 3 Hero Terbaik Mobile Legends Siap Hadir Melawan Beatrix</p><a class="action" href="#modnews1" data-toggle="modal"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="#modnews2" data-toggle="modal"><img class="img-fluid" src="<?php echo site_url('template/assets/img/news3.jpeg"></')?>a>
                    <h3 class="name">PUBG Mobile</h3>
                    <p class="description">Terbatas! Cepat Klaim 4 Kode Redeem PUBG Mobile 12 Oktober 2021</p><a class="action" href="#modnews2" data-toggle="modal"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="#modnews3" data-toggle="modal"><img class="img-fluid" src="<?php echo site_url('template/assets/img/news2.jpeg"></')?>a>
                    <h3 class="name">Dota 2</h3>
                    <p class="description">Kilas Balik Tim Pemenang The International DOTA 2 Dari TI1 - T19</p><a class="action" href="#modnews3" data-toggle="modal"><i class="fa fa-arrow-circle-right"></i></a></div>
            </div>
        </div>
    </div>

<?php $this->load->view('user/_partials/bottommenu')?>

    <div class="modal fade" role="dialog" tabindex="-1" id="modnews1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">News</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body">


</div>
                <div class="modal-footer"><button class="btn btn-light btn-news-mod" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modnews2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">News</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body">

</div>
                <div class="modal-footer"><button class="btn btn-light btn-news-mod" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modnews3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">News</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body">

<iframe class="modal-news" src="https://esports.id/dota-2/news/2021/10/1bd2caf96a17d892c2c7e9959549cfc7/kilas-balik-tim-pemenang-the-international-dota-2-dari-ti1-ti9"
                                frameborder="0"></iframe>


</div>
                <div class="modal-footer"><button class="btn btn-light btn-news-mod" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="addevent">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Event</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form action="<?php echo site_url('user/createtournament')?>" enctype="application/x-www-form-urlencoded" method="post">
                    <input type="hidden" value="<?= $this->session->userdata('id_user')?>" name="id_user">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Nama" name="nama" required=""></div>
                        <div class="form-group"><input class="form-control deskripsi" type="text" placeholder="Deskripsi" name="deskripsi" required=""></div>
                        <div class="form-group">
                            <select class="form-control" name="game" required="">
                                <optgroup label="Game">
                                    <?php foreach($game as $g):?>
                                    <option value="<?= $g->id_game?>"><?= $g->nama?></option>
                                    <?php endforeach?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Penyelenggara" name="penyelenggara" required=""></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Komunitas" name="komunitas" required=""></div>
                        <div class="form-group">
                            <select class="form-control" name="mode_turnament"required="">
                                <optgroup label="Mode Tournament">
                                    <option value="bo1" selected="">Best Of 1</option>
                                    <option value="bo3">Best Of 3</option>
                                    <option value="elemination">Elemination</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Lokasi" name="lokasi" required=""></div>
                        
                        <div class="form-group"><input class="form-control" type="text" placeholder="Total Hadiah" name="total_hadiah" required=""></div>
                        
                        <label for="tgl_event">Poster Cover</label>
                        <div class="form-group"><input class="form-control" type="file" name="poto" required=""></div>
                        
                        <div class="form-group"><input class="form-control" type="number" placeholder="Maksimal Team" name="max_team" required=""></div>
                        <div class="form-group">
                            <label for="tgl_pendaftaran">Tanggal Pendaftaran</label><input class="form-control" type="datetime-local" name="tgl_pendaftaran" required=""></div>

                        <div class="form-group">
                            <label for="tgl_pendaftaran_tutup">Tanggal Pendaftaran Tutup</label><input class="form-control" type="datetime-local" name="tgl_pendaftaran_tutup" required=""></div>
                        
                        <div class="form-group">
                            <label for="tgl_event">Tanggal Event Dimulai</label>
                            <input class="form-control" type="datetime-local" name="tgl_event" required=""></div>
                                        
            </div>
            <div class="modal-footer"><button class="btn btn-light btn-news-mod warna" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save</button></div>
            </form>
        </div>
    </div>
    </div>
<div class="modal fade" role="dialog" tabindex="-1" id="addteam">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Event</h4><button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Nama" nama="nama"
                                required=""></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Ketua"
                                ketua="ketua" required=""></div>
                        <div class="form-group"><input class="form-control" type="text" id="anggota1" placeholder="Anggota 1"name="anggota1"></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Anggota 2"
                                anggota2="anggota2" required=""></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Anggota 3"
                                anggota3="anggota3" required=""></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Anggota 4"
                                anggota4="anggota4" required=""></div>
                        <div class="form-group file-input1">
                            <p class="p-logo">Logo</p><input type="file" class="file-input-choose" required=""
                                logo="logo">
                        </div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Status"
                                status="status" required=""></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-news-mod warna" type="button"
                        data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url('template/assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('template/assets/js/modal.js')?>"></script>
    <script src="<?php echo base_url('template/assets/js/script.js')?>"></script>
        <script src="<?php echo base_url('template/assets/js/script.js')?>"></script>   
    <script type="text/javascript">
        $(document).ready(function(){
            $("#anggota1").autocomplete({
              source: "<?php echo site_url('user/get_autocomplete/?');?>"
            });
        });
    </script>
    
</body>

</html>