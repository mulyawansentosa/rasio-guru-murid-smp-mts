<?php namespace Bantenprov\RasioGMSmpMts\Http\Controllers;

/* require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\RasioGMSmpMts\Facades\RasioGMSmpMts;

/* Models */
use Bantenprov\RasioGMSmpMts\Models\Bantenprov\RasioGMSmpMts\RasioGMSmpMts as PdrbModel;
use Bantenprov\RasioGMSmpMts\Models\Bantenprov\RasioGMSmpMts\Province;
use Bantenprov\RasioGMSmpMts\Models\Bantenprov\RasioGMSmpMts\Regency;

/* etc */
use Validator;

/**
 * The RasioGMSmpMtsController class.
 *
 * @package Bantenprov\RasioGMSmpMts
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSmpMtsController extends Controller
{

    protected $province;

    protected $regency;

    protected $rasio-guru-murid-smp-mts;

    public function __construct(Regency $regency, Province $province, PdrbModel $rasio-guru-murid-smp-mts)
    {
        $this->regency  = $regency;
        $this->province = $province;
        $this->rasio-guru-murid-smp-mts     = $rasio-guru-murid-smp-mts;
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

        $rasio-guru-murid-smp-mts = $this->rasio-guru-murid-smp-mts->find($id);

        return response()->json([
            'negara'    => $rasio-guru-murid-smp-mts->negara,
            'province'  => $rasio-guru-murid-smp-mts->getProvince->name,
            'regencies' => $rasio-guru-murid-smp-mts->getRegency->name,
            'tahun'     => $rasio-guru-murid-smp-mts->tahun,
            'data'      => $rasio-guru-murid-smp-mts->data
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

        $check = $this->rasio-guru-murid-smp-mts->where('regency_id',$request->regency_id)->where('tahun',$request->tahun)->count();

        if($check > 0)
        {
            return response()->json([
                'title'         => 'error',
                'message'       => 'Data allready exist',
                'type'          => 'failed',
            ]);

        }else{
            $data = $this->rasio-guru-murid-smp-mts->create($request->all());

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

