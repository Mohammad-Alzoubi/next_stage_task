@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Company</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Company</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.company.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="logo">
                                </div>

                                <div class="form-group">
                                    <label for="name">Company Name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}">
                                </div>

                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input id="website" type="text" class="form-control" name="website" value="{{old('website')}}">
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('scripts')
@endpush
