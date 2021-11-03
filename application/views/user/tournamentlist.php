<?php $this->load->view('user/_partials/head')?>
<body>
  <?php $this->load->view('user/_partials/topmenu')?>
      <div class="article-list pad-top">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Tournament</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <?php foreach($tournament as $t):?>
                <div class="col-sm-6 col-md-4 item">
                <a href="<?= site_url('user/reviewtournament/'.$t->id_event)?>">
                    <img class="img-fluid" src="<?php echo base_url(); ?>pict/eventpict/<?= $t->poto; ?>">
                    <h3 class="name"><?= $t->nama?></h3>
                    <p class="description"><?= $t->deskripsi?></p><a class="action" href="<?= site_url('user/reviewtournament/'.$t->id_event)?>"><i class="fa fa-arrow-circle-right"></i></a></div>
                </a>
                <?php endforeach?>
             </div>
         </div>
    </div>
<?php $this->load->view('user/_partials/bottommenu')?>
<?php $this->load->view('user/_partials/footer')?>