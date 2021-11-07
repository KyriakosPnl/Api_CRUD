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
            @method('PATCH') 
            @csrf
            <div class="form-group">                   
                <label for="course_id">Course ID:</label>
                <input type="text" class="form-control" name="course_id" value={{ $course->course_id }} />
            </div>

            <div class="form-group">
                <label for="teacher">Teachers Name:</label>
                <input type="text" class="form-control" name="teacher" value={{ $course->teacher }} />
            </div>

            <div class="form-group">
                <label for="teachers_mail">Teachers Email:</label>
                <input type="text" class="form-control" name="teachers_mail" value={{ $course->teachers_mail }} />
            </div>
            <div class="form-group">
                <label for="publisher">Published From:</label>
                <input type="text" class="form-control" name="publisher" value={{ $course->publisher }} />
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="text" class="form-control" name="url" value={{ $course->url }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>
</div>
@endsection