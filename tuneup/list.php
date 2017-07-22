<?php include '../base-app.php';?>
<?php startblock('page-body');?>
<h2>PageUp Idea Hub</h2>
<hr>
<div class="row">
  <div class="col-sm-4">
    <h4>Introduction</h4>
    <p>Reimagine Discovery was a TuneUp idea created by Justin, Daniel, Andrei, Chris L and Chris M.</p>
    <p>The idea is to get feedback on our planned initiatives, roadmap items, and innovations - in realtime, directly from all our end users.</p>
    <p>End Users are engaged, providing insights into our product, see what we’re planning</p>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../../img/preview1.png" width="360" height="298" alt="...">
        </div>
        <div class="item">
          <img src="../../img/report.png" width="360" height="298" alt="...">
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="pu-box">
      <div class="pu-box-content">
        <div class="row">
          <div class="col-sm-10">
            <div class="btn-group">
              <button type="button" class="btn btn-default">Draft</button>
              <button type="button" class="btn btn-default">LIVE</button>
              <button type="button" class="btn btn-default">Retired</button>
            </div>
          </div>
          <div class="col-sm-2 text-right">
            <a href="create" class="btn btn-primary"> Create</a>
          </div>
        </div>
        <div class="table-responsive row-gap">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Title</th>
                <th>Creator</th>
                <th>Status
                </th>
                <th>Actions
                </th>
              </tr>
            </thead>
            <tbody>
                <?php for ($x = 1; $x <= 4; $x++) {?>
                  <tr>
                    <td><a href="#">Idea title goes here <?php echo($x)?></a></td>
                    <td>
                      Alpha Peters
                    </td>
                    <td>
                     <span class="pu-tag pu-tag-green pu-tag-sm"> LIVE </span>
                    </td>
                    <td>
                      <a href="report" class="btn btn-sm btn-default">Report</a>
                      <a href="create" class="btn btn-sm btn-default">Update</a>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">Idea title goes here <?php echo($x)?></a></td>
                    <td>
                      John Smith
                    </td>
                    <td>
                     <span class="pu-tag pu-tag-yellow pu-tag-sm"> DRAFT </span>
                    </td>
                    <td>
                      <a href="create" class="btn btn-sm btn-default">Edit</a>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">Idea title goes here <?php echo($x)?></a></td>
                    <td>
                      Bob Jackson
                    </td>
                    <td>
                     <span class="pu-tag pu-tag-sm"> RETIRED </span>
                    </td>
                    <td>
                      <a href="report" class="btn btn-sm btn-default">Report</a>
                    </td>
                  </tr>
                <?php } ?>
            </tbody>
          </table>
          <nav class="text-center">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
              </li>
              <li class="active">
                <a href="#">1</a>
              </li>
              <li>
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>
                <a href="#">4</a>
              </li>
              <li>
                <a href="#">5</a>
              </li>
              <li>
                <a href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
th{
  font-weight: 700 !important;
}
</style>

<script>
</script>
<?php endblock()?>
