<!DOCTYPE html>
<html>
<head>
	<title>Онлайн вебинар</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
	<style type="text/css">
		.video {	
			position:relative;
			padding-bottom:56.25%;/*пропорции видео 16:9 */
			padding-top:25px;height:0;
		}
		.video iframe {
			position:absolute;
			top:0;
			left:0;
			width:100%;
			height:100%;
		}
		#send_ot {			    		
    		height: 80%;
    		padding: 10px;
    		overflow-y:auto;
		}
	</style>
</head>
<body style="background-color: #292b2c;">
	<div class="container-fluid bg-inverse text-white">
	  <div class="row">
	    <div class="col-9">
	    	<div class="embed-responsive embed-responsive-16by9" style="margin-top:15px;">
	      		<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/ZeiknqG_wMw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	    	</div>
	    </div>
	    <div class="col-3" style="padding-top: 15px;">
	    		<div id="name_user" style="margin-bottom: 15px;">
				  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="user_name" placeholder="Фамилия Имя" style="width: 71%; display: block;float: left;">
				  <button type="submit" id="set_name_user" class="btn btn-primary">Отправить</button>
				</div>				
	    		<div id="send_ot" class="bg-faded"></div>
		      <div class="form-group">
			    <label for="exampleTextarea">Чтобы задать вопрос нужно написать Имя</label>
			    <textarea class="form-control" id="send_text" rows="3"></textarea>
			  </div>
		      <button type="button" id="send_mess" class="btn btn-primary" disabled style="width: 100%;">Отправить</button>
	      </div>
	    </div>
	  </div>	  
	</div>
</body>
</html>