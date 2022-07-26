@extends('admin.include.app')
@section('admin')


<div class="container">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <h2 class="py-3"> Contact Message</h2>

    <div class="container">
        <div class="row">
            @foreach ($contactUsData as $contactUsItem)
            <div class="col-md-12 my-4 shadow py-2 rounded">
                <div class=" text-center" style="display:inline-block; border-radius: 50%; background-color: #101924">
                    <i class="fa-solid fa-user fa-2xl py-4 px-2 text-light "></i>
                </div>
                <span class="fw-bold"
                    style="font-size: 20px; text-transform: uppercase; margin-left: 5px; color: #101924"> {{
                    $contactUsItem->name }} </span>
                <div class="container py-2">
                    <h5>Contacts: <span class="badge text-light" style="background-color: #101924">{{
                            $contactUsItem->phone
                            }}</span>
                        <span class="badge text-light" style="background-color: #101924">{{ $contactUsItem->email
                            }}</span>
                    </h5>
                    <p><i class="fa-solid fa-quote-left"></i> {{ $contactUsItem->message }} <i
                            class="fa-solid fa-quote-right"></i> </p>

                    <div class="">
                        <h5 style="font-size: 16px; text-align: right;">Created: {{ $contactUsItem->created_at }} </h6>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>



@endsection