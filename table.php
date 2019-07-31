<?php
session_start();
?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Title</b></h3>
        </div>
        <form name= "form1" role="form" class="form-horizontal">

            <div class="box-body">


                <input type="hidden" id="tmpno" class="form-control">

                <input type="hidden" id="item_count" class="form-control">

                <div class="form-group-sm">

                    <a onclick="newent();" class="btn btn-default btn-sm">
                        <span class="fa fa-user-plus"></span> &nbsp; NEW
                    </a>
                    <a id="addRow" class="btn btn-default btn-sm">
                        <span class="fa fa-user-plus"></span> &nbsp; NEW
                    </a>

                    <a  onclick="save_inv();" class="btn btn-success btn-sm">
                        <span class="fa fa-save"></span> &nbsp; SAVE
                    </a>
                     <a onclick="NewWindow('search_category.php?stname=code', 'mywin', '800', '700', 'yes', 'center');" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-search"></span> &nbsp; FIND
                    </a>


                       
                    <a onclick="deleteproduct();" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash"></span> &nbsp; DELETE
                    </a>

                </div>
                <div class="form-group"></div>
                <div id="msg_box"  class="span12 text-center"  ></div>

                <div class="form-group"></div>
                
                <div class="form-group"></div>
                <div class="form-group-sm">
                    <label class="col-sm-2" for="c_code">Category ID</label>
                    <div class="col-sm-3">
                        <input type="text" placeholder="Category ID" name="c_code" id="Category_ID" class="form-control  input-sm">
                        <input type="text" placeholder="Category ID" name="c_code" id="uniq" class="form-control  input-sm hidden">
                    </div>
                </div>
                
                
                <div class="form-group"></div>
                <div class="form-group-sm">
                    <label class="col-sm-2" for="c_code">Category</label>
                    <div class="col-sm-3">
                        <input type="text" placeholder="Category" name="c_code" id="Category" class="form-control  input-sm">
                    </div>
                </div>
                <br><br>
             
            <div id="table_plat">
                
            
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                            <th>Column 5</th>
                        </tr>
                    </thead>
                   
                    <tfoot>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                            <th>Column 5</th>
                        </tr>
                    </tfoot>
                </table>



            </div>
                
        
         

               

            </div>
        </form>
    </div>

</section>


<script>
    $(document).ready(function() {
    var t = $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                text: 'JSON',
                action: function ( e, dt, button, config ) {
                    var data = dt.buttons.exportData();
                    console.log(JSON.stringify( data ));
                    $.fn.dataTable.fileSave(
                        new Blob( [ JSON.stringify( data ) ] ),
                        'Export.json'
                    );
                }
            }
        ]
    });
    var counter = 1;
 
    $('#addRow').on( 'click', function () {
       var rowNode = t
    .row.add( [ 'Fiona White', 32, 'Edinburgh', 'Edinburgh', 'Edinburgh' ] )
    .draw()
    .node();
    $( rowNode ).find('td:eq(0)').attr('contenteditable', 'true');
    $( rowNode ).find('td:eq(1)').attr('contenteditable', 'true');
    $( rowNode ).find('td:eq(2)').attr('contenteditable', 'true');
    $( rowNode ).find('td:eq(3)').attr('contenteditable', 'true');
    $( rowNode ).find('td:eq(4)').attr('contenteditable', 'true');
 
$( rowNode )
    .attr("id","500");
    
    } );


 
    // Automatically add a first row of data
    $('#addRow').click();

   
} );
</script>


<script src="E_js/table.js"></script>

<script>newent();</script>

