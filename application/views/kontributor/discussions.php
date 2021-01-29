 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Add Discussions</h1>

     </div>

     <!-- Content Row -->
     <div class="row">
         <div class="col-md-8">
             <?= $this->session->flashdata('berhasil'); ?>
             <form action="<?= base_url('kontributor/discussions') ?>" method="post">
                 <div class="form-group row">
                     <label for="judul" class="col-md-3 col-form-label">judul</label>
                     <div class="col-md-8">
                         <input type="text" class="form-control" name="judul" required>
                     </div>
                 </div>

                 <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                 <div class=" form-group row">
                     <label for="konten" class="col-md-3 col-form-label">konten</label>
                     <div class="col-md-8">
                         <textarea class="form-control" name="konten" id="konten" rows="3"></textarea>
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