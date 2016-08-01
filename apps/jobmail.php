<?php include '../base.php' ?> 
<?php startblock('page') ?>
    <link href="css/MetroJs.css" rel="stylesheet" type="text/css" />
    <div id="myFlipList" class="cobalt tile-group" data-initdelay="500" data-mode="flip-list" data-delay="3000">
        <div class="live-tile two-wide">
            <div>
                <!-- Put images or other content here -->
            </div>
            <div>fffff
                <!-- Put images or other content here -->
            </div>
        </div>
        <div class="live-tile exclude red">
            <div>
                <p>excluded</p>
            </div>
        </div>
        <div class="live-tile green">
            <div>ex
                <!-- Put images or other content here -->
            </div>
            <div>
                <!-- Put images or other content here -->
            </div>
        </div>
        <div class="live-tile mango">
            <div>
                <!-- Put images or other content here -->
            </div>
            <div>
                <!-- Put images or other content here -->
            </div>
        </div>  
    </div>

<script type="text/javascript" src="js/MetroJs.js"></script>
<script>
    $(document).ready(function(){
        // FlipList triggerDelay
        $("#myFlipList").liveTile({
            tileSelector: '>div:not(.exclude)',
            alwaysTrigger: true,
            triggerDelay: function(idx) {
                return idx * 250;
            }
        });
    });
</script>

<?php endblock() ?>