@extends('layouts.home')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <h2>Category: <span class="text-info">{{ $category->name }}</span></h2>
                <ul>
                    @foreach($category->posts as $item)
                        <li>{{ $item->id }} - {{ $item->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection