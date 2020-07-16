<?php $this->load->view('frontend/layout/header'); ?>
<body>
    
    <!-- Header -->
    <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->
    
    <!-- Blog Search Box -->
    <section class="blog-search">
        <div class="container-fluid">
            <!--<div class="blog-links">
                <ul>
                    <li><a href="#">Blogs </a></li>
                    <li><a href="#">Case Studies </a></li>
                    <li><a href="#">Pharma News </a></li>
                    <li><a href="#">Current Affairs </a></li>
                    <li><a href="#">Pharma Institutes</a></li>
                </ul>
            </div>-->
			 <div class="titlebar">
				<h2>Form 483</h2>
			</div>
            <div class="filter-search">
				<form method="post" action="<?php echo base_url() ?>search-483">
                <ul>
                    <li>
                        <div class="filter-box">
							<label>Year</label>
                            <select class="form-control" id="year" name="year" onchange="selectyear()">
                                <option value=""></option>
                                <!--<option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>-->
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <!--<option value="2020">2020</option>-->
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="filter-box">
							<label>Company</label>
                            <select class="form-control whatever" name="company" id="company" onchange="selectcompany()">
							<option value=""></option>
                                <?php foreach($company as $cdata){ ?>
									<option value="<?php echo $cdata->id; ?>"><?php echo $cdata->company_name; ?></option>
								<?php } ?>
                            </select>
                        </div>
                    </li>
					<li>
                        <div class="filter-box">
						<label>Category</label>
						
                            <select class="form-control whatever1" name="cat" id="cat" onchange="selectcategory()">
							<option value="all"></option>
                                <?php foreach($category as $ctdata) { ?>
									<option value="<?php echo $ctdata->id; ?>"><?php echo $ctdata->name; ?></option>
								<?php } ?>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="filter-box">
						<label>Subcategory</label>
                            <select class="form-control whatever2" name="subcat" id="subcat" onchange="selectsubcategory()">
							<option value="all"></option>
                                <?php foreach($category_subcategory as $sdata) { ?>
									<option value="<?php echo $sdata->id; ?>"><?php echo $sdata->name; ?></option>
								<?php } ?>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="filter-box">
						<label>Inspector</label>
                            <select class="form-control whatever3" name="inspector" id="inspector">
                               <option value="all"></option>
								<?php foreach($inspector as $idata) { ?>
									<option value="<?php echo $idata->id; ?>"><?php echo $idata->name; ?></option>
								<?php } ?>                            
								</select>
                        </div>
                    </li>	
                    <li>
						<label></label>
                        <div class="filter-box">
                           <button type="submit" class="btn-main"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </li>
                </ul>
				</form>
            </div>
        </div>
    </section>
    <!-- End Blog Search Box -->

    <!-- Blog Listing -->
    <section class="blog-lst">
		<div class="container-fluid">
            <div class="tabluer-blogs table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
							<th>Date</th>
                            <th>Company Name - Location</th>
                            <th>Category - Sub Category</th>
							<th>Inspector</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $i=1; if(!empty($form483)){ 
					foreach($form483 as $fdata) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php $newDate = date("M d,Y", strtotime($fdata->date)); echo $newDate; ?></td>
                            <td><a href="<?php echo base_url(); ?>form483-details/<?php echo $fdata->id; ?>"><?php echo $this->login_model->getcname($fdata->company_name); ?></a></td>
                            <td><?php echo $this->login_model->getcat($fdata->category_sub); ?></td>
							<td><?php
								if (strpos($fdata->inspector, ',') !== false) {
										$aa = explode(",",$fdata->inspector);
										if(count($aa) == 2){
										?>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector($aa[0]); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector($aa[1]); ?></a>
										<?php }
											else { ?>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector($aa[0]); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector($aa[1]); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[2]); ?>"> <?php echo $this->login_model->getinspector($aa[2]); ?></a>
										<?php 	}
										} else { ?>
									<a href="<?php echo base_url();?>inspector/<?php echo $fdata->inspector; ?>"><?php echo $this->login_model->getinspector($fdata->inspector); ?></a>
								<?php } ?></td>
                        </tr>
					<?php $i++; } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End Blog Listing -->
<?php $this->load->view('frontend/layout/footer'); ?>
<script>
	function selectyear(){
		var year = $('#year').val();
		var data = 'year='+year;
		  $.ajax({
					 type: "POST",
					 data: data,
					 url: "<?php echo base_url() ?>home/getcompany",
					 success: function(result){
							$('#company').html(result);
							 var options = $('select.whatever option');
								var arr = options.map(function(_, o) {
									return {
										t: $(o).text(),
										v: o.value
									};
								}).get();
								arr.sort(function(o1, o2) {
									return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0;
								});
								options.each(function(i, o) {
									console.log(i);
									o.value = arr[i].v;
									$(o).text(arr[i].t);
								});
					}
			});
	}
	function selectcompany(){
		var company = $('#company').val();
		var data = 'company='+company;
		  $.ajax({
					 type: "POST",
					 data: data,
					 url: "<?php echo base_url() ?>home/getcategory",
					 success: function(result){
							$('#cat').html(result);
							var options1 = $('select.whatever1 option');
							var arr1 = options1.map(function(_, o) {
								return {
									t: $(o).text(),
									v: o.value
								};
							}).get();
							arr1.sort(function(o1, o2) {
								return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0;
							});
							options1.each(function(i, o) {
								console.log(i);
								o.value = arr1[i].v;
								$(o).text(arr1[i].t);
							});
					}
			});
	}
	function selectcategory(){
		var cat = $('#cat').val();
		var data = 'cat='+cat;
		  $.ajax({
					 type: "POST",
					 data: data,
					 url: "<?php echo base_url() ?>home/getsubcategory",
					 success: function(result){
							$('#subcat').html(result);
							var options2 = $('select.whatever2 option');
							var arr2 = options2.map(function(_, o) {
								return {
									t: $(o).text(),
									v: o.value
								};
							}).get();
							arr2.sort(function(o1, o2) {
								return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0;
							});
							options2.each(function(i, o) {
								console.log(i);
								o.value = arr2[i].v;
								$(o).text(arr2[i].t);
							});
					}
			});
	}
	function selectsubcategory(){
		var subcat = $('#subcat').val();
		var data = 'subcat='+subcat;
		  $.ajax({
					 type: "POST",
					 data: data,
					 url: "<?php echo base_url() ?>home/getinspector",
					 success: function(result){
							$('#inspector').html(result);
							var options3 = $('select.whatever3 option');
							var arr3 = options3.map(function(_, o) {
								return {
									t: $(o).text(),
									v: o.value
								};
							}).get();
							arr3.sort(function(o1, o2) {
								return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0;
							});
							options3.each(function(i, o) {
								console.log(i);
								o.value = arr3[i].v;
								$(o).text(arr3[i].t);
							});
					}
			});
	}
$( document ).ready(function() {
    var options = $('select.whatever option');
    var arr = options.map(function(_, o) {
        return {
            t: $(o).text(),
            v: o.value
        };
    }).get();
    arr.sort(function(o1, o2) {
        return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0;
    });
    options.each(function(i, o) {
        console.log(i);
        o.value = arr[i].v;
        $(o).text(arr[i].t);
    });
	
	var options1 = $('select.whatever1 option');
    var arr1 = options1.map(function(_, o) {
        return {
            t: $(o).text(),
            v: o.value
        };
    }).get();
    arr1.sort(function(o1, o2) {
        return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0;
    });
    options1.each(function(i, o) {
        console.log(i);
        o.value = arr1[i].v;
        $(o).text(arr1[i].t);
    });
	
	var options2 = $('select.whatever2 option');
    var arr2 = options2.map(function(_, o) {
        return {
            t: $(o).text(),
            v: o.value
        };
    }).get();
    arr2.sort(function(o1, o2) {
        return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0;
    });
    options2.each(function(i, o) {
        console.log(i);
        o.value = arr2[i].v;
        $(o).text(arr2[i].t);
    });
	
	var options3 = $('select.whatever3 option');
    var arr3 = options3.map(function(_, o) {
        return {
            t: $(o).text(),
            v: o.value
        };
    }).get();
    arr3.sort(function(o1, o2) {
        return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0;
    });
    options3.each(function(i, o) {
        console.log(i);
        o.value = arr3[i].v;
        $(o).text(arr3[i].t);
    });
	
});
</script>
</body>
</html>