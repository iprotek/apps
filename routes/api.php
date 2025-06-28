<?php

use Illuminate\Support\Facades\Route; 
use iProtek\Core\Http\Controllers\Manage\FileUploadController; 
use iProtek\Core\Http\Controllers\AppVariableController;
use iProtek\SmsSender\Http\Controllers\MessageController;
use iProtek\SmsSender\Http\Controllers\SmsClientApiRequestLinkController;

Route::prefix('api')->middleware('api')->name('api')->group(function(){ 

    Route::prefix('apps/group/{group_id}')->middleware(['pay.api'])->name('.apps')->group(function(){
      
      //FILE UPLOADS
      //include(__DIR__.'/api/file-upload.php');

      //FILE UPLOADS
      //include(__DIR__.'/api/meta-data.php'); 

    });
 
}); 
