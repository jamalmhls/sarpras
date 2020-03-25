<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
     <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->   
        <div class="row-fluid">
           <div class="span12">
              <br>
              <?php echo $this->breadcrumb->output(); ?>
           </div>
        </div>
            
          <div class="row-fluid">
                <div class="span8">
                <?php echo br(1); ?>
                <?php
                $data=$this->session->flashdata('sukses');
                if ($data!=null){?>
                    <div class="alert alert-block alert-success fade in">
                      <p>
                          <strong>Sukses!</strong>  <?php echo $data; ?>
                      </p>
                    </div>
                <?php
                }       
                $data2=$this->session->flashdata('error');
                if ($data2!=null){?>
                     <div class="alert alert-block alert-danger fade in">
                      <p>
                          <strong>Error!</strong> <?php echo $data2; ?>
                      </p>
                    </div>
                <?php
                }       
                ?>
                <div class="widget red">
                    <div class="widget-title">
                        <h4><i class="icon-user"></i> Pegawai</h4>
                    </div>
                    <form action="<?php echo site_url('Pegawai/update_proses/'.$getId['id_pegawai'])?>" method="post">
                    <div class="widget-body">
                        <div class="control-group">
                            <div class="row">
                                 <label class="span1"></label>
                                 <label class="span3">NIK/NUPTK</label>
                                <div class="span8">
                                    <div class="controls">
                                        <input type="text" value="<?php echo $getId['nip']?>" required class="span12" name="nip">
                                    </div>  
                                </div>
                            </div>
                             <div class="row">
                                 <label class="span1"></label>
                                 <label class="span3">Nama Guru/Karyawan</label>
                                <div class="span8">
                                    <div class="controls">
                                        <input type="text" value="<?php echo $getId['nama']?>"required class="span12" name="name">
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                 <label class="span1"></label>
                                 <label class="span3">Jabatan</label>
                                <div class="span8">
                                    <div class="controls">
                                        <select required class="chzn-select" name="pangkat" style="width:495px;" data-placeholder="Pilih Jabatan" tabindex="1">
                                            <option <?php if($getId['pangkat']=='Kepala Sekolah'){ echo 'selected';}?> value="Kepala Sekolah">Kepala Sekolah</option>
                                            <option <?php if($getId['pangkat']=='Wakil Kepala Sekolah'){ echo 'selected';}?> value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                                            <option <?php if($getId['pangkat']=='Guru'){ echo 'selected';}?> value="Guru">Guru</option>
                                            <option <?php if($getId['pangkat']=='Karyawan'){ echo 'selected';}?> value="Karyawan">Karyawan</option>
                                        </select>
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                 <label class="span1"></label>
                                 <label class="span3">Pokja</label>
                                <div class="span8">
                                    <div class="controls">
                                        <input type="text" value="<?php echo $getId['jabatan']?>"required class="span12" name="jabatan">
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <center><button class="btn btn-warning"><i class="icon-edit"></i> Simpan</button></center>
                    </div>
                </div>
                </form>
            </div>
        </div>
     </div>
     <!-- END PAGE CONTAINER-->
</div>