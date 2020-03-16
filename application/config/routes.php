<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|z
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


$route['utama']='c_Front/afterlogin';
$route['C_Front/addcart/(:any)']='C_cartcontrol/addcart/$1';
$route['kelolaPelanggan3']='detailpesanan';
$route['logout'] = 'logout/logout';
$route['kelolapelanggan4/(:any)']='detailpesanan/detail/$1';
$route['kelolaPelanggan'] = 'konfirmasiPesanan/view';
$route['kelolaPelanggan1'] = 'konfirmasiPembayaran/view';
$route['kelolaPelanggan2'] = 'konfirmasiPengiriman/view';
$route['ubahresi'] = 'konfirmasiPengiriman/inputresi';
$route['stok'] = 'updateStok/view';
$route['ubahStatus1/(:any)/(:any)'] = 'konfirmasiPesanan/ubahStatus/$1/$2';
$route['ubahStatus2/(:any)'] = 'konfirmasiPembayaran/ubahStatus/$1';
$route['ubahstok'] = 'updateStok/ubahstok';
$route['updatecart']='C_cartcontrol/updatecart';
$route['cart']='C_Front/viewCart';
$route['deletecart/(:any)']='C_cartcontrol/deleteitem/$1';

$route['checkout2/(:any)']='C_Front/viewcekout/$1';
$route['checkout']='C_Front/viewcekout4';

$route['login'] = 'LoginMgr/login';

$route['login/(:any)'] = 'LoginMgr/login/$1';

$route['login2'] = 'LoginMgr/doLogin/user';

$route['default_controller'] = 'C_Front1';
$route['index'] = 'C_Front1/index'; //index
$route['detail'] = 'C_Front1/detailproduk'; //detgail produk
$route['korfirmasipembayaran'] = 'C_Customer/formKonfirmasi';
$route['editProfile']='C_Front1/editProfile'; //form profile

$route['updateprofile']='C_Front1/updateEditProfile';

$route['admin'] = 'C_admin';
$route['contact']='C_Front/contact';


$route['faq']='C_Front1/faq';
$route['signup/(:any)']='SignUpMgr/signup/$1';
$route['signup']='SignUpMgr/signup';
$route['signup2']='SignUpMgr/dosignup';

$route['statusPesanan']='C_Pesanan/order';
$route['LaporanMgr']='LaporanMgr';


$route['profile']='C_Customer/profile';

$route['formKonfirmasi/(:any)']='C_Pembayaran/konfirmasi/$1';
$route['createKonfirmasi']='C_Pembayaran/createKonfirmasi';

$route['order']='C_Pesanan/order';
//frontend
// $route['sambutan'] = 'MyController/sambutan';
// $route['visimisi'] = 'MyController/visimisi';
// $route['perbup'] = 'MyController/perbup';
// $route['petapuskesmas'] = 'MyController/puskesmas';
// $route['petarumahsakit'] = 'MyController/rumahsakit';
// $route['kontak'] = 'MyController/kontak';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

