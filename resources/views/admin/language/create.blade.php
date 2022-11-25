@extends('layouts.home')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <form action="{{ route('admin.language.store') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Lang Form</h4>
                        </div>
                        <div class="card-body">
                            <h4>Lang Title</h4>
                            <div class="form-group">
                                <label>Title Uz</label>
                                <input type="text" class="form-control" name="title_uz">
                                <label>Title Ru</label>
                                <input type="text" class="form-control" name="title_ru">
                                <label>Title En</label>
                                <input type="text" class="form-control" name="title_en">
                            </div>
                            <h4>Lang Icon</h4>
                            <div class="form-group">
                                <label>Title Uz</label>
                                <input type="text" class="form-control" name="icon">
                            </div>
                            <h4>Lang Description</h4>
                            <div class="form-group">
                                <label>Description Uz</label>
                                <input type="text" class="form-control" name="description_uz">
                                <label>Description Ru</label>
                                <input type="text" class="form-control" name="description_ru">
                                <label>Description En</label>
                                <input type="text" class="form-control" name="description_en">
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection