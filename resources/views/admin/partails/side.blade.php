<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="{{ url("/") }}" class="sidebar-brand">
         
          <span><img src="{{ asset('assets/images/logo-font.png')}}" alt=""></span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="link-icon" data-feather="settings"></i>
              <span class="link-title">{{__('globle.Dashboard')}}</span>
            </a>
          </li>
          <li class="nav-item nav-category">Users Management</li>

          {{-- ========== Department  ========== --}}

          <li class="nav-item">
            @if (isset(auth()->user()->role->permission['name']['department']))

            <a class="nav-link" data-toggle="collapse" href="#department" role="button" aria-expanded="false" aria-controls="department">
              <i class="link-icon" data-feather="package"></i>
              <span class="link-title">{{__('sidebar.Department')}}</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            @endif
            
            <div class="collapse" id="department">
              <ul class="nav sub-menu">
                @if (isset(auth()->user()->role->permission['name']['department']['can-list']))
                <li class="nav-item">
                  <a href="{{route('departments.index')}}" class="nav-link"> {{__('globle.Action.View')}} {{__('sidebar.Department')}}</a>
                </li>
                @endif
                @if (isset(auth()->user()->role->permission['name']['department']['can-add']))
                <li class="nav-item">
                  <a href="{{route('departments.create')}}" class="nav-link">{{__('globle.Action.Create')}} {{__('sidebar.Department')}}</a>
                </li>
                @endif
              </ul>
            </div>
            
          </li>


          {{-- ========== Role  ========== --}}
          @if (isset(auth()->user()->role->permission['name']['role']))

          <li class="nav-item">
           

            <a class="nav-link" data-toggle="collapse" href="#role" role="button" aria-expanded="false" aria-controls="role">
              <i class="link-icon" data-feather="shuffle"></i>
              <span class="link-title">{{__('sidebar.Roles')}}</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            
            
            <div class="collapse" id="role">
              <ul class="nav sub-menu">
                @if (isset(auth()->user()->role->permission['name']['role']['can-list']))
                <li class="nav-item">
                  <a href="{{route('roles.index')}}" class="nav-link"> {{__('globle.Action.View')}} {{__('sidebar.Roles')}}</a>
                </li>
                @endif
                @if (isset(auth()->user()->role->permission['name']['role']['can-add']))
                <li class="nav-item">
                  <a href="{{route('roles.create')}}" class="nav-link">{{__('globle.Action.Create')}} {{__('sidebar.Roles')}}</a>
                </li>
                @endif
              </ul>
            </div>
            
          </li>
          @endif



           {{-- ========== Permission  ========== --}}

           @if (isset(auth()->user()->role->permission['name']['permission']))

           <li class="nav-item">
            
 
             <a class="nav-link" data-toggle="collapse" href="#permission" role="button" aria-expanded="false" aria-controls="permission">
               <i class="link-icon" data-feather="slack"></i>
               <span class="link-title">{{__('sidebar.Permission')}}</span>
               <i class="link-arrow" data-feather="chevron-down"></i>
             </a>
             
             
             <div class="collapse" id="permission">
               <ul class="nav sub-menu">
                 @if (isset(auth()->user()->role->permission['name']['permission']['can-list']))
                 <li class="nav-item">
                   <a href="{{route('permissions.index')}}" class="nav-link"> {{__('globle.Action.View')}} {{__('sidebar.Permission')}}</a>
                 </li>
                 @endif
                 @if (isset(auth()->user()->role->permission['name']['permission']['can-add']))
                 <li class="nav-item">
                   <a href="{{route('permissions.create')}}" class="nav-link">{{__('globle.Action.Create')}} {{__('sidebar.Permission')}}</a>
                 </li>
                 @endif
               </ul>
             </div>
             
           </li>
           @endif

           {{-- ========== User  ========== --}}
           @if (isset(auth()->user()->role->permission['name']['user']))

           <li class="nav-item">
            
 
             <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="user">
               <i class="link-icon" data-feather="user"></i>
               <span class="link-title">{{__('sidebar.User')}}</span>
               <i class="link-arrow" data-feather="chevron-down"></i>
             </a>
             
             
             <div class="collapse" id="user">
               <ul class="nav sub-menu">
                 @if (isset(auth()->user()->role->permission['name']['user']['can-list']))
                 <li class="nav-item">
                   <a href="{{route('users.index')}}" class="nav-link"> {{__('globle.Action.View')}} {{__('sidebar.User')}}</a>
                 </li>
                 @endif
                 @if (isset(auth()->user()->role->permission['name']['user']['can-add']))
                 <li class="nav-item">
                   <a href="{{route('users.create')}}" class="nav-link">{{__('globle.Action.Create')}} {{__('sidebar.User')}}</a>
                 </li>
                 @endif
               </ul>
             </div>
             
           </li>
           @endif

           <li class="nav-item nav-category">Content Management</li>

          {{-- ========== Type Loan  ========== --}}

          @if (isset(auth()->user()->role->permission['name']['loantype']))

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#LoanTypes" role="button" aria-expanded="false" aria-controls="loantypes">
              <i class="link-icon" data-feather="layers"></i>
              <span class="link-title">{{__('globle.Types')}} {{__('globle.Loans')}}</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            
            <div class="collapse" id="LoanTypes">
              <ul class="nav sub-menu">

                @if (isset(auth()->user()->role->permission['name']['loantype']['can-list']))
               
                <li class="nav-item">
                  <a href="{{route('loantypes.index')}}" class="nav-link"> {{__('globle.Action.View')}}{{__('globle.Types')}} {{__('globle.Loans')}}</a>
                </li>

                @endif

                @if (isset(auth()->user()->role->permission['name']['loantype']['can-add']))

                <li class="nav-item">
                  <a href="{{route('loantypes.create')}}" class="nav-link">{{__('globle.Action.Create')}}{{__('globle.Types')}} {{__('globle.Loans')}}</a>
                </li>

                @endif
               
              </ul>
            </div>
            
          </li>

          @endif

          {{-- ========== Loan  ========== --}}

          @if (isset(auth()->user()->role->permission['name']['loan']))

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Loans" role="button" aria-expanded="false" aria-controls="loans">
              <i class="link-icon" data-feather="dollar-sign"></i>
              <span class="link-title">{{__('globle.Loans')}}</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            
            <div class="collapse" id="Loans">
              <ul class="nav sub-menu">

                @if (isset(auth()->user()->role->permission['name']['loan']['can-list']))
               
                <li class="nav-item">
                  <a href="{{route('loans.index')}}" class="nav-link"> {{__('globle.Action.View')}} {{__('globle.Loans')}}</a>
                </li>

                @endif

                @if (isset(auth()->user()->role->permission['name']['loan']['can-add']))
               
                <li class="nav-item">
                  <a href="{{route('loans.create')}}" class="nav-link">{{__('globle.Action.Create')}} {{__('globle.Loans')}}</a>
                </li>

                @endif

                
               
              </ul>
            </div>
            
          </li>

          @endif

<br>
          {{-- ========== Apply Loans   ========== --}}

          @if (isset(auth()->user()->role->permission['name']['applyloan']['can-list']))

          <li class="nav-item">
            <a href="{{route('applyed-loan')}}" class="nav-link" role="button" aria-expanded="false" aria-controls="applyjob">
             
              <button type="button" class="btn btn-primary"> 
                <i class="link-icon" data-feather="bookmark"></i>
                <span class="link-title">
                {{__('globle.apply')}} {{__('globle.Loans')}}</span>
                @foreach (App\Models\ApplyLoan::all() as $applyloan)
                
                @endforeach
                  @if ($applyloan)
                 <span class="badge badge-light">{{ $applyloan->count()}}</span>

                @endif
                
              </button>
              
              
            
        
            </a>
            
            
          </li>

          @endif

          {{-- ========== News  ========== --}}

          @if (isset(auth()->user()->role->permission['name']['news']))

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#news" role="button" aria-expanded="false" aria-controls="news">
              <i class="link-icon" data-feather="volume-2"></i>
              <span class="link-title">{{__('globle.News')}}</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            
            <div class="collapse" id="news">
              <ul class="nav sub-menu">
               
                @if (isset(auth()->user()->role->permission['name']['news']['can-list']))

                <li class="nav-item">
                  <a href="{{route('news.index')}}" class="nav-link"> {{__('globle.Action.View')}} {{__('globle.News')}}</a>
                </li>

                @endif

                @if (isset(auth()->user()->role->permission['name']['news']['can-add']))
               
                <li class="nav-item">
                  <a href="{{route('news.create')}}" class="nav-link">{{__('globle.Action.Create')}} {{__('globle.News')}}</a>
                </li>

                @endif
               
              </ul>
            </div>
          </li>

          @endif

          {{-- ========== Report  ========== --}}

          @if (isset(auth()->user()->role->permission['name']['report']))

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#reports" role="button" aria-expanded="false" aria-controls="news">
              <i class="link-icon" data-feather="archive"></i>
              <span class="link-title">{{__('sidebar.Report')}}</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            
            <div class="collapse" id="reports">
              <ul class="nav sub-menu">

                @if (isset(auth()->user()->role->permission['name']['report']['can-list']))
               
                <li class="nav-item">
                  <a href="{{route('reports.index')}}" class="nav-link"> {{__('globle.Action.View')}} {{__('sidebar.Report')}}</a>
                </li>

                @endif

                @if (isset(auth()->user()->role->permission['name']['report']['can-add']))

                <li class="nav-item">
                  <a href="{{route('reports.create')}}" class="nav-link">{{__('globle.Action.Create')}} {{__('sidebar.Report')}}</a>
                </li>

                @endif
               
              </ul>
            </div>
          </li>

          @endif


          {{-- ========== Type Job  ========== --}}

          @if (isset(auth()->user()->role->permission['name']['jobtype']))

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#jobtypes" role="button" aria-expanded="false" aria-controls="news">
              <i class="link-icon" data-feather="trello"></i>
              <span class="link-title">{{__('globle.Types')}} {{__('sidebar.Job')}}</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            
            <div class="collapse" id="jobtypes">
              <ul class="nav sub-menu">

                @if (isset(auth()->user()->role->permission['name']['jobtype']['can-list']))
               
                <li class="nav-item">
                  <a href="{{route('jobtypes.index')}}" class="nav-link"> {{__('globle.Action.View')}} {{__('globle.Types')}}  {{__('sidebar.Job')}}</a>
                </li>

                @endif

                @if (isset(auth()->user()->role->permission['name']['jobtype']['can-add']))
               
                <li class="nav-item">
                  <a href="{{route('jobtypes.create')}}" class="nav-link">{{__('globle.Action.Create')}} {{__('globle.Types')}}  {{__('sidebar.Job')}}</a>
                </li>

                @endif
               
              </ul>
            </div>
          </li>

          @endif
     
          {{-- ========== Job  ========== --}}

          @if (isset(auth()->user()->role->permission['name']['job']))

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#job" role="button" aria-expanded="false" aria-controls="news">
              <i class="link-icon" data-feather="briefcase"></i>
              <span class="link-title">{{__('sidebar.Job')}}</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            
            <div class="collapse" id="job">
              <ul class="nav sub-menu">

                @if (isset(auth()->user()->role->permission['name']['job']['can-list']))
               
                <li class="nav-item">
                  <a href="{{route('job.index')}}" class="nav-link"> {{__('globle.Action.View')}} {{__('sidebar.Job')}}</a>
                </li>

                @endif

                @if (isset(auth()->user()->role->permission['name']['job']['can-add']))
               
                <li class="nav-item">
                  <a href="{{route('job.create')}}" class="nav-link">{{__('globle.Action.Create')}} {{__('sidebar.Job')}}</a>
                </li>

                @endif

               
               
              </ul>
            </div>
          </li>

          @endif

          <br>

        {{-- ========== Apply Jobs   ========== --}}

        @if (isset(auth()->user()->role->permission['name']['applyjob']['can-list']))

          <li class="nav-item">
            <a href="{{route('applyed-job')}}" class="nav-link" role="button" aria-expanded="false" aria-controls="applyjob">
             
              <button type="button" class="btn btn-primary">
              <i class="link-icon" data-feather="credit-card"></i>
              <span class="link-title">{{__('globle.apply')}} {{__('sidebar.Job')}}</span>

                @foreach (App\Models\ApplyJob::all() as $applyjob)
                
                @endforeach
                  
                @if ($applyjob)
                 <span class="badge badge-light">{{ $applyjob->count()}}</span>
                @endif
                
              </i>
              </button>
            </a>
            
            
          </li>

          @endif

         

          {{-- ========== Compliant  ========== --}}

          <br>

          @if (isset(auth()->user()->role->permission['name']['compliant']['can-list']))

          <li class="nav-item">
            <a href="{{route('applyed-compliant')}}" class="nav-link" role="button" aria-expanded="false" aria-controls="compliant">
              <button type="button" class="btn btn-primary">
              <i class="link-icon" data-feather="alert-triangle"></i>
              <span class="link-title">{{__('globle.compliant')}}</span>
              @foreach (App\Models\Compliant::all() as $applycompliant)
                
              @endforeach
                
              @if ($applycompliant)
               <span class="badge badge-light">{{ $applycompliant->count()}}</span>
              @endif
              </i>
              </button>
            </a>
            
            
          </li>

          @endif
          
          
          {{-- <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item nav-category">Components</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">UI Kit</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/badges.html" class="nav-link">Badges</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/buttons.html" class="nav-link">Buttons</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/button-group.html" class="nav-link">Button group</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/cards.html" class="nav-link">Cards</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/carousel.html" class="nav-link">Carousel</a>
                </li>
                <li class="nav-item">
                    <a href="pages/ui-components/collapse.html" class="nav-link">Collapse</a>
                  </li>
                <li class="nav-item">
                  <a href="pages/ui-components/dropdowns.html" class="nav-link">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/list-group.html" class="nav-link">List group</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/media-object.html" class="nav-link">Media object</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/modal.html" class="nav-link">Modal</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/navs.html" class="nav-link">Navs</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/navbar.html" class="nav-link">Navbar</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/pagination.html" class="nav-link">Pagination</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/popover.html" class="nav-link">Popovers</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/progress.html" class="nav-link">Progress</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/scrollbar.html" class="nav-link">Scrollbar</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/scrollspy.html" class="nav-link">Scrollspy</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/spinners.html" class="nav-link">Spinners</a>
                </li>
                <li class="nav-item">
                  <a href="pages/ui-components/tooltips.html" class="nav-link">Tooltips</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Advanced UI</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="advancedUI">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                </li>
                <li class="nav-item">
                    <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                  </li>
                <li class="nav-item">
                  <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Forms</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/forms/basic-elements.html" class="nav-link">Basic Elements</a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/advanced-elements.html" class="nav-link">Advanced Elements</a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/editors.html" class="nav-link">Editors</a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/wizard.html" class="nav-link">Wizard</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link"  data-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Charts</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/charts/apex.html" class="nav-link">Apex</a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">ChartJs</a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">Flot</a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/morrisjs.html" class="nav-link">Morris</a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/peity.html" class="nav-link">Peity</a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/sparkline.html" class="nav-link">Sparkline</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Table</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/tables/basic-table.html" class="nav-link">Basic Tables</a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/data-table.html" class="nav-link">Data Table</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Icons</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/icons/feather-icons.html" class="nav-link">Feather Icons</a>
                </li>
                <li class="nav-item">
                  <a href="pages/icons/flag-icons.html" class="nav-link">Flag Icons</a>
                </li>
                <li class="nav-item">
                  <a href="pages/icons/mdi-icons.html" class="nav-link">Mdi Icons</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Special pages</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
                </li>
                <li class="nav-item">
                  <a href="pages/general/faq.html" class="nav-link">Faq</a>
                </li>
                <li class="nav-item">
                  <a href="pages/general/invoice.html" class="nav-link">Invoice</a>
                </li>
                <li class="nav-item">
                  <a href="pages/general/profile.html" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                  <a href="pages/general/pricing.html" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                  <a href="pages/general/timeline.html" class="nav-link">Timeline</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Authentication</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="authPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/auth/login.html" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="pages/auth/register.html" class="nav-link">Register</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">Error</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="errorPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/error/404.html" class="nav-link">404</a>
                </li>
                <li class="nav-item">
                  <a href="pages/error/500.html" class="nav-link">500</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Docs</li>
          <li class="nav-item">
            <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Documentation</span>
            </a>
          </li> --}}
        </ul>
      </div>
    </nav>
    {{-- <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted">Sidebar:</h6>
        <div class="form-group border-bottom">
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
              Dark
            </label>
          </div>
        </div>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item active" href="../demo_1/dashboard-one.html">
            <img src="../assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item" href="../demo_2/dashboard-one.html">
            <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav> --}}
		<!-- partial -->
