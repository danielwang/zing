<?php include '../../base.php' ?>
    <?php startblock('page-title') ?>
      <h1>Senior Electrical Engineer</h1>
      <h4>Melbourne</h4>
    <?php endblock() ?>
    <?php startblock('page')?>
    <div class="row row-gap">
      <div class="col-sm-4">
        <div class="pu-wizard pu-wizard-vertical">
            <div class="pu-wizard-step complete">
                <a class="pu-wizard-dot" href="#"></a>
                <h5 class="pu-wizard-stepnum">Prefill</h5>
                <div class="pu-wizard-info">Lorem ipsum dolor sit amet.</div>
            </div>
            <div class="pu-wizard-step active">
                <a class="pu-wizard-dot" href="#"></a>
                <h5 class="pu-wizard-stepnum">Personal details</h5>
                <div class="pu-wizard-info">Lorem ipsum dolor sit amet.</div>
            </div>
            <div class="pu-wizard-step disabled">
                <a class="pu-wizard-dot" href="#"></a>
                <h5 class="pu-wizard-stepnum">Residency Status and Employment History</h5>
                <div class="pu-wizard-info">Lorem ipsum dolor sit amet.</div>
            </div>

            <div class="pu-wizard-step disabled">
                <a class="pu-wizard-dot" href="#"></a>
                <h5 class="pu-wizard-stepnum">Education</h5>
                <div class="pu-wizard-info">Lorem ipsum dolor sit amet.</div>
            </div>
            <div class="pu-wizard-step disabled">
                <a class="pu-wizard-dot" href="#"></a>
                <h5 class="pu-wizard-stepnum">Supporting documents</h5>
                <div class="pu-wizard-info">Lorem ipsum dolor sit amet.</div>
            </div>
            <div class="pu-wizard-step disabled">
                <a class="pu-wizard-dot" href="#"></a>
                <h5 class="pu-wizard-stepnum">Diversity</h5>
                <div class="pu-wizard-info">Lorem ipsum dolor sit amet.</div>
            </div>
            <div class="pu-wizard-step disabled">
                <a class="pu-wizard-dot" href="#"></a>
                <h5 class="pu-wizard-stepnum">Submit</h5>
                <div class="pu-wizard-info">Lorem ipsum dolor sit amet.</div>
            </div>
        </div>
      </div>
      <div class="col-sm-6 col-sm-offset-1">
        <div class="pu-panel panel">
             <div class="panel-heading">
                <h4 class="panel-title">Personal details</h4>
            </div>
        		<section class="panel-body">
              <form>
                <div class="form-group">
                  <label>Label</label>

                  <input class="form-control" placeholder="placeholder" type="text" autofocus/>
                  <span class="help-block">(optional)</span>

                </div>
                <div class="form-group">
                  <label>Input with success</label>

                  <input class="form-control" type="text">

                </div>
                <div class="form-group">
                  <label>Input with error</label>

                  <input class="form-control" type="text">

                </div>
                <div class="form-group">
                  <label>Column sizing</label>

                  <div class="row">
                    <div class="col-md-2">
                      <input class="form-control" placeholder="No." type="text">
                    </div>
                    <div class="col-md-4">
                      <input class="form-control" placeholder="Street" type="text">
                      <span class="help-block">Please enter ...</span>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" placeholder="State" type="text">
                      <span class="help-block">Please enter ...</span>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <label>Button addons</label>

                  <div class="input-group">
                    <input class="form-control" type="text">
                    <span class="input-group-btn">
                      <button class="btn" type="button">Action</button>
                    </span>
                  </div>

                </div>
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>Option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Switch</label>

                  <div class="pu-toggle-btn pu-toggle-btn-blue">
                    <label>
                      <input checked="" type="checkbox">
                      <span>Please turn it on</span>
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Radios
                  </label>

                  <div class="radio radio-info">
                    <input checked="" value="option1" id="radio3" name="radio1" type="radio">
                    <label for="radio3">
                      Option one is this and that—be sure to include why it's great
                    </label>
                  </div>
                  <div class="radio radio-info">
                    <input value="option2" id="radio4" name="radio1" type="radio">
                    <label for="radio4">
                      Option two can be something else
                    </label>
                  </div>

                </div>
                <div class="form-group">
                  <label>Inline checkboxes</label>
                  <div>
                    <div class="checkbox checkbox-info checkbox-inline">
                      <input value="option1" id="inlineCheckbox4" class="styled" type="checkbox">
                      <label for="inlineCheckbox4">
                        Inline One
                      </label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-inline">
                      <input checked="" value="option1" id="inlineCheckbox5" class="styled" type="checkbox">
                      <label for="inlineCheckbox5">
                        Inline Two
                      </label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-inline">
                      <input value="option1" id="inlineCheckbox6" class="styled" type="checkbox">
                      <label for="inlineCheckbox6">
                        Inline Three
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Text area</label>

                  <textarea placeholder="say something ..." class="form-control" required=""></textarea>

                </div>
                <div class="form-group">
                  <div class="text-right">
                    <button type="submit" class="btn btn-success">Save and Exit</button>
                    <button type="submit" class="btn btn-primary">Next
                      <i class="fa fa-chevron-right"/></i>
                  </button>
                </div>
              </form>

        		</section>
        </article>
      </div>
    </div>

<?php endblock()?>
