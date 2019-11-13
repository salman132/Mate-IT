@extends("layouts.app")


@section('content')
    @if($settings == NULL)
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Settings
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('admin.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Website Title</label><br>
                    <input type="text" name="title" class="form-control" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label>Phone</label><br>
                    <input type="number" name="phone" class="form-control" value="{{old('phone')}}">
                </div>
                <div class="form-group">
                    <label>Description</label><br>
                    <textarea name="description" id="summernote" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="SAVE" class="btn btn-primary">
                </div>


            </form>
        </div>
    </div>
        @else
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Settings
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.update',$settings->id)}}" method="post">
                    @method('PUT')
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Website Title</label><br>
                        <input type="text" name="title" class="form-control" value="{{$settings->title}}">
                    </div>
                    <div class="form-group">
                        <label>Phone</label><br>
                        <input type="number" name="phone" class="form-control" value="{{$settings->phone}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label><br>
                        <textarea name="description" class="summernote" cols="30" rows="10" class="form-control">{{$settings->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="update" class="btn btn-primary">
                    </div>


                </form>
            </div>
        </div>
    @endif

    @endsection
