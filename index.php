<html>
  <head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script type="text/javascript" src="main.js"></script>
  </head>
  <body>
        <div id="main" ng-cloak="" class="buttondemoBasicUsage"  ng-controller="myProfileCtrl"  ng-cloak  ng-app="myProfile">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-md-3">
                <div id="profile" class="clearfix">
                  <img src="{{myPicture}}" alt="Rommel's profile picture">
                  <div class="name">{{profileName}}</div>
                  <div class="profile_description">Front-end Developer</div>
                  <div class="availability">Available for work</div>
                </div>
              </div>
              <div class="col-sm-8 col-md-9">
                <nav>
              <span ng-click = 'alertMe()' value = 'myPersonalInformation'>Personal Information</span>
                  <span ng-click = 'showSkills()' class = 'skil' value = 'mySkills'>Skills</span>
                  <span ng-click = '' value = ''>Trivia</span>
                  <span ng-click = 'showContacts()' value = 'myContacts'>Contact</span>
                  <span ng-click = '' value = ''>Git Repositories</span>
                </nav>
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-2 col-md-8">
                    <br></br>
                    <p>{{myBio}}</p>
                    <br></br>
                    <md-button ng-click = 'search()' class="btn btn-contact scroll">Repositories</md-button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<md-button href="#contact-me" class="btn btn-contact scroll">Get in contact</md-button>
                <ul ng-repeat="data in datas">
                <li><md-button href={{data.url}} target="blank" ng-click = "viewContents()" style="color: #f4f6f9">{{data.name}}</md-button>

        <!--           <ul ng-repeat="info in infos">
                    <li>
                      <md-button style="color: #f4f6f9">{{info.name}}</md-button>
                    </li>
                  </ul> -->
                  </li>
                </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Skills Part-->
        <div id="skills">
          <div class="container" id="skills-card">

            <div class="row">
              <div class="col-sm-2 col-xs-6">
                <img src="http://cboom.eu/img/html5.png" alt="HTML5">
              </div>
              <div class="col-sm-2 col-xs-6">
                <img src="http://cboom.eu/img/css3.png" alt="CSS3">
              </div>
              <div class="col-sm-2 col-xs-6">
                <img src="http://cboom.eu/img/sass.png" alt="Sass">
              </div>
              <div class="col-sm-2 col-xs-6">
                <img src="http://cboom.eu/img/js.png" alt="JavaScript">
              </div>
              <div class="col-sm-2 col-xs-6 ">
                <img src="http://cboom.eu/img/jQuery.png" alt="jQuery">
              </div>
              <div class="col-sm-2 col-xs-6 ">
                <img src="http://cboom.eu/img/angularjs.png" alt="Angular JS">
              </div>
              <div class="col-sm-2 col-xs-6">
                <img src="http://cboom.eu/img/grunt.png" alt="Grunt">
              </div>
              <div class="col-sm-2 col-xs-6">
                <img src="http://cboom.eu/img/git.png" alt="Git">
              </div>
             <div class="col-sm-2 col-xs-6">
                <img src="https://raw.githubusercontent.com/ServiceStack/Assets/master/img/wikis/vb-header.png" alt="Visual Basic">
              </div>
              <div class="col-sm-2 col-xs-6">
                <img src="https://ds1hty5qgiz73.cloudfront.net/wp-content/uploads/2014/04/nodejs.png" alt="Node J">
              </div>
               <div class="col-sm-2 col-xs-6">
                <img src="http://www.freepngimg.com/download/java/7-2-java-png.png" alt="Java">
              </div>
              <div class="col-sm-2 col-xs-6">
                <img src="http://cboom.eu/img/photoshop.png" alt="Photoshop">
              </div>
            </div>
          </div>
        </div>
        <!--End of Skills Part-->


        <!--Contact Part-->
        <div id="contact-me">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 contacts">
                <h2>Contact me</h2>
                <p> Currently looking to join a productive team and develop amazing projects. </p>
                <p> If you have a job that requires my skill set, please get in touch.</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i>+63927 705 8023</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="https://mail.google.com/mail/u/0/#inbox" class="email" target = "blank" >m.rommellagurin@gmail.com</a></p>

              </div>
              <div class="col-sm-6">
                <form id="contactForm2" class="form-horizontal" role="form">
                  <input class="form-control col-sm-6" id="contactName" placeholder="Your name .." type="text">
                  <input class="form-control col-sm-6" id="contactEmail" placeholder="Your email .." type="email">
                  <textarea class="form-control" rows="5" id="message" placeholder="Message ..."></textarea>
                  <button id="submit-form2" type="submit" class="btn btn-contact">Send message</button>
                  <div id="status2">
                    <span id="msgSubmit2">Your message was sent. Thank you!</span>
                  </div>
                </form>
              </div>
            </div>
            <div class="abs_border"></div>
          </div>

          <footer>
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  2019 &copy Rommel Lagurin. Front-end development.
                </div>
                <div class="col-sm-6"></div>
              </div>
            </div>
          </footer>
        </div>
      <!--Contact Part-->
</body>
</html>
