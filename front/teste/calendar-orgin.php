<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
    <link href='css/fullcalendar.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='js/jquery.min.js'></script>
    <script src='js/moment.min.js'></script>
    <script src='js/fullcalendar.js'></script>
    
    <!-- script de tradução -->
    <script src='js/pt-br.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2016-01-12',
			businessHours: true, // display business hours
			editable: true,
			events: [
				{
					title: 'Business Lunch',
					start: '2016-01-03T13:00:00',
					constraint: 'businessHours'
				},
				{
					title: 'Meeting',
					start: '2016-01-13T11:00:00',
					constraint: 'availableForMeeting', // defined below
					color: '#257e4a'
				},
				{
					title: 'Conference',
					start: '2016-01-18',
					end: '2016-01-20'
				},
				{
					title: 'Party',
					start: '2016-01-29T20:00:00'
				},

				// areas where "Meeting" must be dropped
				{
					id: 'availableForMeeting',
					start: '2016-01-11T10:00:00',
					end: '2016-01-11T16:00:00',
					rendering: 'background'
				},
				{
					id: 'availableForMeeting',
					start: '2016-01-13T10:00:00',
					end: '2016-01-13T16:00:00',
					rendering: 'background'
				},

				// red areas where no events can be dropped
				{
					start: '2016-01-24',
					end: '2016-01-28',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				{
					start: '2016-01-06',
					end: '2016-01-08',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				}
			]
		});
		//CADASTRA NOVO EVENTO
        $('#novo_evento').submit(function(){
            //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
            var dados = jQuery(this).serialize();
            $.ajax({
                type: "POST",
                url: "cadastrar_evento.php",
                data: dados,
                success: function(data)
                {   
                    if(data == "1"){
                        alert("Cadastrado com sucesso! ");
                        //atualiza a página!
                        location.reload();
                    }else{
                        alert("Houve algum problema.. ");
                    }
                }
            });                
            return false;
        });	
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'>
    <br/>
        <form id="novo_evento" action="" method="post">
            Nome do Evento: <input type="text" name="nome" required/><br/><br/>            
            Data do Evento: <input type="date" name="data" required/><br/><br/>            
            <button type="submit"> Cadastrar novo evento </button>
        </form>
    </div>

</body>
</html>
