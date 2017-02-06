@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
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
              <td class="table-text">
                <div>{{ $talent->name }}</div>
              </td>
              <td>
                <div>{{ $talent->getSex() }}</div>
              </td>
              <td>
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
@endsection
