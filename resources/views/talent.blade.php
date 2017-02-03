@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="">一覧</h1>
      <div class="panel-body">
        <table class="table table-striped task-table">
          <thead>
            <th>名前</th>
            <th>性別</th>
            <th>事務所</th>
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
    </div>
  </div>
</div>
@endsection
