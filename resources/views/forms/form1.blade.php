@extends('forms.master')
@section('title', 'Form 1')
@section('content')
<h1 class="text-center">Form 1</h1>
<p class="text-center">This is the first form.</p>

<form action="{{ route('forms.form1') }}" method="POST" class="p-4 border rounded shadow-sm" style="max-width: 400px; margin: auto; background-color: #f9f9f9;">
    {{-- <input type="text" name="_token" value="{{ csrf_token() }}"> --}}
    {{-- {{ csrf_field() }} --}}
    @csrf
    <x-form.input type="text" label="Name" name="name" placeholder="enter your name" />
    <x-form.input type="email" label="Email" name="email" placeholder="enter your email" />
    <button type="submit" class="btn btn-success w-100">Submit</button>
</form>
@stop
