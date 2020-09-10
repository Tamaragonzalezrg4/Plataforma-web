<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href=""><i class="fa fa-folder"></i><span>Denuncias</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href=""><i class="fa fa-comments"></i><span>Noticias</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href=""><i class="fa fa-clipboard"></i><span>Graficos</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href=""> <i class="fa fa-address-card"></i><span>Mapas</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Usuarios</span></a>
</li>


