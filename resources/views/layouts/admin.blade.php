<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>

    </title>
    <style>
      th td {
        padding: 5px 5px !important;
        margin: 0px !important;
      }
    </style>
		<!-- Site favicon -->
<link
    rel="apple-touch-icon"
    sizes="180x180"
    href="vendors/images/apple-touch-icon.png"/>
<link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="vendors/images/favicon-32x32.png"/>
<link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="vendors/images/favicon-16x16.png"/>

<!-- Mobile Specific Metas -->
<meta
    name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1"/>

@include('layouts.header')

	</head>
	<body class="bg-sm body-sm">

		<div class="header" style="height: 60px;">
			<div class="header-left">
				<div class="menu-icon bi bi-list m-0 p-0"></div>
			</div>

			<div class="header-right">
				
				
				<div class="user-info-dropdown">
					
          <div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
            <span class="user-icon" style="width:40px;box-shadow:none;height:40px">
              <img src="{{ url('gambar', [ empty(Auth::user()->gambar)?'user.png':Auth::user()->gambar]) }}" alt="">
            </span>
							<span class="user-name">{{ empty(Auth::user()->name)?'noname':Auth::user()->name }}</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="{{ url('profil', []) }}"
								><i class="dw dw-user1"></i> Profile</a
							>
							<form action="{{ route('logout', []) }}" method="post">
                @csrf
                <button class="dropdown-item" type="submit">
                    <i class="dw dw-logout"></i>
                    Log Out
                </button >
              </form>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		<div class="left-side-bar bg-primary">
			<div class="brand-logo">
				<a href="index.html">
					<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
					<img
						src="{{ url('gambar', ['user.png']) }}"
						width="40px"
						class="light-logo mr-2"
					/>
          asdad
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
							<ul class="submenu">
								<li><a href="index.html">Dashboard style 1</a></li>
								<li><a href="index2.html">Dashboard style 2</a></li>
								<li><a href="index3.html">Dashboard style 3</a></li>
							</ul>
						</li>
						
						<li>
							<a href="calendar.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-calendar4-week"></span
								><span class="mtext">Calendar</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
      <div class="page-header mb-2">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="title">
              <h4>@yield('judul')</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">

              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ url('home', []) }}">Home</a>
                </li>

                <li class="breadcrumb-item active" aria-current="page">
                  @yield('judul')
                </li>

              </ol>

            </nav>
          </div>
          
          

        </div>


      </div>

      <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
             <div class="pull-left">
                 @yield('judul2')
             </div>
         </div>

			@yield('content')

      </div>
      
		</div>
		
		@include('layouts.footer')
    @include('sweetalert::alert')
	</body>
</html>
