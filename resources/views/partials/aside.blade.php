  <!-- sidebar-->
  <aside class="aside">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav data-sidebar-anyclick-close="" class="sidebar">
               <!-- START sidebar nav-->
               <ul class="nav">
                  <!-- START user info-->
                  <li class="has-user-block">
                     <div id="user-block" class="collapse">
                        <div class="item user-block">
                           <!-- User picture-->
                           <div class="user-block-picture">
                              <div class="user-block-status">
                                 <img src="img/user/01.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                                 <div class="circle circle-success circle-lg"></div>
                              </div>
                           </div>
                           <!-- Name and Job-->
                           <div class="user-block-info">
                              <span class="user-block-name">Hola, {{Session::get('usuario')}}</span>
                              <span class="user-block-role">Rol de Usuario</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                  <li class="nav-heading ">
                     <span >Navegación principal</span>
                  </li>
                  <li class=" ">
                     <a href="#dashboard" title="Dashboard" data-toggle="collapse">
                        <div class="pull-right label label-info">3</div>
                        <em class="icon-speedometer"></em>
                        <span >Dashboard</span>
                     </a>
                     <ul id="dashboard" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Dashboard</li>
                        <li class="{{Request::path()=='dashboard'?'active':''}} ">
                           <a href="dashboard" title="Dashboard v1">
                              <span>Dashboard v1</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="dashboard" title="Dashboard v2">
                              <span>Dashboard v2</span>
                           </a>
                        </li>
                        <li class="{{Request::path()=='dashboard3'?'active':''}}">
                           <a href="#" title="Dashboard v3">
                              <span>Dashboard V3</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="" title="Widgets">
                        <div class="pull-right label label-success">30</div>
                        <em class="icon-grid"></em>
                        <span >Widgets</span>
                     </a>
                  </li>
                  <li class=" ">
                     <a href="#layout" title="Layouts" data-toggle="collapse">
                        <em class="icon-layers"></em>
                        <span>Layouts</span>
                     </a>
                     <ul id="layout" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Layouts</li>
                        <li class=" ">
                           <a href="" title="Horizontal">
                              <span>Horizontal</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-heading ">
                     <span >Components</span>
                  </li>
                  <li class=" ">
                     <a href="#elements" title="Elements" data-toggle="collapse">
                        <em class="icon-chemistry"></em>
                        <span >Elements</span>
                     </a>
                     <ul id="elements" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Elements</li>
                        <li class=" ">
                           <a href="" title="Buttons">
                              <span >Buttons</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Notifications">
                              <span >Notifications</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Sweet Alert">
                              <span>Sweet Alert</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Tour">
                              <span>Tour</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Carousel">
                              <span >Carousel</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Spinners">
                              <span >Spinners</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Animations">
                              <span data-localize="sidebar.nav.element.ANIMATION">Animations</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Dropdown">
                              <span data-localize="sidebar.nav.element.DROPDOWN">Dropdown</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Nestable">
                              <span>Nestable</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Sortable">
                              <span>Sortable</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="panels.html" title="Panels">
                              <span data-localize="sidebar.nav.element.PANEL">Panels</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Portlets">
                              <span data-localize="sidebar.nav.element.PORTLET">Portlets</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Grid">
                              <span data-localize="sidebar.nav.element.GRID">Grid</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Grid Masonry">
                              <span data-localize="sidebar.nav.element.GRID_MASONRY">Grid Masonry</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Typography">
                              <span data-localize="sidebar.nav.element.TYPO">Typography</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Font Icons">
                              <div class="pull-right label label-success">+400</div>
                              <span data-localize="sidebar.nav.element.FONT_ICON">Font Icons</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Weather Icons">
                              <div class="pull-right label label-success">+100</div>
                              <span data-localize="sidebar.nav.element.WEATHER_ICON">Weather Icons</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Colors">
                              <span data-localize="sidebar.nav.element.COLOR">Colors</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#forms" title="Forms" data-toggle="collapse">
                        <em class="icon-note"></em>
                        <span data-localize="sidebar.nav.form.FORM">Forms</span>
                     </a>
                     <ul id="forms" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Forms</li>
                        <li class=" ">
                           <a href="" title="Standard">
                              <span data-localize="sidebar.nav.form.STANDARD">Standard</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Extended">
                              <span data-localize="sidebar.nav.form.EXTENDED">Extended</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Validation">
                              <span data-localize="sidebar.nav.form.VALIDATION">Validation</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Wizard">
                              <span>Wizard</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Upload">
                              <span>Upload</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="xEditable">
                              <span>xEditable</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Cropper">
                              <span>Cropper</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#charts" title="Charts" data-toggle="collapse">
                        <em class="icon-graph"></em>
                        <span data-localize="sidebar.nav.chart.CHART">Charts</span>
                     </a>
                     <ul id="charts" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Charts</li>
                        <li class=" ">
                           <a href="" title="Flot">
                              <span data-localize="sidebar.nav.chart.FLOT">Flot</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Radial">
                              <span data-localize="sidebar.nav.chart.RADIAL">Radial</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Chart JS">
                              <span>Chart JS</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Rickshaw">
                              <span>Rickshaw</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="MorrisJS">
                              <span>MorrisJS</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Chartist">
                              <span>Chartist</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#tables" title="Tables" data-toggle="collapse">
                        <em class="icon-grid"></em>
                        <span data-localize="sidebar.nav.table.TABLE">Tables</span>
                     </a>
                     <ul id="tables" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Tables</li>
                        <li class=" ">
                           <a href="" title="Standard">
                              <span data-localize="sidebar.nav.table.STANDARD">Standard</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Extended">
                              <span data-localize="sidebar.nav.table.EXTENDED">Extended</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="DataTables">
                              <span data-localize="sidebar.nav.table.DATATABLE">DataTables</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="jqGrid">
                              <span>jqGrid</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#maps" title="Maps" data-toggle="collapse">
                        <em class="icon-map"></em>
                        <span data-localize="sidebar.nav.map.MAP">Maps</span>
                     </a>
                     <ul id="maps" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Maps</li>
                        <li class=" ">
                           <a href="" title="Google Maps">
                              <span data-localize="sidebar.nav.map.GOOGLE">Google Maps</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Vector Maps">
                              <span data-localize="sidebar.nav.map.VECTOR">Vector Maps</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-heading ">
                     <span data-localize="sidebar.heading.MORE">More</span>
                  </li>
                  <li class=" ">
                     <a href="#pages" title="Pages" data-toggle="collapse">
                        <em class="icon-doc"></em>
                        <span data-localize="sidebar.nav.pages.PAGES">Pages</span>
                     </a>
                     <ul id="pages" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Pages</li>
                        <li class=" ">
                           <a href="" title="Login">
                              <span data-localize="sidebar.nav.pages.LOGIN">Login</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Sign up">
                              <span data-localize="sidebar.nav.pages.REGISTER">Sign up</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Recover Password">
                              <span data-localize="sidebar.nav.pages.RECOVER">Recover Password</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Lock">
                              <span data-localize="sidebar.nav.pages.LOCK">Lock</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Starter Template">
                              <span data-localize="sidebar.nav.pages.STARTER">Starter Template</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="404">
                              <span>404</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="500">
                              <span>500</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="" title="Maintenance">
                              <span>Maintenance</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  
               </ul>
               <!-- END sidebar nav-->
            </nav>
         </div>
         <!-- END Sidebar (left)-->
      </aside>