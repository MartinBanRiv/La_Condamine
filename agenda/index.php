<!DOCTYPE html>
<html>
<head>
    <title>Agenda</title>
	<meta charset="UTF-8">
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
    	})});
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
        <div class='row'>
            <div class="col-lg-8">
                <div id='calendar'></div>  
            </div>
            <div class="col-lg-4">
                <h2>Ajouter un événement:</h2>
                <form action="ajoutEvenement.php" method="post">
                    <label for="intitule">Nom de l'événement: </label>
                    <p><input type="text" name="intitule" placeholder="Nom"></p>

                    <label for="lieu">Lieu: </label>
                    <p><input type="text" name="lieu" placeholder="Lieu"></p>

                    <label for="date">Date: </label>
                    <span class="calendar1-msg"><input id="#dateField" type="text" name="date" value="" placeholder="Date"></span>
                    
                    <div id="calendar1">
                        <div id="calendar1-wrapper1"></div>
                        <span class="calendar1-msg"></span>
                    </div>
                </form>
            </div>
	   </div>
    </div>

    
    <script>
    new niceDatePicker({
   dom:document.getElementById('calendar1-wrapper1'),
   onClickDate:function(date){
       document.querySelector('.calendar1-msg').innerHTML=date;
    }
    });
    </script>
        
        
	<?php include '../_views/footer.html' ?>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<script>
*/ lien a mon compte et accueil/*    
    
*/ balise correspondu/*
*/header footer fonction pas/*
*/en general/*
*/id=main class=container-fluid main in the agenda.css  id=main/*
*/ inline class calendar  max-width et margin/*
*/class fc fc-bootstrap3 fc-ltr est tout l'agenda  qui est en relation qvec fullcalendar.min.css  .fc /*
*/ class= fc-toolbar fc-header-toolbar est le onglet au dessus   qui est aussi en relation avec fullcalendar.min.css  .fc toolbar/*
*/ fc left est aujourd'hui+btn-group mais le btn ne s'affiche pas  .btn-group est dqns bootstrap.min.css  .btn-group/*
*/ pour les duex botton, btn est dans bootstrap3, .fc bottin est dans fullcalendar.min.css /*
*/fc-right,center in fullcalendar.min.css /*
*/ table-bordered est dans fullcalebdar       class=fc-head-container sont sem lun mar mer  est dans .fc td de full.min.css/*
*/ need to understand the document ready fonction /*
</script>
