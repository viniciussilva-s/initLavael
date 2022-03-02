<?php

use Illuminate\Database\Seeder;

use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            "name"=>"Vinicius" ,
            "email"=>"admin@mail.com" ,
            "password"=>bcrypt("12345") ,
        ];
        if (User::where("email", "=", $dados["email"])->count()) {
            $user = User::where("email", "=", $dados["email"])->first() ;
            $user->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario criado!";
        }
    }
}
