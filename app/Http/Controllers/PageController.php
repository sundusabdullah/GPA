<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{

    function GPA_form(){
        return view('GPA');
    }
    // Calculate GPA out of 4
    function GPA_calculation(Request $request){
        $grade_1 = $request->input('grade_1');
        $grade_2 = $request->input('grade_2');
        $grade_3 = $request->input('grade_3');
        $grade_4 = $request->input('grade_4');
        $grade_5 = $request->input('grade_5');
        $grade_6 = $request->input('grade_6');
        $time_1 = $request->input('time_1');
        $time_2 = $request->input('time_2');
        $time_3 = $request->input('time_3');
        $time_4 = $request->input('time_4');
        $time_5 = $request->input('time_5');
        $time_6 = $request->input('time_6');
        $result_1 = 0;
        $result_2 = 0;
        $result_3 = 0;
        $result_4 = 0;
        $result_5 = 0;
        $result_6 = 0;




        if(isset($_POST['calculate'])){
            // Grade_1
            if($grade_1 == 'A'){
                $result_1 = $time_1 * 4;
            }elseif($grade_1 == 'B'){
                $result_1 = $time_1 * 3;
            }elseif($grade_1 == 'C'){
                $result_1 = $time_1 * 2;
            }elseif($grade_1 == 'D'){
                $result_1 = $time_1 * 1;
            }elseif($grade_1 == 'F'){
                $result_1 = $time_1 * 0;
            }
            // end of grade_1

             // Grade_2
             if($grade_1 == 'A'){
                $result_2 = $time_2 * 4;
            }elseif($grade_2 == 'B'){
                $result_2 = $time_2 * 3;
            }elseif($grade_2 == 'C'){
                $result_2 = $time_2 * 2;
            }elseif($grade_2 == 'D'){
                $result_2 = $time_2 * 1;
            }elseif($grade_2 == 'F'){
                $result_2 = $time_2 * 0;
            }
            // end of grade_2

             // Grade_3
             if($grade_3 == 'A'){
                $result_3 = $time_3 * 4;
            }elseif($grade_3 == 'B'){
                $result_3 = $time_3 * 3;
            }elseif($grade_3 == 'C'){
                $result_3 = $time_3 * 2;
            }elseif($grade_3 == 'D'){
                $result_3 = $time_3 * 1;
            }elseif($grade_3 == 'F'){
                $result_3 = $time_3 * 0;
            }
            // end of grade_3

             // Grade_4
             if($grade_4 == 'A'){
                $result_4 = $time_4 * 4;
            }elseif($grade_4 == 'B'){
                $result_4 = $time_4 * 3;
            }elseif($grade_4 == 'C'){
                $result_4 = $time_4 * 2;
            }elseif($grade_4 == 'D'){
                $result_4 = $time_4 * 1;
            }elseif($grade_4 == 'F'){
                $result_4 = $time_4 * 0;
            }
            // end of grade_4

              // Grade_5
              if($grade_5 == 'A'){
                $result_5 = $time_5 * 4;
            }elseif($grade_5 == 'B'){
                $result_5 = $time_5 * 3;
            }elseif($grade_5 == 'C'){
                $result_5 = $time_5 * 2;
            }elseif($grade_5 == 'D'){
                $result_5 = $time_5 * 1;
            }elseif($grade_5 == 'F'){
                $result_5 = $time_5 * 0;
            }
            // end of grade_5

             // Grade_
             if($grade_6 == 'A'){
                $result_6 = $time_6 * 4;
            }elseif($grade_6 == 'B'){
                $result_6 = $time_6 * 3;
            }elseif($grade_6 == 'C'){
                $result_6 = $time_6 * 2;
            }elseif($grade_6 == 'D'){
                $result_6 = $time_6 * 1;
            }elseif($grade_6 == 'F'){
                $result_6 = $time_6 * 0;
            }
            // end of grade_5

            $Total = ($result_1 + $result_2 + $result_3 + $result_4 + $result_5 + $result_6)
            / ($time_1 + $time_2 + $time_3 + $time_4 + $time_5 + $time_6);


        }
        return view('GPA', compact('Total'));  
    }
}

?>