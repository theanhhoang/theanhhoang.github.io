<?php defined('BASEPATH') OR exit('No direct script access allowed');?>




<div style="height:60px; width: 100%;"><div>
<footer class="Footer bg-dark ">

    <div class="footer_contents">
        <p>2019 © TheAnhHoang</p>
    </div>
</footer>



<script src="<?php echo site_url('assets/admin/js/bootstrap.min.js');?>"></script>
<script src="<?php echo site_url('assets/admin/js/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript">
    $(function () {
        $('.datetimepicker').datetimepicker({
            locale: 'en',
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true,
            showTodayButton: true
        });
    });
</script>



<!-- Modal for displaying the messages -->
<!-- Modal -->
<div id="messageModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
        <div class="modal-footer">
            <button type="button" class=" btn-ok btn btn-default" data-dismiss="modal" style="display: none;">OK</button>
        <button type="button" class="btn-close btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php echo $before_body;?>
</body>


</html>
