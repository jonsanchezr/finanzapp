@extends('layouts.appLayout')
@section('page')

<div class="right_col" role="main">
  <x-page title="{{$title}}">
    @include('tables.beneficiaryTable')
  </x-page>
</div>

<!-- Create modal -->
<x-modal-create title="{{$title}}" route="/beneficiaries" class="create-form-modal-lg">
  @include('forms.beneficiaryCreateForm')
</x-modal-create>
<!-- /Create modal -->

@endsection


@section('css')
  @include('assets.css.tableCss')
@endsection
@section('js')
  @include('assets.js.tableJs')
@endsection
