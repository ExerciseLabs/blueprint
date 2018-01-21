{!! Form::open(
    array(
        'route' => 'file.get',
        'action' => 'ProjectsController@getFile',
        'files' => true
        )
      )
   !!}
{!! Form::submitButton('Download') !!}

{!! Form::close() !!}