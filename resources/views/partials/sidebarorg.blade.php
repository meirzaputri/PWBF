
        <div id="sidebar">
            <div class="sidebar-header">
                <h3><img src="{{ asset('import/img/logo.png') }}" class="img-fluid" /><span>{{ auth()->user()->name }}</span></h3>
            </div>
            <ul class="list-unstyled component m-0">
                <li class="{{ Request::is('dashboardorganisasi') ? 'active' : ''}}">
                    <a href="/dashboardorganisasi" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
                </li>

                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">diversity_3</i>Events
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li class="{{ Request::is('pedulipendidikan') ? 'active' : ''}}"><a href="/pedulipendidikan">Peduli Pendidikan Anak Indonesia</a></li>
                        <li class="{{ Request::is('mendongengtasya') ? 'active' : ''}}"><a href="/mendongengtasya">Mendongeng Bersama Kak Tasya</a></li>
                        <li class="{{ Request::is('haridongeng') ? 'active' : ''}}"><a href="/haridongeng">Hari Dongeng</a></li>
                    </ul>
                </li>


                <li class="{{ Request::is('volunteersorg*') ? 'active' : ''}}">
                    <a href="/volunteersorg" class="">
                        <i class="material-icons">supervisor_account</i>Volunteers
                    </a>
                </li>
        </div>

        <!-------sidebar--design- close----------->