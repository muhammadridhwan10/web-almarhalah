<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>View Home Page Item</h1>
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
            <div class="box box-info">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Language</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            foreach ($page_home as $row) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['lang_name']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>admin/page-home/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content-header">
    <div class="content-header-left">
        <h1>View Home Page Item (Language Independent)</h1>
    </div>
</section>


<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info" style="padding-top:0;">
                <div class="box-body" style="padding-top:0;">

                    <h3 class="sec_title">Program Studi Section</h3>
                    <?php echo form_open(base_url().'admin/page-home/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Show on Home? </label>
                            <div class="col-sm-2">
                                <select name="home_portfolio_status" class="form-control select2" style="width:auto;">
                                <option value="Show" <?php if($page_home_lang_independent['home_portfolio_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                <option value="Hide" <?php if($page_home_lang_independent['home_portfolio_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_home_portfolio">Update</button>
                            </select>
                            </div>
                        </div>
                    <?php echo form_close(); ?>


                    <h3 class="sec_title">Kontak Kami Section</h3>
                    <?php echo form_open(base_url().'admin/page-home/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Show on Home? </label>
                            <div class="col-sm-2">
                                <select name="home_booking_status" class="form-control select2" style="width:auto;">
                                <option value="Show" <?php if($page_home_lang_independent['home_booking_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                <option value="Hide" <?php if($page_home_lang_independent['home_booking_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_home_booking">Update</button>
                            </select>
                            </div>
                        </div>
                    <?php echo form_close(); ?>


                    <h3 class="sec_title">Kontak Kami Photo Section</h3>
                    <?php echo form_open_multipart(base_url().'admin/page-home/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Existing Booking Background</label>
                            <div class="col-sm-6" style="padding-top:6px;">
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page_home_lang_independent['home_booking_photo']; ?>" class="existing-photo" style="height:180px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">New Booking Background</label>
                            <div class="col-sm-6" style="padding-top:6px;">
                                <input type="file" name="home_booking_photo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_home_booking_photo">Update</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>



                    <h3 class="sec_title">Dosen Tetap Section</h3>
                    <?php echo form_open(base_url().'admin/page-home/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Show on Home? </label>
                            <div class="col-sm-2">
                                <select name="home_team_status" class="form-control select2" style="width:auto;">
                                <option value="Show" <?php if($page_home_lang_independent['home_team_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                <option value="Hide" <?php if($page_home_lang_independent['home_team_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_home_team">Update</button>
                            </select>
                            </div>
                        </div>
                    <?php echo form_close(); ?>


                    <h3 class="sec_title">Postingan Section</h3>
                    <?php echo form_open(base_url().'admin/page-home/update',array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">How many item to show? </label>
                            <div class="col-sm-2">
                                <input type="text" name="home_blog_item" class="form-control" value="<?php echo $page_home_lang_independent['home_blog_item']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Show on Home? </label>
                            <div class="col-sm-2">
                                <select name="home_blog_status" class="form-control select2" style="width:auto;">
                                <option value="Show" <?php if($page_home_lang_independent['home_blog_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                <option value="Hide" <?php if($page_home_lang_independent['home_blog_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form_home_blog">Update</button>
                            </select>
                            </div>
                        </div>
                    <?php echo form_close(); ?>




                </div>
            </div>
        </div>
    </div>
</section>