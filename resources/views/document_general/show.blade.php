@extends ('layouts.master')

@section('content')
  <h1 class="title">General Document: {{ $document_general->title }}</h1>

  <div class="show-document-card">
    <h2>Purpose</h2>
    <p>{{ $document_general->purpose }}</p>
    <hr>
    <h2>Process</h2>
    <p>{{ $document_general->process }}</p>
    <hr>
    <h2>Troubleshooting Tips</h2>
    <p>{{ $document_general->troubleshooting }}</p>
  </div>

@endsection
