<?php
	move_uploaded_file($_FILES['foto']['tmp_name'],'../jpg/perfiles/'.$_FILES['foto']['name']);
?>