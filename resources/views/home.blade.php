@extends('layouts.master')

@section('content')
  <h1 class="home-title">ProDocument Management System</h1>
  <h3 class="home-title">ChampSupport Wiki | Written by Walter Proulx</h3>

  <div class="home-row">
    <div class="home-card">
      <a href="https://servicedesk.champlain.edu" class="home-card-title" target="_blank">ServiceDesk</a>
    </div>
    <div class="home-card">
      <a href="https://my.champlain.edu/ad" class="home-card-title" target="_blank">Active Directory</a>
    </div>
  </div>

  <div class="home-row">
    <div class="home-card">
      <a href="https://welcome.champlain.edu/showLogin.cc" class="home-card-title" target="_blank">Champlain Welcome</a>
    </div>
    <div class="home-card">
      <a href="https://my.champlain.edu/" class="home-card-title" target="_blank">My Champlain</a>
    </div>
  </div>

  <div class="home-row">
    <div class="home-card">
      <a href="/document_general/29" class="home-card-title">Phone Extensions</a>
    </div>
    <div class="home-card">
      <a href="#" class="home-card-title">Department Contact</a>
    </div>
  </div>
@endsection
