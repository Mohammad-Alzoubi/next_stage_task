@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Employee</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Employee</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.employee.store')}}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input id="name" type="text" class="form-control" name="first_name" value="{{old('first_name')}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">last Name</label>
                                    <input id="name" type="text" class="form-control" name="last_name" value="{{old('last_name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}">
                                </div>

                                <div class="form-group">
                                    <label for="phone">phone</label>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{old('phone')}}">
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Company name</label>
                                    <select id="inputState" class="form-control main-category" name="company">
                                        <option value="">Select</option>
                                        @foreach ($companies as $company)
                                            <option value="{{$company->id}}">{{$company->name}}</option>
                                        @endforeach
                                    </select>
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
