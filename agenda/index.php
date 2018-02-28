<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../_css/style.css">
	<link rel="stylesheet" href="../_css/connexion.css">
	<link rel="stylesheet" href="../_css/signin.css">

    <link href='fullcalendar-3.8.2/fullcalendar.min.css' rel='stylesheet' />
    <link href='fullcalendar-3.8.2/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <? //script ?>
    <script src='fullcalendar-3.8.2/lib/moment.min.js'></script>
    <script src='fullcalendar-3.8.2/lib/jquery.min.js'></script>
    <script src='fullcalendar-3.8.2/fullcalendar.min.js'></script>
    <script src="fullcalendar-3.8.2/demos/js/theme-chooser.js"></script>
    
    
    
   <script>

    $(document).ready(function() {
        
          
     
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      //theme:true,
      defaultDate: '2018-02-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-02-01',
        },
        {
          title: 'Long Event',
          start: '2018-02-07',
          end: '2018-02-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-09T16:00:00'
        },
        {
          id: 999,
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
//$('#calendar').fullCalendar('option', 'themeSystem', 'darkly')
        });
    


</script>


</head>
    
<body>
	<?php include '../_views/header.html' ?>
    
   

  <div id='calendar'></div>
    

	
</body>
</html>
