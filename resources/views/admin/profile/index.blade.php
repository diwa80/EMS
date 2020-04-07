@extends('admin.layouts.app')

@section('css')

@endsection

@section('content')

<div class="row">
                  <div class="col-md-9">
                      <section class="card">
                          <div class="cover-photo">
                              <div class="fb-timeline-img">
                                  <img src="img/b.jpg" alt="">
                              </div>
                              <div class="fb-name">
                                  <h2><a href="#"> {{ Auth::user()->name }}</a></h2>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="profile-thumb">
                              <img alt="" src="{{asset(Auth::user()->avatar)}}"  width ="60px" height ="40px";>
                              </div>
                              <a href="#" class="fb-user-mail"> {{ Auth::user()->email }}</a>
                          </div>
                      </section>

                      

                  </div>
                  <!-- <div class="col-md-3">
                      <div class="fb-timeliner">
                          <h2 class="recent-highlight">Recent</h2>
                          <ul>
                              <li class="active"><a href="#">December</a></li>
                              <li><a href="#">November</a></li>
                              <li><a href="#">October</a></li>
                              <li><a href="#">September</a></li>
                              <li><a href="#">August</a></li>
                              <li><a href="#">July</a></li>
                              <li><a href="#">June</a></li>
                              <li><a href="#">May</a></li>
                              <li><a href="#">April</a></li>
                              <li><a href="#">March</a></li>
                              <li><a href="#">February</a></li>
                              <li><a href="#">January</a></li>
                          </ul>
                      </div>
                      <!-- <div class="fb-timeliner">
                          <h2>2012</h2>
                          <ul>
                              <li><a href="#">August</a></li>
                              <li><a href="#">July</a></li>
                              <li><a href="#">June</a></li>
                              <li><a href="#">May</a></li>
                              <li><a href="#">April</a></li>
                              <li><a href="#">March</a></li>
                              <li><a href="#">February</a></li>
                              <li><a href="#">January</a></li>
                          </ul>
                      </div>

                      <div class="fb-timeliner">
                          <h2>2011</h2>
                          <ul>
                              <li><a href="#">May</a></li>
                              <li><a href="#">April</a></li>
                              <li><a href="#">March</a></li>
                              <li><a href="#">February</a></li>
                              <li><a href="#">January</a></li>
                          </ul>
                      </div> -->
                  <!-- </div>
              </div> --> 

              @endsection