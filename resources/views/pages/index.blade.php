@extends('layout.main',['title' => 'ACCUEIL'])

@section('content')
<div id="content" class="no-bottom no-top">
    <div id="top"></div>
    <section id="section-tickets" class="text-light no-top no-bottom">
      <div>
        <div class="center-y fadeScroll text-center relative" data-scroll-speed="4">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="spacer-double"></div>
                <h1 class="big mble-fs" style="color: #000 !important">
                  SITE EN CONSTRUCTION <br /> <span style="font-weight: 300;">Se termine dans</span>
                </h1>
                <div class="spacer-single" style="margin-top:-2.5em;"></div>
                <div class="spacer-single" style="margin-top:-2.5em;"></div>
                <div id="defaultCountdown" class="countdown-s4" style="margin-top:-1.5em;"></div>
                <div class="clearfix" style="margin-top:-1.5em;"></div>
                <div class="spacer-single" style="margin-top:-1.5em;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding: 1.5em">
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="pricing-s1 mb30"style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <div class="top">
              <div style="display: flex;justify-content: center;align-items: center;">
                <figure style="background: #dd9002">
                  <img src="{{asset('images/manel/Fichier 1@100x-8.png')}}" style="margin-top: 1.5em; width: 50px"/>
                </figure>
              </div>
              <h3 style="color: #000 !important; margin-top: 1em">
                COMMUNICATION
              </h3>
            </div>
            <div class="bottom">
              <ul style="color: #000">
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i
                  >Infographie
                </li>
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i
                  >Imprimerie
                </li>
                <li style="visibility: hidden">
                  <i class="icon_check"></i>Veille média sectorielle
                </li>
                <li style="visibility: hidden">
                  <i class="icon_check"></i>Veille média sectorielle
                </li>
                <br />
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="pricing-s1 featured mb30" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <div class="top">
              <div style="display: flex;justify-content: center; align-items: center;">
                <figure style="background: #31018b">
                  <img src="{{asset('images/manel/Fichier 2@100x-8.png')}}" style="margin-top: 1.5em; width: 50px"/>
                </figure>
              </div>
              <h3 style="color: #000 !important; margin-top: 1em">
                MÉDIAS
              </h3>
            </div>
            <div class="bottom">
              <ul style="color: #000">
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i>Rédaction
                  de revue de presse
                </li>
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i>Veille
                  media sectorielle
                </li>
                <li style="visibility: hidden">
                  <i class="icon_check"></i>Veille media sectorielle
                </li>
                <li style="visibility: hidden">
                  <i class="icon_check"></i>Veille media sectorielle
                </li>
                <br />
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="pricing-s1 mb30" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <div class="top">
              <div style="display: flex;justify-content: center;align-items: center;">
                <figure style="background: #f00202">
                  <img src="{{asset('images/manel/Fichier 3@100x-8.png')}}" style="margin-top: 1.5em; width: 50px"/>
                </figure>
              </div>
              <h3 style="color: #000 !important; margin-top: 1em">
                ACCOMPAGNEMENT <br />
                DIGITAL
              </h3>
            </div>
            <div class="bottom">
              <ul style="color: #000">
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i>SMS
                  Marketing
                </li>
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i>Noms de
                  domaine et hébergement web
                </li>
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i
                  >Développement web et mobile
                </li>
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i>Social
                  media management
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="pricing-s1 mb30" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <div class="top">
              <div style=" display: flex;justify-content: center;align-items: center;">
                <figure style="background: #06d560a8">
                  <img src="{{asset('images/manel/Fichier 4@100x-8.png')}}" style="margin-top: 1.5em; width: 50px"/>
                </figure>
              </div>
              <h3 style="color: #000 !important; margin-top: 1em">
                FORNITURE D'EQUIPEMENTS
              </h3>
            </div>
            <div class="bottom">
              <ul style="color: #000">
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i>Papeterie
                </li>
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i>Informatique
                </li>
                <li>
                  <i class="icon_check" style="color: #1a8b49"></i>Nettoyage et propreté
                </li>
                <li style="visibility: hidden;">
                  <i class="icon_check" style="color: #1a8b49"></i>Social media management
                </li><br>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-format" style="display: flex; justify-content: center; align-items: center;" >
        <div class="social-icons big" style="padding: 0em !important;margin-top:-3em;">
          <img src="{{asset('images/manel/logo-AH.png')}}" width="200" style="padding: 0.5em"/>
          <img src="{{asset('images/manel/quick-sms.png')}}" width="130" style="padding: 0.5em; margin-top: -0.7em"/>
          <img src="{{asset('images/manel/logo.png')}}" width="150" style="padding: 0.5em" />
          <img src="{{asset('images/manel/logo-iziloyer-2.png')}}" width="150" style="padding: 0.5em"/>
        </div>
      </div>
    </section>
  </div>
@endsection
