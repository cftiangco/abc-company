<ul class="mt-10 flex flex-col gap-3 items-start ms-4 md:ms-0">

    <x-sidebar-link 
      label='Dashboard'
      icon="fa-solid fa-chart-bar"
      link="/dashboard" 
    />

    <x-sidebar-link 
      label='Materials'
      icon="fa-solid fa-clipboard"
      link="/dashboard/materials" 
    />

    <x-sidebar-link 
      label='Settings'
      icon="fa-solid fa-gears"
      link="/dashboard/settings" 
    />

    @if(session()->get('user')->user_role_id == 1)
      <x-sidebar-link 
        label='Users'
        icon="fa-solid fa-users-gear"
        link="/dashboard/users" 
      />
    @endif

    <x-sidebar-link 
      label='Logout'
      icon="fa-solid fa-right-from-bracket"
      link="/logout" 
    />

</ul>