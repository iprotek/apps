<?php

use Illuminate\Support\Facades\Route; 

include(__DIR__.'/api.php');

Route::middleware(['web'])->group(function(){
 
    Route::middleware(['auth'])->prefix('manage')->name('manage')->group(function(){
        
        Route::prefix('apps')->name('.apps')->group(function(){

            //GET APP LISTS BASED ON THE LINK
            
        }); 

    });
  
});