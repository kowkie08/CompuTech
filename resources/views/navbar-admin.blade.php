<style>
     body, html{
            height:100%;
            background-color:#FFF;
            overflow: hidden;
        }
        

        @font-face {
            font-family: 'Poppins', sans-serif;
        }
        @font-face {
            font-family: 'Roboto', sans-serif;
        }
  
#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #2F90CE;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

#page-content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px;
}


/* Sidebar Styles */

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}

.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #fff;
}

.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2);
}

.sidebar-nav li a:active, .sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav>.sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px;
}

.sidebar-nav>.sidebar-brand a {
  color: #999999;
}

.sidebar-nav>.sidebar-brand a:hover {
  color: #fff;
  background: none;
}

@media(min-width:768px) {
  #wrapper {
    padding-left: 0;
  }
  #wrapper.toggled {
    padding-left: 250px;
  }
  #sidebar-wrapper {
    width: 0;
  }
  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }
  #page-content-wrapper {
    padding: 20px;
    position: relative;
  }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
  }
}

</style>
        
  <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav" >
                <li class="sidebar-brand">
                     <a class="navbar-brand" href="{{ url('/users') }}" />
     
                </li>

                <li>
                  <a style="color:#fff;background-color:gray !important"><b>HELLO,  {{ Session::get('FirstName') }}</b></a>
                </li>
                <li>
                    <a href="{{ url('/users') }}"><i class="fas fa-users"></i>&nbsp;&nbsp;USERS</a>
                </li>
                <li>
                    <a href="{{ url('/approve') }}"><i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;APPROVALS</a>
                </li>
                <li>
                    <a href="{{ url('/moderator_add') }}"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;ADD MODERATOR</a>
                </li>
                <li>
                    <a href="{{ url('/notice') }}"><i class="fas fa-envelope"></i>&nbsp;&nbsp;SEND NOTICE</a>
                </li>
                <li>
                  <hr/>
                    <a href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;LOGOUT</a>
                </li>
    
                <li>
                  <a class="nav-link" href="{{ url('/login') }}"><i class="far fa-user"></i> LOGIN</a>
                </li>    
              <li>
                <a class="btn btn-signup" href="{{ url('/register') }}">REGISTER</a>
              </li>   
                
              
            </ul>
        </div>

        <!-- /#sidebar-wrapper -->