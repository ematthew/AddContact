
@extends('layouts.app')
{{-- to add the navbar --}}

@section('content')

{{-- to add body and subject --}}

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="display-3"> Contact</h1>
            <a href="/contact" class="btn btn-primary mb-3">
                Create Contact
            </a>
            <form method="Get" action="{{url('my-search')}}">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" name="search" class="form-control" placeholder="search" value="{{old('search')}}">
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-success"> Search</button>
                    </div>
                </div>
            </form>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Job Title</td>
                        <td>City</td>
                        <td>Country</td>
                        <td colspan= 2>Action</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($contacts as $contact)
                   <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->job_title }}</td>
                    <td>{{ $contact->city }}</td>
                    <td>{{ $contact->country }}</td>
                    <td>
                        <a href="/edit/contact/{{$contact->id }}" class="btn btn-primary "> Edit</a>
                    </td>

                    <td>
                         <a href="/delete/contact/{{$contact->id }}" class="btn btn-danger ">Delete</a>
                    </td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>     
</div>

@endsection