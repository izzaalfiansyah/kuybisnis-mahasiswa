<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;
use App\Models\ProsesPemasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    function index()
    {
        $proses = ProsesPemasaran::where('kelompok_id', Auth::user()->kelompok?->id)->first();
        $total = DB::table('penjualan')->selectRaw('sum(biaya_tetap + biaya_variabel + biaya_operasional + biaya_non_operasional + biaya_pajak) as total_biaya, sum(harga_jual_produk * penjualan_bersih) as total_penjualan')->where('kelompok_id', Auth::user()->kelompok?->id)->first();

        $grafik = [
            'labels' => json_encode([]),
            'penjualan' => json_encode([]),
            'total_penjualan' => json_encode([]),
            'total_biaya' => json_encode([]),
            'nilai_keuntungan' => json_encode([]),
        ];

        $totalHasil = (int) $total->total_penjualan - $total->total_biaya;

        if ($totalHasil > $proses->modal_usaha * 2) {
            $medal = 'gold';
        } else if ($totalHasil > $proses->modal_usaha * 1.5) {
            $medal = 'silver';
        } else if ($totalHasil > $proses->modal_usaha) {
            $medal = 'bronze';
        } else {
            $medal = 'nope';
        }

        $hasil = [
            'modal' => $proses->modal_usaha,
            'biaya' => (int) $total->total_biaya,
            'penjualan' => (int) $total->total_penjualan,
            'total' => $totalHasil,
            'medal' => $medal,
        ];

        if ($proses->jenis_laporan == 'harian') {
            $data_penjualan = Penjualan::where('kelompok_id', Auth::user()->kelompok?->id)->limit(7)->orderBy('created_at', 'desc')->paginate();

            foreach ($data_penjualan as $item) {
                $labels[] = formatDate($item->created_at);
                $penjualan[] = $item->penjualan_bersih;
                $total_penjualan[] = $item->total_penjualan_bersih;
                $total_biaya[] = $item->total_biaya;
                $nilai_keuntungan[] = $item->nilai_keuntungan_bersih;
            }

            $grafik['labels'] = json_encode($labels);
            $grafik['penjualan'] = json_encode($penjualan);
            $grafik['total_penjualan'] = json_encode($total_penjualan);
            $grafik['total_biaya'] = json_encode($total_biaya);
            $grafik['nilai_keuntungan'] = json_encode($nilai_keuntungan);
        }

        return view('user.laporan.index', compact('grafik', 'hasil'));
    }
}
