<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    public function index()
    {
        $client = new Client();
        $products = 'http://localhost:8001/products';
        $services = 'http://localhost:8001/services';

        try {
            $response_products = $client->get($products);
            $response_services = $client->get($services);
            $data_products = json_decode($response_products->getBody()->getContents(), true);
            $data_services = json_decode($response_services->getBody()->getContents(), true);
            $data_products = $data_products['products'];
            $data_services = $data_services['services'];
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('index', compact('data_products', 'data_services'));
    }
}
