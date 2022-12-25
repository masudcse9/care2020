@extends('backend.layouts.master')
@section('title','Service User Management')
@section('content')


<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
    </li>  
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        
        This is for home
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">This is for profile</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">This is for contact</div>
</div>

<form action="{{ route('backend.saveSettings') }}" method="post">
    @csrf
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">Settings Item</th>
                <th scope="col" class="text-center">Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-center">What is Setting</th>
                <td class="text-center">
                    <input type="text" name="company_name" id="">
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">What is what</th>
                <td class="text-center">
                    <input type="text" name="company_profile" id="">
                </td>
            </tr>
        </tbody>
    </table>

    <button type="submit" class="textcenter btn btn-success">submit</button>
</form>
@endsection