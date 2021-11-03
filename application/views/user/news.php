<?php $this->view->load('user/_partials/head')?>
<body>
<?php $this->view->load('user/_partials/topmenu')?>
    <div class="article-list news-section">
        <div class="container">
            <div class="intro">
                <h2 class="text-center heading-intro">Latest News</h2>
                <p class="text-center">Latest news about E-Sports Community</p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#modnews1" data-toggle="modal"><img class="img-fluid" src="assets/img/news1.jpeg"></a>
                    <h3 class="name">Mobile Legends</h3>
                    <p class="description">Anti Kalah! 3 Hero Terbaik Mobile Legends Siap Hadir Melawan Beatrix</p><a class="action" href="#modnews1" data-toggle="modal"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="#modnews2" data-toggle="modal"><img class="img-fluid" src="assets/img/news3.jpeg"></a>
                    <h3 class="name">PUBG Mobile</h3>
                    <p class="description">Terbatas! Cepat Klaim 4 Kode Redeem PUBG Mobile 12 Oktober 2021</p><a class="action" href="#modnews2" data-toggle="modal"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="#modnews3" data-toggle="modal"><img class="img-fluid" src="assets/img/news2.jpeg"></a>
                    <h3 class="name">Dota 2</h3>
                    <p class="description">Kilas Balik Tim Pemenang The International DOTA 2 Dari TI1 - T19</p><a class="action" href="#modnews3" data-toggle="modal"><i class="fa fa-arrow-circle-right"></i></a></div>
            </div>
        </div>
    </div>

<?php $this->view->load('user/_partials/bottommenu')?>

    <div class="modal fade" role="dialog" tabindex="-1" id="modnews1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">News</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body">

<!-- <iframe class="modal-news" src="https://www.suara.com/tekno/2021/10/11/121505/anti-kalah-3-hero-terbaik-mobile-legends-siap-melawan-beatrix?page=all"
                                frameborder="0"></iframe> -->


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

<!-- <iframe class="modal-news" src="https://www.suara.com/tekno/2021/10/12/121721/terbatas-cepat-klaim-4-kode-redeem-pubg-mobile-12-oktober-2021"
                                frameborder="0"></iframe> -->


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

<!-- <iframe class="modal-news" src="https://esports.id/dota-2/news/2021/10/1bd2caf96a17d892c2c7e9959549cfc7/kilas-balik-tim-pemenang-the-international-dota-2-dari-ti1-ti9"
                                frameborder="0"></iframe> -->


</div>
                <div class="modal-footer"><button class="btn btn-light btn-news-mod" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>

<?php $this->view->load('user/_partials/footer')?>