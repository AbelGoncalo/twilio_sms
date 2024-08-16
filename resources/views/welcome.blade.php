<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="../node_modules"> --}}
    {{-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.js"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SMS Twilio</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Serice SMS</a>

            <div class="">


                @guest

                    <a href="" class="btn btn-outline-success aut">Login</a>
                    <a href="" class="btn btn-outline-success">Register</a>
                @endguest
            </div>

        </div>
    </nav>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Service Message
            </div>
            <div class="card-body">
                <!-- Registration 13 - Bootstrap Brain Component -->
                <section class="bg-light py-3 py-md-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                                <div class="card border border-light-subtle rounded-3 shadow-sm">
                                    <div class="card-body p-3 p-md-4 p-xl-5">

                                        <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Send SMS Using
                                            Laravel</h2>
                                        <form action="{{ route('sendSms') }}" method="POST">
                                            @method('POST')
                                            @csrf
                                            <div class="row gy-2 overflow-hidden">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="Number" class="form-control" name="phone"
                                                            id="phone" value="" required>
                                                        <label for="phone" min="0" max="*"
                                                            class="form-label">Receiver Phone</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="message"
                                                            id="email" required>
                                                        <label for="message" class="form-label">Receiver
                                                            Message</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="d-grid my-3">
                                                        <button class="btn btn-primary btn-lg"
                                                            type="submit">Send</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> --}}



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
