@extends("layouts.app")

@section('content')

    @if($contacts->count()==0)

        <div class="text-danger text-center">
            <h4>You haven't Received any email yet. </h4>
        </div>
    @else
        @foreach($contacts as $contact)
            <div class="py-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            From : {{$contact->email}} ,{{$contact->created_at->diffForHumans()}}
                            <div class="pull-right">
                                @if($contact->read)
                                    <a href="{{route('contact.delete',['id'=>$contact->id])}}" class="btn btn-danger">Delete</a>
                                @else
                                    <a href="{{route('contact.read',['id'=>$contact->id])}}" class="btn btn-primary">Mark As Read</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>{{$contact->name}}</h5>

                        <div class="form-group">
                            <p>{{$contact->text}}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="{{route('contact.reply')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" readonly="readonly" value="{{$contact->email}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Mail Subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="text" class="summernote" cols="30" rows="10"></textarea>
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
            </div>
        @endforeach

        {{$contacts->links()}}





    @endif

@endsection
