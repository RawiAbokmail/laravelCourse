

@extends('forms.master')
@section('title', 'Form3')
@section('content')



<form action="{{ route('forms.form3') }}" method="POST" class="p-4 border rounded shadow-sm bg-light" enctype="multipart/form-data">
   @csrf
    {{-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif --}}
    <h1 class="text-center text-success">Fill this form please</h1>
    <x-form.input type="text" label="Name" name="name" placeholder="Enter your name" />
    <x-form.input type="email" label="Email" name="email" placeholder="Enter your email" />
    <x-form.input type="phone" label="Phone Number" name="phone" placeholder="Enter your phone number"/>
    <x-form.input type="file" label="Upload File" name="media" />
    <x-form.textarea name="message" label="Description" rows="4" placeholder="Type your message..." />
    <button type="submit" class="btn btn-success px-5 ">Send</button>
</form>

@endsection

@section('js')
<script>

    let inputs = document.querySelectorAll('form .form-control');

        inputs.forEach(el => {
            el.onkeyup = () => {
                if (el.value.length > 0) {
                    if (el.name == 'name'){
                        if (el.value.length >2 && el.value.length <= 20){
                            el.classList.add('is-valid');
                            el.classList.remove('is-invalid');
                        } else {
                            el.classList.remove('is-valid');
                            el.classList.add('is-invalid');
                        }
                    } else {
                        el.classList.add('is-valid');
                        el.classList.remove('is-invalid');
                    }
                } else {
                    el.classList.remove('is-valid');
                    el.classList.add('is-invalid');
                }

            }
        });

</script>
@endsection

