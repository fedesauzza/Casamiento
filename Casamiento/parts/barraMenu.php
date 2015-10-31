
        <div class="navbar-header"><a class="navbar-brand" href="#"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
        	<ul class="nav navbar-nav navbar-left">
        		<li><a>Casamientos Sauzza</a></li>
        	</ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" onclick="Mostrar('Home')">Home</a>
                </li>
                <li role="presentation" id="casamiento"
				<?php session_start(); 
                    if(!isset($_SESSION['usuario']))
					{
                        echo "style='display: none'";
                    }
					else
					{
                        echo "style='display: block'";
                    }
				?>><a href="#" onclick="Mostrar('MostrarCasamiento')">Planear Casamiento</a>
                </li>
                <li role="presentation" id="loguear"
				<?php 
					if(isset($_SESSION['usuario']))
						{echo "style='display: none'";}
					else
						{echo "style='display: block'";}
				?>><a href="#" onclick="MostrarLogin()"
                	>Conectarse</a></li>
                <li role="presentation" id="desloguear"
				<?php if(!isset($_SESSION['usuario']))
						{echo "style='display: none'";}
					else
						{echo "style='display: block'";}
				?>><a href="#" onclick="Desconectarse()"
                	>Desconectarse</a>
                </li>
                <li><a href="#" onclick="Mostrar('Contacto')">Contacto</a>
                </li>
                <li role="presentation" id="desloguear"
				<?php if(isset($_SESSION['usuario']))
						{echo "style='display: block'";}
					else
						{echo "style='display: none'";}
				?>><a href="#" onclick="Mostrar('adminPanel')">Admin</a>
                </li>
                <li role="presentation" id="perfil"
				<?php if(!isset($_SESSION['usuario']))
						{echo "style='display: none'";}
					else
						{echo "style='display: block'";}
				?>><a href="#" onclick="Mostrar('userPanel')">Perfil</a>
                </li>
            </ul>
        </div>
        </div>
