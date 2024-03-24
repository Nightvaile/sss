 @extends('backend.layout.layout')
 @section('title')Kullanıcı Ekle @endsection
 @section('head_in')

 @endsection
 @section('content')
     <div class="content-body">
         <div class="container-fluid">
             <div class="row page-titles mx-0">
                 <div class="col-sm-6 p-md-0">
                     <div class="welcome-text">
                         <h4>Hi, (isim) welcome back!</h4>
                     </div>
                 </div>
             </div>
             <!-- row -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Kullanıcı Ekle</h4>
                         </div>
                         <div class="card-body">
                             <div class="form-validation">
                                 <form class="form-valide" action="#" method="post">
                                     <div class="row">
                                         <div class="col-xl-6">
                                             <div class="form-group row">
                                                 <label class="col-lg-4 col-form-label" for="val-username">Ad
                                                     <span class="text-danger">*</span>
                                                 </label>
                                                 <div class="col-lg-6">
                                                     <input type="text" class="form-control" id="val-username" name="val-username" placeholder="İsim giriniz.">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-lg-4 col-form-label" for="val-username">Soyad
                                                     <span class="text-danger">*</span>
                                                 </label>
                                                 <div class="col-lg-6">
                                                     <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Soyisim giriniz.">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-lg-4 col-form-label" for="val-digits">TC no <span
                                                         class="text-danger">*</span>
                                                 </label>
                                                 <div class="col-lg-6">
                                                     <input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="01234567890">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-lg-4 col-form-label" for="val-phoneus">Telefon
                                                     <span class="text-danger">*</span>
                                                 </label>
                                                 <div class="col-lg-6">
                                                     <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="05123456789">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-xl-6">
                                             <div class="form-group row">
                                                 <label class="col-lg-4 col-form-label" for="val-skill">Rol
                                                     <span class="text-danger">*</span>
                                                 </label>
                                                 <div class="col-lg-6">
                                                     <select class="form-control" id="val-skill" name="val-skill">
                                                         <option value="personel">Personel</option>
                                                         <option value="html">HTML</option>
                                                         <option value="css">CSS</option>
                                                         <option value="javascript">JavaScript</option>
                                                         <option value="angular">Angular</option>
                                                         <option value="angular">React</option>
                                                         <option value="vuejs">Vue.js</option>
                                                         <option value="ruby">Ruby</option>
                                                         <option value="php">PHP</option>
                                                         <option value="asp">ASP.NET</option>
                                                         <option value="python">Python</option>
                                                         <option value="mysql">MySQL</option>
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-lg-4 col-form-label" for="val-email">Email <span
                                                         class="text-danger">*</span>
                                                 </label>
                                                 <div class="col-lg-6">
                                                     <input type="text" class="form-control" id="val-email" name="val-email" placeholder="E-posta giriniz.">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-lg-4 col-form-label" for="val-password">Şifre
                                                     <span class="text-danger">*</span>
                                                 </label>
                                                 <div class="col-lg-6">
                                                     <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Şifre giriniz.">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-lg-4 col-form-label" for="val-confirm-password">Şifreyi onayla <span
                                                         class="text-danger">*</span>
                                                 </label>
                                                 <div class="col-lg-6">
                                                     <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Şifreyi tekrar giriniz.">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <div class="col-lg-8 ml-auto">
                                                     <button type="submit" class="btn btn-primary">Kaydet</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
 @section('scripts')
     <!-- Jquery Validation -->
     <script src="{{asset('backend/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
     <!-- Form validate init -->
     <script src="{{asset('backend/js/plugins-init/jquery.validate-init.js')}}"></script>
 @endsection

