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
                            <h4>Update Employee</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.employee.update', $employee->id)}}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input id="name" type="text" class="form-control" name="first_name" value="{{$employee->first_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">last Name</label>
                                    <input id="name" type="text" class="form-control" name="last_name" value="{{$employee->last_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{$employee->email}}">
                                </div>

                                <div class="form-group">
                                    <label for="phone">phone</label>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{$employee->phone}}">
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Company name</label>
                                    <select id="inputState" class="form-control main-category" name="company">
                                        <option value="">Select</option>
                                        @foreach ($companies as $company)
                                            <option {{$employee->company_id == $company->id ? 'selected':''}} value="{{$company->id}}">{{$company->name}}</option>
                                        @endforeach
                                    </select>
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
