 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Edit Profil</h1>

     </div>

     <!-- Content Row -->
     <div class="row">
         <div class="col-md-8">

             <?= form_open_multipart('kontributor/edit'); ?>


             <div class="form-group row">
                 <label for="email" class="col-md-3 col-form-label">Email</label>
                 <div class="col-md-8">
                     <input type="text" readonly class="form-control" name="email" value="<?= $user['email'] ?>">
                 </div>
             </div>

             <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
             <div class="form-group row">
                 <label for="name" class="col-md-3 col-form-label">Nama Lengkap</label>
                 <div class="col-md-8">
                     <input type="text" autocomplete="off" class="form-control" name="name" value="<?= $user['name'] ?>">
                 </div>
             </div>

             <div class="form-group row">
                 <div class="col-md-3">Foto Profil </div>
                 <div class="col-md-9">
                     <div class="row">
                         <div class="col-md-3">
                             <img src="<?= base_url('asset/img/profile/') . $user['image'] ?> " class="img-thumbnail">
                         </div>
                         <div class="col-md-8">
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input" name="image" id="image">
                                 <label class="custom-file-label" for="customFile">Pilih File</label>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="form-group row justify-content-end">
                 <div class="col-md-9">
                     <button type="submit" class="btn btn-primary form-control col-md-3"> Ubah </button>
                 </div>
             </div>
         </div>
         </form>
     </div>


 </div>

 </div>