<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class OptimizationController extends Controller
{
    //
    public function runOptimize()
    {
        try {
            // Run the artisan optimize command
            Artisan::call('optimize');

            // Return a response
            return response()->json([
                'status' => 'success',
                'message' => 'Application optimized successfully!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function runOptimizeClear()
    {
        try {
            // Run the artisan optimize:clear command
            Artisan::call('optimize:clear');

            // Return a response
            return response()->json([
                'status' => 'success',
                'message' => 'Application optimization cleared successfully!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }}
