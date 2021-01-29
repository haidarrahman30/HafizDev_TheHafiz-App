 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

   </div>

   <!-- Content Row -->
   <div class="row">


     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Artikel Saya</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $all ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-newspaper fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Artikel Pending</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pending ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-question fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Artikel Disetujui</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $approved ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-check-square fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

   </div>