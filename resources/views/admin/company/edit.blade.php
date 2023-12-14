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
                            <h4>Update Company</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.company.update', $company->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label>Preview</label>
                                    <br>
                                    <img src="{{asset($company->logo)}}" style="width:200px" alt="">
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="logo">
                                </div>

                                <div class="form-group">
                                    <label for="name">Company Name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{$company->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{$company->email}}">
                                </div>

                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input id="website" type="text" class="form-control" name="website" value="{{$company->website}}">
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>

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
