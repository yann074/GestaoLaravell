<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteContoller;
use App\Http\Controllers\FornecedorController;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Route;




Route::get('/', [PrincipalController::class , 'principal'])
    ->name('site.index')->
    middleware(LogAcessoMiddleware::class);

Route::get('/sobrenos', [SobreNosController::class ,'SobreNos'])
    ->name('site.sobrenos');
    //withoutMiddleware([LogAcessoMiddleware::class]) para nao usar o middleware

Route::get('/contatoo', [ContatoController::class ,'Contato'])
    ->name('site.contato');
    //assim que eu acessar ele vai ligar ao middleware para salvar o ip e a rota
Route::post('/contatoo', [ContatoController::class ,'salvar'])->name('site.contato');

/*Route::get('/contato/{nome}/{numero?}', function($nome, $numero = 90){
    echo "online $nome + $numero ";
}); */

//where para filtrar, nesse caso o id tem que ser de 0 a 9, tem como fazer mais de 1 where
//para enviar parametros pela url é com a {} e passar a variavel na funcao
/*
se colocar a '?' depois da variavel na url, 
ele define como opcional, e nao necessariamente
precisa ser passado
mas preciso definir um id na variavel como padrao

DA ESQUERDA PRA DIREITA DA ERRADO ( NAO PODE FICAR //AAA/AA) ELE NAO ENTENDE
DA DIREITA PRA ESQUERDA DÁ
*/


//ROUTE LIST

Route::get('/login',function(){
    return 'login';
})->name('site.login');



Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){
        return 'clientes';
    })->name('app.clientes');
    
    Route::get('/fornecedores', [FornecedorController::class, "index"])->name('app.fornecedores');
    
    Route::get('/produtos',function(){
        return 'produtos';
    })->name('app.produtos');
});

/*esse prefix e group serve para aclopar rotas podendo faze-lás privadas, dps 
do group ele espera uma funcao de callback e depois de prefix ele espera um 'link no caso' 
a /{nome}*/


/*Route::get('/rota1', function(){
    echo 'rota2';
})->name('site.rota1');

Route::get('/rota2', function(){
 return redirect()->route('site.rota1');   
})->name('site.rota2');
*/
//fazer rotas também

//Route::redirect('/rota2', '/rota1');
//para quando acessar a rota 2 ir para a rota 1 automatico


Route::fallback(function(){
    return 'Esta pagina nao existe, <a href="'.route('site.index').'">clique aqui</a> para voltar para o inicio';
});
/*fallback é para caso nao encontrar nenhuma
 pagina com esse link ele vai aparecer essa pag*/




 Route::get('/teste/{p1}/{p2}', [TesteContoller::class, 'teste'])->name('teste');