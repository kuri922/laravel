<?
class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function show(Request $request, int $user_iid){
        return view('user.show', ['id'=>$user_iid]);
    }
}
?>