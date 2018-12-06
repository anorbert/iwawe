@extends('layouts.app_accountant')

@section('content')
<!-- menu start -->
    <div id='cssmenu'>
    <ul>
       <li class=""><a href='#'><span>PetitCash</span></a></li>
       <li class=""><a href='#'><span>Invoice</span></a></li>
        <li class=""><a href='#'><span>Tracking Expanses</span></a></li>
        <li class=""><a href='#'><span>Daily Memo</span></a></li>
        <li class="has-sub <?php echo @$active == 'register'?"active":"" ?>"><a href='#'><span>Raport </span></a>
        <ul>
           <!--  <li><a href='#'><span>Ayishyuwe ku munsi</span></a></li>
            <li><a href='#'><span>Ayishyuwe ku kwezi</span></a></li>
            <li><a href='#'><span>Umufatabuguzi</span></a></li> -->
        </ul>
       </li>
       <li class='last'><a href='../logout.php'><span>Profile</span></a></li>
    </ul>
    </div>
<!-- Menu end -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
