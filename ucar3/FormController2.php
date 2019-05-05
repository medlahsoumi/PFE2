<?

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\inscription;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing;
use Symfony\Component\Console\Helper\Table;


class FormController2 extends Controller
{   
    public function insert(Request $request)
    {
             $Cin = $request->input('Cin');
             $nom = $request->input('nom');
             $prenom = $request->input('prenom');
             $email = $request->input('email');
             $telephone = $request->input('telephone');
             $specialite = $request->input('specialite');
             $typedediplome = $request->input('typedediplome');
             $mentiondiplome = $request->input('mentiondiplome');
             $redoublement = $request->input('redoublement');
             $communication = $request->input('communication');
             $publication = $request->input('publication');
             $experiencePedagogiqueSecondaire = $request->input('experiencePedagogiqueSecondaire');
             $experiencePedagogiqueSupérieur = $request->input('experiencePedagogiqueSupérieur');

             $data = array(['Cin'=>$Cin,
             'nom'=>$nom,
             'prenom'=>$prenom,
             'email'=>$email,
             'telephone'=>$telephone,
             'specialite'=>$specialite,
             'typedediplome'=>$typedediplome,
             'mentiondiplome'=>$mentiondiplome,
             'redoublement'=>$redoublement,
             'communication'=>$communication,
             'publication'=>$publication,
             'experiencePedagogiqueSecondaire'=>$experiencePedagogiqueSecondaire,
             'experiencePedagogiqueSupérieur'=>$experiencePedagogiqueSupérieur]);
             DB::table('users')->insert($data);

    }

   
}

