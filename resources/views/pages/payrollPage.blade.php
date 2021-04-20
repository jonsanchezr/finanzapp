@extends('layouts.appLayout')
@section('page')

<div class="right_col" role="main">
  <x-page>
    @include('tables.payrollTable')
  </x-page>
</div>

<!-- Create modal -->
<x-modal-create title="Payroll" route="/payroll" class="create-form-modal-lg">
  @include('forms.payrollCreateForm')
</x-modal-create>
<!-- /Create modal -->

@endsection


@section('css')
  @include('assets.css.tableCss')
@endsection
@section('js')
  @include('assets.js.tableJs')
@endsection
