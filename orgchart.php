<link href="css/orgchart.css" rel="stylesheet" type="text/css" />
<?php include '_partials/head.html';?>
<?php include '_partials/nav.html';?>

<div id="orgchart" class="content">
  <h1>Organization Chart</h1>
  <figure class="org-chart cf">
    <ul class="administration">
      <li>                  
        <ul class="director">
          <li>
            <a href="#"><span>Director</span></a>
            <ul class="subdirector">
              <li><a href="#"><span>Assistante Director</span></a></li>
            </ul>
            <ul class="departments cf">                             
              <li><a href="#"><span>Administration</span></a></li>
              
              <li class="department dep-a">
                <a href="#"><span>Department A</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>Section A1</span></a></li>
                  <li class="section"><a href="#"><span>Section A2</span></a></li>
                  <li class="section"><a href="#"><span>Section A3</span></a></li>
                  <li class="section"><a href="#"><span>Section A4</span></a></li>
                  <li class="section"><a href="#"><span>Section A5</span></a></li>
                </ul>
              </li>
              <li class="department dep-b">
                <a href="#"><span>Department B</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>Section B1</span></a></li>
                  <li class="section"><a href="#"><span>Section B2</span></a></li>
                  <li class="section"><a href="#"><span>Section B3</span></a></li>
                  <li class="section"><a href="#"><span>Section B4</span></a></li>
                </ul>
              </li>
              <li class="department dep-c">
                <a href="#"><span>Department C</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>Section C1</span></a></li>
                  <li class="section"><a href="#"><span>Section C2</span></a></li>
                  <li class="section"><a href="#"><span>Section C3</span></a></li>
                  <li class="section"><a href="#"><span>Section C4</span></a></li>
                </ul>
              </li>
              <li class="department dep-d">
                <a href="#"><span>Department D</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>Section D1</span></a></li>
                  <li class="section"><a href="#"><span>Section D2</span></a></li>
                  <li class="section"><a href="#"><span>Section D3</span></a></li>
                  <li class="section"><a href="#"><span>Section D4</span></a></li>
                  <li class="section"><a href="#"><span>Section D5</span></a></li>
                  <li class="section"><a href="#"><span>Section D6</span></a></li>
                </ul>
              </li>
              <li class="department dep-e">
                <a href="#"><span>Department E</span></a>
                <ul class="sections">
                  <li class="section"><a href="#"><span>Section E1</span></a></li>
                  <li class="section"><a href="#"><span>Section E2</span></a></li>
                  <li class="section"><a href="#"><span>Section E3</span></a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>   
      </li>
    </ul>           
  </figure>
</div>

<?php include '_partials/foot.html';?>
