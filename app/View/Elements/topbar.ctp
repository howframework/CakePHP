    <div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li>
                <?php
                  if($this->Session->check('Auth.User.username'))
                  {
                    echo $this->Html->link('Logout', '/users/logout'); 
                  } else {
                    echo $this->Html->link('Login', '/users/login');  
                  }
                ?>
              </li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
