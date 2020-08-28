<?php
namespace App\Console\Commands;
use App\User;
use Illuminate\Console\Command;
class InitUsers extends Command
{
 /**
 * The name and signature of the console command.
 *
 * @var string
 */
 protected $signature = 'init:users';
 /**
 * The console command description.
 *
 * @var string
 */
 protected $description = 'Initialize default users';
 /**
 * The users to be created
 *
 */
 private $users_data = [
 [
 'name' => 'Admin1',
 'email' => 'admin1@itms.com',
 'password' => 'adminpass',
 'role' => 'admin',
 ],
 [
 'name' => 'Admin2',
 'email' => 'admin2@itms.com',
 'password' => 'adminpass',
 'role' => 'admin',

 ],
 ];
 /**
 * Create a new command instance.
 *
 * @return void
 */
 public function __construct()
 {
 parent::__construct();
 }
 /**
 * Execute the console command.
 *
 * @return mixed
 */
 public function handle()
 {
 foreach($this->users_data as $user_data) {
 $user = new User;
 $user->name = $user_data['name'];
 $user->email = $user_data['email'];
 $user->password = bcrypt($user_data['password']);
 $user->role = $user_data['role'];
 $user->save();
 echo "User $user->email created successfully\n";
 }
 }
}
