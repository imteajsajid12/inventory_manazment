@php
$user = App\Models\Admin::find(4);
$total= auth()->user()->unreadNotifications()->groupBy('notifiable_type')->count();
@endphp
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-email"></i>
                                    <span class="quantity">{{ $total }}</span>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">

                                        </div>
                                        @foreach ($user->unreadNotifications->slice(0, 3) as $notification)

                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p style="color: rgb(0, 0, 0);
                                                -webkit-text-stroke-width: medium;">{{  $notification->data["admin"] }}</p>
                                                @php $notification->markAsRead(); @endphp
                                                <span class="date">{{$notification->created_at  }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                        @foreach ($user->readNotifications->slice(0, 3) as $notification)

                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>{{  $notification->data["admin"] }}</p>
                                                @php $notification->markAsRead(); @endphp
                                                <span class="date">{{$notification->created_at  }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="notifi__footer">
                                            <a href="{{ asset('/admin/messege') }}">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="{{ asset('/images/icon/sajid.jpg') }}" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{ asset('/images/icon/sajid.jpg') }}" alt="John Doe" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#"> {{ Auth::user()->name }}</a>
                                                </h5>
                                                <span class="email">{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                            @csrf
                                        <div class="account-dropdown__item">
                                            <button class="btn btn-success" style="width: 310px"><i class="zmdi zmdi-power"></i>Logout</a></button>

                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->
