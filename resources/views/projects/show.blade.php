@extends('common.template')

@section('heading')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        @include('projects.partials.upload')
                    </div>
                    <div class="col-md-8 col-md-pull-4">
                        Show Project : {{ $project->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-body no-padding">
            @if( count($files) === 0 )
                Project has no files.
            @else
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Date uploaded</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)
                    <tr>
                        <td>{{ $file->original_name }}</td>
                        <td>{{ $file->created_at }}</td>
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
@endsection
