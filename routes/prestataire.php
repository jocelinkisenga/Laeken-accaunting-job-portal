use App\Http\Controllers\Prestataire\PrestataireController;
use Illuminate\Support\Facades\Route;


Route::middleware(["auth","role:3"])->group(function () {
Route::get("dashboard-prestataire" , action: [PrestataireController::class, "index"])->name("dashboard.prestataire");
});