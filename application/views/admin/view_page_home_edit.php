<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Edit Home Page</h1>
    </div>
    <div class="content-header-right">
        <a href="<?php echo base_url(); ?>admin/page-home" class="btn btn-primary btn-sm">View All</a>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <?php
            if($this->session->flashdata('error')) {
                ?>
                <div class="callout callout-danger">
                    <p><?php echo $this->session->flashdata('error'); ?></p>
                </div>
                <?php
            }
            if($this->session->flashdata('success')) {
                ?>
                <div class="callout callout-success">
                    <p><?php echo $this->session->flashdata('success'); ?></p>
                </div>
                <?php
            }
            ?>

            <?php echo form_open_multipart(base_url().'admin/page-home/edit/'.$page_home['id'], array('class' => 'form-horizontal'));?>
                <div class="box box-info" style="padding:0">
                    <div class="box-body" style="padding-top:0">

                        <h3 class="sec_title">Meta Information</h3>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Title </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="title" value="<?php echo $page_home['title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="meta_keyword" style="height:70px;"><?php echo $page_home['meta_keyword']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Meta Description </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="meta_description" style="height:70px;"><?php echo $page_home['meta_description']; ?></textarea>
                            </div>
                        </div>

                        <h3 class="sec_title">Program Studi Section</h3>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Title </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_portfolio_title" value="<?php echo $page_home['home_portfolio_title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Subtitle </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_portfolio_subtitle" value="<?php echo $page_home['home_portfolio_subtitle']; ?>">
                            </div>
                        </div>

                        <h3 class="sec_title">Dosen Tetap Section</h3>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Title </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_team_title" value="<?php echo $page_home['home_team_title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Subtitle </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_team_subtitle" value="<?php echo $page_home['home_team_subtitle']; ?>">
                            </div>
                        </div>


                        <h3 class="sec_title">Kontak Kami Section</h3>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Kontak Kami Form Title </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_booking_form_title" value="<?php echo $page_home['home_booking_form_title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Kontak Kami FAQ Title </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_booking_faq_title" value="<?php echo $page_home['home_booking_faq_title']; ?>">
                            </div>
                        </div>

                        <h3 class="sec_title">Counter Information Section</h3>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Item 1 - Title </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_1_title" class="form-control" value="<?php echo $page_home['counter_1_title']; ?>">
                            </div>
                            <label for="" class="col-sm-2 control-label">Item 1 - Value </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_1_value" class="form-control" value="<?php echo $page_home['counter_1_value']; ?>">
                            </div>
                            <label for="" class="col-sm-2 control-label">Item 1 - Icon </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_1_icon" class="form-control" value="<?php echo $page_home['counter_1_icon']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Item 2 - Title </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_2_title" class="form-control" value="<?php echo $page_home['counter_2_title']; ?>">
                            </div>
                            <label for="" class="col-sm-2 control-label">Item 2 - Value </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_2_value" class="form-control" value="<?php echo $page_home['counter_2_value']; ?>">
                            </div>
                            <label for="" class="col-sm-2 control-label">Item 2 - Icon </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_2_icon" class="form-control" value="<?php echo $page_home['counter_2_icon']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Item 3 - Title </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_3_title" class="form-control" value="<?php echo $page_home['counter_3_title']; ?>">
                            </div>
                            <label for="" class="col-sm-2 control-label">Item 3 - Value </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_3_value" class="form-control" value="<?php echo $page_home['counter_3_value']; ?>">
                            </div>
                            <label for="" class="col-sm-2 control-label">Item 3 - Icon </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_3_icon" class="form-control" value="<?php echo $page_home['counter_3_icon']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Item 4 - Title </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_4_title" class="form-control" value="<?php echo $page_home['counter_4_title']; ?>">
                            </div>
                            <label for="" class="col-sm-2 control-label">Item 4 - Value </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_4_value" class="form-control" value="<?php echo $page_home['counter_4_value']; ?>">
                            </div>
                            <label for="" class="col-sm-2 control-label">Item 4 - Icon </label>
                            <div class="col-sm-2">
                                <input type="text" name="counter_4_icon" class="form-control" value="<?php echo $page_home['counter_4_icon']; ?>">
                            </div>
                        </div>


                        <!-- <h3 class="sec_title">Pricing Table Section</h3>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Title </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_ptable_title" value="<?php echo $page_home['home_ptable_title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Subtitle </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_ptable_subtitle" value="<?php echo $page_home['home_ptable_subtitle']; ?>">
                            </div>
                        </div> -->


                        <!-- <h3 class="sec_title">Testimonial Section</h3>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Title </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_testimonial_title" value="<?php echo $page_home['home_testimonial_title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Subtitle </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_testimonial_subtitle" value="<?php echo $page_home['home_testimonial_subtitle']; ?>">
                            </div>
                        </div> -->


                        <h3 class="sec_title">Postingan Section</h3>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Title </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_blog_title" value="<?php echo $page_home['home_blog_title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Subtitle </label>
                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="home_blog_subtitle" value="<?php echo $page_home['home_blog_subtitle']; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>

</section>