<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega " role="navigation">
    <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
    </button>

    <!-- Logo -->
    <div class="navbar-header">
            <div class="navbar-brand navbar-brand-center">
                <!-- <img class="navbar-brand-logo" src="../../assets/images/logo.png" title="Remark"> -->
                <span class="navbar-brand-text">LARAVEL V5.3</span>
            </div>
    </div>

    
    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="dropdown">                        
                        <a href="{{ url('/home') }}" title="Home" aria-expanded="false"
                           data-animation="slide-bottom" role="button"
                            <i class="icon wb-home" aria-hidden="true" style="font-size: 20px;"></i> 
                        </a>
                    </li>               
                
                
                @if (!Auth::guest())
                    <!-- Users button -->
                    <li class="dropdown">
                        <a href="{{ url('/users') }}" title="System users" aria-expanded="false"
                           data-animation="slide-bottom" role="button"
                            <i class="icon wb-users" aria-hidden="true" style="font-size: 25px;"></i> 
                        </a>
                    </li>
                    
                    <!-- Logout button -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="javascript:void(0)" title="Logout" aria-expanded="false"
                           data-animation="slide-bottom" role="button"
                           onclick="confirmLogout()">

                            <i class="icon wb-unlock" aria-hidden="true" style="font-size: 20px;"></i>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                            <!-- Confirm logout -->
                            <script type="text/javascript">
                                function confirmLogout(){
                                    var logout = confirm("Are you sure do you want to logout?");
                                    if(logout==true){
                                        event.preventDefault();
                                        document.getElementById('logout-form').submit();
                                    }
                                }
                            </script>
                        </a>
                    </li>
                @endif
                <li class="dropdown">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </li>
            </ul>
        </div>
    </div>

</nav>