@extends('layouts.home')

@section('content')
        <section class="section">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <form action="{{ route('admin.phones.store') }}" method="post">
                        @csrf
                        <div class="card">
                        <div class="card-header">
                            <h4>Phones Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Number</label>
                                <input type="text" class="form-control" name="number">
                            </div>
                            <div class="form-group">
                                <label>User</label>
                                <select class="form-control" name="user_id">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
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