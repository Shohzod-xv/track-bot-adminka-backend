@extends('layouts.home')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <form action="{{ route('admin.amaliyot.store') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>PRICE</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Molning nomi</label>
                                <input type="text" class="form-control" name="tovar_name">
                            </div>
                            <div class="form-group">
                                <label>Do'kon nomi</label>
                                <input type="text" class="form-control" name="dokon_name">
                            </div>
                            <div class="form-group">
                                <label>Narxi</label>
                                <input type="number" class="form-control" name="price">
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