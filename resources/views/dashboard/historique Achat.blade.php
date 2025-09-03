<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historique d'achat du client</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('styles/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body">
    <div class="container" style="margin-top: 20px">
        <div class="col-md-12 d-flex">
            <a href="{{route('dashboard.home')}}" type="button" class="btn btn-outline-secondary" ><i class="bi bi-chevron-left"></i> Précédent</a>
        </div>
        <hr>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <p class="nav-link fw-bold" style="color: rgba(255, 68, 0, 0.808)" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"  role="tab" aria-controls="nav-profile" aria-selected="false">Historique Personnel</p>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"></div>
        </div>

        <div class="row"> 
                <div class="col-md-12 col-xl-12 col-xxl-12 mt-4" >
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Articles</th>
                                <th>Descriptions</th>
                                <th>Quantité</th>
                                <th>Date d'achat</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>nom Article</td>
                                <td>desc article</td>
                                <td>Qté article</td>
                                <td>date achat article</td>           
                            </tr>
                            
                        </tbody>
                    </table>
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