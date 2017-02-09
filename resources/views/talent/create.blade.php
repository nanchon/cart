@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-header">
    <h1>Create sample <small>not validation</small></h1>
  </div>
  <div class="row">
    <div class="col-sm-12 text-right">
      <a href="/talent/" class="btn btn-primary" style="margin:20px;">to List</a>
    </div>
  </div>

  <form method="post" action="/talent">
    <div class="form-group">
      <label>name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <label>sex</label>
      {!! Form::select('sex', App\Talent::getSexList(), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      <label>sex</label>
      {!! Form::select('office_id', array_pluck($offices, 'name', 'id'), null, ['class' => 'form-control']) !!}
    </div>
    <div class="page-header">
    </div>
    <div class="text-center">
      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
      <input type="submit" value="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@stop