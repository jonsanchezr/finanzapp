@extends('layouts.appLayout')
@section('page')

<div class="right_col" role="main">
  <x-page>
    @include('tables.typeproductTable')
  </x-page>
</div>

<!-- Create modal -->
<x-modal-create title="typeproduct" route="/typeproduct" class="create-form-modal-lg">
  @include('forms.typeproductCreateForm')
</x-modal-create>
<!-- /Create modal -->

@endsection


@section('css')
  @include('assets.css.tableCss')
@endsection
@section('js')
  @include('assets.js.tableJs')
@endsection
