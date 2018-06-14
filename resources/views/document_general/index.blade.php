@extends ('layouts.master')

@section('content')
  <h1 class="title">{{ $category }} Documents</h1>

  <div class="index-list">
    @foreach ($documents_general as $document_general)
      <a href="/document_general/{{ $document_general->id }}">
        <div>
            {{ $document_general->title }}
          <span class="date-text">last modified on {{ $document_general->updated_at }}</span>
        </div>
      </a>
    @endforeach
  </div>
@endsection
