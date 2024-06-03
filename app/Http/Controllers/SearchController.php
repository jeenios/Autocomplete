<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function cari(Request $request)
    {
        // if ($request->get('query')) {
        //     $query = $request->get('query');
        //     $data = DB::table('barangs')
        //         ->where('nama_barang', 'LIKE', "%{$query}%")
        //         ->get();
        //     $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        //     foreach ($data as $row) {
        //         $output .= '<li><a href="#">' . $row->nama_barang . '</a></li>';
        //     }
        //     $output .= '</ul>';
        //     echo $output;
        // }

        if ($request->has('query')) {
            $query = $request->get('query');
            $data = DB::table('barangs')
                ->where('nama_barang', 'LIKE', "%{$query}%")
                ->get();

            if ($data->isEmpty()) {
                echo '<ul class="dropdown-menu" style="display:block; position:relative">';
                echo '<li>Data tidak ditemukan</li>';
                echo '</ul>';
            } else {
                $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                foreach ($data as $row) {
                    $output .= '<li><a href="#">' . $row->nama_barang . '</a></li>';
                }
                $output .= '</ul>';
                echo $output;
            }
        }
    }
}