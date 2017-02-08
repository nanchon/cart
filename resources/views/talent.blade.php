@extends('layouts.app')

@section('content')
<div class="container">
  <form id="search" class="form-horizontal">
    <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">office</label>
      <div class="col-sm-3">
        {!! Form::select('office_id', ['' => '-- 指定無し --'] + array_pluck($offices, 'name', 'id'), $search_keys, ['class' => 'form-control', 'id' => 's_office']) !!}
      </div>
    </div>
  </form>
  <div class="row">
    <div class="col-md-12">
      @if (Session::has('flash_message'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{ Session::get('flash_message') }}
        </div>
      @endif
      <div class="text-right">
{!! $talents->total().'　件　　' !!}
      </div>
      <div class="panel-body">
        <table class="table table-striped task-table">
          <thead>
            <th>name</th>
            <th>sex</th>
            <th>office</th>
          </thead>
          <tbody>
          @foreach ($talents as $talent)
            <tr>
              <td class="table-text col-md-2">
                <div>{{ $talent->name }}</div>
              </td>
              <td class="col-md-2">
                <div>{{ $talent->getSex() }}</div>
              </td>
              <td class="col-md-8">
                <div>{{ $talent->office->name }}</div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <div class="text-center">
{!! $talents->links() !!}
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
jQuery(function(){
  $(document).ready(function() {
    $('#s_office').change(function() {
      $('#search').submit();
    });
  });
});
</script>
@endsection
