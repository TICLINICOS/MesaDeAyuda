<?php
    if ($_SESSION["rol_id"]==1){
        ?>
       
            <nav class="side-menu"> 
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Mis Tickets</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Nuevo Ticket</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
<!--                         
                    <center>
                        <img class="hidden-md-rigth" src="../../public/img/logonuevo.png" alt="">
                            <img class="hidden-lg-up" src="../../public/img/logonuevo-mob.png" alt="">                        
                            <a href="#" class="site-logo">
                          </a>    
                          </center>  -->
                </ul>
            </nav>
        <?php
    }else{
        ?>
            <nav class="side-menu">
            <li class="blue">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Tablero de Mando</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Nuevo Ticket</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntUsuario\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Mantenimiento Usuario</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
              
                        <!-- <center>
                        <img class="hidden-md-rigth" src="../../public/img/logonuevo.png" alt="">
                            <img class="hidden-lg-up" src="../../public/img/logonuevo-mob.png" alt="">                        
                            <a href="#" class="site-logo">
                          </a>    
                          </center>  -->
                </ul>
            </nav>
        <?php
    }
?>
