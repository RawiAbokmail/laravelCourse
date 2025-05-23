@extends('zay.app')
@section('title', 'contact us')
@section('content')


    {{-- <!-- Start Content Page --> --}}
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>

    {{-- <!-- Start Map --> --}}
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="{{ asset('zayassets/https://unpkg.com/leaflet@1.7.1/dist/leaflet.js') }}" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    {{-- <!-- Ena Map --> --}}

    {{-- <!-- Start Contact --> --}}
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <x-zaycomponents.input type="text" label="Name" name="name" placeholder="Name" />
                    </div>
                    <div class="form-group col-md-6 mb-3">
                       <x-zaycomponents.input type="email" label="Email" name="email" placeholder="Email" />
                    </div>
                </div>
                <div class="mb-3">
                    <x-zaycomponents.input type="text" label="Subject" name="subject" placeholder="Subject" />
                </div>
                <x-zaycomponents.textarea rows="8" label="Message" name="message" placeholder="Message" />
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <!-- End Contact --> --}}

@endsection

@section('js')
<script>
// ------------------------>start map
var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
            .bindPopup("<b>Zay</b> eCommerce Template<br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
        // ----------->end map
    // ------------------------>start validation

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

