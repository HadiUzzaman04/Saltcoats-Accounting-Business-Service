@extends('layouts.app')
@section('content')

<div class="container">
    <div class="text-center">
        <h1>{{$data->name}}</h1>
    </div>
</div>
<br>
<section class="section-background">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="about-info">
                    <figure>
                        <figcaption>
                            <p>{{$data->details}}</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection