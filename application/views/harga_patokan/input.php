<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Harga Patokan <b>PT AMUKAN MASSA</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('mapel/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label class="col-sm-3 control-label">No. Invoice</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_invoice" class="form-control" placeholder="Masukkan Nomor Invoice">
                            </div>
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="" class="col-sm-3 control-label">Tgl. Invoice</label>

                            <div class="col-sm-9">
                                <input type="date" name="tgl_invoice" class="form-control" placeholder="Masukkan Tanggal Invoice">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label class="col-sm-3 control-label">PBPH (Pembeli)</label>
                            <div class="col-sm-9">
                                <select name="id_pbph_pembeli" class="form-control">    
                                    <option>Masukkan Nama PBPH Terdaftar</option>
                                    <option value="0">PT Rukkha Devata</option>
                                    <option value="1">PT Nusantara Abadi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Provinsi">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" placeholder="Kabupaten">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label class="col-sm-3 control-label">Tempat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder = "Masukkan Tempat Invoice Dibuat">
                            </div>
                        </div>
                        <div class="form-group col-xs-6">
                            <label class="col-sm-3 control-label">File Invoice</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" placeholder = "Masukkan Tempat Invoice Dibuat" accept="application/pdf">
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">
                            Tabel Invoice
                            <a href="#" style="float:right" id="tambah-baris" class="btn btn-sm btn-success">
                                <i class="fa fa-plus"></i> 
                                &nbsp; Baris
                            </a>
                        </div>
                        <!-- Table -->
                        <table class="table table-striped" id="rincian">
                            <thead>
                                <tr>
                                    <th>Nama Jenis/Spesies</th>
                                    <th>Kelompok Jenis</th>
                                    <th>Harga Kayu</th>
                                    <th>Volume (m<sup>3</sup>)</th>
                                    <th>Diameter</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="id_jenis_kayu" class="form-control jenis-kayu">    
                                            <option>Masukkan Jenis Kayu</option>
                                            <option value="0">Meranti Merah</option>
                                            <option value="1">Meranti Biru</option>
                                        </select>
                                    </td>
                                    <td>
                                        <p>-</p>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-addon">Rp.</div>
                                            <input type="number" class="form-control" placeholder="Masukkan Harga Kayu">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="Masukkan Volume Kayu">
                                            <div class="input-group-addon">m <sup>3</sup></div>
                                        </div>
                                    </td>
                                    <td>
                                        <select   select name="id_jenis_kayu" class="form-control">    
                                            <option>Pilih Diameter Kayu</option>
                                            <option value="kbk">KBK</option>
                                            <option value="kbs">KBS</option>
                                            <option value="kbb">KBB</option>
                                        </select>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('tampilan_operator', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
                        ?>
                      </div>
                    </div>

                </div>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<script>
    $('#tambah-baris').click(function() {
        let rincian_html = '<tr>'+
                            '<td>'+
                                '<select name="id_jenis_kayu" class="form-control jenis-kayu">'+    
                                    '<option>Masukkan Jenis Kayu</option>'+
                                    '<option value="0">Meranti Merah</option>'+
                                    '<option value="1">Meranti Biru</option>'+
                                '</select>'+
                            '</td>'+
                            '<td>'+
                                '<p>-</p>' +
                            '</td>'+
                            '<td>'+
                                '<div class="input-group">'+
                                    '<div class="input-group-addon">Rp.</div>'+
                                    '<input type="number" class="form-control" placeholder="Masukkan Harga Kayu">'+
                                    '<div class="input-group-addon">.00</div>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="input-group">'+
                                    '<input type="number" class="form-control" placeholder="Masukkan Volume Kayu">'+
                                    '<div class="input-group-addon">m <sup>3</sup></div>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<select name="id_jenis_kayu" class="form-control">'+    
                                    '<option>Pilih Diameter Kayu</option>'+
                                    '<option value="kbk">KBK</option>'+
                                    '<option value="kbs">KBS</option>'+
                                    '<option value="kbb">KBB</option>'+
                                '</select>'+
                            '</td>'+
                            '<td>'+
                                '<a href="#" class="btn btn-sm btn-danger hapus-baris">'+
                                    '<i class="fa fa-trash"></i>'+
                                '</a>'+
                            '</td>'+
                        '</tr>';

        $('#rincian > tbody:last-child').append(rincian_html);
        $('.hapus-baris').click(function() {
            $(this).parents("tr").remove();
        });

        $('.jenis-kayu').select2({
            width:'100%'
        });
    });
    $('.jenis-kayu').select2({
        width:'100%',
        theme:'classic'
    });
</script>