@extends('layouts.home')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <form class="form-inline mr-auto" action="{{ route('admin.amaliyot.search') }}" method="get">
                                <div class="search-element">
                                    <input name = "search" class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <h4>Amaliyot</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.amaliyot.create') }}" class="btn btn-outline-info">+ Add Category</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <p>Search result</p>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tovar</th>
                                        <th>Do'kon</th>
                                        <th>Narxi</th>
                                    </tr>
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->tovar_name }}</td>
                                                <td>{{ $post->dokon_name }}</td>
                                                <td>{{ $post->price }}</td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
