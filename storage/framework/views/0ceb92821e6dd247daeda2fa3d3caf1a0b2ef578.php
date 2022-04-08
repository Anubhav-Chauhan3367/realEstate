<div class="navbar-fixed">
    <nav class="green darken-4">
        <div class="container">
            <div class="nav-wrapper">

                <a href="<?php echo e(route('home')); ?>" class="brand-logo">
                    <?php if(isset($navbarsettings[0]) && $navbarsettings[0]['name']): ?>
                        <?php echo e($navbarsettings[0]['name']); ?>

                    <?php else: ?>
                        Real State
                    <?php endif; ?>
                    <i class="material-icons left">location_city</i>
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                
                <ul class="right hide-on-med-and-down">
                    <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('home')); ?>">Home</a>
                    </li>

                    <li class="<?php echo e(Request::is('property*') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('property')); ?>">Properties</a>
                    </li>

                    <li class="<?php echo e(Request::is('agents*') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('agents')); ?>">Agents</a>
                    </li>

                    <li class="<?php echo e(Request::is('gallery') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('gallery')); ?>">Gallery</a>
                    </li>

                    <li class="<?php echo e(Request::is('blog*') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('blog')); ?>">Blog</a>
                    </li>

                    <li class="<?php echo e(Request::is('contact') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('contact')); ?>">Contact</a>
                    </li>

                    <?php if(auth()->guard()->guest()): ?>
                        <li><a href="<?php echo e(route('login')); ?>"><i class="material-icons">input</i></a></li>
                        <li><a href="<?php echo e(route('register')); ?>"><i class="material-icons">person_add</i></a></li>
                    <?php else: ?>
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropdown-auth-frontend">
                                <?php echo e(ucfirst(Auth::user()->username)); ?>

                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>

                        <ul id="dropdown-auth-frontend" class="dropdown-content">
                            <li>
                                <?php if(Auth::user()->role->id == 1): ?>
                                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="indigo-text">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                <?php elseif(Auth::user()->role->id == 2): ?>
                                    <a href="<?php echo e(route('agent.dashboard')); ?>" class="indigo-text">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                <?php elseif(Auth::user()->role->id == 3): ?>
                                    <a href="<?php echo e(route('user.dashboard')); ?>" class="indigo-text">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <a class="dropdownitem indigo-text" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="material-icons">power_settings_new</i><?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    
    <ul class="sidenav" id="mobile-demo">
        <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('home')); ?>">Home</a>
        </li>

        <li class="<?php echo e(Request::is('property*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('property')); ?>">Properties</a>
        </li>

        <li class="<?php echo e(Request::is('agents*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('agents')); ?>">Agents</a>
        </li>

        <li class="<?php echo e(Request::is('gallery') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('gallery')); ?>">Gallery</a>
        </li>

        <li class="<?php echo e(Request::is('blog*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('blog')); ?>">Blog</a>
        </li>

        <li class="<?php echo e(Request::is('contact') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('contact')); ?>">Contact</a>
        </li>
    </ul>

</div>