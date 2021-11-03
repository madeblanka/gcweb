<?php $this->load->view('user/_partials/head')?>
    <body class="body-bracket">
    <?php $this->load->view('user/_partials/topmenu')?>
    <section class="menu-atas">
        <div class="row row-detail">
            <div class="col col-icon-detail">
                <a class="link-bracket" href="review.html">
                    <div class="col-div-menu"><i class="material-icons">star_half</i></div>
                    <div class="col-div-span"><span class="span-bracket">Event</span></div>
                </a>
            </div>
            <div class="col col-icon-detail">
                <div class="col-div-menu"><i class="material-icons">phonelink_setup</i></div>
                <div><span class="span-bracket">Review</span></div>
            </div>
            <div class="col col-icon-detail">
                <a class="link-bracket" href="brackets.html">
                    <div class="col-div-menu"><i class="material-icons">line_style</i></div>
                    <div><span class="span-bracket">Bracket</span></div>
                </a>
            </div>
            <div class="col col-icon-detail">
                <div class="col-div-menu"><i class="material-icons">group</i></div>
                <div><span class="span-bracket">Match</span></div>
            </div>
        </div>
    </section>
    <?php foreach($tournament as $t):?>
    <section class="section-review">
        <div><img src="assets/img/optimized_large_thumb_stage.jpeg"></div>
        <div class="div-p">
            <p class="p1">Pendaftaran dibuka</p>
            <p><?= date('d-m-Y H:i',strtotime($t->tgl_pendaftaran))?></p>
        </div>
        <div class="div-p">
            <p class="p1">Turnamen dimulai</p>
            <p><?= $t->tgl_event?></p>
        </div>
        <div class="div-p">
            <p class="p1">Tim yang terdaftar</p>
            <p></p>
        </div>
        <div class="div-button-peserta"><a class="btn btn-primary btn-join" href="">Semua Peserta</a></div>
        <button class="btn btn-primary join-tour btn-join" type="button">Join Tournament</button></section>
    <section class="section-desk">
        <div class="div-desk">
            <h1>Deskripsi Tournament</h1>
        </div>
        <div class="div-font">
            <p><?= $t->deskripsi?></p>
            <p><strong>Penyelengara:</strong><?= $t->penyelenggara?></p>
            <p><strong>Komunitas:</strong><?= $t->komunitas?></p>
            <p><strong>Mode Turnamen:</strong> <?= $t->mode_turnament?></p>
            <p><strong>Lokasi:</strong> <?= $t->lokasi?></p>
        </div>
        <?php endforeach?>
        <!-- <div class="div-desk">
            <h1>Champion</h1>
        </div>
        <div class="div-font">
            <p><strong>Team:</strong> Admin PBESI</p>
            <p><strong>Komunitas:</strong> PB ESI</p>
            <p><strong>Mode Turnamen:</strong> Single Elemination</p>
            <p><strong>Lokasi:</strong> Online Tournament</p>
        </div> -->
    </section>
<?php $this->load->view('user/_partials/bottommenu')?>
<?php $this->load->view('user/_partials/footer')?>