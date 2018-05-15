@extends ('layouts.master')

@section('content')
  @foreach ($documents_general as $document_general)
    {{ $document_general->title }}
  @endforeach
@endsection
