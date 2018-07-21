<div class="push large"></div>

    <div class="container">
      <form>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="cari_siswa" placeholder="Enter Nama Siswa">
          </div>
        </div>
        
        <div class="form-group row">
          <div class="col-sm-10 offset-sm-2">
          <button type="" class="btn btn-primary" id="btn-cari">Cari</button>
          <button type="reset" class="btn btn-primary">Reset</button>
          </div>
        </div>
      </form>
    </div>

    <div class="push large"></div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Bulan</th>
            <th scope="col">No Induk</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Tagihan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody id="show_data">
        </tbody>
      </table>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-nama" placeholder="Enter Nama">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kelas</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-kelas" placeholder="Enter Nama">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-alamat" placeholder="Enter Alamat">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Orang Tua</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-ortu" placeholder="Enter Nama Orang Tua">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Telepon</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-telepon" placeholder="Enter Telepon">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Keterangan</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-keterangan" placeholder="Enter Nama">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id" id="edit-induk">
            <button type="button" class="btn btn-primary" id="btn-edit-save">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="modalDelete">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <p>Are you sure want to delete this record?</p>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id" id="delete-id">
            <button type="button" class="btn btn-primary" id="btn-delete">Delete</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        show_subs();
        function show_subs() {
          $.ajax({
            type : "AJAX",
            url : "<?php echo site_url('data/spp_list'); ?>",
            dataType : "JSON",
            success : function(data) {
              var html = '';
              var i;
              for(i=0; i<data.length; i++) {
                if(data[i].flag == 1){
                  data[i].flag = "Lunas";
                }else{
                  data[i].flag = "Belum";
                }
                html += '<tr>' +
                        '<td>' + (i+1) + '</td>' +
                        '<td>' + data[i].nama_bulan + '</td>' +
                        '<td>' + data[i].no_induk + '</td>' +
                        '<td>' + data[i].nama_siswa + '</td>' +
                        '<td>' + data[i].tagihan + '</td>' +
                        '<td>' + data[i].flag + '</td>' +
                        '<td>' + '<a class="edit" data-id="' + data[i].id_kategori + '" data-bulan="' + data[i].nama_bulan + '" data-tanggal="' + data[i].tanggal_buat +'" data-tagihan="' + data[i].tagihan+ '" style="cursor:pointer"><i class="material-icons">settings</i></a><a class="delete" data-delete="' + data[i].id_kategori + '" style="cursor:pointer"><i class="material-icons">clear</i></a><a class="flag" data-id="' + data[i].id_tagihan + '" data-flag="' + data[i].flag + '" style="cursor:pointer"><i class="material-icons">check</i></a>'+ '</td>' +  
                        '</tr>'
              
            }
              $('#show_data').html(html);
            }
          });
        }
        $('#show_data').on('click','.flag',function(){

          var id     = $(this).data('id');
          var flag   = $(this).data('flag');

          $.ajax({
            type : "POST",
            url : "<?php echo site_url('data/flag_spp'); ?>",
            dataType : "JSON",
            data : {id : id, flag : flag},
            success : function() {
              show_subs();
            }
          });

        });
        $('#btn-cari').on('click', function() {
          var siswa = $('#cari_siswa').val();
          
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('data/spp_cari'); ?>",
            dataType : "JSON",
            data:{siswa:siswa},
            success : function(data) {
              var html = '';
              var i;
              for(i=0; i<data.length; i++) {
                if(data[i].flag == 1){
                  data[i].flag = "Lunas";
                }else{
                  data[i].flag = "Belum";
                }
              for(i=0; i<data.length; i++){ 
                html += '<tr>' +
                        '<td>' + (i+1) + '</td>' +
                        '<td>' + data[i].nama_bulan + '</td>' +
                        '<td>' + data[i].no_induk + '</td>' +
                        '<td>' + data[i].nama_siswa + '</td>' +
                        '<td>' + data[i].tagihan + '</td>' +
                        '<td>' + data[i].flag + '</td>' +
                        '<td>' + '<a class="edit" data-id="' + data[i].id_kategori + '" data-bulan="' + data[i].nama_bulan + '" data-tanggal="' + data[i].tanggal_buat +'" data-tagihan="' + data[i].tagihan+ '" style="cursor:pointer"><i class="material-icons">settings</i></a><a class="delete" data-delete="' + data[i].id_kategori + '" style="cursor:pointer"><i class="material-icons">clear</i></a><a class="flag" data-id="' + data[i].id_tagihan + '" data-flag="' + data[i].flag + '" style="cursor:pointer"><i class="material-icons">check</i></a>'+ '</td>' +  
                        '</tr>'
              }
              $('#show_data').html(html);
            }
          }
          });
          return false;
        });

        

        $('#btn-save').on('click', function() {
          var bulan = $('#bulan').val();
          var tanggal = $('#tanggal').val();
          var tagihan = $('#tagihan').val();
          
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('data/save_tagihan'); ?>",
            dataType : "JSON",
            data : {bulan : bulan, tanggal : tanggal, tagihan : tagihan},
            success : function() {
              $('[name="kota"]').val("");
              show_subs();
            }
          });
          return false;
        });

        $('#btn-delete').on('click', function() {
          var id_kategori = $('#delete-id').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('data/delete_tagihan'); ?>",
            dataType : "JSON",
            data : {id_kategori : id_kategori},
            success : function() {
              $("#modalDelete").modal('hide');
              show_subs();
            }
          });
          return false;
        });

        $('#show_data').on('click','.delete',function(){

          var id   = $(this).data('delete');

          $("#delete-id").val(id);

          $("#modalDelete").modal('show');

        });

        $('#btn-edit-save').on('click', function() {
          var id = $('#edit-id').val();
          var bulan = $('#edit-bulan').val();
          var tanggal = $('#edit-tanggal').val();
          var tagihan = $('#edit-tagihan').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('data/edit_tagihan'); ?>",
            dataType : "JSON",
            data : {id : id, bulan : bulan, tanggal : tanggal, tagihan : tagihan},
            success : function() {
              $('#editKategori').val("");
              $("#modalEdit").modal('hide');
              show_subs();
            }
          });
          return false;
        });

        $('#show_data').on('click','.edit',function(){

          var id = $(this).data('id');
          var bulan = $(this).data('bulan');
          var tanggal = $(this).data('tanggal');
          var tagihan = $(this).data('tagihan');

          $("#edit-id").val(id);
          $("#edit-bulan").val(bulan);
          $("#edit-tanggal").val(tanggal);
          $("#edit-tagihan").val(tagihan);

          $("#modalEdit").modal('show');

        });
    });
    </script>
  </body>
</html>