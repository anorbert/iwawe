@extends('layouts.app_scmanager')

@section('content')
<!-- menu start -->
    <div id='cssmenu'>
    <ul>
       <li class=""><a href='#'><span>Client</span></a></li>
        <li class="has-sub <?php echo @$active == 'register'?"active":"" ?>"><a href='#'><span>Raport </span></a>
        
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

