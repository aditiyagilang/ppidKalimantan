<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function fetchNews(Request $request)
    {
        try {
            $response = Http::withOptions([
                'verify' => false,
            ])->get('https://berita-indo-api-next.vercel.app/api/tribun-news/kaltim/');
            
            
            if ($response->successful()) {
                $newsData = $response->json();
                return response()->json(['status' => 'success', 'data' => $newsData]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to fetch news. HTTP Status: ' . $response->status()
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat mengakses API: ' . $e->getMessage()
            ]);
        }
    }
}

