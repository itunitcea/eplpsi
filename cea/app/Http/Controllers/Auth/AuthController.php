<?php

namespace App\Http\Controllers\Auth;

<<<<<<< HEAD
use App\Models\EplAuthority;
use App\Models\InspectionGroup;
use App\Models\Office;
use App\Models\UserType;
=======
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
<<<<<<< HEAD
    
    private $redirectTo = '/welcome';
    protected $username = 'user_name';

    private $userType;
    private $groupName;
    private $Office;
    private $authority;
=======
    private $redirectTo = '/';

>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83

    /**
     * Create a new authentication controller instance.
     *
<<<<<<< HEAD
=======
     * @return void
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
<<<<<<< HEAD

        $this->userType = new UserType();
        $this->groupName = new InspectionGroup();
        $this->Office = new Office();
        $this->authority = new EplAuthority();
    }
    /**
     * Override getRegister funtion
     */
    public function getRegister()
    {
        $userTypes      = $this->userType->userType(['userid','usertype']);
        $groupNames     = $this->groupName->groupName(['insgroupID','groupname']);
        $officeInfo     = $this->Office->officeInfo(['officeID','officeName']);
        $epl_authority  = $this->authority->authority(['eplID','eplDesc']);
        return view('auth.register',compact('userTypes','groupNames','officeInfo','epl_authority'));
    }
=======
    }

>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
<<<<<<< HEAD
            'user_name'     => 'required|max:255|unique:users',
            'email'         => 'required|max:255|unique:users',
            'password'      => 'required|confirmed|min:4',
            'user_type'     => 'required',
            'group_name'    => 'required',
            'scope'         => 'required',
            'authority'     => 'required',
        ]);
=======
            'user_name' => 'required|max:255|unique:users',
            'password' => 'required|confirmed|min:4',
        ]);     
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
<<<<<<< HEAD
            'user_name'     => $data['user_name'],
            'email'         => $data['email'],
            'password'      => md5($data['password']),
            'userType'      => $data['user_type'],
            'groupName'     => $data['group_name'],
            'scope'         => $data['scope'],
            'officeID'      => $data['officeID'],
            'userAdd1'      => $data['address'],
            'userAdd2'      => $data['address2'],
            'userCity'      => $data['city'],
            'userTel'       => $data['userTel'],
            'userMob'       => $data['userMob'],
            'eplauthority'  => $data['authority'],
=======
            'user_name' => $data['user_name'],
            //'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'officeID' => $data['officeID'],
            'groupname'=>$data['groupname'],
            'userType' => $data['userType'],
            'userTel' => $data['userTel'],
            'userCity'=> $data['userCity'],
            'userEmail' =>$data['userEmail'],
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
    ]);
    }
       
}