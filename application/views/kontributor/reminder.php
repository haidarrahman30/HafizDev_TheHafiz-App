 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Add Reminder</h1>

     </div>

     <!-- Content Row -->
     <div class="row">
         <div class="col-md-8">
             <?= $this->session->flashdata('berhasil'); ?>
             <form action="<?= base_url('kontributor/reminder') ?>" method="post">
                 <div class="form-group row">
                     <label for="jam" class="col-md-3 col-form-label">Jam</label>
                     <div class="col-md-8">
                         <input type="text" class="form-control" name="jam" required>
                         <small>contoh : 18:30</small>
                     </div>
                 </div>

                 <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                 <div class=" form-group row">
                     <label for="tanggal" class="col-md-3 col-form-label">Tanggal</label>
                     <div class="col-md-8">
                         <input type="date" autocomplete="off" class="form-control" name="tanggal" required>
                         <small>contoh : https://www.youtube.com/embed/XBgmj4Qk1JA</small>
                     </div>
                 </div>

                 <div class=" form-group row">
                     <label for="Isi" class="col-md-3 col-form-label">Isi</label>
                     <div class="col-md-8">
                         <input type="text" autocomplete="off" class="form-control" name="isi" required>
                     </div>
                 </div>

                 <div class="form-group row justify-content-end">
                     <div class="col-md-9">
                         <button type="submit" class="btn btn-primary form-control col-md-3"> Tambah </button>
                     </div>
                 </div>
         </div>
         </form>
     </div>


 </div>

 </div>