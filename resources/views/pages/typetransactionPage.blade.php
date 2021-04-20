@extends('layouts.appLayout')
@section('page')

<div class="right_col" role="main">
  <x-page>
    @include('tables.typetransactionTable')
  </x-page>
</div>

<!-- Create modal -->
<x-modal-create title="typetransaction" route="/typetransactions" class="create-form-modal-lg">
  @include('forms.typetransactionCreateForm')
</x-modal-create>
<!-- /Create modal -->

@endsection


@section('css')
  @include('assets.css.tableCss')
@endsection
@section('js')
  @include('assets.js.tableJs')
@endsection
