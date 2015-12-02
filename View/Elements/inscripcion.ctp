<div class="col-md-6">
		<div class="unit">
   	           <span class="name"><span class="glyphicon glyphicon-user"></span> <b>Legajo Nro:</b> <?php echo $inscripcion['Inscripcion']['legajo_nro']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Alta:</b> <?php echo $this->Html->formatTime($inscripcion['Inscripcion']['fecha_alta']);?></span><br/>
			   
	           <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Baja:</b> <?php echo $this->Html->formatTime($inscripcion['Inscripcion']['fecha_baja']);?></span><br/> 		   
			   
			   <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Egreso:</b> <?php echo $this->Html->formatTime($inscripcion['Inscripcion']['fecha_egreso']);?></span><br/>       
       
	   <div class="text-right">
			   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-warning')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-success')); ?></span>
  			   <span class="link"><?php echo $this->Html->link('Borrar', array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['Inscripcion']['id']), array('confirm' => 'Está seguro de borrar la inscripción nro.'.$inscripcion['Inscripcion']['id'], 'class' => 'btn btn-danger')); ?></span> 
			   </div>
		</div>
</div>