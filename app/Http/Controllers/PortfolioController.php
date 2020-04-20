<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Portfolio;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    
    
    public function index()
    {
        $portfolios = Portfolio::all();
        
        $portfolio = \DB::table('portfolios')->get();
        
        return view('Portfolio.indexPortfolio', compact('portfolios'), ['portfolios'=>$portfolio]);
    }
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Portfolio.createPortfolio ');
    }
    
        public function search(Request $request){
            $search = $request->get('search');
            $portfolio = \DB::table('portfolios')->where('name','like','%'.$search.'%')->paginate(10);
    
            return view('Portfolio.indexPortfolio',['portfolios'=>$portfolio]);
    
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio();

        $portfolio->Name = request('nom');
        $portfolio->ImgPortfolio_path = request('img')->store('img');
        $portfolio->DescriptionPortfolio = request('description');

        $portfolio->save();

        return redirect()->route('Portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);

        return view('Portfolio.editPortfolio',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);

            // si je veux supprimer l'ancienne img
            if(request('img') !== null){
                Storage::delete($portfolio->ImgPortfolio_path);  
                $portfolio->ImgPortfolio_path = request('img')->store('img');

            }

        $portfolio->Name = request('nom');
        $portfolio->DescriptionPortfolio = request('description');

        $portfolio->save();

        return redirect()->route('Portfolio.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);

        Storage::delete($portfolio->ImgPortfolio_path);

        $portfolio->delete();

        return redirect()->back();
    }
}
