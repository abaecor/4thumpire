<!DOCTYPE html>
<html lang="en">
	<div class="row-fluid">
		<div class="span10">
			<h5>Create 4<sup>th</sup> Umpire Account</h5>
			<br/>
			<!-- <div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
			    	<li class="active"><a href="#personalDetails" data-toggle="tab">Personal Details</a></li>
			    	<li><a href="#clubDetails" data-toggle="tab">Club Details</a></li>
			  	</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="personalDetails">-->
					    <?php 
						echo $this->Form->create('Register', array ('class' => 'form-horizontal',
															'url' => array('controller' => 'Home',
																			'action' => 'registerUser')));
						echo "<div class=\"control-group\">";
						echo $this->Form->label('fname', 'First name *', array('class' => 'control-label'));
						echo $this->Form->input('fname',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('surname', 'Surname *', array('class' => 'control-label'));
						echo $this->Form->input('surname', array('label' => false,
																	'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('gender', 'Gender *', array('class' => 'control-label'));
						echo $this->Form->input('gender', array('label' => false,
																	'options' => array('M' => 'Male', 'F' =>'Female'),
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('clubPos', 'Club Position *', array('class' => 'control-label'));
						echo $this->Form->input('clubPos',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('address', 'Address *', array('class' => 'control-label'));
						echo $this->Form->input('address',array('label' => false,
																	'type' => 'textarea',
																	'rows' => 3,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('city', 'Town/City *', array('class' => 'control-label'));
						echo $this->Form->input('city',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('country', 'Country *', array('class' => 'control-label'));
						echo $this->Form->input('country',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('lPhone', 'Landline phone ', array('class' => 'control-label'));
						echo $this->Form->input('lPhone',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('mPhone', 'Mobile phone *', array('class' => 'control-label'));
						echo $this->Form->input('mPhone',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('inputEmail', 'Email address *', array('class' => 'control-label'));
						echo $this->Form->input('inputEmail',array('label' => false,
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						echo "<div class=\"control-group\">";
						echo $this->Form->label('inputPassword', 'Password *', array('class' => 'control-label'));
						echo $this->Form->input('inputPassword',array('label' => false,
																	'type' => 'password',
																   'div' => array('class' => 'controls')
																   ));
						echo "</div>";
						?>
					<!-- </div> <!-- Tab 1 ends -->
			  	
					 <!--  <div class="tab-pane" id="clubDetails">
				  	
					</div> <!-- Tab 2 ends -->
				<!-- </div>				  
			</div> -->
						<?php 
						echo $this->Form->submit('Sign Up',array('class' => 'btn span1 offset5'));
						echo $this->Form->end();
						?>
						
			
			
			
			<?php
			/* FOR LOGIN -------------------			
					echo $this->Form->create('Register',array('class' => 'form-horizontal'));
					echo "<div class=\"control-group\">";
						echo $this->Form->label('inputEmail', 'Email', array('class' => 'control-label'));
						echo $this->Form->input('inputEmail',array(
																'label' => false,
																'placeholder' => 'Email',
																'div' => array(
																	'class' => 'controls'
																	)
																));
					echo "</div>";
					echo "<div class=\"control-group\">";
						echo $this->Form->label('inputPassword', 'Password', array('class' => 'control-label'));
						echo $this->Form->input('inputPassword',array('label' => false,
																  'placeholder' => 'Password',
																  'type' => 'password',
																  'div' => array(
																	'class' => 'controls'
																	)
																   ));
					echo "</div>";
					echo "<div class=\"control-group\">";
					echo "<div class=\"controls\">";
						echo $this->Form->submit('Sign Up',array('class' => 'btn'));
						echo $this->Form->end();
					echo "</div>";
					echo "</div>";
					?>		
		</div>
		<div class="span1">
			<h5>OR</h5>
		</div>
		<div class="span6">
			<h5>Sign Up with Facebook</h5>
			<br/>
			<?php			
					echo $this->Form->create('Register',array('class' => 'form-horizontal'));
					echo "<div class=\"control-group\">";
						echo $this->Form->label('inputEmail', 'FB UserName', array('class' => 'control-label'));
						echo $this->Form->input('inputEmail',array(
																'label' => false,
																'placeholder' => 'User name', 
																'div' => array(
																	'class' => 'controls'
																	)
																));
					echo "</div>";
					echo "<div class=\"control-group\">";
						echo $this->Form->label('inputPassword','FB Password', array('class' => 'control-label'));
						echo $this->Form->input('inputPassword',array('label' => false,
																  'placeholder' => 'Password',
																  'type' => 'password',
																  'div' => array(
																	'class' => 'controls'
																	)
																   ));
					echo "</div>";
					echo "<div class=\"control-group\">";
					echo "<div class=\"controls\">";
						echo $this->Form->submit('Sign Up',array('class' => 'btn'));
						echo $this->Form->end();
					echo "</div>";
					echo "</div>";
					 
					---------------LOGIN OVER */
					?>		

		</div>
	</div>
</html>