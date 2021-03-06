<nav class="">
  <ul>
    <li><a href="/backend" class="main-menu"><i class="material-icons">album</i> <span>STORY</span></a></li>
  </ul>
  <ul id="nav" role="menubar" class="sidebar-menu">
    @foreach (Navigation::get('backend') as $key => $navigation)
    <li data-submenu-id="submenu-{{ $key }}">
      <a href="#" class="main-menu">
        <i class="material-icons">{{ $navigation['font'] }}</i>
        <span>{{ $navigation['title'] }}</span>
      </a>

      @if (isset($navigation['groups']))
        <div class="popover" id="submenu-{{ $key }}">
          <h3 class="popover-title">{{ $navigation['title'] }}</h3>
          <div class="popover-content">
            <div class="popover-content-column">
              @foreach ($navigation['groups'] as $key_group => $group)
                <div class="popover-content-grid">
                  <h5>{{ Str::title($key_group) }}</h5>
                  <ul>
                    @foreach ($group as $item)
                    <li><a href="/backend/{{ $key }}/{{$key_group}}/{{$item}}">{{ Str::title(str_replace('-', ' ', $item)) }}</a></li>
                    @endforeach
                  </ul>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endif
    </li>
    @endforeach
    <li><a href="/backend/logout" class="main-menu"><i class="material-icons">exit_to_app</i> <span>SIGN OUT</span></a></li>
  </ul>
</nav>
