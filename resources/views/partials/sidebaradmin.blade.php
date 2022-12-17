<div id="sidebar">
    <div class="sidebar-header">
        <h3><img src="{{ asset('import/img/admin.jpg') }}" class="img-fluid" /><span>Volunteer-an</span></h3>
    </div>
    <ul class="list-unstyled component m-0">
        <li class="{{ Request::is('admin') ? 'active' : '' }}">
            <a href="/admin" class="dashboard"><i class="material-icons">dashboard</i>Dashboard </a>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">diversity_3</i>Organizations
            </a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                <li class="{{ Request::is('allorganisasi*') ? 'active' : '' }}"><a href="/allorganisasi">All
                        Organizations</a></li>
                <li class="{{ Request::is('orgperdiv/2*') ? 'active' : '' }}"><a href="/orgperdiv/2">Fauna</a></li>
                <li class="{{ Request::is('orgperdiv/3*') ? 'active' : '' }}"><a href="/orgperdiv/3">Kesehatan</a></li>
                <li class="{{ Request::is('orgperdiv/4*') ? 'active' : '' }}"> <a href="/orgperdiv/4">Lingkungan</a>
                </li>
                <li class="{{ Request::is('orgperdiv/5*') ? 'active' : '' }}"><a href="/orgperdiv/5">Pendidikan</a></li>
                <li class="{{ Request::is('orgperdiv/6*') ? 'active' : '' }}"><a href="/orgperdiv/6">Pengembangan
                        Masyarakat</a>
                </li>
                <li class="{{ Request::is('orgperdiv/1*') ? 'active' : '' }}"><a href="/orgperdiv/1">Penanggulangan
                        Bencana</a>
                </li>
                <li class="{{ Request::is('orgperdiv/7*') ? 'active' : '' }}"><a href="/orgperdiv/7">Seni dan Budaya</a>
                </li>
            </ul>
        </li>


        <li class="{{ Request::is('volunteer*') ? 'active' : '' }}">
            <a href="/volunteer" class="">
                <i class="material-icons">supervisor_account</i>Volunteers

            </a>
        </li>

        <li class="{{ Request::is('events*') ? 'active' : '' }}">
            <a href="/events" class="">
                <i class="material-icons">diversity_2</i>Events
            </a>
        </li>




       
        <!----edit-modal end--------->
</div>


<!-------sidebar--design- close----------->
