@extends('layouts.master')

@section('content')
  <x-modal-component buttonColor="danger" modalColor="danger" modalType="danger">
    <x-slot name="buttonText">
      Optin
    </x-slot>
  </x-modal-component>
  <x-modal-component buttonColor="success" modalColor="success" modalType="success">
    <x-slot name="buttonText">
      Close
    </x-slot>
  </x-modal-component>
@endsection