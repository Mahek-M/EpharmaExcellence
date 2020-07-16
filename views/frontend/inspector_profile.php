<?php $this->load->view('frontend/layout/header'); ?>
<style>
.high { background: #0f0; }
.low { background: #f00; }

</style>
<body>
    
    <!-- Header -->
   <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->

    <!-- Blog Listing -->
    <section class="profile-wrp" style="padding: 5px 0;">
        <div class="container">
			<?php if(!empty($inspector)){ ?>
            <div class="profile-head">
                <div class="profile-img">
					<?php if(!empty($inspector->image)) { ?>
						<img src="<?php echo base_url(); ?>uploads/<?php echo $inspector->image; ?>" alt="">
					<?php } else { ?>
                    <img src="<?php echo base_url(); ?>assets/images/user.jpg" alt="">
					<?php } ?>
                </div>
                <div class="profile-nme">
                    <h2><?php echo $this->login_model->getinspector($this->uri->segment(2)); ?></h2>
					<h3><?php echo $inspector->title; ?></h3>

                    <h3><i class="fa fa-envelope"></i> <?php echo $inspector->email_id; ?> <span><i class="fa fa-phone"></i> <?php echo $inspector->phone; ?></span></h3>
                    <h3><i class="fa fa-map-marker"></i> <?php echo $inspector->address; ?></h3>
					<h3><strong>Working Since :  </strong><?php echo $inspector->working_since; ?></h3>
					<h3><strong>Visited Countries For Inspections :  </strong><?php echo $inspector->country; ?></h3>
                    <div class="social-links">
                        <a href="<?php echo $inspector->fb; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $inspector->linkdin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="bref-dt">
				<h3>BRIEF INTRODUCTION </h3>
                <p><?php echo $inspector->description; ?></p>
			</div>
			<?php } ?>
			<div>

                <!--<ul>
                    <li>Inspection detail search</li>
                    <li>His area of interest – Food, Sport, Music, Place, Game, Shows etc (from available data)</li>
                    <li>Company wise (If possible)</li>
                    <li>Total 483 work till now</li>
                    <li>Major scenario / similarities of findings</li>
                    <li>Way of working analysis</li>
                    <li>And some more thing if we can find</li>
                </ul>-->
				<?php if($this->uri->segment(2) == '1'){ ?>
				<h3>Federal Employee Profile</h3>
				<div class="tabluer-blogs table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Year</th>
								<th>Occupation</th>
								<th>Paygrade</th>
								<th>Base Salary</th>
								<th>Bonus</th>
								<th>Location</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>2018</td>
								<td>Pharmacist</td>
								<td>GS-13</td>
								<td>$127,228</td>
								<td>$300</td>
								<td>Parsippany, New Jersey</td>
							</tr>
							<tr>
								<td>2017</td>
								<td>Pharmacist</td>
								<td>GS-13</td>
								<td>$127,228</td>
								<td>$300</td>
								<td>Parsippany, New Jersey</td>
							</tr>
							<tr>
								<td>2016</td>
								<td>Pharmacist</td>
								<td>GS-13</td>
								<td>$120,856</td>
								<td>$150</td>
								<td>Parsippany, New Jersey</td>
							</tr>
							<tr>
								<td>2015</td>
								<td>Pharmacist</td>
								<td>GS-13</td>
								<td>$119,209</td>
								<td>$350</td>
								<td>Parsippany, New Jersey</td>
							</tr>
							<tr>
								<td>2014</td>
								<td>Pharmacist</td>
								<td>GS-13</td>
								<td>$118,030</td>
								<td>$0</td>
								<td>Parsippany, New Jersey</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h3> Employee Statistics</h3>
				<p>Unnee Ranjan's 2018 pay is <span style="font-size:20px;"><b>8%</b></span> higher than the average Pharmacist across all agencies.</p>
				<p>Unnee Ranjan's 2018 pay is <span style="font-size:20px;"><b>69%</b></span>higher than the average pay of a GS employee at the Food and Drug Administration.</p>
				<p>Unnee Ranjan's pay trend during his or her government career in the Food and Drug Administration: </p>
				<img src="<?php echo base_url(); ?>uploads/bb.png" alt="">
				<h3>Data Sources</h3>
				<p>The information provided on these pages is sourced from the Office of Personnel Management (OPM)  Enterprise Human Resources Integration (EHRI)  dataset. Postal Service data is managed exclusively by the USPS . All information is displayed unmodified and as provided by the source agency.</p>
				<p><b>Federal employee salaries are public information under open government laws (5 U.S.C. § 552).</b> FederalPay provides this data in the interest of government transparency — employee data may not be used for commercial soliciting or vending of any kind. Learn more about the FederalPay Employees Dataset here.</p>
				
				<?php } ?>
				<?php if(!empty($form483_all)) { 
				if(empty($inspector)){ ?>
					<h3 style="text-align:center"><?php echo $this->login_model->getinspector($this->uri->segment(2)); ?></h3>
				<?php } } ?>
				<?php 
				$total_observation  = count($form483_2018) + count($form483_2019);
				if($total_observation != 0) {
				?>


<!--<div class="tabluer-blogs table-responsive">-->
			<div class="row">
  				<div class="col-sm-6">
    				<div class="card">
      					<div class="card-body">
      						<h3 style="text-align:left;">Inspections of Form 483</h3>
         						<table class="table">
         						<thead style="background-color: #013368; color: white;">
                        		<tr>
                            	<th>Total</th>
								<th>2018</th>
                            	<th>2019</th>
                        		</tr>
                    			</thead>
         						<tbody>
                        		<tr>
                           		<td><?php 
								echo count($total_483);
						   		?></td>
                           		<td><?php echo count($total_483_2018); ?></td>
                           		<td><?php echo count($total_483_2019);?></td>
                        		</tr>
                    		</tbody></table>
      					</div>
    				</div>
  				</div>
  				<div class="col-sm-6">
    				<div class="card">
      					<div class="card-body">
      						<h3 style="text-align:left;">Inspectional Observations of Form 483</h3>
        					<table class="table">
         						<thead style="background-color: #013368; color: white;">
                        		<tr>
                            	<th>Total</th>
								<th>2018</th>
                            	<th>2019</th>
                        		</tr>
                    			</thead>
         						<tbody>
                        		<tr>
                           <td><?php 
						   $totalcountall = 0; 
						   if(!empty($form483_all)){
								foreach($form483_all as $fdatatotalcount) { 
									$totalcountall += $this->login_model->No_of_observation($fdatatotalcount->category_sub,$isid);
								}
								echo $totalcountall;
						   }
							
						   
						   ?></td>
                           <td><?php 
						   $totalcount2018 = 0;
						   if(!empty($form483_2018)){
						   foreach($form483_2018 as $fdatacount_2018) { 
								$totalcount2018 += $this->login_model->No_of_observation_2018($fdatacount_2018->category_sub,$isid);
							}
							echo $totalcount2018;
						   }
						   ?></td>
                           <td><?php 
						   $totalcount2019 = 0;
						   if(!empty($form483_2019)){
						   foreach($form483_2019 as $fdatacount_2019) { 
								$totalcount2019 += $this->login_model->No_of_observation_2019($fdatacount_2019->category_sub,$isid);
							}
							echo $totalcount2019;
						   }
						   ?></td>
                        </tr>
                    		</tbody></table>
      					</div>
    				</div>
  				</div>
		</div>
		
				<!--<h3 style="text-align:left;">Inspectional of Form 483</h3>
				
                <table class="table" style="width: 300px;" >
                    <thead>
                        <tr>
                            <th>Total</th>
							<th>2018</th>
                            <th>2019</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td><?php 
								echo count($total_483);
						   ?></td>
                           <td><?php echo count($total_483_2018); ?></td>
                           <td><?php echo count($total_483_2019);?></td>
                        </tr>
                    </tbody>
                </table>
            		</td>
			</div>

				 
				<div class="tabluer-blogs table-responsive">
				<td>
				<h3 style="text-align:center;">Inspectional Observations of Form 483</h3>
                
                <table class="table" style="width: 300px; margin-left: 100px;">
                    <thead>
                        <tr>
                            <th>Total</th>
							<th>2018</th>
                            <th>2019</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td><?php 
						   $totalcountall = 0; 
						   if(!empty($form483_all)){
								foreach($form483_all as $fdatatotalcount) { 
									$totalcountall += $this->login_model->No_of_observation($fdatatotalcount->category_sub,$isid);
								}
								echo $totalcountall;
						   }
							
						   
						   ?></td>
                           <td><?php 
						   $totalcount2018 = 0;
						   if(!empty($form483_2018)){
						   foreach($form483_2018 as $fdatacount_2018) { 
								$totalcount2018 += $this->login_model->No_of_observation_2018($fdatacount_2018->category_sub,$isid);
							}
							echo $totalcount2018;
						   }
						   ?></td>
                           <td><?php 
						   $totalcount2019 = 0;
						   if(!empty($form483_2019)){
						   foreach($form483_2019 as $fdatacount_2019) { 
								$totalcount2019 += $this->login_model->No_of_observation_2019($fdatacount_2019->category_sub,$isid);
							}
							echo $totalcount2019;
						   }
						   ?></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
            </div>
				 </div>-->
	<div class="row">
  		<div class="col-sm-4">
    			<div class="card">
      				<div class="card-body">
					<h3>Analysis Over Period(Total No : <?php echo $totalcountall;?>)</h3>
				<!--<div class="tabluer-blogs table-responsive">-->
				<div class="table-responsive">
                <table class="table display"  id="example" style="width:100%">
                    <thead style="background-color: #013368; color: white; white-space: nowrap;">
                        <tr>
                            <th>Category - Sub Category</th>
							<th>No of observations</th>
							<th>Percentile</th>
                        </tr>
                    </thead>
                    <tbody style="white-space: nowrap;">
					<?php $i=1; 
					$no_of_obb_cat1 = 0;
					if(!empty($form483_all)) {
						$totalobb1 = count($form483_all);
					foreach($form483_all as $fdata11) { ?>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>category/<?php echo $fdata11->category_sub; ?>/<?php echo $this->uri->segment(2); ?>" target="_blank"><?php echo $this->login_model->getcat($fdata11->category_sub); ?></a></td>
							<td><?php echo $this->login_model->No_of_observation($fdata11->category_sub,$isid); ?></td>
							<td><?php
									$no_of_obb_cat1 = $this->login_model->No_of_observation($fdata11->category_sub,$isid);
									if($totalobb1 == 1){
										echo '100%';
									}else {
										echo number_format((($no_of_obb_cat1/$totalcountall)*100),2).'%';
									}
									
							?></td>
                        </tr>
					<?php $i++; } } else { ?>
						<tr>
							<td colspan="4" style="text-align:center;"> There is not data for 2019 year.</td>
						</tr>
					<?php } ?>
                    </tbody>
                </table>
                </div>
			</div>
		</div>
    </div>



	<!--			 <table class="table">
    <thead>
        <tr>
            <th>Observations from other years</th>
        </tr>
    </thead>
        <tr padding=10px;>
            <td ><button type="button" class="btn btn-primary">2018</button></td>
            <td ><button type="button" class="btn btn-primary">2019</button></td>
        </tr>
</table>-->
				 
				 	<!--<h3>Analysis Over Period (2018)(Total No : <?php echo $totalcount2018;?>)</h3>
				<div class="tabluer-blogs table-responsive">
                <table class="table" id="example1">
                    <thead>
                        <tr>
                            <th>Category - Sub Category</th>
							<th>No of observations</th>
							<th>Percentalie</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $i=1; 
					$no_of_obb_cat2018 = 0;
					if(!empty($form483_2018)) {
						$totalobb2018 = count($form483_2018);
					foreach($form483_2018 as $fdata_2018) { ?>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>category/<?php echo $fdata_2018->category_sub; ?>/<?php echo $this->uri->segment(2); ?>" target="_blank"><?php echo $this->login_model->getcat($fdata_2018->category_sub); ?></a></td>
							<td><?php echo $this->login_model->No_of_observation_2018($fdata_2018->category_sub,$isid); ?></td>
							<td><?php
									$no_of_obb_cat2018 = $this->login_model->No_of_observation_2018($fdata_2018->category_sub,$isid);
									if($totalobb2018 == 1){
										echo '100%';
									}else {
										echo number_format((($no_of_obb_cat2018/$totalcount2018)*100),2).'%';
									}
									
							?></td>
                        </tr>
					<?php $i++; } } else { ?>
						<tr>
							<td colspan="4" style="text-align:center;"> There is not data for 2018 year.</td>
						</tr>
					<?php } ?>
                    </tbody>
                </table>
				 </div> 
				 
				<h3>Analysis Over Period (2019)(Total No : <?php echo $totalcount2019;?>)</h3>
				<div class="tabluer-blogs table-responsive">
                <table class="table" id="example2">
                    <thead>
                        <tr>
                            <th>Category - Sub Category</th>
							<th>No of observations</th>
							<th>Percentalie</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $i=1; 
					$no_of_obb_cat = 0;
					if(!empty($form483_2019)) {
						$totalobb = count($form483_2019);
					foreach($form483_2019 as $fdata) { ?>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>category/<?php echo $fdata->category_sub; ?>/<?php echo $this->uri->segment(2); ?>" target="_blank"><?php echo $this->login_model->getcat($fdata->category_sub); ?></a></td>
							<td><?php echo $this->login_model->No_of_observation_2019($fdata->category_sub,$isid); ?></td>
							<td><?php
									$no_of_obb_cat = $this->login_model->No_of_observation_2019($fdata->category_sub,$isid);
									if($totalobb == 1){
										echo '100%';
									}else {
										echo number_format((($no_of_obb_cat/$totalcount2019)*100),2).'%';
									}
									
							?></td>
                        </tr>
					<?php $i++; } } else { ?>
						<tr>
							<td colspan="4" style="text-align:center;"> There is not data for 2019 year.</td>
						</tr>
					<?php } ?>
                    </tbody>
                </table>
				 </div>-->
				
					
			
				
				
		<div class="col-sm-4">
    		<div class="card">
      			<div class="card-body">
      			
				 <!--<div class="tabluer-blogs table-responsive">-->
				<h3 style="text-align:center;">Total Analysis over period</h3>
				<div class="table-responsive">
                <table class="table" id="narcsTable">
                    <thead style="background-color: #013368; color: white; white-space: nowrap;">
                        <tr>
                            <th>Category-subcategory</th>
							<th>Total</th>
                            <th>2018</th>
							<th>2019</th>
                        </tr>
                    </thead>
                    <tbody style="white-space: nowrap;">
						<?php if(!empty($cat_subcat_inspector)){ foreach($cat_subcat_inspector as $catdata) { ?>
                        <tr>
						   <td><?php echo $this->login_model->getcat($catdata->category_sub); ?></td>
                           <td><?php $totalData = $this->login_model->getallFormDatabyid($catdata->category_sub,$this->uri->segment(2));
									if($totalData == 0){
										echo '-';
									}else{
										echo count($totalData);
									}
									
						   ?></td>
                           <td><?php $totalData2018 = $this->login_model->getallFormDataby_year($catdata->category_sub,$this->uri->segment(2),2018);
								if($totalData2018 == 0){
									echo '-';
								}else{
									echo count($totalData2018);
								}
							   ?></td>
                           <td>
						   <?php $totalData2019 = $this->login_model->getallFormDataby_year($catdata->category_sub,$this->uri->segment(2),2019);
									
									if($totalData2019 == 0){
											echo '-';
										}else{
												echo count($totalData2019);
										}	
						   ?>
						   </td>
                        </tr>
						<?php } } ?>
                    </tbody>
                </table>
                </div>
			</div>          
		</div>
	</div> 
			<div class="col-sm-4">
    		<div class="card">
      			<div class="card-body">
				<?php if(!empty($form483)){ ?>
				<h3>All Observations</h3>
				<!--<div class="tabluer-blogs table-responsive">-->
				<div class="table-responsive">
                <table class="table" id="example3">
                    <thead style="background-color: #013368; color: white; white-space: nowrap;">
                        <tr>
							<th>Date</th>
                            <th>Company Name - Location</th>
                            <th>Category - Sub Category</th>
                        </tr>
                    </thead>
                    <tbody style="white-space: nowrap;">
					<?php $i=1; 
					foreach($form483 as $fdata_all) { ?>
                        <tr>
                            <td><?php $newDate = date("M d,Y", strtotime($fdata_all->date)); echo $newDate; ?></td>
                            <td><a href="<?php echo base_url(); ?>form483-details/<?php echo $fdata_all->id; ?>"><?php echo $this->login_model->getcname($fdata_all->company_name); ?></a></td>
                            <td><?php echo $this->login_model->getcat($fdata_all->category_sub); ?></td>
                        </tr>
					<?php $i++; } ?>
                    </tbody>
                </table>
            </div>
				 </div>
				</div>
			</div>	
</div>
<div class="row">
 			<div class="col-sm-6">
			<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  			<div class="btn-group mr-2" role="group" aria-label="First group">
  				<a href="#link" class="btn btn-info" role="button">2017</a>
  				<!--<button type="button" class="btn btn-primary">2017</button>-->
    			<a href="#" class="btn btn-primary" role="button">2018</button>
    			<a href="#" class="btn btn-info" role="button">2019</a>
    			<a href="#" class="btn btn-primary" role="button">2020</a>
			</div>
			</div>
			</div>
</div>
<div class="row">
	<div class="col-sm-12">
    		<div class="card">
      			<div class="card-body">
				 <div  style="margin-top:30px; border-radius: 10px;" id="bar-chart"></div>
				<?php } ?>
				</div>
			</div>
	</div>
</div>
				<?php } ?>
				<?php if(!empty($inspector)){ ?>
				<h3> Reference Links</h3>
				<?php
					$str_arr = explode ("<br/>", $inspector->reference);  
				} ?>
				<ul>
					<?php if(!empty($str_arr)){ for($i=0;$i<count($str_arr);$i++) { ?>
						<li><a href="<?php echo $str_arr[$i];?>" target="_blank"><?php echo $str_arr[$i];?></a></li>
					<?php } } ?>
				</ul>
				<ul><a href="#link" class="btn btn-info" role="button" onclick="print()">Convert to PDF</a>
				</ul>
            </div>
        </div>
 </div>

    </section>
    <!-- End Profile -->
    <!-- End Blog Listing -->
<?php $this->load->view('frontend/layout/footer'); ?>
<script type="text/javascript">
var chart = Highcharts.chart('bar-chart', {

  chart: {
    type: 'column'
  },

  title: {
    text: 'Data Visualization of Total Observations'

  },

  legend: {
    align: 'right',
    verticalAlign: 'middle',
    layout: 'vertical'
    
  },

  xAxis: {
    categories: ['Apples', 'Oranges', 'Bananas'],
    labels: {
      x: -10
    }
  },

  yAxis: {
    allowDecimals: false,
    title: {
      text: 'No of Observations'
    }
  },

  series: [{
    name: 'Total',
    data: [0, 0, 0],
	color:'#338DFF'
  }, {
    name: '2018',
    data: [0, 0, 0],
	color:'#33FFAC'
  }, {
    name: '2019',
    data: [0, 0, 0],
	color:'#E175DC'
  }],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          align: 'center',
          verticalAlign: 'bottom',
          layout: 'horizontal'
        },
        yAxis: {
          labels: {
            align: 'left',
            x: 0,
            y: -5
          },
          title: {
            text: null
          }
        },
        subtitle: {
          text: null
        },
        credits: {
          enabled: false
        }
      }
    }]
  }
});
$( document ).ready(function() {
	barchart();
});
function barchart(){
	var inspector = <?php echo $this->uri->segment(2); ?>;
	var barchart1 = $('#bar-chart').highcharts();
	var data = 'inspector='+inspector;
	$.ajax({
				 type: "POST",
				 data:data,
                 dataType: "json",
				 url: "<?php echo base_url() ?>home/getbarchat_data",
				 success: function(result) {
					 console.log(result);
					barchart1.xAxis[0].update({categories:result['category-subcategory']}, true);
					barchart1.series[0].setData(result['total']);
					barchart1.series[1].setData(result['2018']);
					barchart1.series[2].setData(result['2019']);
				 }
	});
}
var tdCount = $('#narcsTable tr:eq(1) td').length,
    trCount = $('#narcsTable tr').length;

for (var i = 1; i < tdCount; i++) {
    var $td = $('#narcsTable tr:eq(2) td:eq(' + i + ')'),
        highest = 0,
        lowest = 9e99;

    for (var j = 3; j < trCount; j++) {
        $td = $td.add('#narcsTable tr:eq(' + j + ') td:eq(' + i + ')');
    }
    
    $td.each(function(i, el){
        var $el = $(el);
        if (i > 0) {
            var val = parseInt($el.text().replace(/[\$,]/g, ''), 10);
            if (val > highest) {
                highest = val;
                $td.removeClass('high');
                $el.addClass('high');
            }
            if (val < lowest) {
                //lowest = val;
                //$td.removeClass('low');
                //$el.addClass('low');
            }
        }
    });
}
</script>

<script type="text/javascript">
	function print() {
		const filename  = 'ThisIsYourPDFFilename.pdf';

		html2canvas(document.querySelector('#nodeToRenderAsPDF')).then(canvas => {
			let pdf = new jsPDF('p', 'mm', 'a4');
			pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, 0, 211, 298);
			pdf.save(filename);
		});
	}

	}
</script>
</body>
</html>