@extends('layouts.app_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            ONGERAMO UMUFATABUFUZI
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#uploadModal"><span class="fa fa-upload"></span> Import</button>
                        </div>
                    </div>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (@$success)
                        <div class="alert alert-success" role="alert">
                            {{ $success }}
                        </div>
                    @endif

                    @if(@$message)
                      <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!--  -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" action="/client/{{$targetPage}}" enctype="multipart/form-data" id="uploadExcel">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="_method" value="PUT">
       @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Upload Client of <a href='/client/mungo/edit' title='Click to get the tamplate' target="_blank">{{Session::get("branchName")}}</a> from excel file here</label>
            <input type="file" name="Uploadfile" class="form-control" id="Uploadfile">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" class="btn btn-primary">Upload</button>
        <span id="upload_out"></span>
      </div>
    </div>
    </form>
  </div>
</div>
@endsection
