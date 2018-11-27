<?PHP
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
class StaticPagesController extends Controller{
   
public function home(){
   
    return view('home');
    
}
public function help(){
    
   return view('help');
    
}
public function about(){
    
   return view('about');
    
}
public function contact(){
    
   return view('contact');
   
}
public function new(){
    
   return view('new');
    

}
}
?>
