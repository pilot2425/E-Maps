<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p id="error"><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
 <?php $errors = array();  ?> 
<?php  endif ?>