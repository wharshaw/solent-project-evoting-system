<?php
  	session_start();
	  include 'includes/conn.php';
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">


<div class="row">

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 hidden-sm hidden-xs" style="padding-left: 0px; padding-right: 0px;">

	  <!-- slider section -->
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="dist/img/slider01.jpg" alt="" class="img-responsive center-bloxk">
    </div>

    <div class="item">
	<img src="dist/img/slider01.jpg" alt="" class="img-responsive center-bloxk">
    </div>

    <div class="item">
	<img src="dist/img/slider01.jpg" alt="" class="img-responsive center-bloxk">
    </div>
</div>
</div>
<!-- slider section -->

<br>
<br>

<!-- bar section -->

<div class="row">
           
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home_do_chart_col" data-aos="fade-up">
                <canvas id="candidates" width="50%" />
                <div id="chartjs-tooltip"></div>
             </div>

             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up">
				 <div class="home_text_col">
              <h1 class="heading" data-aos="fade-up" style="font-size: 20px; text-align: left; margin-bottom: 0px;">
                SAMPLE
              </h1>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>

        </div>

		<br>
		<br>

		<div class="row">

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up">
				<div class="home_text_col">
			<h1 class="heading" data-aos="fade-up" style="font-size: 20px; text-align: left; margin-bottom: 0px;">
                SAMPLE
              </h1>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
			</div>
           
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home_do_chart_col" data-aos="fade-up">
                <canvas id="maha" width="50%" />
                <div id="chartjs-tooltip"></div>
             </div>

        </div>


<!-- bar section -->

<br>
<br>

<!-- footer -->
<div class="row footer_row hidden-sm hidden-xs">

	<br>
	<br>
	<div class="clearfix"></div>

	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" data-aos="fade-up">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<img src="images/gov_logo.png" alt="" class="img-responsive">
		</div>

		<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="margin-top: 30px;">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
		</div>
	</div>

	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" data-aos="fade-up">
		<p style="margin-bottom: 0px;">
		Elections Secretariat, <br>P.O. Box 02, Sarana Mawatha, <br>Rajagiriya, 10107, <br>Sri Lanka
		</p>

		<br>

		<p style="margin-bottom: 0px;">
			<a href="tel:0112868441" style="color: #ffffff;">Call Now - 0112868441</a>
		</p>

		<p style="margin-bottom: 0px;">
			<a href="mailto:info@elections.gov.lk" style="color: #ffffff;">Email - info@elections.gov.lk</a>
		</p>
	</div>
	<div class="clearfix"></div>
	<br>
	<br>
	
</div>
<!-- footer -->


</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 home_login_col">


	<div class="login-box">
		<div class="login-logo">
		<img src="images/Logo.jpg" alt="" class="img-responsive center-block" width="200px;">
			<b>E - Voting System</b>
		</div>
	
		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>

			<form action="login.php" method="POST">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="username" placeholder="User's ID" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password" placeholder="Password" required>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat" name="login" ><i class="fa fa-sign-in"></i> Sign In</button>
					</div>
				</div>
			</form>
		</div>
		<?php
			if(isset($_SESSION['error'])){
				echo "
					<div class='callout callout-danger text-center mt20'>
						<p>".$_SESSION['error']."</p> 
					</div>
				";
				unset($_SESSION['error']);
			}
		?>
	</div>

</div>

<br class="visible-sm visible-xs">
<br class="visible-sm visible-xs">

<!-- footer -->
<div class="row footer_row visible-sm visible-xs">

	<br>
	<br>
	<div class="clearfix"></div>

	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" data-aos="fade-up">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<img src="images/gov_logo.png" alt="" class="img-responsive f_logo">
		</div>

		<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="margin-top: 30px;">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
		</div>
	</div>

	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" data-aos="fade-up">
		<p style="margin-bottom: 0px;">
		Elections Secretariat, <br>P.O. Box 02, Sarana Mawatha, <br>Rajagiriya, 10107, <br>Sri Lanka
		</p>

		<br>

		<p style="margin-bottom: 0px;">
			<a href="tel:0112868441" style="color: #ffffff;">Call Now - 0112868441</a>
		</p>

		<p style="margin-bottom: 0px;">
			<a href="mailto:info@elections.gov.lk" style="color: #ffffff;">Email - info@elections.gov.lk</a>
		</p>
	</div>
	<div class="clearfix"></div>
	<br>
	<br>
	
</div>
<!-- footer -->

</div>

	
<?php include 'includes/scripts.php' ?>

<!-- chart js -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
<script  src="dist/chart/script.js"></script>
<!-- chart js -->
<?php

$sql2 = "SELECT
	max(positions.id) as latest
FROM
	positions";
$query = $conn->query($sql2);
if($query->num_rows > 0){
	$result2 = mysqli_fetch_all($query, MYSQLI_ASSOC);
	$latest_election=$result2[0]['latest'];
}else{
	$latest_election=0;
}
//$latest_election=8;
$sql = "SELECT
candidates.firstname, 
count(votes.id) as vote_count
FROM
candidates
INNER JOIN
votes
ON 
	candidates.id = votes.candidate_id
where candidates.position_id = '$latest_election'
GROUP BY
candidates.id
ORDER BY
count(votes.id) desc
limit 3";
		$query = $conn->query($sql);

		if($query->num_rows > 0){
			$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
			
		}else{
			$result=array();
		}
		$counter_1=0;
		$comma='';
		$can_names='';
		$can_val='';
		
		 
		
for($x=0; count($result)>$x; $x++)
{
	
	
	if($counter_1==0){$comma=''; }else{$comma=',';}
	$can_val.=$comma.$result[$x]['vote_count'];
	$can_names.=$comma."'".$result[$x]['firstname']."'";
	$counter_1++;
}	

$latest_election=$latest_election-1;
$sql3 = "SELECT
candidates.firstname, 
count(votes.id) as vote_count
FROM
candidates
INNER JOIN
votes
ON 
	candidates.id = votes.candidate_id
where candidates.position_id = '$latest_election'
GROUP BY
candidates.id
ORDER BY
count(votes.id) desc
limit 3";

		$query3 = $conn->query($sql3);

		if($query3->num_rows > 0){
			$result3 = mysqli_fetch_all($query3, MYSQLI_ASSOC);
			
		}else{
			$result3=array();
		}
		$counter_1=0;
		$comma='';
		$can_names3='';
		$can_val3='';
		
		 
		
for($x=0; count($result3)>$x; $x++)
{
	
	
	if($counter_1==0){$comma=''; }else{$comma=',';}
	$can_val3.=$comma.$result3[$x]['vote_count'];
	$can_names3.=$comma."'".$result3[$x]['firstname']."'";
	$counter_1++;
}

		?>
<script>


//get the doughnut chart canvas
var ctx1 = $("#candidates");
var ctx2 = $("#maha");
var ctx3 = $("#all");


$(function(){

  //get the doughnut chart canvas
  var ctx1 = $("#candidates");
  var ctx2 = $("#maha");
  var ctx3 = $("#all");

  //doughnut chart data
  var data1 = {
    labels: [<?php echo $can_names; ?>],
    datasets: [
      {
        label: "TeamA Score",
        data: [<?php echo $can_val; ?>],
        backgroundColor: [
          "#3c8dbc",
          "#999999",
          "#979797"
        ],
        borderColor: [
          "#000000",
          "#999999",
          "#000000"
        ],
        borderWidth: [1, 1, 1]
      }
    ]
  };

  //doughnut chart data
  var data2 = {
    labels: [<?php echo $can_names3; ?>],
    datasets: [
      {
        label: "TeamA Score",
        data: [<?php echo $can_val3; ?>],
        backgroundColor: [
          "#f7a41c",
          "#979797"
        ],
        borderColor: [
          "#000000",
          "#000000"
        ],
        borderWidth: [1, 1]
      }
    ]
  };

  //doughnut chart data
  var data3 = {
    labels: ["ACTUAL HARVESTED VOLUME", "CROP DAMAGES"],
    datasets: [
      {
        label: "TeamA Score",
        data: [40, 60],
        backgroundColor: [
          "#f7a41c",
          "#979797"
        ],
        borderColor: [
          "#000000",
          "#000000"
        ],
        borderWidth: [1, 1]
      }
    ]
  };

  //options
  var options = {
    responsive: true,
    title: {
      display: true,
      position: "top",
      fontSize: 14,
      fontColor: "#111"
    },
    legend: {
      display: true,
      position: "bottom",
      labels: {
        fontColor: "#333",
        fontSize: 14
      }
    }
  };

  //create Chart class object
  var chart1 = new Chart(ctx1, {
    type: "pie",
    data: data1,
    options: options
  });

  //create Chart class object
  var chart2 = new Chart(ctx2, {
    type: "doughnut",
    data: data2,
    options: options
  });

  //create Chart class object
  var chart3 = new Chart(ctx3, {
    type: "doughnut",
    data: data3,
    options: options
  });
});
	</script>
</body>
</html>