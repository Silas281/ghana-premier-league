<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

//IMPORT CONTROLLER CLASSES
require_once __DIR__."../../controller/person_controller.php"; 
require_once __DIR__."../../controller/clubs_controller.php"; 
require_once __DIR__."../../controller/players_controller.php";
require_once __DIR__."../../controller/matches_controller.php";
require_once __DIR__."../../controller/users_controller.php";
require_once __DIR__."../../controller/leagueTable_controller.php";

//CREATE GLOBAL CONTROLLER CLASSES OBJECTS
  $personsObj = new PersonController();
  $clubObj = new ClubController();
  $playerObj= new PlayerController();
  $matchObj=new MatchController();
  $userObj=new UserController();
  $tableObj=new TableController();

  $clubsCount=$clubObj->retrieveClubCount();
  $matchesCount=$matchObj->retrieveMatchCount();
  $personCount=$personsObj->retrievePersonCount();
  $playersCount=$playerObj->retrievePlayerCount();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  

<style>
	#backButton {
		border-radius: 4px;
		padding: 8px;
		border: none;
		font-size: 16px;
		background-color: #2eacd1;
		color: white;
		position: absolute;
		top: 10px;
		right: 10px;
		cursor: pointer;
	}
	.invisible {
		display: none;
	}
</style>
</head>
<?php include_once ('head.php') ?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
      <?php include_once ('header.php') ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    
    <?php include_once ('sidebar.php') ?>

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content end-->

    <!--main content start-->
    <section id="main-content" class="container">
      <section class="wrapper site-min-height">
       
      <div id="chartContainer" style="height: 300px; width: 100%; margin-top:40px;"></div>
<button class="btn invisible" id="backButton">< Back</button>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
        <!-- /container -->
      </section>
	  <div class="row dash-row mt-5">
                <div class="col-sm">
                    <div class="dash-items">
                        <span><i class="bi bi-people"></i></span>
                        <span class="num-count"><?php echo $personCount ?></span>
                        <span>Persons</span>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="dash-items">
                        <span><i class="bi bi-player"></i></span>
                        <span class="num-count"><?php echo $playersCount ?></span>
                        <span>Players</span>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="dash-items">
                        <span><i class="bi bi-calendar4-event"></i></i></span>
                        <span class="num-count"><?php echo $matchesCount ?></span>
                        <span>Matches</span>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="dash-items">
                        <span><i class="bi bi-"></i></span>
                        <span class="num-count"><?php echo $clubsCount ?></span>
                        <span>Clubs</span>
                    </div>
                </div>
            </div>

      <!-- /wrapper -->
    </section>
    
  </section>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
window.onload = function () {

var totalVisitors = 883000;
var visitorsData = {
	"New vs Returning Visitors": [{
		click: visitorsChartDrilldownHandler,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "New vs Returning Visitors",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "doughnut",
		dataPoints: [
			{ y: 519960, name: "New Visitors", color: "#E7823A" },
			{ y: 363040, name: "Returning Visitors", color: "#546BC1" }
		]
	}],
	"New Visitors": [{
		color: "#E7823A",
		name: "New Visitors",
		type: "column",
		xValueFormatString: "MMM YYYY",
		dataPoints: [
			{ x: new Date("1 Jan 2015"), y: 33000 },
			{ x: new Date("1 Feb 2015"), y: 35960 },
			{ x: new Date("1 Mar 2015"), y: 42160 },
			{ x: new Date("1 Apr 2015"), y: 42240 },
			{ x: new Date("1 May 2015"), y: 43200 },
			{ x: new Date("1 Jun 2015"), y: 40600 },
			{ x: new Date("1 Jul 2015"), y: 42560 },
			{ x: new Date("1 Aug 2015"), y: 44280 },
			{ x: new Date("1 Sep 2015"), y: 44800 },
			{ x: new Date("1 Oct 2015"), y: 48720 },
			{ x: new Date("1 Nov 2015"), y: 50840 },
			{ x: new Date("1 Dec 2015"), y: 51600 }
		]
	}],
	"Returning Visitors": [{
		color: "#546BC1",
		name: "Returning Visitors",
		type: "column",
		xValueFormatString: "MMM YYYY",
		dataPoints: [
			{ x: new Date("1 Jan 2015"), y: 22000 },
			{ x: new Date("1 Feb 2015"), y: 26040 },
			{ x: new Date("1 Mar 2015"), y: 25840 },
			{ x: new Date("1 Apr 2015"), y: 23760 },
			{ x: new Date("1 May 2015"), y: 28800 },
			{ x: new Date("1 Jun 2015"), y: 29400 },
			{ x: new Date("1 Jul 2015"), y: 33440 },
			{ x: new Date("1 Aug 2015"), y: 37720 },
			{ x: new Date("1 Sep 2015"), y: 35200 },
			{ x: new Date("1 Oct 2015"), y: 35280 },
			{ x: new Date("1 Nov 2015"), y: 31160 },
			{ x: new Date("1 Dec 2015"), y: 34400 }
		]
	}]
};

var newVSReturningVisitorsOptions = {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "New VS Returning Visitors"
	},
	subtitles: [{
		text: "Click on Any Segment to Drilldown",
		backgroundColor: "#2eacd1",
		fontSize: 16,
		fontColor: "white",
		padding: 5
	}],
	legend: {
		fontFamily: "calibri",
		fontSize: 14,
		itemTextFormatter: function (e) {
			return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";  
		}
	},
	data: []
};

var visitorsDrilldownedChartOptions = {
	animationEnabled: true,
	theme: "light2",
	axisX: {
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2"
	},
	axisY: {
		gridThickness: 0,
		includeZero: false,
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2",
		lineThickness: 1
	},
	data: []
};

newVSReturningVisitorsOptions.data = visitorsData["New vs Returning Visitors"];
$("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);

function visitorsChartDrilldownHandler(e) {
	e.chart.options = visitorsDrilldownedChartOptions;
	e.chart.options.data = visitorsData[e.dataPoint.name];
	e.chart.options.title = { text: e.dataPoint.name }
	e.chart.render();
	$("#backButton").toggleClass("invisible");
}

$("#backButton").click(function() { 
	$(this).toggleClass("invisible");
	newVSReturningVisitorsOptions.data = visitorsData["New vs Returning Visitors"];
	$("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);
});

}
</script>
</body>

</html>
