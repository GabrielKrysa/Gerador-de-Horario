<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DisciplinesController extends Controller
{
    function actionAlocation()
    {
        $disciplineData = DB::table('disciplines')->select()->get();
        $total_row = $disciplineData->count();
        $output = "";
        if ($total_row > 0) {
            foreach ($disciplineData as $row) {
                $departament = DB::table('departament')->select('name')->where('id', '=', $row->departamentId)->get();

                $output .= '
                  <tr>
                        <td>' . $row->id . '</td>
                        <td>' . $row->code . '</td>
                        <td>' . $departament[0]->name . '</td>
                        <td>' . $row->name . '</td>
                        <td>' . $row->idealYear . "°".'</td>
                        <td>' . $row->semester . '</td>
                  </tr>  
                ';
            }
        } else {
            $output = '
            <tr>
                <td align="center" colspan="5">Nenhuma matéria cadastrada</td>
            </tr>
            ';
        }

        $data = array(
            'table_data' => $output,
            'table_size' => $total_row
        );

        echo json_encode($data);
    }
}
