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
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//master produk
$route['master_produk'] = 'admins/Master_Produk';
$route['master_produk/form'] = 'admins/Master_Produk/form';
$route['master_produk/save'] = 'admins/Master_Produk/save';
$route['master_produk/delete'] = 'admins/Master_Produk/delete';

//user admin
$route['master_user_admin'] = 'admins/Master_User_Admin';
$route['master_user_admin/form'] = 'admins/Master_User_Admin/form';
$route['master_user_admin/save'] = 'admins/Master_User_Admin/save';
$route['master_user_admin/delete'] = 'admins/Master_User_Admin/delete';
$route['master_kurir'] = 'admins/Master_Kurir';
$route['master_kurir/form'] = 'admins/Master_Kurir/form';
$route['master_kurir/save'] = 'admins/Master_Kurir/save';
$route['master_kurir/delete'] = 'admins/Master_Kurir/delete';

//shop katalog
$route['katalog'] = 'clients/Katalog';
$route['product_detail'] = 'clients/Katalog/detail';
$route['add_trx'] = 'clients/Katalog/add_trx';

//order
$route['order'] = 'clients/Order';
$route['proses_order'] = 'clients/Order/proses_order';
$route['hapus_item'] = 'clients/Order/hapus_item';

//daftar transaksi
$route['daftar_transaksi'] = 'clients/Daftar_Transaksi';
$route['daftar_transaksi/proses'] = 'clients/Daftar_Transaksi/proses';
$route['daftar_transaksi/enroute'] = 'clients/Daftar_Transaksi/enroute';
$route['daftar_transaksi/selesai'] = 'clients/Daftar_Transaksi/selesai';
$route['detail_transaksi'] = 'clients/Daftar_Transaksi/detail';
$route['print_transaksi'] = 'clients/Daftar_Transaksi/printTransaksi';

//manage order
$route['manage_order'] = 'admins/Manage_Order';
$route['proses_transaksi'] = 'admins/Manage_Order/prosesTransaksi';

//manage pengiriman
$route['manage_pengiriman'] = 'admins/Manage_Pengiriman';
$route['manage_pengiriman/enroute'] = 'admins/Manage_Pengiriman/enroute';
$route['kirim_barang'] = 'admins/Manage_Pengiriman/prosesPengiriman';
$route['selesai_kirim'] = 'admins/Manage_Pengiriman/selesaiKirim';

//laporan transakasi
$route['laporan_transaksi'] = 'admins/Laporan_Transaksi';
$route['print_laporan'] = 'admins/Laporan_Transaksi/printLaporan';

