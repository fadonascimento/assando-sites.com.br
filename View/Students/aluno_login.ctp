<?php echo $this->Form->create('Student', array('inputDefaults' => array('div' => false, 'label' => false))) ?>
<fieldset>
	<div class="clearfix">
		<?php echo $this->Form->label('email', 'Email') ?>
		<div class="input"><?php echo $this->Form->input('email', array('type' => 'email', 'placeholder' => 'Digite seu email', 'required' => true)) ?></div>			
	</div>
	
	<div class="clearfix">
		<?php echo $this->Form->label('password', 'Senha') ?>
		<div class="input"><?php echo $this->Form->input('password', array('placeholder' => 'Digite sua senha', 'required' => true)) ?></div>			
	</div>
</fieldset>
	
<div class="actions">
	<?php echo $this->Form->submit('Entrar', array('class' => 'btn primary right', 'div' => false)) ?>			
	<?php echo $this->Html->link('Esqueci minha senha', array('action' => 'reset_password'), array('class' => 'btn left', 'div' => false)) ?>	
</div>	
<?php echo $this->Form->end() ?>