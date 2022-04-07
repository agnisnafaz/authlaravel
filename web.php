<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeLoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SambatfoodController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\TenantLoginController;
use App\Http\Controllers\ToolsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('meja1', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 1, 'code' => '$2y$10$yubuCoD429B0KOoGFEyBTuNOaWSwX54WIVWhoo0JebZCKgGeQqCxa']));
});
Route::get('meja2', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 2, 'code' => '$2y$10$9e3r49AdgXkvxaHR6rwZGevW.1VXfPGOpZkRHhCvlh47NtJa6sAnS']));
});
Route::get('meja3', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 3, 'code' => '$2y$10$YX365dK7ODt2kKl6U8PAjOEma8jWKW3IQNTo27nmLUwZcDZXbE29K']));
});
Route::get('meja4', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 4, 'code' => '$2y$10$1y82M0vjLQrYPyA.G0VuIeUVLA5.EMjmvAPOWQ.gKzTqal0cxJUa']));
});
Route::get('meja5', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 5, 'code' => '$2y$10$3kZKzRt2sUme6ETu5ugMOOhQxZThOmcfHaJNK2N4xsGRoNljPqlC']));
});
Route::get('meja6', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 6, 'code' => '$2y$10$56e8e86WPHJSA3aHz1YfMOS.zfpbnrTJi6cyL6qd52ByyHmMGcudi']));
});
Route::get('meja7', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 7, 'code' => '$2y$10$kZH9luYEtGi3RfikG2mBveErBJ9HptLRdZLQ.CH70WR.lelctOUcy']));
});
Route::get('meja8', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 8, 'code' => '$2y$10$qju9Opd4spEF4K2uILe1Tui1Mvm4InnDfOYVgo3yIrgIuaQiV0K6']));
});
Route::get('meja9', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 9, 'code' => '$2y$10$fV9DUJ.VdgdzFb7Aj7.mpOo.Tv5RqGpFr8OLOC12MXPpng39EOy2']));
});
Route::get('meja10', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 10, 'code' => '$2y$10$b7Qd4lfDDgithsjB48cv3OsIcm9a674WOyBy9Zp6vwJAFzrccxAwK']));
});
Route::get('meja11', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 11, 'code' => '$2y$10$PI0cRrMdE0hrbWRCWcm2yurfyIGQrZrtX8XMjoJHL4HQqz6dwa1i']));
});
Route::get('meja12', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 12, 'code' => '$2y$10$Gv.SLu2jOZBvh6FXTMsX.jQ8TfPCmH74WhgPokaArAgJv0bjNt6C']));
});
Route::get('meja13', function () {
    return QrCode::size(400)->generate(route('page.table', ['id' => 13, 'code' => '$2y$10$CMre1k2kT2NFBv63sbSLiubl3YHF.0CTZ8IFpZoD1UsM9PPq.6.i']));
});
Route::get('take-away', function () {
    return QrCode::size(400)->generate(route('page.take-away', ['code' => '$2y$10$CMre1k2kT2NFesfdnejenedfsk0CTZ8IFpZoD1UsM9PPq6i']));
});

// Tools
Route::get('tools/product-import', [ToolsController::class, 'product_import'])->name('tool.product-import');
Route::post('tools/do-import', [ToolsController::class, 'do_import'])->name('tool.do-import');
Route::get('update-detail', [ToolsController::class, 'update_detail'])->name('tool.update-detail');
Route::get('catalog', [ToolsController::class, 'catalog'])->name('get-catalog');
Route::get('tools/send_notif/{number}', [ToolsController::class, 'send_notif'])->name('tool.send-notif');
Route::get('tools/send_notif_app/{number}', [ToolsController::class, 'send_notif_app'])->name('tool.send-notif-app');


// fornt page
Route::get('/', [PageController::class, 'category_list'])->name('page.category-list');
Route::get('menu-new/{category_id}', [PageController::class, 'menu_new'])->name('page.menu-new');
Route::get('product/detail', [PageController::class, 'ajx_product_detail'])->name('page.product-detail');
Route::get('table/{id}/{code}', [PageController::class, 'table_check'])->name('page.table');
Route::get('takeaway/{code}', [PageController::class, 'take_away'])->name('page.take-away');
Route::get('table-booked', [PageController::class, 'table_booked'])->name('page.table-booked');
Route::get('access-denied', [PageController::class, 'access_denied'])->name('page.access-denied');
// Route::get('/', [PageController::class, 'menu'])->name('page.menu');
Route::post('check_stock', [PageController::class, 'check_stock'])->name('check-stock');
Route::post('cart-action', [PageController::class, 'cart_action'])->name('cart.action');
Route::post('add-voucher', [PageController::class, 'add_voucher'])->name('add-voucher');
Route::get('remove-voucher', [PageController::class, 'remove_voucher'])->name('remove-voucher');
Route::get('cart', [PageController::class, 'cart'])->name('page.cart');
Route::post('checkout', [PageController::class, 'checkout'])->name('page.checkout');
Route::get('order/qrcode/{code}', [PageController::class, 'order_qrcode'])->name('page.order-qrcode');
Route::post('order/qrcode/ajx/order-list', [PageController::class, 'get_order_list'])->name('page.get-order-list');
Route::post('get-category', [PageController::class, 'get_category'])->name('get-category');

Route::get('sambatfood', [SambatfoodController::class, 'sambatfood'])->name('page.sambatfood');
Route::get('sambatfood/category/{category_id}', [SambatfoodController::class, 'sambatfood_menu'])->name('page.sambatfood-menu');
Route::post('sambatfood/get-desa', [SambatfoodController::class, 'get_desa'])->name('page.sambatfood-get-desa');
Route::get('sambatfood/cart', [SambatfoodController::class, 'sambatfood_cart'])->name('page.sambatfood-cart');
Route::post('sambatfood/checkout', [SambatfoodController::class, 'sambatfood_checkout'])->name('page.sambatfood-checkout');
Route::post('sambatfood/qris-download', [SambatfoodController::class, 'sambatfood_qris_download'])->name('page.sambatfood-qris-download');
Route::get('sambatfood/payment/{code}', [SambatfoodController::class, 'sambatfood_payment'])->name('page.sambatfood-payment');
Route::post('sambatfood/do-payment/submit', [SambatfoodController::class, 'sambatfood_payment_submit'])->name('page.sambatfood-payment-submit');
Route::get('sambatfood/order-success/{code}', [SambatfoodController::class, 'sambatfood_order_success'])->name('page.sambatfood-order-success');




// employee dashboard
Route::get('employee/login', [EmployeeLoginController::class, 'login'])->name('employee.login');
Route::post('employee/login', [EmployeeLoginController::class, 'do_login'])->name('employee.do-login');
Route::get('employee/logout', [EmployeeController::class, 'logout'])->name('employee.logout');
Route::middleware(['auth:employee'])->group(function() {
    Route::middleware(['waiter'])->group(function () {
        Route::get('waiters/dashboard', [WaiterController::class, 'dashboard'])->name('waiter.dashboard');
        Route::get('waiters/table/list', [WaiterController::class, 'table_list'])->name('waiter.table-list');
        Route::get('waiters/table/order/{id}', [WaiterController::class, 'table_order'])->name('waiter.table-order');
        Route::post('waiters/ajx/table/order', [WaiterController::class, 'ajx_table_order'])->name('waiter.ajx.table-order');
        Route::post('waiters/table/order/merger/submit', [WaiterController::class, 'table_order_merge'])->name('waiter.table-order-submit');
        Route::get('waiters/order/detail/{code}', [WaiterController::class, 'order_detail'])->name('waiter.order-detail');
        Route::get('waiters/order/edit/{code}', [WaiterController::class, 'order_edit'])->name('waiter.order-edit');
        Route::get('waiters/order/update/{code}', [WaiterController::class, 'order_update'])->name('waiter.order-update');
        Route::get('waiters/order/cancel/{code}', [WaiterController::class, 'order_cancel'])->name('waiter.order-cancel');
        Route::post('waiters/order/confirm', [WaiterController::class, 'order_confirm'])->name('waiter.order-confirm');
        Route::get('waiters/order/payment/{code}', [WaiterController::class, 'order_payment'])->name('waiter.order-payment');
        Route::post('waiters/order/payment/submit', [WaiterController::class, 'order_payment_submit'])->name('waiter.order-payment-submit');
        Route::get('waiters/order/success/{code}', [WaiterController::class, 'order_success'])->name('waiter.order-success');
        Route::get('waiters/order/bill/{code}', [WaiterController::class, 'order_bill'])->name('waiter.order-bill');
        Route::get('waiters/recap/order', [WaiterController::class, 'recap_order'])->name('waiter.recap-order');
        Route::get('waiters/order/ready/{code}', [WaiterController::class, 'order_ready'])->name('waiter.order-ready');
        Route::post('waiters/order/add', [WaiterController::class, 'order_add'])->name('waiter.order-add');
        Route::post('waiters/order/check', [WaiterController::class, 'order_check'])->name('waiter.order-check');
        Route::get('waiters/order/done/{code}', [WaiterController::class, 'order_done'])->name('waiter.order-done');
        Route::get('waiters/profile/edit', [WaiterController::class, 'profile_edit'])->name('waiter.profile-edit');
        Route::post('waiters/profile/update', [WaiterController::class, 'profile_update'])->name('waiter.profile-update');
        Route::get('waiters/password/edit', [WaiterController::class, 'password_edit'])->name('waiter.password-edit');
        Route::post('waiters/password/update', [WaiterController::class, 'password_update'])->name('waiter.password-update');
        Route::get('waiters/logout', [WaiterController::class, 'logout'])->name('waiter.logout');
    });
    
    Route::middleware(['cashier'])->group(function () {
        Route::get('cashiers/dashboard', [CashierController::class, 'dashboard'])->name('cashier.dashboard');
        // Sambatfood
        Route::get('cashiers/order/sambatfood', [CashierController::class, 'order_sambatfood'])->name('cashier.order-sambatfood');
        Route::get('cashiers/order/sambatfood/detail/{code}', [CashierController::class, 'order_sambatfood_detail'])->name('cashier.order-sambatfood-detail');
        Route::post('cashiers/order/sambatfood/confirm', [CashierController::class, 'order_sambatfood_confirm'])->name('cashier.order-sambatfood-confirm');
        Route::post('cashiers/order/sambatfood/submit-driver', [CashierController::class, 'order_sambatfood_submit_driver'])->name('cashier.order-sambatfood-submit-driver');
        // Gofood
        Route::get('cashiers/order/gofood/category', [CashierController::class, 'order_gofood_category'])->name('cashier.order-gofood-category');
        Route::get('cashiers/order/gofood/menu/{category_id}', [CashierController::class, 'order_gofood_menu'])->name('cashier.order-gofood-menu');
        Route::get('cashiers/order/gofood/cart', [CashierController::class, 'order_gofood_cart'])->name('cashier.order-gofood-cart');
        Route::post('cashier/order/gofood/checkout', [CashierController::class, 'order_gofood_checkout'])->name('cashier.order-gofood-checkout');
        Route::get('cashier/order/gofood/qrcode/{code}', [CashierController::class, 'order_gofood_qrcode'])->name('page.order-gofood-qrcode');

        Route::get('cashiers/order/new', [CashierController::class, 'order_new'])->name('cashier.order-new');
        Route::get('cashiers/order/list', [CashierController::class, 'order_list'])->name('cashier.order-list');
        Route::get('cashiers/order/detail/{code}', [CashierController::class, 'order_detail'])->name('cashier.order-detail');
        Route::get('cashiers/order/ready/{code}', [CashierController::class, 'order_ready'])->name('cashier.order-ready');
        Route::post('cashiers/order/insert-driver', [CashierController::class, 'insert_driver'])->name('cashier.insert-driver');
        Route::get('cashiers/order/edit/{code}', [CashierController::class, 'order_edit'])->name('cashier.order-edit');
        Route::get('cashiers/order/update/{code}', [CashierController::class, 'order_update'])->name('cashier.order-update');
        Route::get('cashiers/order/cancel/{code}', [CashierController::class, 'order_cancel'])->name('cashier.order-cancel');
        Route::post('cashiers/order/confirm', [CashierController::class, 'order_confirm'])->name('cashier.order-confirm');
        Route::get('cashiers/order/payment/{code}', [CashierController::class, 'order_payment'])->name('cashier.order-payment');
        Route::post('cashiers/order/payment/submit', [CashierController::class, 'order_payment_submit'])->name('cashier.order-payment-submit');
        Route::get('cashiers/order/success/{code}', [CashierController::class, 'order_success'])->name('cashier.order-success');
        Route::get('cashiers/order/bill/{code}', [CashierController::class, 'order_bill'])->name('cashier.order-bill');
        Route::get('cashiers/order/done/{code}', [CashierController::class, 'order_done'])->name('cashier.order-done');
        Route::get('cashiers/table/use', [CashierController::class, 'table_use'])->name('cashier.table-use');
        Route::get('cashiers/table/book/{id}', [CashierController::class, 'table_book'])->name('cashier.table-book');
        Route::get('cashiers/recap/order', [CashierController::class, 'recap_order'])->name('cashier.recap-order');
        Route::get('cashiers/recap/order/detail/{code}', [CashierController::class, 'recap_order_detail'])->name('cashier.recap-order-detail');
        Route::get('cashiers/profile/edit', [CashierController::class, 'profile_edit'])->name('cashier.profile-edit');
        Route::post('cashiers/profile/update', [CashierController::class, 'profile_update'])->name('cashier.profile-update');
        Route::get('cashiers/password/edit', [CashierController::class, 'password_edit'])->name('cashier.password-edit');
        Route::post('cashiers/password/update', [CashierController::class, 'password_update'])->name('cashier.password-update');
        Route::get('cashiers/logout', [CashierController::class, 'logout'])->name('cashier.logout');
    });
});

// Tenant
Route::get('tenant/login', [TenantLoginController::class, 'login'])->name('tenant.login');
Route::post('tenant/login', [TenantLoginController::class, 'do_login'])->name('tenant.do-login');
Route::middleware(['auth:tenant'])->group(function() {
    Route::get('tenant/dashboard', [TenantController::class, 'dashboard'])->name('tenant.dashboard');
    Route::get('tenant/status/change/{status}', [TenantController::class, 'change_status_tenant'])->name('tenant.change-status-tenant');
    Route::get('tenant/order/new', [TenantController::class, 'order_new'])->name('tenant.order-new');
    Route::get('tenant/order/detail/{code}', [TenantController::class, 'order_detail'])->name('tenant.order-detail');
    Route::get('tenant/order/change-status/{code}/{status}', [TenantController::class, 'order_change_status'])->name('tenant.order-change-status');
    Route::get('tenant/order/print/{code}', [TenantController::class, 'order_print'])->name('tenant.order-print');
    Route::get('tenant/recap/order/list', [TenantController::class, 'recap_order'])->name('tenant.recap-order');
    Route::get('tenant/stock/today', [TenantController::class, 'stock_today'])->name('tenant.stock-today');
    Route::post('tenant/stock/get-product', [TenantController::class, 'ajx_get_product'])->name('tenant.ajx.get-product');
    Route::post('tenant/stock/submit', [TenantController::class, 'stock_submit'])->name('tenant.stock-submit');
    Route::post('tenant/stock/update', [TenantController::class, 'stock_update'])->name('tenant.stock-update');
    Route::get('tenant/stock/history', [TenantController::class, 'stock_history'])->name('tenant.stock-history');
    Route::get('tenant/stock/product', [TenantController::class, 'stock_product'])->name('tenant.stock-product');
    Route::get('tenant/profile/edit', [TenantController::class, 'profile_edit'])->name('tenant.profile-edit');
    Route::post('tenant/profile/update', [TenantController::class, 'profile_update'])->name('tenant.profile-update');
    Route::get('tenant/password/edit', [TenantController::class, 'password_edit'])->name('tenant.password-edit');
    Route::post('tenant/password/update', [TenantController::class, 'password_update'])->name('tenant.password-update');
    Route::get('tenant/logout', [TenantController::class, 'logout'])->name('tenant.logout');
});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';
require __DIR__.'/admin.php';