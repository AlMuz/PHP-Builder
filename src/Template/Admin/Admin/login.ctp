<div class="row">
	<div class="col-md-12">
		<!-- need to centrate grid  -->
    <div class="col-md-1 hidden-xs hidden-sm">
    </div>
    <div class="col-md-10">
      <div class="panel panel-default">
      	<div class="panel-heading">
        	<h3 class="panel-title">Sign in</h3>
    	  </div>
      	<div class="panel-body">
          <?= $this->Form->create() ?>
          <fieldset>
        	  <div class="form-group">
                <?= $this->Form->control('Login',['class' => 'form-control','label'=>false,'placeholder' => 'Username','tabindex' => '1']) ?>
        		</div>
        		<div class="form-group">
              <?= $this->Form->password('Password',['class' => 'form-control','label'=>false,'placeholder' => 'Password','tabindex' => '2']) ?>
        		</div>
            <?= $this->Form->button(__('Sign in'),['class' => 'btn btn-success','tabindex' => '3']); ?>
        	</fieldset>
          <?= $this->Form->end() ?>

        </div>
    	</div>
    </div>
		<!-- need to centrate grid  -->
		<div class="col-md-1 hidden-xs hidden-sm">
		</div>
	</div>
</div>
