<?php namespace Bantenprov\LIPengeluaran\Http\Controllers;

/* require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\LIPengeluaran\Facades\LIPengeluaran;

/* Models */
use Bantenprov\LIPengeluaran\Models\Bantenprov\LIPengeluaran\LIPengeluaran as PdrbModel;
use Bantenprov\LIPengeluaran\Models\Bantenprov\LIPengeluaran\Province;
use Bantenprov\LIPengeluaran\Models\Bantenprov\LIPengeluaran\Regency;

/* etc */
use Validator;

/**
 * The LIPengeluaranController class.
 *
 * @package Bantenprov\LIPengeluaran
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LIPengeluaranController extends Controller
{

    protected $province;

    protected $regency;

    protected $li_pengeluaran;

    public function __construct(Regency $regency, Province $province, PdrbModel $li_pengeluaran)
    {
        $this->regency  = $regency;
        $this->province = $province;
        $this->li_pengeluaran     = $li_pengeluaran;
    }

    public function index(Request $request)
    {
        /* todo : return json */

        return 'index';

    }

    public function create()
    {

        return response()->json([
            'provinces' => $this->province->all(),
            'regencies' => $this->regency->all()
        ]);
    }

    public function show($id)
    {

        $li_pengeluaran = $this->li-pengeluaran->find($id);

        return response()->json([
            'negara'    => $li-pengeluaran->negara,
            'province'  => $li-pengeluaran->getProvince->name,
            'regencies' => $li-pengeluaran->getRegency->name,
            'tahun'     => $li-pengeluaran->tahun,
            'data'      => $li-pengeluaran->data
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'negara'        => 'required',
            'province_id'   => 'required',
            'regency_id'    => 'required',
            'kab_kota'      => 'required',
            'tahun'         => 'required|integer',
            'data'          => 'required|integer',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'title'     => 'error',
                'message'   => 'add failed',
                'type'      => 'failed',
                'errors'    => $validator->errors()
            ]);
        }

        $check = $this->li-pengeluaran->where('regency_id',$request->regency_id)->where('tahun',$request->tahun)->count();

        if($check > 0)
        {
            return response()->json([
                'title'         => 'error',
                'message'       => 'Data allready exist',
                'type'          => 'failed',
            ]);

        }else{
            $data = $this->li-pengeluaran->create($request->all());

            return response()->json([
                    'type'      => 'success',
                    'title'     => 'success',
                    'id'      => $data->id,
                    'message'   => 'PDRB '. $this->regency->find($request->regency_id)->name .' tahun '. $request->tahun .' successfully created',
                ]);
        }

    }

    public function update(Request $request, $id)
    {
        /* todo : return json */
        return '';

    }

    public function destroy($id)
    {
        /* todo : return json */
        return '';

    }
}

