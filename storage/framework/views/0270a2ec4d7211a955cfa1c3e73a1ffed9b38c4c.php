<?php $__env->startSection('title'); ?>
<title><?php echo e(__('admin.Settings')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('admin-content'); ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo e(__('admin.Settings')); ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('admin.Dashboard')); ?></a></div>
            </div>
          </div>

        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3">
                                    <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">


                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link active" id="general-setting-tab" data-toggle="tab" href="#generalSettingTab" role="tab" aria-controls="generalSettingTab" aria-selected="true"><?php echo e(__('admin.General Setting')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="logo-tab" data-toggle="tab" href="#logoTab" role="tab" aria-controls="logoTab" aria-selected="true"><?php echo e(__('admin.Logo and Favicon')); ?></a>
                                        </li>


                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="logo-tab" data-toggle="tab" href="#themeColorTab" role="tab" aria-controls="themeColorTab" aria-selected="true"><?php echo e(__('admin.Theme Color')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="cookie-tab" data-toggle="tab" href="#cookieTab" role="tab" aria-controls="cookieTab" aria-selected="true"><?php echo e(__('admin.Cookie Consent')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="recaptcha-tab" data-toggle="tab" href="#recaptchaTab" role="tab" aria-controls="recaptchaTab" aria-selected="true"><?php echo e(__('admin.Google Recaptcha')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="tawk-chat-tab" data-toggle="tab" href="#tawkChatTab" role="tab" aria-controls="tawkChatTab" aria-selected="true"><?php echo e(__('admin.Tawk Chat')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="google-analytic-tab" data-toggle="tab" href="#googleAnalyticTab" role="tab" aria-controls="googleAnalyticTab" aria-selected="true"><?php echo e(__('admin.Google Analytic')); ?></a>
                                        </li>

                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="custom-pagination-tab" data-toggle="tab" href="#customPaginationTab" role="tab" aria-controls="customPaginationTab" aria-selected="true"><?php echo e(__('admin.Custom Pagination')); ?></a>
                                        </li>



                                        <li class="nav-item border rounded mb-1">
                                            <a class="nav-link" id="facebook-pixel-tab" data-toggle="tab" href="#facebookPixelTab" role="tab" aria-controls="facebookPixelTab" aria-selected="true"><?php echo e(__('admin.Facebook Pixel')); ?></a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-9">
                                    <div class="border rounded">
                                        <div class="tab-content no-padding" id="settingsContent">

                                            <div class="tab-pane fade show active" id="generalSettingTab" role="tabpanel" aria-labelledby="general-setting-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                      <form action="<?php echo e(route('admin.update-general-setting')); ?>" method="POST" enctype="multipart/form-data">
                                                          <?php echo csrf_field(); ?>
                                                          <?php echo method_field('PUT'); ?>

                                                        <div class="form-group">
                                                            <label for=""><?php echo e(__('admin.Frotnend URL')); ?> </label>
                                                            <input type="text" name="frontend_url" class="form-control" value="<?php echo e($setting->frontend_url); ?>">
                                                        </div>


                                                          <div class="form-group">
                                                              <label for=""><?php echo e(__('admin.App Name')); ?></label>
                                                              <input type="text" name="lg_header" class="form-control" value="<?php echo e($setting->sidebar_lg_header); ?>">
                                                          </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Timezone')); ?></label>
                                                                <select name="timezone" id="" class="form-control select2">
                                                                    <option <?php echo e($setting->timezone == 'Africa/Abidjan' ? 'selected' : ''); ?> value="Africa/Abidjan" selected>Africa/Abidjan</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Accra' ? 'selected' : ''); ?> value="Africa/Accra" >Africa/Accra</option>
                                                                    <option  <?php echo e($setting->timezone == 'Africa/Addis_Ababa' ? 'selected' : ''); ?>value="Africa/Addis_Ababa" >Africa/Addis_Ababa</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Algiers' ? 'selected' : ''); ?> value="Africa/Algiers" >Africa/Algiers</option>
                                                                    <option  <?php echo e($setting->timezone == 'Africa/Asmara' ? 'selected' : ''); ?>value="Africa/Asmara" >Africa/Asmara</option>
                                                                    <option  <?php echo e($setting->timezone == 'Africa/Bamako' ? 'selected' : ''); ?>value="Africa/Bamako" >Africa/Bamako</option>
                                                                    <option  <?php echo e($setting->timezone == 'Africa/Bangui' ? 'selected' : ''); ?>value="Africa/Bangui" >Africa/Bangui</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Banjul' ? 'selected' : ''); ?> value="Africa/Banjul" >Africa/Banjul</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Bissau' ? 'selected' : ''); ?> value="Africa/Bissau" >Africa/Bissau</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Blantyre' ? 'selected' : ''); ?> value="Africa/Blantyre" >Africa/Blantyre</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Brazzaville' ? 'selected' : ''); ?> value="Africa/Brazzaville" >Africa/Brazzaville</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Bujumbura' ? 'selected' : ''); ?> value="Africa/Bujumbura" >Africa/Bujumbura</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Cairo"' ? 'selected' : ''); ?> value="Africa/Cairo" >Africa/Cairo</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Casablanca' ? 'selected' : ''); ?> value="Africa/Casablanca" >Africa/Casablanca</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Ceuta' ? 'selected' : ''); ?> value="Africa/Ceuta" >Africa/Ceuta</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Conakry' ? 'selected' : ''); ?> value="Africa/Conakry" >Africa/Conakry</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Dakar' ? 'selected' : ''); ?> value="Africa/Dakar" >Africa/Dakar</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Dar_es_Salaam' ? 'selected' : ''); ?> value="Africa/Dar_es_Salaam" >Africa/Dar_es_Salaam</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Djibouti' ? 'selected' : ''); ?> value="Africa/Djibouti" >Africa/Djibouti</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Douala' ? 'selected' : ''); ?> value="Africa/Douala" >Africa/Douala</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/El_Aaiun' ? 'selected' : ''); ?> value="Africa/El_Aaiun" >Africa/El_Aaiun</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Freetown' ? 'selected' : ''); ?> value="Africa/Freetown" >Africa/Freetown</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Gaborone' ? 'selected' : ''); ?> value="Africa/Gaborone" >Africa/Gaborone</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Harare' ? 'selected' : ''); ?> value="Africa/Harare" >Africa/Harare</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Johannesburg' ? 'selected' : ''); ?> value="Africa/Johannesburg" >Africa/Johannesburg</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Juba' ? 'selected' : ''); ?> value="Africa/Juba" >Africa/Juba</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Kampala' ? 'selected' : ''); ?> value="Africa/Kampala" >Africa/Kampala</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Khartoum' ? 'selected' : ''); ?> value="Africa/Khartoum" >Africa/Khartoum</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Kigali' ? 'selected' : ''); ?> value="Africa/Kigali" >Africa/Kigali</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Kinshasa' ? 'selected' : ''); ?> value="Africa/Kinshasa" >Africa/Kinshasa</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Lagos' ? 'selected' : ''); ?> value="Africa/Lagos" >Africa/Lagos</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Libreville' ? 'selected' : ''); ?> value="Africa/Libreville" >Africa/Libreville</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Lome' ? 'selected' : ''); ?> value="Africa/Lome" >Africa/Lome</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Luanda' ? 'selected' : ''); ?> value="Africa/Luanda" >Africa/Luanda</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Lubumbashi' ? 'selected' : ''); ?> value="Africa/Lubumbashi" >Africa/Lubumbashi</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Lusaka' ? 'selected' : ''); ?> value="Africa/Lusaka" >Africa/Lusaka</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Malabo' ? 'selected' : ''); ?> value="Africa/Malabo" >Africa/Malabo</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Maputo' ? 'selected' : ''); ?> value="Africa/Maputo" >Africa/Maputo</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Maseru' ? 'selected' : ''); ?> value="Africa/Maseru" >Africa/Maseru</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Mbabane' ? 'selected' : ''); ?> value="Africa/Mbabane" >Africa/Mbabane</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Mogadishu' ? 'selected' : ''); ?> value="Africa/Mogadishu" >Africa/Mogadishu</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Monrovia' ? 'selected' : ''); ?> value="Africa/Monrovia" >Africa/Monrovia</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Nairobi' ? 'selected' : ''); ?> value="Africa/Nairobi" >Africa/Nairobi</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Ndjamena' ? 'selected' : ''); ?> value="Africa/Ndjamena" >Africa/Ndjamena</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Niamey' ? 'selected' : ''); ?> value="Africa/Niamey" >Africa/Niamey</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Nouakchott' ? 'selected' : ''); ?> value="Africa/Nouakchott" >Africa/Nouakchott</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Ouagadougou' ? 'selected' : ''); ?> value="Africa/Ouagadougou" >Africa/Ouagadougou</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Porto-Novo' ? 'selected' : ''); ?> value="Africa/Porto-Novo" >Africa/Porto-Novo</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Sao_Tome' ? 'selected' : ''); ?> value="Africa/Sao_Tome" >Africa/Sao_Tome</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Tripoli' ? 'selected' : ''); ?> value="Africa/Tripoli" >Africa/Tripoli</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Tunis' ? 'selected' : ''); ?> value="Africa/Tunis" >Africa/Tunis</option>
                                                                    <option <?php echo e($setting->timezone == 'Africa/Windhoek' ? 'selected' : ''); ?> value="Africa/Windhoek" >Africa/Windhoek</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Adak' ? 'selected' : ''); ?> value="America/Adak" >America/Adak</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Anchorage' ? 'selected' : ''); ?> value="America/Anchorage" >America/Anchorage</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Anguilla' ? 'selected' : ''); ?> value="America/Anguilla" >America/Anguilla</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Antigua' ? 'selected' : ''); ?> value="America/Antigua" >America/Antigua</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Araguaina' ? 'selected' : ''); ?> value="America/Araguaina" >America/Araguaina</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/Buenos_Aires' ? 'selected' : ''); ?> value="America/Argentina/Buenos_Aires" >America/Argentina/Buenos_Aires</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/Catamarca' ? 'selected' : ''); ?> value="America/Argentina/Catamarca" >America/Argentina/Catamarca</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/Cordoba' ? 'selected' : ''); ?> value="America/Argentina/Cordoba" >America/Argentina/Cordoba</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/Jujuy' ? 'selected' : ''); ?> value="America/Argentina/Jujuy" >America/Argentina/Jujuy</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/La_Rioja' ? 'selected' : ''); ?> value="America/Argentina/La_Rioja" >America/Argentina/La_Rioja</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/Mendoza' ? 'selected' : ''); ?> value="America/Argentina/Mendoza" >America/Argentina/Mendoza</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/Rio_Gallegos' ? 'selected' : ''); ?> value="America/Argentina/Rio_Gallegos" >America/Argentina/Rio_Gallegos</option>

                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/Salta' ? 'selected' : ''); ?>  value="America/Argentina/Salta" >America/Argentina/Salta</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/San_Juan' ? 'selected' : ''); ?>  value="America/Argentina/San_Juan" >America/Argentina/San_Juan</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/San_Luis' ? 'selected' : ''); ?>  value="America/Argentina/San_Luis" >America/Argentina/San_Luis</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/Tucuman' ? 'selected' : ''); ?>  value="America/Argentina/Tucuman" >America/Argentina/Tucuman</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Argentina/Ushuaia' ? 'selected' : ''); ?>  value="America/Argentina/Ushuaia" >America/Argentina/Ushuaia</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Aruba' ? 'selected' : ''); ?>  value="America/Aruba" >America/Aruba</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Asuncion' ? 'selected' : ''); ?>  value="America/Asuncion" >America/Asuncion</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Atikokan' ? 'selected' : ''); ?>  value="America/Atikokan" >America/Atikokan</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Bahia' ? 'selected' : ''); ?>  value="America/Bahia" >America/Bahia</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Bahia_Banderas' ? 'selected' : ''); ?>  value="America/Bahia_Banderas" >America/Bahia_Banderas</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Barbados' ? 'selected' : ''); ?>  value="America/Barbados" >America/Barbados</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Belem' ? 'selected' : ''); ?>  value="America/Belem" >America/Belem</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Belize' ? 'selected' : ''); ?>  value="America/Belize" >America/Belize</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Blanc-Sablon' ? 'selected' : ''); ?>  value="America/Blanc-Sablon" >America/Blanc-Sablon</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Boa_Vista' ? 'selected' : ''); ?>  value="America/Boa_Vista" >America/Boa_Vista</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Bogota' ? 'selected' : ''); ?>  value="America/Bogota" >America/Bogota</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Boise' ? 'selected' : ''); ?>  value="America/Boise" >America/Boise</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Cambridge_Bay' ? 'selected' : ''); ?>  value="America/Cambridge_Bay" >America/Cambridge_Bay</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Campo_Grande' ? 'selected' : ''); ?>  value="America/Campo_Grande" >America/Campo_Grande</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Cancun' ? 'selected' : ''); ?>  value="America/Cancun" >America/Cancun</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Caracas' ? 'selected' : ''); ?>  value="America/Caracas" >America/Caracas</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Cayenne' ? 'selected' : ''); ?>  value="America/Cayenne" >America/Cayenne</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Cayman' ? 'selected' : ''); ?>  value="America/Cayman" >America/Cayman</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Chicago' ? 'selected' : ''); ?>  value="America/Chicago" >America/Chicago</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Chihuahua' ? 'selected' : ''); ?>  value="America/Chihuahua" >America/Chihuahua</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Costa_Rica' ? 'selected' : ''); ?>  value="America/Costa_Rica" >America/Costa_Rica</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Creston' ? 'selected' : ''); ?>  value="America/Creston" >America/Creston</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Cuiaba' ? 'selected' : ''); ?>  value="America/Cuiaba" >America/Cuiaba</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Curacao' ? 'selected' : ''); ?>  value="America/Curacao" >America/Curacao</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Danmarkshavn' ? 'selected' : ''); ?>  value="America/Danmarkshavn" >America/Danmarkshavn</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Dawson' ? 'selected' : ''); ?>  value="America/Dawson" >America/Dawson</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Dawson_Creek' ? 'selected' : ''); ?>  value="America/Dawson_Creek" >America/Dawson_Creek</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Denver' ? 'selected' : ''); ?>  value="America/Denver" >America/Denver</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Detroit' ? 'selected' : ''); ?>  value="America/Detroit" >America/Detroit</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Dominica' ? 'selected' : ''); ?>  value="America/Dominica" >America/Dominica</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Edmonton' ? 'selected' : ''); ?>  value="America/Edmonton" >America/Edmonton</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Eirunepe' ? 'selected' : ''); ?>  value="America/Eirunepe" >America/Eirunepe</option>
                                                                    <option <?php echo e($setting->timezone == 'America/El_Salvador' ? 'selected' : ''); ?>  value="America/El_Salvador" >America/El_Salvador</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Fort_Nelson' ? 'selected' : ''); ?>  value="America/Fort_Nelson" >America/Fort_Nelson</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Fortaleza' ? 'selected' : ''); ?>  value="America/Fortaleza" >America/Fortaleza</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Glace_Bay' ? 'selected' : ''); ?>  value="America/Glace_Bay" >America/Glace_Bay</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Goose_Bay' ? 'selected' : ''); ?>  value="America/Goose_Bay" >America/Goose_Bay</option>

                                                                    <option <?php echo e($setting->timezone == 'America/Grand_Turk' ? 'selected' : ''); ?>  value="America/Grand_Turk" >America/Grand_Turk</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Grenada' ? 'selected' : ''); ?>  value="America/Grenada" >America/Grenada</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Guadeloupe' ? 'selected' : ''); ?>  value="America/Guadeloupe" >America/Guadeloupe</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Guatemala' ? 'selected' : ''); ?>  value="America/Guatemala" >America/Guatemala</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Guayaquil' ? 'selected' : ''); ?>  value="America/Guayaquil" >America/Guayaquil</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Guyana' ? 'selected' : ''); ?>  value="America/Guyana" >America/Guyana</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Halifax' ? 'selected' : ''); ?>  value="America/Halifax" >America/Halifax</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Havana' ? 'selected' : ''); ?>  value="America/Havana" >America/Havana</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Hermosillo' ? 'selected' : ''); ?>  value="America/Hermosillo" >America/Hermosillo</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Indiana/Indianapolis' ? 'selected' : ''); ?>  value="America/Indiana/Indianapolis" >America/Indiana/Indianapolis</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Indiana/Knox' ? 'selected' : ''); ?>  value="America/Indiana/Knox" >America/Indiana/Knox</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Indiana/Marengo' ? 'selected' : ''); ?>  value="America/Indiana/Marengo" >America/Indiana/Marengo</option>

                                                                    <option <?php echo e($setting->timezone == 'America/Indiana/Petersburg' ? 'selected' : ''); ?>  value="America/Indiana/Petersburg" >America/Indiana/Petersburg</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Indiana/Tell_City' ? 'selected' : ''); ?>  value="America/Indiana/Tell_City" >America/Indiana/Tell_City</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Indiana/Vevay' ? 'selected' : ''); ?>  value="America/Indiana/Vevay" >America/Indiana/Vevay</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Indiana/Vincennes' ? 'selected' : ''); ?>  value="America/Indiana/Vincennes" >America/Indiana/Vincennes</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Indiana/Winamac' ? 'selected' : ''); ?>  value="America/Indiana/Winamac" >America/Indiana/Winamac</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Inuvik' ? 'selected' : ''); ?>  value="America/Inuvik" >America/Inuvik</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Iqaluit' ? 'selected' : ''); ?>  value="America/Iqaluit" >America/Iqaluit</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Jamaica' ? 'selected' : ''); ?>  value="America/Jamaica" >America/Jamaica</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Juneau' ? 'selected' : ''); ?>  value="America/Juneau" >America/Juneau</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Kentucky/Louisville' ? 'selected' : ''); ?>  value="America/Kentucky/Louisville" >America/Kentucky/Louisville</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Kentucky/Monticello' ? 'selected' : ''); ?>  value="America/Kentucky/Monticello" >America/Kentucky/Monticello</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Kralendijk' ? 'selected' : ''); ?>  value="America/Kralendijk" >America/Kralendijk</option>
                                                                    <option <?php echo e($setting->timezone == 'America/La_Paz' ? 'selected' : ''); ?>  value="America/La_Paz" >America/La_Paz</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Lima' ? 'selected' : ''); ?>  value="America/Lima" >America/Lima</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Los_Angeles' ? 'selected' : ''); ?>  value="America/Los_Angeles" >America/Los_Angeles</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Lower_Princes' ? 'selected' : ''); ?>  value="America/Lower_Princes" >America/Lower_Princes</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Maceio' ? 'selected' : ''); ?>  value="America/Maceio" >America/Maceio</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Managua' ? 'selected' : ''); ?>  value="America/Managua" >America/Managua</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Manaus' ? 'selected' : ''); ?>  value="America/Manaus" >America/Manaus</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Marigot' ? 'selected' : ''); ?>  value="America/Marigot" >America/Marigot</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Martinique' ? 'selected' : ''); ?>  value="America/Martinique" >America/Martinique</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Matamoros' ? 'selected' : ''); ?>  value="America/Matamoros" >America/Matamoros</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Mazatlan' ? 'selected' : ''); ?>  value="America/Mazatlan" >America/Mazatlan</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Menominee' ? 'selected' : ''); ?>  value="America/Menominee" >America/Menominee</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Merida' ? 'selected' : ''); ?>  value="America/Merida" >America/Merida</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Metlakatla' ? 'selected' : ''); ?>  value="America/Metlakatla" >America/Metlakatla</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Mexico_City' ? 'selected' : ''); ?>  value="America/Mexico_City" >America/Mexico_City</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Miquelon' ? 'selected' : ''); ?>  value="America/Miquelon" >America/Miquelon</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Moncton' ? 'selected' : ''); ?>  value="America/Moncton" >America/Moncton</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Monterrey' ? 'selected' : ''); ?>  value="America/Monterrey" >America/Monterrey</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Montevideo' ? 'selected' : ''); ?>  value="America/Montevideo" >America/Montevideo</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Montserrat' ? 'selected' : ''); ?>  value="America/Montserrat" >America/Montserrat</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Nassau' ? 'selected' : ''); ?>  value="America/Nassau" >America/Nassau</option>
                                                                    <option <?php echo e($setting->timezone == 'America/New_York' ? 'selected' : ''); ?>  value="America/New_York" >America/New_York</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Nipigon' ? 'selected' : ''); ?>  value="America/Nipigon" >America/Nipigon</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Nome' ? 'selected' : ''); ?>  value="America/Nome" >America/Nome</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Noronha' ? 'selected' : ''); ?>  value="America/Noronha" >America/Noronha</option>
                                                                    <option <?php echo e($setting->timezone == 'America/North_Dakota/Beulah' ? 'selected' : ''); ?>  value="America/North_Dakota/Beulah" >America/North_Dakota/Beulah</option>
                                                                    <option <?php echo e($setting->timezone == 'America/North_Dakota/Center' ? 'selected' : ''); ?>  value="America/North_Dakota/Center" >America/North_Dakota/Center</option>
                                                                    <option <?php echo e($setting->timezone == 'America/North_Dakota/New_Salem' ? 'selected' : ''); ?>  value="America/North_Dakota/New_Salem" >America/North_Dakota/New_Salem</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Nuuk' ? 'selected' : ''); ?>  value="America/Nuuk" >America/Nuuk</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Ojinaga' ? 'selected' : ''); ?>  value="America/Ojinaga" >America/Ojinaga</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Panama' ? 'selected' : ''); ?>  value="America/Panama" >America/Panama</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Pangnirtung' ? 'selected' : ''); ?>  value="America/Pangnirtung" >America/Pangnirtung</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Paramaribo' ? 'selected' : ''); ?>  value="America/Paramaribo" >America/Paramaribo</option>


                                                                    <option <?php echo e($setting->timezone == 'America/Phoenix' ? 'selected' : ''); ?> value="America/Phoenix" >America/Phoenix</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Port-au-Prince' ? 'selected' : ''); ?> value="America/Port-au-Prince" >America/Port-au-Prince</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Port_of_Spain' ? 'selected' : ''); ?> value="America/Port_of_Spain" >America/Port_of_Spain</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Porto_Velho' ? 'selected' : ''); ?> value="America/Porto_Velho" >America/Porto_Velho</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Puerto_Rico' ? 'selected' : ''); ?> value="America/Puerto_Rico" >America/Puerto_Rico</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Punta_Arenas' ? 'selected' : ''); ?> value="America/Punta_Arenas" >America/Punta_Arenas</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Rainy_River' ? 'selected' : ''); ?> value="America/Rainy_River" >America/Rainy_River</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Rankin_Inlet' ? 'selected' : ''); ?> value="America/Rankin_Inlet" >America/Rankin_Inlet</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Recife' ? 'selected' : ''); ?> value="America/Recife" >America/Recife</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Regina' ? 'selected' : ''); ?> value="America/Regina" >America/Regina</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Resolute' ? 'selected' : ''); ?> value="America/Resolute" >America/Resolute</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Rio_Branco' ? 'selected' : ''); ?> value="America/Rio_Branco" >America/Rio_Branco</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Santarem' ? 'selected' : ''); ?> value="America/Santarem" >America/Santarem</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Santiago' ? 'selected' : ''); ?> value="America/Santiago" >America/Santiago</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Santo_Domingo' ? 'selected' : ''); ?> value="America/Santo_Domingo" >America/Santo_Domingo</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Sao_Paulo' ? 'selected' : ''); ?> value="America/Sao_Paulo" >America/Sao_Paulo</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Scoresbysund' ? 'selected' : ''); ?> value="America/Scoresbysund" >America/Scoresbysund</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Sitka' ? 'selected' : ''); ?> value="America/Sitka" >America/Sitka</option>
                                                                    <option <?php echo e($setting->timezone == 'America/St_Barthelemy' ? 'selected' : ''); ?> value="America/St_Barthelemy" >America/St_Barthelemy</option>
                                                                    <option <?php echo e($setting->timezone == 'America/St_Johns' ? 'selected' : ''); ?> value="America/St_Johns" >America/St_Johns</option>
                                                                    <option <?php echo e($setting->timezone == 'America/St_Kitts' ? 'selected' : ''); ?> value="America/St_Kitts" >America/St_Kitts</option>
                                                                    <option <?php echo e($setting->timezone == 'America/St_Lucia' ? 'selected' : ''); ?> value="America/St_Lucia" >America/St_Lucia</option>
                                                                    <option <?php echo e($setting->timezone == 'America/St_Thomas' ? 'selected' : ''); ?> value="America/St_Thomas" >America/St_Thomas</option>
                                                                    <option <?php echo e($setting->timezone == 'America/St_Vincent' ? 'selected' : ''); ?> value="America/St_Vincent" >America/St_Vincent</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Swift_Current' ? 'selected' : ''); ?> value="America/Swift_Current" >America/Swift_Current</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Tegucigalpa' ? 'selected' : ''); ?> value="America/Tegucigalpa" >America/Tegucigalpa</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Thule' ? 'selected' : ''); ?> value="America/Thule" >America/Thule</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Thunder_Bay' ? 'selected' : ''); ?> value="America/Thunder_Bay" >America/Thunder_Bay</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Tijuana' ? 'selected' : ''); ?> value="America/Tijuana" >America/Tijuana</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Toronto' ? 'selected' : ''); ?> value="America/Toronto" >America/Toronto</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Tortola' ? 'selected' : ''); ?> value="America/Tortola" >America/Tortola</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Vancouver' ? 'selected' : ''); ?> value="America/Vancouver" >America/Vancouver</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Whitehorse' ? 'selected' : ''); ?> value="America/Whitehorse" >America/Whitehorse</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Winnipeg' ? 'selected' : ''); ?> value="America/Winnipeg" >America/Winnipeg</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Yakutat' ? 'selected' : ''); ?> value="America/Yakutat" >America/Yakutat</option>
                                                                    <option <?php echo e($setting->timezone == 'America/Yellowknife' ? 'selected' : ''); ?> value="America/Yellowknife" >America/Yellowknife</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/Casey' ? 'selected' : ''); ?> value="Antarctica/Casey" >Antarctica/Casey</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/Davis' ? 'selected' : ''); ?> value="Antarctica/Davis" >Antarctica/Davis</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/DumontDUrville' ? 'selected' : ''); ?> value="Antarctica/DumontDUrville" >Antarctica/DumontDUrville</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/Macquarie' ? 'selected' : ''); ?> value="Antarctica/Macquarie" >Antarctica/Macquarie</option>


                                                                    <option <?php echo e($setting->timezone == 'Antarctica/Mawson' ? 'selected' : ''); ?> value="Antarctica/Mawson" >Antarctica/Mawson</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/McMurdo' ? 'selected' : ''); ?> value="Antarctica/McMurdo" >Antarctica/McMurdo</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/Palmer' ? 'selected' : ''); ?> value="Antarctica/Palmer" >Antarctica/Palmer</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/Rothera' ? 'selected' : ''); ?> value="Antarctica/Rothera" >Antarctica/Rothera</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/Syowa' ? 'selected' : ''); ?> value="Antarctica/Syowa" >Antarctica/Syowa</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/Troll' ? 'selected' : ''); ?> value="Antarctica/Troll" >Antarctica/Troll</option>
                                                                    <option <?php echo e($setting->timezone == 'Antarctica/Vostok' ? 'selected' : ''); ?> value="Antarctica/Vostok" >Antarctica/Vostok</option>
                                                                    <option <?php echo e($setting->timezone == 'Arctic/Longyearbyen' ? 'selected' : ''); ?> value="Arctic/Longyearbyen" >Arctic/Longyearbyen</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Aden' ? 'selected' : ''); ?> value="Asia/Aden" >Asia/Aden</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Almaty' ? 'selected' : ''); ?> value="Asia/Almaty" >Asia/Almaty</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Amman' ? 'selected' : ''); ?> value="Asia/Amman" >Asia/Amman</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Anadyr' ? 'selected' : ''); ?> value="Asia/Anadyr" >Asia/Anadyr</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Aqtau' ? 'selected' : ''); ?> value="Asia/Aqtau" >Asia/Aqtau</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Aqtobe' ? 'selected' : ''); ?> value="Asia/Aqtobe" >Asia/Aqtobe</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Ashgabat' ? 'selected' : ''); ?> value="Asia/Ashgabat" >Asia/Ashgabat</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Atyrau' ? 'selected' : ''); ?> value="Asia/Atyrau" >Asia/Atyrau</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Baghdad' ? 'selected' : ''); ?> value="Asia/Baghdad" >Asia/Baghdad</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Bahrain' ? 'selected' : ''); ?> value="Asia/Bahrain" >Asia/Bahrain</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Baku' ? 'selected' : ''); ?> value="Asia/Baku" >Asia/Baku</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Bangkok' ? 'selected' : ''); ?> value="Asia/Bangkok" >Asia/Bangkok</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Barnaul' ? 'selected' : ''); ?> value="Asia/Barnaul" >Asia/Barnaul</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Beirut' ? 'selected' : ''); ?> value="Asia/Beirut" >Asia/Beirut</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Bishkek' ? 'selected' : ''); ?> value="Asia/Bishkek" >Asia/Bishkek</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Brunei' ? 'selected' : ''); ?> value="Asia/Brunei" >Asia/Brunei</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Chita' ? 'selected' : ''); ?> value="Asia/Chita" >Asia/Chita</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Choibalsan' ? 'selected' : ''); ?> value="Asia/Choibalsan" >Asia/Choibalsan</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Colombo' ? 'selected' : ''); ?> value="Asia/Colombo" >Asia/Colombo</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Damascus' ? 'selected' : ''); ?> value="Asia/Damascus" >Asia/Damascus</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Dhaka' ? 'selected' : ''); ?> value="Asia/Dhaka" >Asia/Dhaka</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Dili' ? 'selected' : ''); ?> value="Asia/Dili" >Asia/Dili</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Dubai' ? 'selected' : ''); ?> value="Asia/Dubai" >Asia/Dubai</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Dushanbe' ? 'selected' : ''); ?> value="Asia/Dushanbe" >Asia/Dushanbe</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Famagusta' ? 'selected' : ''); ?> value="Asia/Famagusta" >Asia/Famagusta</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Gaza' ? 'selected' : ''); ?> value="Asia/Gaza" >Asia/Gaza</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Hebron' ? 'selected' : ''); ?> value="Asia/Hebron" >Asia/Hebron</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Ho_Chi_Minh' ? 'selected' : ''); ?> value="Asia/Ho_Chi_Minh" >Asia/Ho_Chi_Minh</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Hong_Kong' ? 'selected' : ''); ?> value="Asia/Hong_Kong" >Asia/Hong_Kong</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Hovd' ? 'selected' : ''); ?> value="Asia/Hovd" >Asia/Hovd</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Irkutsk' ? 'selected' : ''); ?> value="Asia/Irkutsk" >Asia/Irkutsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Jakarta' ? 'selected' : ''); ?> value="Asia/Jakarta" >Asia/Jakarta</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Jayapura' ? 'selected' : ''); ?> value="Asia/Jayapura" >Asia/Jayapura</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Jerusalem' ? 'selected' : ''); ?> value="Asia/Jerusalem" >Asia/Jerusalem</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Kabul' ? 'selected' : ''); ?> value="Asia/Kabul" >Asia/Kabul</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Kamchatka' ? 'selected' : ''); ?> value="Asia/Kamchatka" >Asia/Kamchatka</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Karachi' ? 'selected' : ''); ?> value="Asia/Karachi" >Asia/Karachi</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Kathmandu' ? 'selected' : ''); ?> value="Asia/Kathmandu" >Asia/Kathmandu</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Khandyga' ? 'selected' : ''); ?> value="Asia/Khandyga" >Asia/Khandyga</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Kolkata' ? 'selected' : ''); ?> value="Asia/Kolkata" >Asia/Kolkata</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Krasnoyarsk' ? 'selected' : ''); ?> value="Asia/Krasnoyarsk" >Asia/Krasnoyarsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Kuala_Lumpur' ? 'selected' : ''); ?> value="Asia/Kuala_Lumpur" >Asia/Kuala_Lumpur</option>


                                                                    <option <?php echo e($setting->timezone == 'Asia/Kuching' ? 'selected' : ''); ?> value="Asia/Kuching" >Asia/Kuching</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Kuwait' ? 'selected' : ''); ?> value="Asia/Kuwait" >Asia/Kuwait</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Macau' ? 'selected' : ''); ?> value="Asia/Macau" >Asia/Macau</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Magadan' ? 'selected' : ''); ?> value="Asia/Magadan" >Asia/Magadan</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Makassar' ? 'selected' : ''); ?> value="Asia/Makassar" >Asia/Makassar</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Manila' ? 'selected' : ''); ?> value="Asia/Manila" >Asia/Manila</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Muscat' ? 'selected' : ''); ?> value="Asia/Muscat" >Asia/Muscat</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Nicosia' ? 'selected' : ''); ?> value="Asia/Nicosia" >Asia/Nicosia</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Novokuznetsk' ? 'selected' : ''); ?> value="Asia/Novokuznetsk" >Asia/Novokuznetsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Novosibirsk' ? 'selected' : ''); ?> value="Asia/Novosibirsk" >Asia/Novosibirsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Omsk' ? 'selected' : ''); ?> value="Asia/Omsk" >Asia/Omsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Oral' ? 'selected' : ''); ?> value="Asia/Oral" >Asia/Oral</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Phnom_Penh' ? 'selected' : ''); ?> value="Asia/Phnom_Penh" >Asia/Phnom_Penh</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Pontianak' ? 'selected' : ''); ?> value="Asia/Pontianak" >Asia/Pontianak</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Pyongyang' ? 'selected' : ''); ?> value="Asia/Pyongyang" >Asia/Pyongyang</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Qatar' ? 'selected' : ''); ?> value="Asia/Qatar" >Asia/Qatar</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Qostanay' ? 'selected' : ''); ?> value="Asia/Qostanay" >Asia/Qostanay</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Qyzylorda' ? 'selected' : ''); ?> value="Asia/Qyzylorda" >Asia/Qyzylorda</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Riyadh' ? 'selected' : ''); ?> value="Asia/Riyadh" >Asia/Riyadh</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Sakhalin' ? 'selected' : ''); ?> value="Asia/Sakhalin" >Asia/Sakhalin</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Samarkand' ? 'selected' : ''); ?> value="Asia/Samarkand" >Asia/Samarkand</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Seoul' ? 'selected' : ''); ?> value="Asia/Seoul" >Asia/Seoul</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Shanghai' ? 'selected' : ''); ?> value="Asia/Shanghai" >Asia/Shanghai</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Singapore' ? 'selected' : ''); ?> value="Asia/Singapore" >Asia/Singapore</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Srednekolymsk' ? 'selected' : ''); ?> value="Asia/Srednekolymsk" >Asia/Srednekolymsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Taipei' ? 'selected' : ''); ?> value="Asia/Taipei" >Asia/Taipei</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Tashkent' ? 'selected' : ''); ?> value="Asia/Tashkent" >Asia/Tashkent</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Tbilisi' ? 'selected' : ''); ?> value="Asia/Tbilisi" >Asia/Tbilisi</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Tehran' ? 'selected' : ''); ?> value="Asia/Tehran" >Asia/Tehran</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Thimphu' ? 'selected' : ''); ?> value="Asia/Thimphu" >Asia/Thimphu</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Tokyo' ? 'selected' : ''); ?> value="Asia/Tokyo" >Asia/Tokyo</option>


                                                                    <option <?php echo e($setting->timezone == 'Asia/Tomsk' ? 'selected' : ''); ?> value="Asia/Tomsk" >Asia/Tomsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Ulaanbaatar' ? 'selected' : ''); ?>  value="Asia/Ulaanbaatar" >Asia/Ulaanbaatar</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Urumqi' ? 'selected' : ''); ?>  value="Asia/Urumqi" >Asia/Urumqi</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Ust-Nera' ? 'selected' : ''); ?>  value="Asia/Ust-Nera" >Asia/Ust-Nera</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Vientiane' ? 'selected' : ''); ?>  value="Asia/Vientiane" >Asia/Vientiane</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Vladivostok' ? 'selected' : ''); ?>  value="Asia/Vladivostok" >Asia/Vladivostok</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Yakutsk' ? 'selected' : ''); ?>  value="Asia/Yakutsk" >Asia/Yakutsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Yangon' ? 'selected' : ''); ?>  value="Asia/Yangon" >Asia/Yangon</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Yekaterinburg' ? 'selected' : ''); ?>  value="Asia/Yekaterinburg" >Asia/Yekaterinburg</option>
                                                                    <option <?php echo e($setting->timezone == 'Asia/Yerevan' ? 'selected' : ''); ?>  value="Asia/Yerevan" >Asia/Yerevan</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/Azores' ? 'selected' : ''); ?>  value="Atlantic/Azores" >Atlantic/Azores</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/Bermuda' ? 'selected' : ''); ?>  value="Atlantic/Bermuda" >Atlantic/Bermuda</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/Canary' ? 'selected' : ''); ?>  value="Atlantic/Canary" >Atlantic/Canary</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/Cape_Verde' ? 'selected' : ''); ?>  value="Atlantic/Cape_Verde" >Atlantic/Cape_Verde</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/Faroe' ? 'selected' : ''); ?>  value="Atlantic/Faroe" >Atlantic/Faroe</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/Madeira' ? 'selected' : ''); ?>  value="Atlantic/Madeira" >Atlantic/Madeira</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/Reykjavik' ? 'selected' : ''); ?>  value="Atlantic/Reykjavik" >Atlantic/Reykjavik</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/South_Georgia' ? 'selected' : ''); ?>  value="Atlantic/South_Georgia" >Atlantic/South_Georgia</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/St_Helena' ? 'selected' : ''); ?>  value="Atlantic/St_Helena" >Atlantic/St_Helena</option>
                                                                    <option <?php echo e($setting->timezone == 'Atlantic/Stanley' ? 'selected' : ''); ?>  value="Atlantic/Stanley" >Atlantic/Stanley</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Adelaide' ? 'selected' : ''); ?>  value="Australia/Adelaide" >Australia/Adelaide</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Brisbane' ? 'selected' : ''); ?>  value="Australia/Brisbane" >Australia/Brisbane</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Broken_Hill' ? 'selected' : ''); ?>  value="Australia/Broken_Hill" >Australia/Broken_Hill</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Darwin' ? 'selected' : ''); ?>  value="Australia/Darwin" >Australia/Darwin</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Eucla' ? 'selected' : ''); ?>  value="Australia/Eucla" >Australia/Eucla</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Hobart' ? 'selected' : ''); ?>  value="Australia/Hobart" >Australia/Hobart</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Lindeman' ? 'selected' : ''); ?>  value="Australia/Lindeman" >Australia/Lindeman</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Lord_Howe' ? 'selected' : ''); ?>  value="Australia/Lord_Howe" >Australia/Lord_Howe</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Melbourne' ? 'selected' : ''); ?>  value="Australia/Melbourne" >Australia/Melbourne</option>
                                                                    <option <?php echo e($setting->timezone == 'Australia/Perth' ? 'selected' : ''); ?>  value="Australia/Perth" >Australia/Perth</option>

                                                                    <option <?php echo e($setting->timezone == 'Australia/Sydney' ? 'selected' : ''); ?> value="Australia/Sydney" >Australia/Sydney</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Amsterdam' ? 'selected' : ''); ?> value="Europe/Amsterdam" >Europe/Amsterdam</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Andorra' ? 'selected' : ''); ?> value="Europe/Andorra" >Europe/Andorra</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Astrakhan' ? 'selected' : ''); ?> value="Europe/Astrakhan" >Europe/Astrakhan</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Athens' ? 'selected' : ''); ?> value="Europe/Athens" >Europe/Athens</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Belgrade' ? 'selected' : ''); ?> value="Europe/Belgrade" >Europe/Belgrade</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Berlin' ? 'selected' : ''); ?> value="Europe/Berlin" >Europe/Berlin</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Bratislava' ? 'selected' : ''); ?> value="Europe/Bratislava" >Europe/Bratislava</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Brussels' ? 'selected' : ''); ?> value="Europe/Brussels" >Europe/Brussels</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Bucharest' ? 'selected' : ''); ?> value="Europe/Bucharest" >Europe/Bucharest</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Budapest' ? 'selected' : ''); ?> value="Europe/Budapest" >Europe/Budapest</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Busingen' ? 'selected' : ''); ?> value="Europe/Busingen" >Europe/Busingen</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Chisinau' ? 'selected' : ''); ?> value="Europe/Chisinau" >Europe/Chisinau</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Copenhagen' ? 'selected' : ''); ?> value="Europe/Copenhagen" >Europe/Copenhagen</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Dublin' ? 'selected' : ''); ?> value="Europe/Dublin" >Europe/Dublin</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Gibraltar' ? 'selected' : ''); ?> value="Europe/Gibraltar" >Europe/Gibraltar</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Guernsey' ? 'selected' : ''); ?> value="Europe/Guernsey" >Europe/Guernsey</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Helsinki' ? 'selected' : ''); ?> value="Europe/Helsinki" >Europe/Helsinki</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Isle_of_Man' ? 'selected' : ''); ?> value="Europe/Isle_of_Man" >Europe/Isle_of_Man</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Istanbul' ? 'selected' : ''); ?> value="Europe/Istanbul" >Europe/Istanbul</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Jersey' ? 'selected' : ''); ?> value="Europe/Jersey" >Europe/Jersey</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Kaliningrad' ? 'selected' : ''); ?> value="Europe/Kaliningrad" >Europe/Kaliningrad</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Kiev' ? 'selected' : ''); ?> value="Europe/Kiev" >Europe/Kiev</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Kirov' ? 'selected' : ''); ?> value="Europe/Kirov" >Europe/Kirov</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Lisbon' ? 'selected' : ''); ?> value="Europe/Lisbon" >Europe/Lisbon</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Ljubljana' ? 'selected' : ''); ?> value="Europe/Ljubljana" >Europe/Ljubljana</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/London' ? 'selected' : ''); ?> value="Europe/London" >Europe/London</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Luxembourg' ? 'selected' : ''); ?> value="Europe/Luxembourg" >Europe/Luxembourg</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Madrid' ? 'selected' : ''); ?> value="Europe/Madrid" >Europe/Madrid</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Malta' ? 'selected' : ''); ?> value="Europe/Malta" >Europe/Malta</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Mariehamn' ? 'selected' : ''); ?> value="Europe/Mariehamn" >Europe/Mariehamn</option>

                                                                    <option <?php echo e($setting->timezone == 'Europe/Minsk' ? 'selected' : ''); ?> value="Europe/Minsk" >Europe/Minsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Monaco' ? 'selected' : ''); ?> value="Europe/Monaco" >Europe/Monaco</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Moscow' ? 'selected' : ''); ?> value="Europe/Moscow" >Europe/Moscow</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Oslo' ? 'selected' : ''); ?> value="Europe/Oslo" >Europe/Oslo</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Paris' ? 'selected' : ''); ?> value="Europe/Paris" >Europe/Paris</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Podgorica' ? 'selected' : ''); ?> value="Europe/Podgorica" >Europe/Podgorica</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Prague' ? 'selected' : ''); ?> value="Europe/Prague" >Europe/Prague</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Riga' ? 'selected' : ''); ?> value="Europe/Riga" >Europe/Riga</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Rome' ? 'selected' : ''); ?> value="Europe/Rome" >Europe/Rome</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Samara' ? 'selected' : ''); ?> value="Europe/Samara" >Europe/Samara</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/San_Marino' ? 'selected' : ''); ?> value="Europe/San_Marino" >Europe/San_Marino</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Sarajevo' ? 'selected' : ''); ?> value="Europe/Sarajevo" >Europe/Sarajevo</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Saratov' ? 'selected' : ''); ?> value="Europe/Saratov" >Europe/Saratov</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Simferopol' ? 'selected' : ''); ?> value="Europe/Simferopol" >Europe/Simferopol</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Skopje' ? 'selected' : ''); ?> value="Europe/Skopje" >Europe/Skopje</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Sofia' ? 'selected' : ''); ?> value="Europe/Sofia" >Europe/Sofia</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Stockholm' ? 'selected' : ''); ?> value="Europe/Stockholm" >Europe/Stockholm</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Tallinn' ? 'selected' : ''); ?> value="Europe/Tallinn" >Europe/Tallinn</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Tirane' ? 'selected' : ''); ?> value="Europe/Tirane" >Europe/Tirane</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Ulyanovsk' ? 'selected' : ''); ?> value="Europe/Ulyanovsk" >Europe/Ulyanovsk</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Uzhgorod' ? 'selected' : ''); ?> value="Europe/Uzhgorod" >Europe/Uzhgorod</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Vaduz' ? 'selected' : ''); ?> value="Europe/Vaduz" >Europe/Vaduz</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Vatican' ? 'selected' : ''); ?> value="Europe/Vatican" >Europe/Vatican</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Vienna' ? 'selected' : ''); ?> value="Europe/Vienna" >Europe/Vienna</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Vilnius' ? 'selected' : ''); ?> value="Europe/Vilnius" >Europe/Vilnius</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Volgograd' ? 'selected' : ''); ?> value="Europe/Volgograd" >Europe/Volgograd</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Warsaw' ? 'selected' : ''); ?> value="Europe/Warsaw" >Europe/Warsaw</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Zagreb' ? 'selected' : ''); ?> value="Europe/Zagreb" >Europe/Zagreb</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Zaporozhye' ? 'selected' : ''); ?> value="Europe/Zaporozhye" >Europe/Zaporozhye</option>
                                                                    <option <?php echo e($setting->timezone == 'Europe/Zurich' ? 'selected' : ''); ?> value="Europe/Zurich" >Europe/Zurich</option>
                                                                    <option <?php echo e($setting->timezone == 'Indian/Antananarivo' ? 'selected' : ''); ?> value="Indian/Antananarivo" >Indian/Antananarivo</option>
                                                                    <option <?php echo e($setting->timezone == 'Indian/Chagos' ? 'selected' : ''); ?> value="Indian/Chagos" >Indian/Chagos</option>

                                                                    <option  <?php echo e($setting->timezone == 'Indian/Christmas' ? 'selected' : ''); ?> value="Indian/Christmas" >Indian/Christmas</option>
                                                                    <option  <?php echo e($setting->timezone == 'Indian/Cocos' ? 'selected' : ''); ?> value="Indian/Cocos" >Indian/Cocos</option>
                                                                    <option  <?php echo e($setting->timezone == 'Indian/Comoro' ? 'selected' : ''); ?> value="Indian/Comoro" >Indian/Comoro</option>
                                                                    <option  <?php echo e($setting->timezone == 'Indian/Kerguelen' ? 'selected' : ''); ?> value="Indian/Kerguelen" >Indian/Kerguelen</option>
                                                                    <option  <?php echo e($setting->timezone == 'Indian/Mahe' ? 'selected' : ''); ?> value="Indian/Mahe" >Indian/Mahe</option>
                                                                    <option  <?php echo e($setting->timezone == 'Indian/Maldives' ? 'selected' : ''); ?> value="Indian/Maldives" >Indian/Maldives</option>
                                                                    <option  <?php echo e($setting->timezone == 'Indian/Mauritius' ? 'selected' : ''); ?> value="Indian/Mauritius" >Indian/Mauritius</option>
                                                                    <option  <?php echo e($setting->timezone == 'Indian/Mayotte' ? 'selected' : ''); ?> value="Indian/Mayotte" >Indian/Mayotte</option>
                                                                    <option  <?php echo e($setting->timezone == 'Indian/Reunion' ? 'selected' : ''); ?> value="Indian/Reunion" >Indian/Reunion</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Apia' ? 'selected' : ''); ?> value="Pacific/Apia" >Pacific/Apia</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Auckland' ? 'selected' : ''); ?> value="Pacific/Auckland" >Pacific/Auckland</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Bougainville' ? 'selected' : ''); ?> value="Pacific/Bougainville" >Pacific/Bougainville</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Chatham' ? 'selected' : ''); ?> value="Pacific/Chatham" >Pacific/Chatham</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Chuuk' ? 'selected' : ''); ?> value="Pacific/Chuuk" >Pacific/Chuuk</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Easter' ? 'selected' : ''); ?> value="Pacific/Easter" >Pacific/Easter</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Efate' ? 'selected' : ''); ?> value="Pacific/Efate" >Pacific/Efate</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Enderbury' ? 'selected' : ''); ?> value="Pacific/Enderbury" >Pacific/Enderbury</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Fakaofo' ? 'selected' : ''); ?> value="Pacific/Fakaofo" >Pacific/Fakaofo</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Fiji' ? 'selected' : ''); ?> value="Pacific/Fiji" >Pacific/Fiji</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Funafuti' ? 'selected' : ''); ?> value="Pacific/Funafuti" >Pacific/Funafuti</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Galapagos' ? 'selected' : ''); ?> value="Pacific/Galapagos" >Pacific/Galapagos</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Gambier' ? 'selected' : ''); ?> value="Pacific/Gambier" >Pacific/Gambier</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Guadalcanal' ? 'selected' : ''); ?> value="Pacific/Guadalcanal" >Pacific/Guadalcanal</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Guam' ? 'selected' : ''); ?> value="Pacific/Guam" >Pacific/Guam</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Honolulu' ? 'selected' : ''); ?> value="Pacific/Honolulu" >Pacific/Honolulu</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Kiritimati' ? 'selected' : ''); ?> value="Pacific/Kiritimati" >Pacific/Kiritimati</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Kosrae' ? 'selected' : ''); ?> value="Pacific/Kosrae" >Pacific/Kosrae</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Kwajalein' ? 'selected' : ''); ?> value="Pacific/Kwajalein" >Pacific/Kwajalein</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Majuro' ? 'selected' : ''); ?> value="Pacific/Majuro" >Pacific/Majuro</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Marquesas' ? 'selected' : ''); ?> value="Pacific/Marquesas" >Pacific/Marquesas</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Midway' ? 'selected' : ''); ?> value="Pacific/Midway" >Pacific/Midway</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Nauru' ? 'selected' : ''); ?> value="Pacific/Nauru" >Pacific/Nauru</option>
                                                                    <option  <?php echo e($setting->timezone == 'IPacific/Niue' ? 'selected' : ''); ?> value="Pacific/Niue" >Pacific/Niue</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Norfolk' ? 'selected' : ''); ?> value="Pacific/Norfolk" >Pacific/Norfolk</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Noumea' ? 'selected' : ''); ?> value="Pacific/Noumea" >Pacific/Noumea</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Pago_Pago' ? 'selected' : ''); ?> value="Pacific/Pago_Pago" >Pacific/Pago_Pago</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Palau' ? 'selected' : ''); ?> value="Pacific/Palau" >Pacific/Palau</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Pitcairn' ? 'selected' : ''); ?> value="Pacific/Pitcairn" >Pacific/Pitcairn</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Pohnpei' ? 'selected' : ''); ?> value="Pacific/Pohnpei" >Pacific/Pohnpei</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Port_Moresby' ? 'selected' : ''); ?> value="Pacific/Port_Moresby" >Pacific/Port_Moresby</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Rarotonga' ? 'selected' : ''); ?> value="Pacific/Rarotonga" >Pacific/Rarotonga</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Saipan' ? 'selected' : ''); ?> value="Pacific/Saipan" >Pacific/Saipan</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Tahiti' ? 'selected' : ''); ?> value="Pacific/Tahiti" >Pacific/Tahiti</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Tarawa' ? 'selected' : ''); ?> value="Pacific/Tarawa" >Pacific/Tarawa</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Tongatapu' ? 'selected' : ''); ?> value="Pacific/Tongatapu" >Pacific/Tongatapu</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Wake' ? 'selected' : ''); ?> value="Pacific/Wake" >Pacific/Wake</option>
                                                                    <option  <?php echo e($setting->timezone == 'Pacific/Wallis' ? 'selected' : ''); ?> value="Pacific/Wallis" >Pacific/Wallis</option>
                                                                    <option  <?php echo e($setting->timezone == 'UTC' ? 'selected' : ''); ?> value="UTC" >UTC</option>
                                                                </select>
                                                            </div>

                                                          <button class="btn btn-primary" type="submit"><?php echo e(__('admin.Update')); ?></button>

                                                      </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="logoTab" role="tabpanel" aria-labelledby="logo-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-logo-favicon')); ?>" method="POST" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Logo')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($setting->logo)); ?>" alt="" width="200px">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.New Logo')); ?></label>
                                                                <input type="file" name="logo" class="form-control-file">
                                                            </div>


                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Existing Favicon')); ?></label>
                                                                <div>
                                                                    <img src="<?php echo e(asset($setting->favicon)); ?>" alt="" width="50px">
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.New Favicon')); ?></label>
                                                                <input type="file" name="favicon" class="form-control-file">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="tab-pane fade" id="themeColorTab" role="tabpanel" aria-labelledby="cookie-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-theme-color')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>

                                                            <div class="form-group">
                                                                <label for="cookie_text"><?php echo e(__('admin.Primary Background')); ?></label>
                                                                <input type="color" value="<?php echo e($setting->theme_one_color); ?>" name="theme_one_color" class="form-control">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="cookie_text"><?php echo e(__('admin.Primary Foregorund')); ?></label>
                                                                <input type="color" value="<?php echo e($setting->theme_two_color); ?>" name="theme_two_color" class="form-control">
                                                            </div>

                                                            <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="cookieTab" role="tabpanel" aria-labelledby="cookie-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-cookie-consent')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>

                                                            <div class="form-group">
                                                                <label for="cookie_text"><?php echo e(__('admin.Message')); ?></label>
                                                                <textarea class="form-control text-area-5" name="message" id="cookie_text" cols="30" rows="5"><?php echo e($cookieConsent->message); ?></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="recaptchaTab" role="tabpanel" aria-labelledby="recaptcha-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-google-recaptcha')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Allow Recaptcha')); ?></label>
                                                                <select name="allow" id="allow" class="form-control">
                                                                    <option <?php echo e($googleRecaptcha->status == 1 ? 'selected' : ''); ?> value="1"><?php echo e(__('admin.Enable')); ?></option>
                                                                    <option <?php echo e($googleRecaptcha->status == 0 ? 'selected' : ''); ?> value="0"><?php echo e(__('admin.Disable')); ?></option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Captcha Site Key')); ?></label>
                                                                <input type="text" class="form-control" name="site_key" value="<?php echo e($googleRecaptcha->site_key); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Captcha Secret Key')); ?></label>
                                                                <input type="text" class="form-control" name="secret_key" value="<?php echo e($googleRecaptcha->secret_key); ?>">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="tab-pane fade" id="tawkChatTab" role="tabpanel" aria-labelledby="tawk-chat-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-tawk-chat')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Allow Live Chat')); ?></label>
                                                                <select name="allow" id="tawk_allow" class="form-control">
                                                                    <option <?php echo e($tawkChat->status == 1 ? 'selected' : ''); ?> value="1"><?php echo e(__('admin.Enable')); ?></option>
                                                                    <option <?php echo e($tawkChat->status == 0 ? 'selected' : ''); ?> value="0"><?php echo e(__('admin.Disable')); ?></option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Widget Id')); ?></label>
                                                                <input type="text" class="form-control" name="widget_id" value="<?php echo e($tawkChat->widget_id); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Property Id')); ?></label>
                                                                <input type="text" class="form-control" name="property_id" value="<?php echo e($tawkChat->property_id); ?>">
                                                            </div>



                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="tab-pane fade" id="googleAnalyticTab" role="tabpanel" aria-labelledby="google-analytic-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-google-analytic')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Allow Google Analytic')); ?></label>
                                                                <select name="allow" id="tawk_allow" class="form-control">
                                                                    <option <?php echo e($googleAnalytic->status == 1 ? 'selected' : ''); ?> value="1"><?php echo e(__('admin.Enable')); ?></option>
                                                                    <option <?php echo e($googleAnalytic->status == 0 ? 'selected' : ''); ?> value="0"><?php echo e(__('admin.Disable')); ?></option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Analytic Tracking Id')); ?></label>
                                                                <input type="text" class="form-control" name="analytic_id" value="<?php echo e($googleAnalytic->analytic_id); ?>">
                                                            </div>

                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="customPaginationTab" role="tabpanel" aria-labelledby="custom-pagination-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-custom-pagination')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>

                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="50%"><?php echo e(__('admin.Section Name')); ?></th>
                                                                        <th width="50%"><?php echo e(__('admin.Quantity')); ?></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $__currentLoopData = $customPaginations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customPagination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td><?php echo e($customPagination->page_name); ?></td>
                                                                        <td>
                                                                            <input type="number" value="<?php echo e($customPagination->qty); ?>" name="quantities[]" class="form-control">
                                                                            <input type="hidden" value="<?php echo e($customPagination->id); ?>" name="ids[]">
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>


                                                            </table>
                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="facebookPixelTab" role="tabpanel" aria-labelledby="facebook-pixel-tab">
                                                <div class="card m-0">
                                                    <div class="card-body">
                                                        <form action="<?php echo e(route('admin.update-facebook-pixel')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Allow Facebook Pixel')); ?></label>
                                                                <div>
                                                                    <?php if($facebookPixel->status == 1): ?>
                                                                    <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="allow_facebook_pixel">
                                                                    <?php else: ?>
                                                                    <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="<?php echo e(__('admin.Enable')); ?>" data-off="<?php echo e(__('admin.Disable')); ?>" data-onstyle="success" data-offstyle="danger" name="allow_facebook_pixel">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for=""><?php echo e(__('admin.Facebook App Id')); ?></label>
                                                                <input type="text" value="<?php echo e($facebookPixel->app_id); ?>" class="form-control" name="app_id">
                                                            </div>
                                                            <button class="btn btn-primary"><?php echo e(__('admin.Update')); ?></button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </section>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\testing\complete_game_topup\pak_game\resources\views/admin/setting.blade.php ENDPATH**/ ?>