<nav class="navbar navbar-header navbar-expand-md navbar-light bg-orange fixed-top-">
  <div class="container">
    <a class="navbar-brand" href="{!!get_site_url()!!}"><img src="@asset('images/logo.png')"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsPrimary" aria-controls="navbarsPrimary" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarsPrimary" class="collapse navbar-collapse">
      @if (has_nav_menu('primary_navigation'))
        {!!
          wp_nav_menu( array(
            'theme_location'  => 'primary_navigation',
            'depth'           => 2,
            'container'       => 'false',//'div',
            'container_class_' => 'collapse navbar-collapse',
            'container_id_'    => 'navbarsPrimary',
            'menu_class'      => 'navbar-nav -primary',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker()
          ));
        !!}
      @endif
      <ul class="navbar-nav -social">
        <li class="nav-item">
          <a href="https://www.facebook.com/girassolculinariafetiva" target="_blank" class="nav-link">
            <i class="icon-facebook"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://www.instagram.com/girassol_culinariafetiva/" target="_blank" class="nav-link">
            <i class="icon-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
