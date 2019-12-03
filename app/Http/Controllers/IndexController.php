<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PokemonRequest;
use App\Http\Requests\PostRequest;
use App\User;
use App\pokemon;
use App\Post;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    
    public function pokedex(){
        $pokemons = pokemon::paginate(5);
        return view('pokedex')->with(['pokemons' => $pokemons]);
    }
    public function pokedexCreate(){
        return view('crear');
    }
    
    public function post(){
        $posts = Post::paginate(3);
        return view('posts')->with(['posts' => $posts]);
    }
    public function postCreate(){
        return view('crearPost');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
         return view('mostrar')->with(['pokemon' => $pokemon]);
    }
     
    public function store(PokemonRequest $request)
    {
        $input = $request->validated(); 
        $pokemon = new Pokemon($input); 
        if($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $file = $request->file('foto');
            $target = '../public/assets/img';
            $pokemon->foto = $file->getClientOriginalName();
            $file->move($target, $pokemon->foto);
        try{
            $result = $pokemon->save();
        }catch (\Exception $e){
            $error= ['general' => 'Hay valores repetidos'];
            return redirect('pokedex/create')->withErrors($error)->withInput();
        }
        return redirect('pokedex');
    }
    }
    
    public function storePost(PostRequest $request)
    {
        $input = $request->validated();
        $post = new Post($input); 
        $post->pokemon_id = $request->pokemon_id;
        try{
            $result = $post->save();
        }catch (\Exception $e){
            // $error= ['general' => 'Algo falla'];
            $error= ['general' => 'El pokemon no existe'];
            return redirect('post/create')->withErrors($error)->withInput();
        }
        return redirect('post');
    
    }
    
        public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect('pokedex');
    }
    
        public function destroyPost(Post $post)
    {
        $post->delete();
        return redirect('post');
    }
   

    
}
