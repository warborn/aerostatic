<nav class="grey lighten-4" role="navigation">
  <div class="nav-wrapper padding" id="header-nav">
    <a id="logo-container" href="#" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#"><i class="tiny material-icons right">settings</i>Ver perfil</a></li>
      <li><a href="#"><i class="tiny material-icons right">exit_to_app</i>Cerrar Sesión</a></li>
    </ul>

    <ul id="nav-mobile" class="side-nav light-blue darken-3">
      <li><a href="#"><i class="tiny material-icons left">settings</i>Ver perfil</a></li>
      <li><a href="#"><i class="tiny material-icons left">exit_to_app</i>Cerrar Sesión</a></li>
      <?php echo render('shared/_nav_links'); ?>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
  <ul id="slide-out" class="side-nav fixed light-blue darken-3 ">
    <?php echo render('shared/_nav_links'); ?>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</nav>
