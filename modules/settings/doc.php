<?php include '../../base4.php' ?>
<?php startblock('page-title') ?>
Document
<?php endblock() ?>

<?php startblock('page-body');?>
<div class="row row-gap">
    <div class="col-sm-3">
      <nav id="doc-nav">
          <ul class="nav doc-menu affix-top" data-spy="affix">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li class="">
              <a class="scrollto" href="#overview-section">Getting Started</a>
              <ul class="nav doc-sub-menu">
                <li class="">
                  <a class="scrollto" href="#restapi-section">REST API’s</a>
                </li>
                <li class="">
                  <a class="scrollto" href="#Authentication-section">Authentication</a>
                </li>
                <li class="">
                  <a class="scrollto" href="#sdk-section">SDK</a>
                </li>
                <li>
                  <a class="scrollto" href="#versioning-section">Versioning</a>
                </li>
                <li>
                  <a class="scrollto" href="#protocols-section">Protocols</a>
                </li>
                <li class="">
                  <a class="scrollto" href="#rate-section">Rate limiting</a>
                </li>
              </ul>
              <!--//nav-->
            </li>
            <li>
              <a class="scrollto" href="#code-section">API Definition</a>
            </li>
            <li>
              <a class="scrollto" href="#code-section">API Key</a>
            </li>
            <li>
              <a class="scrollto" href="#code-section">FAQ</a>
            </li>
            <li>
              <a class="scrollto" href="#code-section">Blog</a>
            </li>
          </ul>
          <!--//doc-menu-->
        </nav>
    </div>
    <div class="col-sm-9">
      <div class="pu-box">
          <section id="overview-section" class="doc-section">
            <h2 class="section-title">Overview</h2>
            <div class="section-block">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat
                <a href="#">link example</a>
                aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue.
              </p>
            </div>
          </section>
          <!--//doc-section-->
          <section id="restapi-section" class="doc-section">
            <h2 class="section-title">REST API’s</h2>
            <div id="step1" class="section-block">
              <h3 class="block-title">Step One</h3>
              <p>PageUp provides programmatic access to it application platform via a suite of REST API’s. PageUp’s REST API’s receive and respond to requests using JSON structured data in UTF8 format.
              </p>
              <div class="code-block">
                <h6>Request</h6>
                <p>
                  <code>/Employee/{1}GET
                    <br>/Employee/{1} HTTP/1.1
                  </code>
                </p>

              </div>
              <!--//code-block-->
            </div>

          </section>
          <!--//doc-section-->
          <section id="Authentication-section" class="doc-section">
            <h2 class="section-title">Authentication</h2>
            <div class="section-block">
              <p>PageUp uses the OAuth 2.0 protocol to authenticate consumers to it’s API’s. PageUp clients will require a Login to the developer portal in order to setup OAuth client Id’s for generation of tokens.
              </p>
              <p>To sign into the Developer portal please speak with your company's HR super user who can invite you to create an account. HR super users should refer to the “Setting Up Developer Accounts” article in the knowledge portal for more information.</p>
            </div>
          </section>
          <section id="sdk-section" class="doc-section">
            <h2 class="section-title">SDK</h2>
            <div class="section-block">
              <p>
                PageUp offers an SDK in a number of popular languages to assist in the creation of consumer applications integrations or services.</p>
            </div>
          </section>
          <section id="versioning-section" class="doc-section">
            <h2 class="section-title">Versioning</h2>
            <div class="section-block">
              <p>PageUp prefers to limit the amount of versions of it’s API’s in production by incrementally upgrading and adding to it’s API in a non breaking fashion. Subsequently PageUp will add new JSON fields, add HTTP headers, or change ordering of fields on
                a regular basis. These type of changes should are expected to be non breaking changes to any downstream integrations. Subsequently, developers programming against a PageUp REST Api should not reference properties by order, or perform any strict
                validation of PageUp’s returns schema.</p>
              <p>Having said this, from time to time PageUp does need to version it’s API to allow for a significant change in API structure. PageUp manages version through xxxxxx.
              </p>
              <p>PageUp commits to keeping API versions available for a minimum of ??24?? Months after which time consumers may be required to update to a newer version.
              </p>
            </div>
          </section>
          <section id="protocols-section" class="doc-section">
            <h2 class="section-title">Protocols</h2>
            <div class="section-block">
              <p>
                PageUp only accepts access to it’s API’s over HTTPS protocol using TLS 1.1 or higher. Attempts to access the API with unencrypted HTTP or older HTTPS transport mechanisms will be rejected.</p>
            </div>
          </section>
          <section id="rate-section" class="doc-section">
            <h2 class="section-title">Rate limiting</h2>
            <div class="section-block">
              <p>
                PageUp implements rate limiting on it’s API’s to prevent consumers from accidently causing undue load on the system. If your request rate exceed XXX over a 5 minute period, you will receive XXX HTTP response code until the request rate is dropped.</p>
            </div>
          </section>
        </div>
    </div>
</div>
<?php endblock()?>
