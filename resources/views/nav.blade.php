<nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>     
            
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            
            <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" style="padding-top: 29%;">
                        <img src="https://cdn-icons-png.flaticon.com/128/3119/3119338.png"
                            data-src="https://cdn-icons-png.flaticon.com/128/3119/3119338.png" alt="Notification "
                            title="Notification " width="25" height="25" class="lzy lazyload--done"
                            srcset="https://cdn-icons-png.flaticon.com/128/3119/3119338.png 4x">
                        <!-- <i class="far fa-bell fa-2x"> </i> -->
                        <!-- https://www.flaticon.com/free-icon/notification_3119338 -->
                        <span class=" badge badge-warning navbar-badge"
                            style="font-weight:bold ;">{{ count(session('mou')) }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">{{ count(session('mou')) }} Notifications</span>
                        @foreach(session('mou') as $d)
                        <div class="dropdown-divider"></div>
                        <a href="{{route('edit_kerjasama', $d->tambah_kerjasama_id)}}" class="dropdown-item">
                            <img class="nav-icon"
                                srcset="https://img.icons8.com/material-outlined/344/error--v1.png 17x"></img>
                            Hampir Kedaluwarsa - {{ $d->Judul }}
                        </a>
                        @endforeach
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                    <div class="image" style="padding-top:3%">
                        <img src=" {{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image" style="padding-top: 28%">
                    </div>
                    </div>
                    <div class="info" style="padding-top: 7%">
                        <a href="/Akun" class="d-block" style="padding-top:5%">@if(session()->has('id'))
                            {{session('name')}} @else
                            ???
                            @endif</a>
                    </div>
                    <div class=" info">
                    <a href="{{route('logout')}}" class="nav-link">
                            <img class="nav-icon" style="opacity: 55%; width: 18px;"
                                srcset="https://cdn-icons-png.flaticon.com/512/1286/1286853.png 2x" width="1rem"
                                height="1rem" alt="exit icon" loading="lazy">
                        </a>
                    </div>
                </div>
            </ul>
        </nav>