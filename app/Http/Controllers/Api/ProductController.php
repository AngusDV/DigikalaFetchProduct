<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ExportPdfRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class ProductController extends Controller
{
    public function exportPdf(ExportPdfRequest $request)
    {
        $slug=explode("-",$request->slug)[1];
        $product=Http::get('https://api.digikala.com/v1/product/'.$slug.'/')->json();
        $product=array_to_object($product);
        $pdf = PDF::loadView('pdf', compact('product'))->setOptions([
            'viewport-size' => '1024x768',
            'enable-external-links' => true,
            'load-error-handling' => 'ignore',
            'javascript-delay' => 3000,
            'enable-javascript' => true,
            'page-size' => 'a4',
            'encoding' => 'UTF-8',
            'header-spacing' => "0",
            'disable-smart-shrinking' => true,
            'margin-left' => '0',
            'margin-right' => '0',
            'background' => true,
            'orientation' => 'portrait',
            'page-width' => "210mm",
            'page-height' => "297mm",
            'enable-local-file-access' => true,
            'enable-internal-links' => true,
            'images' => true

        ]);
        return $pdf->download('product-'.$request->slug.'.pdf');

    }
}
