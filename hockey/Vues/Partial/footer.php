
<footer>
    <div class="footer-gray" style="align-content: center;">
    <div class="footer-custom">
      <div class="footer-lists">
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Contactez-nous</h6>
          <ul class="ftr-links-sub">
            <li>1-800-9hockey</li>
          </ul>
        </div>
        <!--/.footer-list-wrap-->
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Contenu</h6>
          <ul class="ftr-links-sub">
            <li><a href="<?= Util::PATH() ?>">Accueil</a></li>
            <li><a href="<?= Util::PATH() ?>/Calendrier">Calendrier</a></li>
            <li><a href="<?= Util::PATH() ?>/Home/Resultats">Résultats</a></li>
            <li><a href="<?= Util::PATH() ?>/Home/Classement">Classement</a></li>
          </ul>
        </div>
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Commanditaires</h6>
          <ul class="ftr-links-sub">
            <li><a href="http://www.nhl.com">NHL</a></li>
            <li><a href="http://www.lhjmq.qc.ca">LHJMQ</a></li>
            <li><a href="http://www.crosemont.qc.ca">Collège Rosemont</a></li>
            <li><a href="http://www.php.net">PHP</a></li>
          </ul>
        </div>
      <!--/.footer-social-->
      <div class="footer-legal">
        <p>&copy; www.tournoihockey.com. Tous droits réservés | <a href="https://www.cafdn.org/for-youth/covid-19-youth-support-fund/">Aidez à combattre le Covid-19</a></p>
        <p>Alain pis Alex : represent 288!</p>        
      </div>
    </div>
  </div>
  </div>     
</footer>

<style>
    body,
html {
  margin: 0;
  padding: 0;
}

.hidden {
  display: none;
}

.footer-gray {
  background-color: #EFEFEF;
  width: 100%;
}

.footer-custom {
  color: #888;
  font: normal normal 12px/1.4 "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  max-width: 1008px;
  box-sizing: border-box;
  margin: 0 auto;
  padding: 24px;
}

.footer-custom:after {
  display: table;
  clear: both;
  content: "";
}

.footer-lists:after {
  display: table;
  clear: both;
  content: "";
}

.ftr-hdr {
  color: #000;
  font: 22px/1.4 'BebasNeueRegular', BebasNeue, 'Bebas Neue', Arial, sans-serif;
  margin: 1em 0 0;
}

@media only screen and (min-width: 768px) {
  .ftr-hdr {
    font-size: 18px;
  }
}

.footer-list-wrap {
  width: 50%;
  float: left;
  box-sizing: border-box;
}

@media only screen and (min-width: 568px) {
  .footer-list-wrap {
    width: 33.3333%;
  }
}

@media only screen and (min-width: 768px) {
  .footer-list-wrap {
    width: 25%;
  }
}

.ftr-links-sub {
  padding: 0;
  margin: 0;
}

.ftr-links-sub:after {
  display: table;
  clear: both;
  content: "";
}

.ftr-links-sub li {
  display: block;
  list-style-type: none;
  margin: 0;
  padding: 3px 0;
  color: #888;
  font: normal normal 12px "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  text-transform: uppercase;
  /*width: 150px;*/
}

.footer-custom a,
.footer-custom a:link,
.footer-custom a:visited,
.ftr-links-sub li .link {
  text-decoration: none;
  color: #888;
  padding: 5px 0;
  display: block;
}

.footer-custom .footer-legal a {
  display: inline;
}

.footer-custom a:hover,
.footer-custom a:active,
.ftr-links-sub li .link:hover {
  text-decoration: underline;
  color: #888;
  cursor: pointer;
}

@media only screen and (min-width: 768px) {
  .footer-custom a, .footer-custom a:link, .footer-custom a:visited, .ftr-links-sub li .link {
    padding: 0;
  }
}
/* BEGIN EMAIL CAPTURE STYLES*/

.footer-email {
  text-align: center;
}

#ftrEmailForm {
  height: 44px;
}

#ftrEmailForm .error {
  display: none;
  color: red;
  text-align: left;
}

#ftrEmailForm #ftrEmailInput {
  background: none repeat scroll 0 0 #FFF;
  border: 1px solid #D6D6D6;
  box-sizing: border-box;
  color: #888;
  float: left;
  font: normal normal 14px/1.4 "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  padding: 5px;
  width: 70%;
  height: 100%;
}

#ftrEmailForm #ftrEmailInput:hover {
  border: 1px solid #888;
}

#ftrEmailForm #ftrEmailInput:focus {
  border: 1px solid #ef9223;
  outline: #ef9223 auto 5px;
}

#ftrEmailForm .button {
  width: 30%;
  height: 100%;
  padding: 5px;
  float: left;
  border: 1px solid #DFDFDF;
  box-sizing: border-box;
  color: #000;
  font: normal bold 18px/1 BebasFamily, BebasNeueRegular, "Bebas Neue", Helvetica, Arial, sans-serif;
  text-align: center;
  text-transform: uppercase;
  background: #FFF;
  background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #e1e1e1));
  background: -webkit-linear-gradient(top, white 0, #e1e1e1 100%);
  background: -moz-linear-gradient(top, white 0, #e1e1e1 100%);
  background: -ms-linear-gradient(top, white 0, #e1e1e1 100%);
  background: -o-linear-gradient(top, white 0, #e1e1e1 100%);
  background: linear-gradient(to bottom, white 0, #e1e1e1 100%);
  cursor: pointer;
  vertical-align: middle;
  outline: none;
}

#ftrEmailForm .button:hover,
#ftrEmailForm .button:active {
  background: black;
  color: #FFF;
  outline: none;
}
/* BEGIN SOCIAL STYLES*/

.footer-social {
  text-align: center;
}

.footer-social ul {
  padding: 0;
  display: inline-block;
  list-style-type: none;
}

.footer-social ul:after {
  display: table;
  clear: both;
  content: "";
}

.footer-social li {
  float: left;
  margin: 0 15px 0 0;
  padding: 0;
}

@media only screen and (min-width: 768px) {
  .footer-lists {
    width: 100%;
  }
  .footer-email {
    width: 50%;
    float: left;
    text-align: left;
  }
  .footer-social {
    width: 45%;
    margin-left: 5%;
    float: left;
    text-align: left;
  }
}

@media only screen and (min-width: 1008px) {
  .footer-lists {
    width: 66.6666%;
    float: left;
  }
  .footer-email {
    width: 33.3333%;
  }
  .footer-social {
    width: 33.3333%;
    float: right;
    margin-left: 0;
  }
}

.footer-legal {
  padding: 15px 0 0;
  clear: left;
}

.footer-payment {
  text-align: center;
}

@media only screen and (min-width: 768px) {
  .footer-legal {
    width: 66.6666%;
    float: left;
  }
  .footer-payment {
    width: 33.3333%;
    float: left;
  }
}

@media only screen and (min-width: 1008px) {
  .footer-payment {
    text-align: left;
  }
}

.footer-payment ul {
  padding: 0;
  display: inline-block;
  list-style-type: none;
}

.footer-payment ul li {
  display: inline-block;
  margin: 0 6px;
}

@media only screen and (min-width: 1008px) {
  .footer-payment ul li.ftr-stella {
    margin-left: 0;
  }
}

.ftr-bbb span,
.ftr-stella span {
  background-image: url("http://cache1.artprintimages.com/images/jump_pages/rebrand2/images/subnav2.png");
  background-repeat: no-repeat;
  background-color: transparent;
  cursor: pointer;
  display: inline-block;
  height: 36px;
  margin: 0;
  padding: 0;
}

.ftr-bbb span {
  background-position: -339px -8px;
  width: 96px;
}

.ftr-stella span {
  background-position: -339px -107px;
  width: 57px;
}
    </style>