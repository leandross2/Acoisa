                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="#" class="logo">
                            <img src="/assets/images/mtdbox-pq.png">
                        </a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        <ul class="nav navbar-nav pull-right">

                            <li class="nav-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>


                            <li class="nav-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="zmdi zmdi-account noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small>Olá! <?php echo $sess->userName(); ?></small> </h5>

                                        <?php

                                        if(count($proj->getProjectsByUser($sess->userId())) > 1){?>
                                          <hr>
                                          <h5>Projetos</h5>
                                        <?php $res = $proj->getProjectsByUser($sess->userId());
                                                foreach ($res as $value){
                                        ?>
                                        <a href="/<?php echo Hash30::encode($value['id']) . '/dashboard';?>" class="dropdown-item notify-item">
                                                    <?=$value['name'];?>
                                        </a>
                                        <?php    }
                                        }
                                        ?>
                                    </div>

                                    <!-- item-->
                                    <a href="/<?php echo $page->slug[1] ?>/perfil" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-account-circle"></i> <span>Perfil</span>
                                    </a>

                                    <?php if( $sess->userProjectLevel() > 5 ): ?>
                                    <!-- item-->
                                    <a href="/<?php echo $page->slug[1] ?>/configuracoes" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-settings"></i> <span>Configurações</span>
                                    </a>
                                    <?php endif; ?>

                                    <?php if( $sess->userProjectLevel() > 5 ): ?>
                                    <!-- item-->
                                    <a href="/<?php echo $page->slug[1] ?>/usuarios" class="dropdown-item notify-item">
                                        <i class="fa fa-users"></i> <span>Usuários</span>
                                    </a>
                                    <?php endif; ?>

                                    <!-- item-->
                                    <a href="/sign-out.php" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power"></i> <span>Sair</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                    </div> <!-- end menu-extras -->
                    <div class="clearfix"></div>
