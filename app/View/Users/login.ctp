<div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <?php echo $this->Form->create('User');?>
                            <div class="form-group">
                                <?php echo $this->Form->input('email',array('class'=>'form-control','placeholder'=>'Email'));?>
                                
                            </div>
                            <div class="form-group">
                                <?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Password'));?>        
                                
                            </div>
                            <?php echo $this->Form->submit('Entrar',array('class'=>'btn btn-default'))?>
                            
                        <?php echo $this->Form->end();?>
                        <?php echo $this->Html->link('Nao tem uma conta? registe-se', array('controller' => 'users', 'action' => 'add')); ?> 
                    </div>
                    <div class="col-md-7">
                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
                        class="img-responsive">
                    </div>
                </div>
            </div>
 