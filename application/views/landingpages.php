<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gamers</title>
    <link rel="stylesheet" href="<?php echo base_url('template/assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
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

<body class="body-landing">
    <section class="section-landing">
        <div class="div-landing"><img src="<?php echo base_url('template/assets/img/Website-banner.png')?>"></div>
    </section>
    <div class="login-dark">
        <form method="post" action="<?php echo site_url('user/login')?>" enctype="application/x-www-form-urlencoded">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required=""></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required=""></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button>
                <div><a class="forgot" href="#register" data-toggle="modal">Don't have account? <strong>Register</strong> <strong>Here✓</strong></a></div>
                <div><a class="forgot underline bwh" href="#forgot-password" data-toggle="modal"><strong>Forgot your Email or Password?</strong></a></div>
            </div>
        </form>
    </div>
    <div class="article-list landing-page">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">WELCOME TO GAMERS COMMUNITY</h2>
                <p class="text-center">Create Team, Create Event, Join Event, Find Players, Win the Tournament!<br><span style="text-decoration: underline;">Certified by ASI</span></p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="<?php echo base_url('template/assets/img/Banner/banner1.2.jpeg')?>"></a>
                    <h3 class="name">E-Sport Players Community</h3>
                    <p class="description">The ultimate place for gamers to gather, create a community, and achieve success in the game world</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="<?php echo base_url('template/assets/img/Banner/banner2.jpeg')?>"></a>
                    <h3 class="name">Create Team</h3>
                    <p class="description">Create your team to win prestigious events and many more!</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="<?php echo base_url('template/assets/img/Banner/banner3.jpeg')?>"></a>
                    <h3 class="name">Create Event</h3>
                    <p class="description">Create an event to accommodate players so they can distribute their abilities</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 item text">
                        <h3>Gamers Community</h3>
                        <p>Komunitas resmi dari indonesia yang sudah mendapatkan sertifikat ASI dan juga KONI. Membantu para pemain untuk mendapatkan tempat yang tepat dan dapat menyalurkan hobi dan keahlianya dalam game olahraga</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Gamers Community © 2021 Copyrights</p>
            </div>
        </footer>
    </div>
    <div class="modal fade form-register" role="dialog" tabindex="-1" id="register">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form action="" method="post" enctype="application/x-www-form-urlencoded">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Name" name="nama" required=""></div>
                        <div class="form-group"><input class="form-control" type="text" placeholder="Username" name="username" required=""></div>
                        <div class="form-group"><input class="form-control" type="password" placeholder="Password" name="password" required=""></div>
                        <div class="form-group"><input class="form-control" type="email" placeholder="Email" name="email" required=""></div>
                        <div class="form-group"><input class="form-control" type="tel" placeholder="No. Telephone" name="no_tlp" required=""></div>
                        <div class="form-group"><input class="form-control" type="hidden" name="nik" value="0"></div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light btn-modal1" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary btn-modal" type="submit">Save</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade form-register" role="dialog" tabindex="-1" id="forgot-password">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Forgot Password</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required=""></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-modal1" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary btn-modal" type="button">Save</button></div>
            </div>
        </div>
    </div>
<?php $this->load->view('user/_partials/footer')?>