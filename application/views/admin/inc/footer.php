  </div>
  <!-- /.content-wrapper -->



<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/admin/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/plugins/popper/popper.min.js'); ?>"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/js/adminlte.min.js')?>"></script>
<!-- Ckeditor js -->
<script src="<?= base_url('assets/admin/plugins/ckeditor/ckeditor.js')?>"></script>
<!-- DataTables js -->
<script src="<?= base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/admin/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<!-- File Manager -->
<script src="<?= base_url('assets/admin/plugins/filemanager/scripts/filemanager.min.js')?>"></script>
<script src="<?= base_url('assets/admin/plugins/tagsinput/jquery.tagsinput.min.js')?>"></script>
<script src="<?= base_url('assets/admin/plugins/ckeditor/ckeditor.js')?> "></script>
<script>

$(function () {
$("#datatable").DataTable({
"scrollX": true
});

$("#datatable1").DataTable({
"scrollX": true,
dom: 'Bfrtip',
buttons: [
'copy', 'csv', 'excel', 'pdf', 'print'
]
});
});
</script>
<script src="<?php echo site_url('assets/plugins/fancybox/jquery.min.js');?>"></script>
<script src="<?php echo site_url('assets/plugins/fancybox/jquery-migrate-1.0.0.js');?>"></script>

<script type="text/javascript" src="<?php echo site_url('assets/plugins/fancybox/jquery.mousewheel-3.0.4.pack.js');?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/plugins/fancybox/jquery.fancybox-1.3.4.pack.js');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/fancybox/jquery.fancybox-1.3.4.css');?>" media="screen" />
<script type="text/javascript">
$(document).ready(function () {
/*
*   Examples - images
*/
$('a.iframe-btn').fancybox({'width': 880, 'height': 570, 'type': 'iframe', 'autoScale': false});

});
</script>
	
<script type="text/javascript">
	$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
    <script>
	    $("body").on("click", ".pagination a", function() {
	        var url = $(this).attr('href');
	        $("#the-content").load(url);
	        return false;
	    });
	</script>
	<script>
    var ckEditor = document.getElementById('ckEditor');
    if (ckEditor != undefined && ckEditor != null) {
        CKEDITOR.replace('ckEditor', {
            language: 'en',
            filebrowserBrowseUrl: 'path',
            removeButtons: 'Save',
        });
    }
	var ckEditor = document.getElementById('ckEditor');
    if (ckEditor != undefined && ckEditor != null) {
        CKEDITOR.replace('ckEditor1', {
            language: 'en',
            filebrowserBrowseUrl: 'path',
            removeButtons: 'Save',
        });
    }

    function selectFile(fileUrl) {
        window.opener.CKEDITOR.tools.callFunction(1, fileUrl);
    }
    CKEDITOR.on('dialogDefinition', function (ev) {
            var editor = ev.editor;
            var dialogDefinition = ev.data.definition;

            // This function will be called when the user will pick a file in file manager
            var cleanUpFuncRef = CKEDITOR.tools.addFunction(function (a) {
                $('#ck_file_manager').modal('hide');
                CKEDITOR.tools.callFunction(1, a, "");
            });
            var tabCount = dialogDefinition.contents.length;
            for (var i = 0; i < tabCount; i++) {
                var browseButton = dialogDefinition.contents[i].get('browse');
                if (browseButton !== null) {
                    browseButton.onClick = function (dialog, i) {
                        editor._.filebrowserSe = this;
                        var iframe = $('#ck_file_manager').find('iframe').attr({
                            src: editor.config.filebrowserBrowseUrl + '&CKEditor=body&CKEditorFuncNum=' + cleanUpFuncRef + '&langCode=en'
                        });
                        $('#ck_file_manager').appendTo('body').modal('show');
                    }
                }
            }

        }
    );
</script>

<?php if (isset($lang_search_column)): ?>
    <script>
        var table = $('#cs_datatable_lang').DataTable({
            dom: 'l<"#table_dropdown">frtip',
            "order": [[0, "desc"]],
            "aLengthMenu": [[15, 30, 60, 100], [15, 30, 60, 100, "All"]]
        });
        //insert a label
        $('<label class="table-label"><label/>').text('Language').appendTo('#table_dropdown');

        //insert the select and some options
        $select = $('<select class="form-control input-sm"><select/>').appendTo('#table_dropdown');

        $('<option/>').val('').text('<?php echo trans("all"); ?>').appendTo($select);
        <?php foreach ($languages as $lang): ?>
        $('<option/>').val('<?php echo $lang->name; ?>').text('<?php echo $lang->name; ?>').appendTo($select);
        <?php endforeach; ?>


        $("#table_dropdown select").change(function () {
            table.column(<?php echo $lang_search_column; ?>).search($(this).val()).draw();
        });
    </script>
<?php endif; ?>
    <script type="text/javascript">
        jQuery(function () {
            if (typeof (CKEDITOR) != "undefined") {
                CKEDITOR.config.contentsLangDirection = 'rtl';
            }
        });
    </script>
</body>
</html>