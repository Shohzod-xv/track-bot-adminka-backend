@extends('layouts.home')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <form action="{{ route('admin.posts.store') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Posts Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Post title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <label>Category</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
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