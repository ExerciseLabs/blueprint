@extends('common.template')

@section('heading')
    All files
@stop

@section('content')
<div class="box box-primary">
    <div class="box-body no-padding">
        @if( count($files) === 0 )
            There are no files.
        @else
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>File Name</th>
                <th>Date uploaded</th>
                <th>Project</th>
                <th>
                    --
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($files as $file)
                <tr>
                    <td>{{ $file->original_name }}</td>
                    <td>{{ $file->created_at }}</td>
                    <td>{{ $file->project->name }}</td>
                    <td>
                        <a href="{{ URL::to( '/download/' . $file->fileName)  }}" target="_blank">
                            Download
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            @endif
        </table>
    </div>
</div>
@stop
