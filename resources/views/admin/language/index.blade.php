@extends('layouts.home')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Posts</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.language.create') }}" class="btn btn-outline-info">+ Add Posts</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>Title Uz</th>
                                        <th>Title Ru</th>
                                        <th>Title En</th>
                                        <th>Icon</th>
                                        <th>Description Uz</th>
                                        <th>Description Ru</th>
                                        <th>Description En</th>
                                    </tr>
                                    @foreach($langs as $lang)
                                        <tr>
                                            <td>{{ $lang->title_uz }}</td>
                                            <td>{{ $lang->title_ru }}</td>
                                            <td>{{ $lang->title_en }}</td>
                                            <td>{{ $lang->icon }}</td>
                                            <td>{{ $lang->description_uz }}</td>
                                            <td>{{ $lang->description_ru }}</td>
                                            <td>{{ $lang->description_en }}</td>
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
