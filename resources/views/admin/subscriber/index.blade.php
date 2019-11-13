@extends("layouts.app")

@section('content')

    @if($subscribers->count() == NULL)

        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="text-danger">
                        Alert
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center text-danger">
                        <h5>No Subscriber found</h5>
                    </div>
                </div>
            </div>
        </div>

        @else

        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Mail all Subscriber
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('subscribe.mail')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Mail Subject" class="form-control" value="{{old('subject')}}">
                    </div>
                    <div class="form-group">
                        <textarea name="text" class="summernote" cols="30" rows="10" >{{old('text')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Attachments: </label><br>
                        <input type="file" multiple="multiple" name="file[]" id="">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <div class="py-3">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        All Subscriber
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subscribers as $subscriber)
                                <tr>
                                    <td>{{$subscriber->fname}}</td>
                                    <td>{{$subscriber->email}}</td>

                                    <td><a href="{{route('subscribe.destroy',['id'=>$subscriber->id])}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach

                        </tbody>
                    </table>
                    {{$subscribers->links()}}
                </div>
            </div>
        </div>

    @endif
    @endsection
