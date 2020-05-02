php artisan migrate:fresh 
php artisan db:seed
php artisan tinker 
use Spatie\Permission\Models\Role;
$role = Role::create(['name' => 'SuperAdmin']);
$user = User::find(1);
$user->assignRole('SuperAdmin');
exit
