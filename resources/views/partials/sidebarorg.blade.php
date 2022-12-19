<div id="sidebar">
    <div class="sidebar-header">
        <h3><img src="{{ asset('import/img/logo.png') }}" class="img-fluid" /><span>{{ auth()->user()->name }}</span></h3>
    </div>
    <ul class="list-unstyled component m-0">
        <li class="{{ Request::is('dashboardorganisasi') ? 'active' : '' }}">
            <a href="/dashboardorganisasi" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
        </li>
        <li class="{{ Request::is('eventsorg*') ? 'active' : '' }}">
            <a href="/eventsorg" class="">
                <i class="material-icons">diversity_3</i>Events

            </a>
        </li>
        <li class="{{ Request::is('volunteersorg*') ? 'active' : '' }}">
            <a href="/volunteersorg" class="">
                <i class="material-icons">supervisor_account</i>Volunteers
            </a>
        </li>
</div>

<!-------sidebar--design- close----------->
