@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Course</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('course.update', $course->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">                   
                <label for="course_id">Course ID:</label>
                <input type="text" class="form-control" name="first_name" value={{ $course->course_id }} />
            </div>

            <div class="form-group">
                <label for="teacher">Teacher Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $course->teacher }} />
            </div>

            <div class="form-group">
                <label for="teachers_mail">Teachers Email:</label>
                <input type="text" class="form-control" name="email" value={{ $course->teachers_mail }} />
            </div>
            <div class="form-group">
                <label for="publisher">Published From:</label>
                <input type="text" class="form-control" name="city" value={{ $course->publisher }} />
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="text" class="form-control" name="country" value={{ $course->url }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>
</div>
@endsection