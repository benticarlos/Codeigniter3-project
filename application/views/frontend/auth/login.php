<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="col-md-6 center-block no-float">
		<div class="panel panel-primary">
  			<div class="panel-heading">
    			<h3 class="panel-title"><?php echo $panel_title; ?></h3>
  			</div>
  			<div class="panel-body">

  				<?php if(validation_errors()) { echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>'; } ?>
    			<?php echo form_open('signin') ?>
  					<div class="form-group">
    					<label for="email">Email address</label>
    					<input type="email" name="email" value="<?php  echo set_value('email'); ?>" class="form-control" id="email" placeholder="Email">
  					</div>
  					<div class="form-group">
    					<label for="pass">Password</label>
    					<input type="password" name="password" class="form-control" id="pass" placeholder="Password">
  					</div>
  					<button type="submit" class="btn btn-success">Enter</button>
				</form>
  			</div>
		</div>
	</div>
</div>