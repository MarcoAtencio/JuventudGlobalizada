php artisan migrate:fresh 
php artisan db:seed
use Spatie\Permission\Models\Role;

$role = Role::create(['name' => 'SuperAdmin']);

$user = User::find(2);

$user->assignRole('SuperAdmin');
