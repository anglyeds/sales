@extends('app')
@section('content')

    <h1>List of photos:</h1>
    
    <table class="table striped">
   @foreach($photos as $photo)
        <tr>
            <td><img class="img-responsive img-thumbnail" src="{{ $photo->get_photo('resource/Thumbnail') }}" width="150" height="100"></td>
            <td>{!! $photo->title !!}</td>
            <td>
                
                {!! Form::open(array('url' => 'photo/' . $photo->id, 'class' => 'pull-right')) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                    <button type="submit" class="btn btn-sm btn-danger">Delete photo</button></form>
                {!! Form::close() !!}

                {!! Form::open(array('url' => 'photo/' . $photo->id, 'class' => 'pull-right')) !!}
                {!! Form::hidden('_method', 'EDIT') !!}
                    <button type="submit" class="btn btn-sm btn-warning">EDIT photo</button></form>
                {!! Form::close() !!}
                

            </td>
                
        </tr>
    @endforeach
    </table>
        
@endsection