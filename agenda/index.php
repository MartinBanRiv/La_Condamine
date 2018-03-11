
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Agenda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../_css/style.css">
	<link rel="stylesheet" href="../_css/connexion.css">
	<link rel="stylesheet" href="../_css/signin.css">
	<link rel="stylesheet" href="../_css/agenda.css">
	<link href='fullcalendar/fullcalendar.min.css' rel='stylesheet'>
	<link href='fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print'>
	<link rel="stylesheet" href="niceDatePicker-master/nice-date-picker.css">

	<script src='fullcalendar/lib/moment.min.js'></script>
	<script src='fullcalendar/lib/jquery.min.js'></script>
	<script src='fullcalendar/fullcalendar.min.js'></script>
	<script src='fullcalendar/locale/fr.js'></script>
	<script src="niceDatePicker-master/nice-date-picker.js"></script>
	<script>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			themeSystem: 'bootstrap3',
			defaultDate: '2018-02-12',
			weekNumbers: true,
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
			{
			  title: 'All Day Event',
			  start: '2018-02-01'
			},
			{
			  title: 'Long Event',
			  start: '2018-02-07',
			  end: '2018-02-10'
			},
			{
			  id: 99,
			  title: 'Repeating Event',
			  start: '2018-02-09T16:00:00'
			},
			{
			  id: 99,
			  title: 'Repeating Event',
			  start: '2018-02-16T16:00:00'
			},
			{
			  title: 'Conference',
			  start: '2018-02-11',
			  end: '2018-02-13'
			},
			{
			  title: 'Meeting',
			  start: '2018-02-12T10:30:00',
			  end: '2018-02-12T12:30:00'
			},
			{
			  title: 'Lunch',
			  start: '2018-02-12T12:00:00'
			},
			{
			  title: 'Meeting',
			  start: '2018-02-12T14:30:00'
			},
			{
			  title: 'Happy Hour',
			  start: '2018-02-12T17:30:00'
			},
			{
			  title: 'Dinner',
			  start: '2018-02-12T20:00:00'
			},
			{
			  title: 'Birthday Party',
			  start: '2018-02-13T07:00:00'
			},
			{
			  title: 'Click for Google',
			  url: 'http://google.com/',
			  start: '2018-02-28'
			}
			]
    	});
</head>
    

                                             
</html>
                                             
	<link rel="stylesheet" href="../_css/agenda.css">
	<link href='fullcalendar/fullcalendar.min.css' rel='stylesheet'>
	<link href='fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print'>
	<link rel="stylesheet" href="niceDatePicker-master/nice-date-picker.css">

	<script src='fullcalendar/lib/moment.min.js'></script>
	<script src='fullcalendar/lib/jquery.min.js'></script>
	<script src='fullcalendar/fullcalendar.min.js'></script>
	<script src='fullcalendar/locale/fr.js'></script>
	<script src="niceDatePicker-master/nice-date-picker.js"></script>
	<script>
	$(document).ready(function() {
	$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			themeSystem: 'bootstrap3',
			defaultDate: '2018-02-12',
			weekNumbers: true,
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
			{
			  title: 'All Day Event',
			  start: '2018-02-01'
			},
			{
			  title: 'Long Event',
			  start: '2018-02-07',
			  end: '2018-02-10'
			},
			{
			  id: 99,
			  title: 'Repeating Event',
			  start: '2018-02-09T16:00:00'
			},
			{
			  id: 99,
			  title: 'Repeating Event',
			  start: '2018-02-16T16:00:00'
			},
			{
			  title: 'Conference',
			  start: '2018-02-11',
			  end: '2018-02-13'
			},
			{
			  title: 'Meeting',
			  start: '2018-02-12T10:30:00',
			  end: '2018-02-12T12:30:00'
			},
			{
			  title: 'Lunch',
			  start: '2018-02-12T12:00:00'
			},
			{
			  title: 'Meeting',
			  start: '2018-02-12T14:30:00'
			},
			{
			  title: 'Happy Hour',
			  start: '2018-02-12T17:30:00'
			},
			{
			  title: 'Dinner',
			  start: '2018-02-12T20:00:00'
			},
			{
			  title: 'Birthday Party',
			  start: '2018-02-13T07:00:00'
			},
			{
			  title: 'Click for Google',
			  url: 'http://google.com/',
			  start: '2018-02-28'
			}
			]
    	});
	});
	</script>
	<style>
	#calendar {
		max-width: 1000px;
		margin: 0 auto;
	}
	</style>
</head>
                                             
                                             
<body>
	<?php include '../_views/header.html' ?>

	<div id="main" class="container-fluid">
		<div class="col-lg-8">
			<div id='calendar'></div>
		</div>

		<div class="col-lg-4">
			<h2>Ajouter un événement:</h2>
			<form action="ajoutEvenement.php" method="post">
				<label for="intitule">Nom de l'événement: </label>
				<input type="text" name="intitule" placeholder="Nom"><br>

				<label for="lieu">Lieu: </label>
				<input type="text" name="lieu" placeholder="Lieu">

				<label for="date">Date: </label>
				<input id="#dateField" type="text" name="date" value="">
				<div id="calendar1-wrapper1"></div>
			</form>
		</div>
	</div>

	<script>
	new niceDatePicker({
        dom: document.getElementById('calendar1-wrapper1'),
        onClickDate: function(date){
            $('#dateField').val(date);
        }
    });
	</script>

	<?php include '../_views/footer.html' ?>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

// balise correspondu
// header footer fonction pas

// en general
//id=main class=container-fluid main in the agenda.css  id=main
// inline class calendar  max-width et margin
//class fc fc-bootstrap3 fc-ltr

