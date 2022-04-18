<ul class="metismenu" id="menu">
  <li>
    <a href="{{ route('dashboard.index') }}" class="">
      <div class="parent-icon"><i class='bx bx-home-circle'></i>
      </div>
      <div class="menu-title">Dashboard</div>
    </a>

  </li>

  <li class="menu-label">UI Elements</li>

  <li>
    <a href="javascript:;" class="has-arrow">
      <div class="parent-icon"><i class='bx bx-trophy'></i>
      </div>
      <div class="menu-title">Tournaments</div>
    </a>
    <ul>
      <li> <a href="{{ route('tournament.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Tournaments</a>
      </li>
      <li> <a href="{{ route('tournament.index') }}"><i class="bx bx-right-arrow-alt"></i>View Tournaments</a>
      </li>

    </ul>
  </li>


  <li>
    <a class="has-arrow" href="javascript:;">
      <div class="parent-icon"><i class="bx bx-user-circle"></i>
      </div>
      <div class="menu-title">Users</div>
    </a>
    <ul>
      <li> <a href="{{ route('users.index') }}"><i class="bx bx-right-arrow-alt"></i>View Users</a>
      </li>
      <li> <a href=""><i class="bx bx-right-arrow-alt"></i>Typography</a>
      </li>
      <li> <a href=""><i class="bx bx-right-arrow-alt"></i>Text Utilities</a>
      </li>
    </ul>
  </li>

  <li>
    <a href="{{ route('contacts.index') }}">
      <div class="parent-icon"><i class='bx bx-support'></i>
      </div>
      <div class="menu-title">Contact</div>
    </a>
  </li>



  <li>
    <a class="has-arrow" href="javascript:;">
      <div class="parent-icon"><i class="bx bx-folder"></i>
      </div>
      <div class="menu-title">Games</div>
    </a>
    <ul>
      <li> <a href="{{ route('games.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Games</a>
      </li>
      <li> <a href="{{ route('games.index') }}"><i class="bx bx-right-arrow-alt"></i>View Games</a>

    </ul>
  </li>










</ul>
<!--end navigation-->
