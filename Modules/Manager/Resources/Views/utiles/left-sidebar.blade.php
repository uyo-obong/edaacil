
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="/manager"><img src="{{ URL::to('assets/images/edaacil-logo.png') }}" width="100" alt="Edaacil"></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="{{ route('manager.account.profile') }}"><img src="{{  auth()->user()
                    ->profile_image != '' ? '/storage/'.auth()->user()->profile_image : URL::to ('default_avatar.png')}}" alt="User"></a>
                    <div class="detail">
                        <h4>{{ Auth::user()->fullName() }}</h4>
                        <small>{{ Auth::user()->role }} Edaacil</small>
                    </div>
                </div>
            </li>
            <li  class="{{ request()->is('manager') ? 'active open' : '' }}"><a href="/manager"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

            <li class="{{ request()->is('manager/token/list') ? 'active open' : '' }}"><a href="{{ route('manager.token.list') }}"><i class="zmdi zmdi-spinner"></i><span>Generate Token</span></a></li>

            <li class="{{ request()->is('manager/account/list') ? 'active open' : '' }}"><a href="{{ route('manager.account.list') }}"><i class="zmdi zmdi-accounts-list"></i><span>Manage Account</span></a>
            </li>

            <li class=""><a data-toggle="modal" data-target="#viewSmsBalanceModal" type="button" href="#"><i class="zmdi zmdi-money-box"></i><span>Check Sms Balance</span></a>
            </li>

        </ul>
    </div>
</aside>
