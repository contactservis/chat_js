<?php
	$file_handle = fopen("send/allsend.txt", "r");
	$all_send = array();
	while (!feof($file_handle)) {
	   $line = fgets($file_handle);	   
	   $ar_line = explode(';', $line);
	   	if(count($ar_line) > 1 ){		   
		   $all_send[] = $ar_line;		    
		 }

	}
	//print_r($all_send);
	krsort($all_send);

	foreach ($all_send as $item) {
		?>
		   		<a href="#" class="list-group-item list-group-item-action flex-column align-items-start" style="margin: 5px 0;">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><?php echo $item[1];?></h5>
						<small class="text-muted"><?php echo $item[0];?></small>
					</div>
					<p class="mb-1"><?php echo $item[2];?></p>						
				</a>
		   <?php 
	}
	
	fclose($file_handle);
?>