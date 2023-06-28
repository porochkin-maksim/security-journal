<?php

use App\ViewHelper;

include 'autoload.php';

/**
 * @var ViewHelper $view;
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация инцидента ИБ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<style>
 .lb {width:50%; float:left;
   }
  .hed {
     text-align:center;font-weight: bold;
   }
  .form-group input[type=radio] {
	width:50%;float:left;
}
.h3 {text-align:center !important; font-weight: bold;}
  </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col mt-1">
				<?= $view->message() ?>
				<button class="btn btn-success mb-1" data-toggle="modal" data-target="#Modal"><i class="fa fa-user-plus"></i></button>
				<table class="table shadow ">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Статус</th>
							<th>Ответственный дежурный</th>
							<th>Тип инцидента</th>
							<th>Дата и время обнаружения инцидента</th>
							<th>Источник информации об инциденте</th>
							<th>Критичность</th>
							<th>Место инцидента</th>
							<th>Описание инцидента</th>
							<th>Ответственный за устранение</th>
							<th>Меры по устранению</th>
							<th>Дата и время закрытия</th>
						</tr>
						<?php foreach ($view->incidents() as $model) { ?>
						<tr>
							<td><?=$model->ID  ?></td>
							<td><?=$model->END ?></td>
							<td><?=$model->DEZ ?></td>
							<td><?=$model->TYP ?></td>
							<td><?=$model->DTF ?></td>
							<td><?=$model->SRC ?></td>
							<td><?=$model->CRT ?></td>
							<td><?=$model->TRG ?></td>
							<td><?=$model->DSC ?></td>
							<td><?=$model->EXC ?></td>
							<td><?=$model->MES ?></td>
							<td><?=$model->DTE ?></td>
							<td>
								<a href="?edit=<?=$model->ID ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$model->ID ?>"><i class="fa fa-edit"></i></a>
								<a href="?delete=<?=$model->ID ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$model->ID ?>"><i class="fa fa-trash"></i></a>
								<?php require 'modal.php'; ?>
							</td>
						</tr> <?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow">
	      <div class="modal-header">
	        <h5 class="modal-title">Добавить инцидент</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
	            <h3>Описание инцидента</h3>
	        	<div class="form-group"><p class="hed">Статус:</p>
	        		<input type="radio" class="form-control" name="END" value="Закрыт" placeholder="Статус"><p class= "lb">Закрыт</p>
	        		<input type="radio" class="form-control" name="END" value="Открыт" placeholder="Статус"><p class= "lb">Не закрыт</p>
	        	</div>
	        	<div class="form-group"><p class="hed">Ответственный дежурный:</p>
	        		<input type="text" class="form-control" name="DEZ" value="" placeholder="ФИО">
	        	</div>
	        	<div class="form-group"><p class="hed">Причины возникновения инцидента:</p>
	        		<input type="radio" class="form-control" name="TYP" value="Вредоносное ПО" ><p class= "lb">Вредоносное ПО</p>
	        		<input type="radio" class="form-control" name="TYP" value="Проблема на стороне разработчика" ><p class= "lb">Проблема на стороне разработчика</p>
	        		<input type="radio" class="form-control" name="TYP" value="Проблема в канале" ><p class= "lb">Проблема в канале</p>
	        		<input type="radio" class="form-control" name="TYP" value="Проблема на стороне админстратора" ><p class= "lb">Проблема на стороне админстратора</p>
	        		<input type="radio" class="form-control" name="TYP" value="Обнаружение уязвимости" ><p class= "lb">Обнаружение уязвимости</p>
	        		<input type="radio" class="form-control" name="TYP" value="Эксплуатация уязвимости" ><p class= "lb">Эксплуатация уязвимости</p>
	        		<input type="radio" class="form-control" name="TYP" value="Иное" ><p class= "lb">Иное</p>
	        	</div>
	        		<div class="form-group"><p class="hed">Дата и время обнаружения:</p>
	        		<input type="text" class="form-control" name="DTF" value="" placeholder="0000-00-00 00:00:00">
	        	</div>
	        	<div class="form-group"><p class="hed">Источник информации:</p>
	        		<input type="radio" class="form-control" name="SRC" value="Системы мониторинга SIEM" ><p class= "lb">Системы мониторинга SIEM</p>
	        		<input type="radio" class="form-control" name="SRC" value="Системы мониторинга Zabbix" placeholder="Источник информации"><p class= "lb">Системы мониторинга Zabbix</p>
	        		<input type="radio" class="form-control" name="SRC" value="MaxPatrol 8" placeholder="Источник информации"><p class= "lb">MaxPatrol 8</p>
	        		<input type="radio" class="form-control" name="SRC" value="Письмо ФСТЭК/ФСБ" placeholder="Источник информации"><p class= "lb">Письмо ФСТЭК/ФСБ</p>
	        	</div>
	        	<div class="form-group"><p class="hed">Опасность инцидента:</p>
	        		<input type="radio" class="form-control" name="CRT" value="Критический" placeholder="Критичность"><p class= "lb">Критический</p>
	        		<input type="radio" class="form-control" name="CRT" value="Высокий" placeholder="Критичность"><p class= "lb">Высокий</p>
	        		<input type="radio" class="form-control" name="CRT" value="Средний" placeholder="Критичность"><p class= "lb">Средний</p>
	        		<input type="radio" class="form-control" name="CRT" value="Низкий" placeholder="Критичность"<p class= "lb">Низкий</p>
	        	</div>
	        		<div class="form-group"><p class="hed">Место инцидента:</p>
	        		<input type="text" class="form-control" name="TRG" value="" placeholder="Место инцидента">
	        	</div>
	        	<div class="form-group"><p class="hed">Описание инцидента:</p>
	        		<textarea class="form-control" name="DSC" value="123" placeholder="Описание инцидента" size="512"></textarea>
	        	</div>
	        	<h3>Закрытие инцидента</h3>
	        	<div class="form-group"> <p class="hed">Ответственный исполнитель:</p>
	        		<input type="radio" class="form-control" name="EXC" value="Тиранов А.Ю." ><p class= "lb">Тиранов А.Ю.</p>
	        		<input type="radio" class="form-control" name="EXC" value="Михайлов А.Н." ><p class= "lb">Михайлов А.Н.</p>
	        		<input type="radio" class="form-control" name="EXC" value="Иванов Д.А." ><p class= "lb">Иванов Д.А.</p>
	        			        	</div>
	        		<div class="form-group"><p class="hed">Принятые меры:</p>
	        		<textarea class="form-control" name="MES" value="" placeholder="Принятые меры"></textarea>
	        	</div>
	        	<div class="form-group"><p class="hed">Дата и время закрытия:</p>
	        		<input type="text" class="form-control" name="DTE" value="" placeholder="0000-00-00 00:00:00">
	        	</div>
	        	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
</body>
</html>