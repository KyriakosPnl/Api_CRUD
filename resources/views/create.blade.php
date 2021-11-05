@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Course</h1>
  <div>
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
    
      <form method="post" action="{{ route('course.store') }}">
          @csrf
          <div class="form-group">    
              <label for="course_id">Course ID:</label>
              <input type="text" class="form-control" name="course_id"/>
          </div>

          <div class="form-group">
              <label for="teacher">Teacher Name:</label>
              <input type="text" class="form-control" name="teacher"/>
          </div>

          <div class="form-group">
              <label for="teachers_mail">Teachers Email:</label>
              <input type="text" class="form-control" name="teachers_mail"/>
          </div>
          <div class="form-group">
              <label for="publisher">Published From:</label>
              <input type="text" class="form-control" name="publisher"/>
          </div>
          <div class="form-group">
              <label for="url">URL:</label>
              <input type="text" class="form-control" name="url"/>
          </div>
                                
          <button type="submit" class="btn btn-primary-outline">Add course</button>
      </form>
  </div>
</div>
</div>
@endsection