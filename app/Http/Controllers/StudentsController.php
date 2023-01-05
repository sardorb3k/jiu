<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pdf\RFPDI;
use App\Models\Student;

class StudentsController extends Controller
{

    public function index()
    {
        return view('dashboard.students.create');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fillPDFFile($file, $outputFilePath, $fullname = 'Sardor sattorov', $ps = 'AB', $pn = '12')
    {
        define('FPDF_FONTPATH', '../app/Pdf');
        $fpdi = new RFPDI();
        $fpdi->AddFont('montserrat', '', 'Montserrat-Bold.php');
        $count = $fpdi->setSourceFile($file);

        for ($i = 1; $i <= $count; $i++) {
            $template = $fpdi->importPage($i);
            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);

            $fpdi->SetFont("montserrat", "", 7);
            $fpdi->SetTextColor(255, 255, 255);

            $fpdi->RotatedText(203, 23, strtoupper("$ps $pn"), 90);
            $fpdi->RotatedText(203, 92, strtoupper($fullname), 90);
        }

        return $fpdi->Output($outputFilePath, 'F');
    }


    public function create()
    {
        return view('dashboard.students.create');
    }

    public function store(Request $request)
    {
        // return dd($request);
        try {
            $request->validate([
                'fullname' => 'required',
                'pseries' => 'required',
                'pnumber' => 'required',
            ]);
            Student::create([
                'fullname' => $request->fullname,
                'pseries' => $request->pseries,
                'pnumber' => $request->pnumber,
            ]);
            // PDF
            $filePath = public_path("sample.pdf");
            $outputFilePath = public_path("voucher/".time().".pdf");
            $this->fillPDFFile($filePath, $outputFilePath, $request->fullname, $request->pseries, $request->pnumber);

            return response()->file($outputFilePath);
        } catch (\Exception $e) {
            return redirect()->route('dashboard.students.create')->with('error', 'Error creating page ');
        }
    }
}
