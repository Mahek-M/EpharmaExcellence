<?php $this->load->view('frontend/layout/header'); ?>
<body>
    
    <!-- Header -->
    <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->

    <!-- Form 483 -->
    <section class="form-483-wrp">
        <div class="titlebar">
            <h2>Inspector</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 remark-frm">
						<form method="post" action="<?php echo base_url();?>home/insert_inspector" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Inspector</label>
							<select class="form-control" name="inspector_id">
								<option>select</option>
								<?php foreach($inspector as $idata) { ?>
									<option value="<?php echo $idata->id; ?>"><?php echo $idata->name; ?></option>
								<?php } ?>
							</select>
                        </div>
						<div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Email Id</label>
                            <input type="email" name="email_id" placeholder="" class="form-control">
                        </div>
						
						<div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Fb</label>
                            <input type="text" name="fb" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Linkdin</label>
                            <input type="text" name="linkdin" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Address</label>
                            <textarea type="text" name="address" placeholder="" class="form-control"></textarea>
                        </div>
						<div class="form-group">
                            <label>Reference</label>
                            <textarea type="text" name="reference" placeholder="" class="form-control"></textarea>
                        </div>
						<div class="form-group">
                            <label>Working since</label>
                            <input type="text" name="working_since" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Country</label>
                            <textarea type="text" name="country" placeholder="" class="form-control"></textarea>
                        </div>
						<div class="form-group">
                            <label>Total form 483</label>
                            <input type="text" name="total_483" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Type of obbservation</label>
                            <input type="text" name="type_of_obbservation" placeholder="" class="form-control">
                        </div>
                        <input type="submit" class="btn-main" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form 483 -->

   <?php $this->load->view('frontend/layout/footer'); ?>
</body>
</html>