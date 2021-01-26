<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

</head>
<style>
</style>

<body class="m-5">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <h4 class="text-center">Resultado de la transacción</h4>
            <div class="card" style="  border-top: #2599c5 5px solid;">
                <div class="card-body">
                    <div class="row">
                        <label class="text-s-font">EMPRESA</label>
                        <label>COLOMBIA</label>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label class="text-s-font">NIT</label>
                        </div>
                        <div class="col">
                            <label class="text-s-font">FECHA Y HORA</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>830.122</label>
                        </div>
                        <div class="col">
                            <label>2021-01-16 12:29:25</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label class="text-s-font">DESCRIPCIÓN</label>
                        </div>
                        <div class="col">
                            <label class="text-s-font">IP ORIGEN</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Pago servicio movil</label>
                        </div>
                        <div class="col">
                            <label>200.35.</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="text-s-font">METODO DE PAGO</label>
                        <div><img src="src/pse2.jpg" alt="metodo de pago"/></div>
                    </div>
                </div>
            </div>
            <div>
                <span class="fst-italic fw-normal text-muted">Enviar una compia del comprobante de transacción</span>
                <div class="input-group input-group-lg flex-nowrap">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control border-start-0 input-group-text"
                        placeholder="                       @gmail.com" aria-label="Username"
                        aria-describedby="addon-wrapping">
                    <span class="input-group-btn ms-1">
                        <button type="button" class="btn btn-lg btn-outline-success">Enviar</button>
                    </span>
                </div>
                <span class="m-green">¡Comprobante enviado con exito!</span>
            </div>
        </div>
        <div class="col">
            <h4 class="text-center">Comprobante de compra</h4>
            <div class="card" style="  border-top: #5bb314 5px solid;">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-4">
                            <img src="src/laptop.jpg" alt="metodo de pago" class="img" />
                        </div>
                        <div class="col col-6 mt-4">
                            <div class="row">
                                <label class="text-s-font">REFERENCIA</label>
                                <label>600321644B</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col">
                            <label class="text-s-font">NRO.DE RECIBO</label>
                        </div>
                        <div class="col">
                            <label class="text-s-font">ESTADO DE TRANSACCIÓN</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>6020891679</label>
                        </div>
                        <div class="col">
                            <label>Aceptada</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label class="text-s-font">REFERENCIA EPAYCO</label>
                        </div>
                        <div class="col">
                            <label class="text-s-font">VALOR</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>38104</label>
                        </div>
                        <div class="col">
                            <label>$159,468</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label class="text-s-font">ESTADO</label>
                        </div>
                        <div class="col">
                            <label class="text-s-font">AUTORIZACIÓN CUS</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="m-green fw-bold">Transacción Aceptada</label>
                        </div>
                        <div class="col">
                            <label>8629</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-lg text-center text-info fs-5"
                            style="background-color:transparent; align: center;">
                            <i class="fa fa-print"></i> Imprimir esta comprobante
                        </button>
                    </div>

                </div>
            </div>
            <div class="conten">
                <p class="text-center fs-6 mt-2">Aplicaremos tu pago, maximo en 24 horas, pudes <br> validar tusaldo en
                    Mi
                    movistar</p>

                <button type="button" class="btn btn-bg mt-3 btn-lg btn-block custom">Finalizar</button>
            </div>
        </div>
    </div>
</body>

</html>