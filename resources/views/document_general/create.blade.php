@extends('layouts.master')

@section ('content')
  <h1 class="title">General Creation Form</h1>

  <div class="form-card">
    <form method="POST" action="/document_general">
      @csrf

      <label for="title">Title</label>
      <div>
        <input id="title" name="title" value="{{ old('title') }}" required autofocus>
      </div>
      <label for="purpose">Purpose</label>
      <div>
        <input id="purpose" name="purpose" value="{{ old('purpose') }}" required>
      </div>
      <label for="process">Process</label>
      <div>
        <textarea id="process" name="process" rows="14" value="{{ old('process') }}" required></textarea>
      </div>
      <label for="troubleshooting">Troubleshooting Tips</label>
      <div>
        <textarea id="troubleshooting" name="troubleshooting" rows="10" value="{{ old('process') }}" required></textarea>
      </div>
      <button type="submit">
          Submit
      </button>
    </form>
  </div>
@endsection
