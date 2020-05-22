<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "<h1>Listagem do usuário com o código 1</h1>";
    }

    public function getData(){
        return "<h1>Método getData</h1>";
    }

    public function postData(Request $request){

        var_dump($request);
        return "<h1>Disparou ação de post'</h1>";
    }

    public function testPut(Request $request){
        echo "<h1>Usuário da edição é o de código 1</h1>";
        var_dump($request);
        echo "<h1>Disparou ação de PUT</h1>";
    }

    public function testPatch(Request $request){
        echo "<h1>Usuário da edição é o de código 1 PATCH</h1>";
        var_dump($request);
        echo "<h1>Disparou ação de PATCH</h1>";
    }

    public function testMatch(Request $request){
        echo "<h1>Disparou ação de MATCH</h1>";
        echo "<h1>Usuário da edição é o de código 2 MATCH</h1>";
        var_dump($request);
        
    }

    public function destroy(){
        echo "<h1>Disparou ação de Delete</h1>";
    }
}
