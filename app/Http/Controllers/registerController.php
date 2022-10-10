<!-- <?php
namespace App\Http\Controllers; -->


use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




// class registerController extends Controller
// {
//     public function register(){
//         return view('register', [
//             'register' => true
//         ]);
//     }

    // public function registerpost(Request $request){
    //    $validatedData = $request->validate([
    //     'email' => 'required|max:225',
    //     'username'=>'required','min:3','max :225','unique:users',
    //     'password'=>'required'|'min:5'|'max:225'|'password',
    //     'confirmpassword'=>'required'|'password'
    //    ]);
    //    $validatedData['password'] = Hash::make($validatedData['password']);
    //    User::create($validatedData);
    //    return redirect('/login')->with('success','Registration Succesfull! Please Login');
    // }
//     public function registpost(){
//         if(Auth::attempt(["email"=>request("email"),"username"=>request("username"), "password"=>request("password"), "confirmpassword"=>request("confirmpassword")])){
//            return 
//            User::create();
//            redirect('/register');
//         } return back()->with("Salah","Silahkan cek kembali email atau password Anda")->with("Email",request("email"));
//        }
// }

