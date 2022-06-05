<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>resutado</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        
        <div class="container">
            
                
                <div class="votacao">
                <h1>Total de votos</h1>

                    <div class="votacao_ops">
                
                        <div class="opcao_voto">
                            <h1>Antonio</h1>
                            <h2>22</h2>
                            <h3>{{ $total22 }}</h3>
                        </div>
                        <div class="opcao_voto">
                            <h1>jose</h1>
                            <h2>33</h2>
                            <h3>{{ $total33 }}</h3>
                        </div>
                        <div class="opcao_voto">
                            <h1>matheus</h1>
                            <h2>44</h2>
                            <h3>{{ $total44 }}</h3>
                        </div>

                    </div>


                </div>
                
            
        </div>

    </body>
</html>

<style>
*{
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
}
.votacao{
    background-color: #ffffff;
    text-align: center;
}
.votacao input{
    margin-bottom: 10px;
}
.container{
    width: 100vw;
    height: 100vh;
    display: flex;
    background: #6C7A89;
    justify-content: center;
    align-items: center;
}
.votacao_ops{
    background-color: #ffffff;
    display: flex;
}
.opcao_voto{
    margin: 10px;
    width:150px ;
    height:150px ;
    background-color: #dddddd ;
    text-align: center;
}
.opcao_voto h1{
    margin-top:10px;
    margin-bottom:20px;
}
.opcao_voto h2{
    margin-bottom:18px;
}
.opcao_voto h3{
    font-size:30px;
    color: green;
    background-color:white;
    margin-left:20px;
    margin-right:20px;
}
</style>