public function dokumen()
    {
        $project = DB::table('project')
                    ->join('maklon','project.maklon_id','=','maklon.id')
                    ->select('project.nama_project', 'maklon.dokumen_legalitas', 'maklon.contact')
                    ->get();
        $maklon = DB::table('maklon')->get();
        return view('Pages.dokumen',['project' => $project, 'maklon' => $maklon]);
    }