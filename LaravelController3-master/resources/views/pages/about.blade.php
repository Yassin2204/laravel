@extends('layouts.index')

@section("content")
@include("partial.header")
    <section class="page-section about-heading">
        <div class="container">
          <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
          <div class="about-heading-content">
            <div class="row">
              <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="bg-faded rounded p-5">
                  <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">{{$varAbout[0]->titre}}</span>
                    <span class="section-heading-lower">{{$varAbout[0]->titreSecond}}</span>
                  </h2>
                  <p>{{$varAbout[0]->texte}}</p>
                  <p class="mb-0">{{$varAbout[0]->texteSecond}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@include("partial.footer")
@endsection
