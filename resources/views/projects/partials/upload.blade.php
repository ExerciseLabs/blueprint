{!! Form::open(
    array(
        'route' => 'file.store',
        'action' => 'FileuploadController@store',
        'files' => true
        )
      )
   !!}
<input type="hidden" value="{{ $project->id  }}" name="prj_id" />
{!! Form::file('file', null) !!}
{!! Form::submitButton('Upload') !!}

{!! Form::close() !!}