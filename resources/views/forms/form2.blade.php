@extends('forms.master')
@section('title', 'Form 2')
@section('content')
<h1 class="text-center">Form 2</h1>
<p class="text-center">This is the second form.</p>

<form action="{{ route('forms.form2') }}" method="POST" class="p-4 border rounded shadow-sm" style="max-width: 400px; margin: auto; background-color: #f9f9f9;">
    {{-- <input type="text" name="_token" value="{{ csrf_token() }}"> --}}
    {{-- {{ csrf_field() }} --}}
    @csrf
    <x-form.input type="text" label="Name" name="name" placeholder="enter your name" required />
    <x-form.input type="email" label="Email" name="email" placeholder="enter your email" required />
    <x-form.input type="number" label="Age" name="age" placeholder="enter your age" required />
    <x-form.input type="text" label="Phone number" name="phone" placeholder="enter your phone number" required />
    <x-form.input type="file" label="image" name="img"/>
    <x-form.select name="education_level" label="Education Level">
        <option value="diploma">Diploma</option>
            <option value="bachelor">Bachelor</option>
            <option value="master">Master</option>
    </x-form.select>
    <x-form.textarea name="message" rows="4" placeholder="Your Bio ..." />
    <x-form.radio label="Gender" name="gender" :options="$options" />
    <button type="submit" class="btn btn-success w-100">Submit</button>
</form>
@stop
