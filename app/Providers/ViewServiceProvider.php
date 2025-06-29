<?php

namespace App\Providers;

use App\Models\PantiAsuhanOperator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['dashboard', 'manajemen_akun', 'laporan'], function ($view) {
            if (Auth::guard('operator')->check()) { // Jika menggunakan guard khusus
                $operator = Auth::guard('operator')->user();
                $pantiAsuhan = PantiAsuhanOperator::where('operator_s_id', $operator->id)->first();
            } else {
                $pantiAsuhan = null;
            }
        
            $view->with('pantiAsuhan', $pantiAsuhan);
        });
    }
}
