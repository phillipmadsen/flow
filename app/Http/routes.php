<?php

/**
 * Simple Routes output for quick access and reference
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */

Route::get('/r', function ()
{
    function philsroutes()
    {
        $routeCollection = Route::getRoutes();
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
        echo "<div class='container'><div class='col-md-12'><table class='table table-striped' style='width:100%'>";
        echo '<tr>';
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='45%'><h4>Route</h4></td>";
        echo "<td width='45%'><h4>Corresponding Action</h4></td>";
        echo '</tr>';
        foreach ($routeCollection as $value)
        {
            echo '<tr>';
            echo '<td>' . $value->getMethods()[0] . '</td>';
            echo "<td><a href='" . $value->getPath() . "' target='_blank'>" . $value->getPath() . '</a> </td>';
            echo '<td>' . $value->getActionName() . '</td>';
            echo '</tr>';
        }
        echo '</table></div></div>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';
    }
    return philsroutes();
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('product', 'ProductController');
Route::resource('productfeature', 'ProductFeatureController');
Route::resource('productvariation', 'ProductVariationController');
Route::resource('image', 'ImageController');
Route::resource('profile', 'ProfileController');
Route::resource('price', 'PriceController');
Route::resource('locations', 'LocationsController');
Route::resource('ids', 'IdsController');
Route::resource('productoption', 'ProductOptionController');
Route::resource('manufacturer', 'ManufacturerController');
Route::resource('details', 'DetailsController');
Route::resource('category', 'CategoryController');
Route::resource('brand', 'BrandController');
Route::resource('dealer', 'DealerController');
Route::resource('promo', 'PromoController');
Route::resource('sale', 'SaleController');
Route::resource('quantity', 'QuantityController');
Route::resource('video', 'VideoController');
Route::resource('document', 'DocumentController');
Route::resource('schematype', 'SchemaTypeController');
Route::resource('seo', 'SeoController');
Route::resource('tracking', 'TrackingController');
Route::resource('datalayer', 'DataLayerController');


Route::post('ajax/upload_files', 'AjaxController@index');
Route::post('ajax/upload_files/delete', 'AjaxController@delete_image');