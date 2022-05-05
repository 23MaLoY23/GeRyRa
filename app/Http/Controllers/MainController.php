<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prepod;
use App\Models\ychenik;

use DB;

class MainController extends Controller
{
    public function main(){
        return view('glav');
    }
    
    public function main1(){
        return view('onas');
    }
    public function main2(){
        return view('spec');
    }
    public function main3(){
        return view('glav');
    }
    public function main4(){  
        return view('mtable');
    }      
    
    public function main7(){  
        return view('mtable2');
    }   
       
    public function main5(){
        $elements = new prepod();
        return view('table', ['elements' => $elements->all()]);
    }


    public function main_chek(Request $request){
        $element = new prepod();
        $element->Фамилия=$request->input('Фамилия');
        $element->Имя=$request->input('Имя');
        $element->Отчество=$request->input('Отчество');
        $element->Дата_рождения=$request->input('Дата_рождения');
        $element->Номер=$request->input('Номер');
        $element->Адрес=$request->input('Адрес');
        $element->Предмет=$request->input('Предмет');
        $element->Стаж=$request->input('Стаж');
        $element->Образование=$request->input('Образование');
        $element->save();
        return redirect()->route('table1');
    }

    public function main6(){
        $elements = new ychenik();
        return view('table2', ['elements' => $elements->all()]);
    }

    public function main_chek2(Request $request){
        $element = new ychenik();
        $element->Фамилия=$request->input('Фамилия');
        $element->Имя=$request->input('Имя');
        $element->Отчество=$request->input('Отчество');
        $element->Дата_рождения=$request->input('Дата_рождения');
        $element->Номер=$request->input('Номер');
        $element->Адрес=$request->input('Адрес');
        $element->Общее_время_обучения=$request->input('Общее_время_обучения');
        $element->Количество_работ=$request->input('Количество_работ');
        $element->Ср_балл=$request->input('Ср_балл');
        $element->save();
        return redirect()->route('table12');
    }

    public function Del($id){
            DB::delete('delete from  where id = ?', [$id]);
            echo "Поздравляю, ты удалил данные!<br/>";
            echo '<a href="/table"> А теперь вернись назад</a>';
    }
}


