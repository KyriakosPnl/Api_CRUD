@extends('base')

@section('main')

<div class="col-sm-12">


</div>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Courses</h1>
        <div>
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            <a style="margin: 19px;" href="{{ route('course.create')}}" class="btn btn-primary">New course</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td><b>Course ID</b></td>
                    <td><b>Teachers Name</b></td>
                    <td><b>Teachers Email</b></td>
                    <td><b>Published By</b></td>
                    <td><b>Course Link</b></td>
                    <td><b>Actions</b></td>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{$course->course_id}}</td>
                    <td>{{$course->teacher}}</td>
                    <td>{{$course->teachers_mail}}</td>
                    <td>{{$course->publisher}}</td>
                    <td>{{$course->url}}</td>

                    <td>
                        <a href="{{ route('course.edit',$course->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('course.destroy', $course->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @endsection
