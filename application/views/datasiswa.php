

    <div class="push large"></div>

    <div class="container">
      <form>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Induk</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="induk" placeholder="Enter No Induk">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="Enter Nama">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kelas</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="kelas" placeholder="Enter Kelas">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="alamat" placeholder="Enter Alamat">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Orang Tua</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama_ortu" placeholder="Enter Nama Orang Tua">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Telepon</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="telepon" placeholder="Enter Telepon">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Keterangan</label>
          <div class="col-sm-10">
          <textarea class="form-control" id="keterangan" rows="3"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10 offset-sm-2">
          <button id="btn-save" type="submit" class="btn btn-primary">Submit</button>
          <button id="btn-save" type="reset" class="btn btn-primary">Reset</button>
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
            <th scope="col">No Induk</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Nama Orang Tua</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telepon</th>
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
            url : "<?php echo site_url('data/siswa_list'); ?>",
            dataType : "JSON",
            success : function(data) {
              var html = '';
              var i;
              for(i=0; i<data.length; i++) {
                html += '<tr>' +
                        '<td>' + (i+1) + '</td>' +
                        '<td>' + data[i].no_induk + '</td>' +
                        '<td>' + data[i].nama_siswa + '</td>' +
                        '<td>' + data[i].kelas + '</td>' +
                        '<td>' + data[i].nama_ortu + '</td>' +
                        '<td>' + data[i].alamat + '</td>' +
                        '<td>' + data[i].telepon + '</td>' +
                        '<td>' + '<a class="edit" data-induk="' + data[i].no_induk + '" data-nama="' + data[i].nama_siswa + '" data-kelas="' + data[i].kelas+ '" data-alamat="'+ data[i].alamat + '" data-ortu="'+ data[i].nama_ortu + '" data-telepon="'+ data[i].telepon +'" style="cursor:pointer"><i class="material-icons">settings</i></a><a class="delete" data-delete="' + data[i].no_induk + '" style="cursor:pointer"><i class="material-icons">clear</i></a>'+ '</td>' +  
                        '</tr>'
              }
              $('#show_data').html(html);
            }
          });
        }

        //CRUD

        $('#btn-save').on('click', function() {
          var induk = $('#induk').val();
          var nama = $('#nama').val();
          var kelas = $('#kelas').val();
          var nama_ortu = $('#nama_ortu').val();
          var alamat = $('#alamat').val();
          var telepon = $('#telepon').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('data/save_siswa'); ?>",
            dataType : "JSON",
            data : {induk : induk, nama : nama, kelas : kelas, nama_ortu : nama_ortu, alamat : alamat, telepon : telepon},
            success : function() {
              $('[name="kota"]').val("");
              show_subs();
            }
          });
          return false;
        });

        $('#btn-delete').on('click', function() {
          var no_induk = $('#delete-id').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('data/delete_siswa'); ?>",
            dataType : "JSON",
            data : {no_induk : no_induk},
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
          var id = $('#edit-induk').val();
          var nama = $('#edit-nama').val();
          var kelas = $('#edit-kelas').val();
          var alamat = $('#edit-alamat').val();
          var nama_ortu = $('#edit-ortu').val();
          var telepon = $('#edit-telepon').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('data/edit_siswa'); ?>",
            dataType : "JSON",
            data : {id : id, nama : nama, kelas : kelas, alamat : alamat, nama_ortu : nama_ortu, telepon : telepon},
            success : function() {
              $('#editKategori').val("");
              $("#modalEdit").modal('hide');
              show_subs();
            }
          });
          return false;
        });

        $('#show_data').on('click','.edit',function(){

          var induk = $(this).data('induk');
          var nama = $(this).data('nama');
          var kelas = $(this).data('kelas');
          var ortu = $(this).data('ortu');
          var alamat = $(this).data('alamat');
          var telepon = $(this).data('telepon');

          $("#edit-induk").val(induk);
          $("#edit-nama").val(nama);
          $("#edit-kelas").val(kelas);
          $("#edit-ortu").val(ortu);
          $("#edit-alamat").val(alamat);
          $("#edit-telepon").val(telepon);

          $("#modalEdit").modal('show');

        });

    });

    </script>
  </body>
</html>