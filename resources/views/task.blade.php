@extends('layout.app')
@include('layout.sidebar')
@section('Content')
<section class="content">
    <section class="content-header">	
        <div> 
        </div>				
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Assign Task</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{route('dashboard.show')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
          <Form action="{{route('task.submit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">								
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Title">	
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea type="text" name="description" id="description" class="form-control" cols="6" rows="1"></textarea>
                                <p></p>
                            </div>
                        </div>	
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user_id">Assign To</label>
                                <Select name="user_id" id="user_id" class="form-control">
                                   <option value="1">Select</option>
                                   @if ($user->isNotEmpty())
                                   @foreach ($user as $data)
                                   <option value="{{$data->id}}">{{$data->name}}</option>   
                                   @endforeach
                                   @endif
                                </Select>
                            </div>
                        </div>							
                    </div>
                </div>							
            </div>
            <div class="pb-5 pt-3">
                <button type="submit" name="submit" class="btn btn-primary">Create</button>
                <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
          </Form>  
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
</section>