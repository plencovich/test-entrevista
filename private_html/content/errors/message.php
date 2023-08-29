<?php $this->load->view('frontend/template/header'); ?>
<?php $this->load->view('frontend/template/navbar'); ?>
        <div class="cartIn">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="block">
                            <div class="empty">
                                <div class="cont">
                                    <div><i class="fa fa-exclamation-circle fa-5x"></i></div>
                                    <div class="text">
                                        <h1><?php echo $title_error; ?></h1>
                                        <p><?php echo $msg_error ; ?></p>
                                        <a href="/">Ir a la página Principal</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="footBlock">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
<?php $this->load->view('frontend/template/mp_bar'); ?>
        </div>
<?php $this->load->view('frontend/template/footer'); ?>
<?php exit(); ?>
