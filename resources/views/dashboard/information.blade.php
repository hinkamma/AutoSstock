<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gérer</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('styles/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body">
    <div class="container" style="margin-top: 20px">
        <div class="col-md-12 d-flex">
            <a href="{{route('dashboard.home')}}" type="button" class="btn btn-outline-secondary" ><i class="bi bi-chevron-left"></i> Précédent</a>
            <button style="background: rgb(252, 105, 52)" class="btn text-light  ms-auto   d-xl-none d-xxl-none " type="submit"><i class="bi bi-plus-square"></i> Ajouter</button>
        </div>
        <hr>

        <div class="row">
            
            <div class="col-md-12 col-xl-12 col-xxl-12 mt-4" >
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Noms & prenoms acheteurs</th>
                            <th>Contacts</th>
                            <th>Adresses</th>
                            <th>Historiques</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>freddy hinkamma</td>
                            <td>223 457798573</td>
                            <td>rue 16 lyon</td>

                            <td>
                                <div class="row gap-1">
                                    <div class="col-12 col-sm-12 col-lg-12 col-md-8 col-xl-6 col-xxl-6"><i class=' fw-bold' style="color: rgba(0, 0, 0, 0.76)">achat d'un ordianteur de marque hp 500 SDD</i></div>
                                    <div class="col-12 col-sm-12 col-lg-12 col-md-4 col-xl-3 col-xxl-3"><a href="{{route('dashboard.historique_achat')}}" class="btn btn-outline-success btn-sm"><i class="bi bi-eye-open"></i> voir plus</a></div>
                                </div>
                            </td>
               
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
</body>
</html>