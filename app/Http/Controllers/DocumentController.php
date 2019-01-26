<?php
namespace Laraspace\Http\Controllers;
use Exception;
use Laraspace\User;
use \Mpdf\Mpdf;

class DocumentController extends Controller
{
    public function quotation($id = null) {
        try {
            if($id == null) {
                throw new Exception("Please choose quotation");
            }
            $data['data'] = [];
            return view('admin.documents.quotation', $data);
            $mpdf = new Mpdf(['autoLangToFont' => true]);
            $view = view('admin.documents.quotation', $data);
            $mpdf->WriteHTML($view);
            $mpdf->Output();
        } catch (Exception $e) {
            return redirect()->back();
        }

    }
}
