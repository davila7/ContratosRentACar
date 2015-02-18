
<!doctype html>
<html itemscope itemtype="http://schema.org/WebPage">
  <head>
    <meta charset="utf-8">
    <title itemprop="name">Google Maps API - More Than A Map</title>
    <meta property="og:image" itemprop="image" name="thumbnail" content="/images/thumbnail.png">
    <meta name="description" content="The Google Maps API is more than a map for your apps. Explore demos of unique features that you can use in your apps today!">
    <meta name="google-site-verification" content="TxLP05O9R5F6fPleLT6UqHNx604Krjjm9TGJUpoFljw">
    <link href="//maps.gstatic.com/favicon2.ico" rel="shortcut icon">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,700&subset=all" rel="stylesheet" type="text/css">
    {{ HTML::style('css/screenmap.css') }}
    <!--<link href="/s/screen.css" rel="stylesheet" type="text/css">-->
    <!--[if lte IE 8]>
      <link href="/styles/ie8.css" rel="stylesheet" type="text/css">
    <![endif]-->
    <!--[if lte IE 9]>
      <link href="/styles/ie9.css" rel="stylesheet" type="text/css">
    <![endif]-->
    <script src="//apis.google.com/js/plusone.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?sensor=false&libraries=places,geometry,visualization&v=3.exp&key=AIzaSyB3kJGreQqizzCxAH9zZWcfvL4i7Trox8g"></script>
    <!--<script src="../js/app_bundle.js"></script>-->
    {{ HTML::script('js/bundle.js') }}
  </head>

  <body>
    <div id="wrapper">
      <div class="page" id="page-home">
        <div id="carousel">
          <div id="carousel-panel-wrapper">
            <div id="carousel-panel">
              <div id="carousel-title">
                <h2></h2>
              </div>
              <div id="carousel-body">
                <p id="carousel-decription"></p>
                <a href="#" id="carousel-link"></a>
              </div>
              <div id="carousel-nav">
                <div id="carousel-items"></div>
              </div>
            </div>
          </div>
          <a href="#" id="carousel-prev"></a>
          <a href="#" id="carousel-next"></a>
          <img src="//maps.gstatic.com/mapfiles/google_white.png"
            class="google-logo">
          <div id="heros"></div>
        </div>
      </div>
      <div class="page" id="page-developer-stories">
        <ul class="developer-people">
          <li class="developer-computerlogy"><a href="/developer-stories/computerlogy">Computerlogy</a></li>
          <li class="developer-upandelimited"><a href="/developer-stories/upandelimited">Upande Limited</a></li>
          <li class="developer-ubilabs"><a href="/developer-stories/ubilabs">Ubilabs</a></li>
          <li class="developer-epungo"><a href="/developer-stories/epungo">Epungo</a></li>
          <li class="developer-kekanto"><a href="/developer-stories/kekanto">Kekanto</a></li>
        </ul>

        <div class="back-to-top">
          <div class="g-plusbtn">
            <div class="g-plusone" data-size="small" data-annotation="none"></div>
          </div>
          <a href="/developer-stories">Back to Top</a>
        </div>

        <div id="player">
          <a href="#" id="close-video">Close video</a>
        </div>

        

        <div class="story" id="story-computerlogy">
          <div class="story-content">
            <div class="location">Thailand</div>
            <div class="developer-title">
              <a href="//www.youtube.com/watch?v=4hhfgVvzLH8"
                class="video"><span>Watch video</span></a>
              <h3>Mapping Thailand</h3>
            </div>
            <p>In Bangkok, Thailand we met with the co-founder of Computerlogy,
            Vachara Aemavat. Computerlogy is a Google Maps API development shop.
            Among their many great projects, they have built a store
            locator for Siam Commercial Bank and a viral maps app that helps
            people find high ground during the Thai flood seasons.</p>

            <p><a href="http://www.computerlogy.com">Visit Computerlogy</a></p>
          </div>
        </div>

        <div class="story" id="story-upandelimited">
          <div class="story-content">
            <div class="location">Kenya</div>
            <div class="developer-title">
              <a href="//www.youtube.com/watch?v=_JFRsdNTpSs"
                class="video"><span>Watch video</span></a>
              <h3>Helping Africa's environment</h3>
            </div>
            <p>In Nairobi, Kenya, we met with Mark de Blois and Bernadette Ndege.
            Upande has created a variety of geospatial solutions using Google
            Maps and Earth for a diverse range of business clients, UN
            organizations, Government, Non-Governmental Organizations and the
            public sector. Upande project Virtual Kenya is an online geospatial
            platform to visualize and share data about Kenya.</p>

            <p><a href="http://www.upande.com/">Visit Upande Limited</a></p>
          </div>
        </div>

        <div class="story" id="story-ubilabs">
          <div class="story-content">
            <div class="location">Germany</div>
            <div class="developer-title">
              <a href="//www.youtube.com/watch?v=mpMJ0GVcpOc"
                class="video"><span>Watch video</span></a>
              <h3>Making maps for Germany's biggest brands</h3>
            </div>
            <p>In Hamburg, Germany, a workshop of developers, designers, and
            creative collaborators are hard at work building Google Maps powered
            projects for some of Germany's largest global brands.</p>

            <p><a href="http://www.ubilabs.net/">Visit Ubilabs</a></p>
          </div>
        </div>

        <div class="story" id="story-epungo">
          <div class="story-content">
            <div class="location">Brazil</div>
            <div class="developer-title">
              <a href="//www.youtube.com/watch?v=rMpvrLbB0mA"
                class="video"><span>Watch video</span></a>
              <h3>Helping people find a home in Brazil</h3>
            </div>
            <p>In Sao Paulo, Brazil we met with Epungo founders Andr&eacute;
            Tann&uacute;s and
            Rodrigo Hanashiro. Epungo is real estate startup that is making
            waves in the Brazilian real estate market with their well designed
            site. We met up with the founders at their global headquarters (also
            known as their apartment living room). </p>

            <p><a href="http://www.epungo.com/">Visit Epungo</a></p>
          </div>
        </div>

        <div class="story" id="story-kekanto">
          <div class="story-content">
            <div class="location">Brazil</div>
            <div class="developer-title">
              <a href="//www.youtube.com/watch?v=4VmJd557Ub8"
                class="video"><span>Watch video</span></a>
              <h3>Finding Places in Latin America</h3>
            </div>
            <p>In Sao Paulo, we met with Kekanto co-founder, Alla Kajimoto.
            Kekanto is a popular ratings and recommendations startup based in
            Sao Paulo that serves all of Latin America.</p>

            <p><a href="http://www.kekanto.com/">Visit Kekanto</a></p>
          </div>
        </div>

      </div>
      <div class="page" id="page-learn-more">
        <img src="//maps.gstatic.com/mapfiles/google_white.png"
            class="google-logo">
        <div id="learn-more">
          <h2>Learn more</h2>
          <p>All demos on this site were built using the Google Maps API.
            You can learn more about the Google Maps API by visiting the links
            below, or following #morethanamap on
            <a href="//google.com/+GoogleMapsAPI">Google+</a> and
            <a href="//twitter.com/googlemapsapi">Twitter</a>.
          </p>

          <ul>
            <li>
              <a href="//www.google.com/enterprise/mapsearth/benefits?utm_source=mtam&utm_campaign=mtam">
                <h4>For Business</h4>
                <span>Engage customers and power your business with Google Maps and
                Earth Enterprise</span>
              </a>
            </li>
            <li>
              <a href="//developers.google.com/maps?utm_source=mtam&utm_campaign=mtam">
                <h4>For Developers</h4>
                <span>Get started now. Explore technical documentation for the Google Maps API.</span>
              </a>
            </li>
            <li>
              <a href="//developers.google.com/showcase?utm_source=mtam&utm_campaign=mtam">
                <h4>Showcase</h4>
                <span>View a selection of innovative sites in the Google Maps API ecosystem.</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="page" id="page-demos">
        <div id="modal">
          <a href="#" id="close"></a>
          <div id="modal-content"></div>
        </div>
        <div id="map-container"></div>
        <div id="sv-container"></div>
        <div id="panel">
          <div class="mtam-title">
            <a href="#" id="minimize"></a>
            <div id="panel-title"></div>
          </div>
          <div id="panel-body"></div>
        </div>
        <div id="secondary-panel"></div>
        <div id="tooltip">
          <div id="tooltip-arrow"></div>
          <div id="tooltip-shadow">
            <div id="tooltip-title" class="mtam-title"></div>
            <div id="tooltip-icon"></div>
          </div>
        </div>
        <div id="demos-menu">
          <div id="demos-menu-content">
            <h2>Demos</h2>
            <div id="demos-menu-body">
              <ul>
                <li>
                  <a href="/demos/basemaps">
                    <div class="banner basemaps-banner"></div>
                    <h3>Base Maps</h3>
                  </a>
                  </li>
                <li>
                  <a href="/demos/satellite">
                    <div class="banner satellite-banner"></div>
                    <h3>Satellite</h3>
                  </a>
                </li>
                <li>
                  <a href="/demos/streetview">
                    <div class="banner streetview-banner"></div>
                      <h3>Street View</h3>
                  </a>
                </li>
                <li>
                  <a href="/demos/places">
                    <div class="banner places-banner"></div>
                    <h3>Places</h3>
                  </a>
                </li>
                <li>
                  <a href="/demos/routing">
                    <div class="banner routing-banner"></div>
                    <h3>Routing</h3>
                  </a>
                </li>
                <li>
                  <a href="/demos/visualization">
                    <div class="banner visualization-banner"></div>
                    <h3>Data Visualization</h3>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="nav">
      <div id="nav-wrapper">
        <span id="logo">
          <a href="/"><img alt="Google"
            src="//www.google.com/images/srpr/logo3w.png">
            Maps API</a>
        </span>
        <div id="menu">
          <ul>
            <li id="nav-home" class="first">
              <a class="section" href="/">Home</a>
            </li>
            <li id="nav-demos">
              <span class="section">
              <a href="/demos">Demos</a>
              <div id="demos"></div>
            </li>
            <li id="nav-learn-more">
              <a href="/learn-more" class="section">Learn More</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="content">
      <p id="content-home" itemprop="description">
        The Google Maps API is more than a map for your apps. Explore demos of
        unique features that you can use in your apps today!
      </p>
      <p id="content-basemaps">
        For the last decade, we've obsessed over building great maps&mdash;maps
        that are comprehensive, accurate, and easy to use.
      </p>
      <p id="content-streetview">
        Street View is like visiting a place without being there. Your app can
        also embed fully interactive Google Street View panoramas.
      </p>
      <p id="content-satellite">
        Engage your visitors with vivid imagery. High resolution global
        Satellite and 45&deg; imagery adds a whole new perspective.
      </p>
      <p id="content-places">
        With more than 95 million places globally, served up and quick and fresh,
        the Google Places API adds location context to your apps.
      </p>
      <p id="content-routing">
        In a car, on a bike, on foot, or riding a subway, help users find
        the best route. Use elevation profiles and live traffic to guide the
        way.
      </p>
      <p id="content-visualization">
        Data visualization is at the heart of the Google Maps API. Bring your
        maps to life with symbols, heatmaps, and more.
      </p>
    </div>


    <script type="text/javascript">
      window['_gaq'] = window['gaq'] || [];
      window['_gaq'].push(['_setAccount', 'UA-34797400-1']);

      (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
       })();
     </script>
  </body>
</html>
