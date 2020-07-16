<?php $this->load->view('frontend/layout/header'); ?>
<body>
    
    <!-- Header -->
    <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->

    <!-- Form 483 -->
    <section class="form-483-wrp">
        <div class="titlebar">
            <h2>Form 483</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 remark-frm">
						<form method="post" action="<?php echo base_url();?>home/insert_form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="file_name" required placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>PDF</label>
                            <input type="file" name="pdf_name" required placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Company</label>
							<select class="form-control" name="company_name">
								<option>select</option>
								<?php foreach($company as $cdata){ ?>
									<option value="<?php echo $cdata->id; ?>"><?php echo $cdata->company_name; ?></option>
								<?php } ?>
							</select>
                        </div>
						<div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Year</label>
                            <input type="text" name="year" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Category</label>
							<select class="form-control" name="category">
								<option>select</option>
								<?php foreach($category as $cdata) { ?>
									<option value="<?php echo $cdata->id; ?>"><?php echo $cdata->name; ?></option>
								<?php } ?>
							</select>
                        </div>
						<div class="form-group">
                            <label>Cat-sub</label>
							<select class="form-control" name="category_sub">
								<option>select</option>
								<?php foreach($category_subcategory as $sdata) { ?>
									<option value="<?php echo $sdata->id; ?>"><?php echo $sdata->name; ?></option>
								<?php } ?>
							</select>
                        </div>
						<div class="form-group">
                            <label>Inspector</label>
							<select class="form-control" name="inspector[]" required multiple>
								<?php foreach($inspector as $idata) { ?>
									<option value="<?php echo $idata->id; ?>"><?php echo $idata->name; ?></option>
								<?php } ?>
							</select>
                        </div>
						<div class="form-group">
                            <label>Observation</label>
                            <input type="text" name="observation" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>FEI</label>
                            <input type="text" name="fei" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Firm Name</label>
                            <input type="text" name="firm_name" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Address</label>
                            <textarea type="text" name="address" placeholder="" class="form-control"></textarea>
                        </div>
						<div class="form-group">
                            <label>Location</label>
                            <textarea type="text" name="location" placeholder="" class="form-control"></textarea>
                        </div>
						<div class="form-group">
                            <label>Name Title</label>
                            <textarea type="text" name="name_title" placeholder="" class="form-control"></textarea>
                        </div>
						<div class="form-group">
                            <label>Date of inspection</label>
                            <input type="text" name="date_of_inspection" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Type of eastablish</label>
                            <input type="text" name="type_of_es" placeholder="" class="form-control">
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