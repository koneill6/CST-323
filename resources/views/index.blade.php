@extends('layouts.appMaster')
@section('title', 'Login')
@section('content')
    <section style="height: 450px;">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-8" style="width: 50%;height: 400px;text-align: left;font-size: 56px;">
                    <div style="margin-top: 20%;">
                        <h1 style="font-size: 56px;text-align: left;font-weight: bold;">Books you are looking for</h1>
                    </div><button class="btn btn-primary" type="button" style="margin: 14px;background: #087f5b;color: #fff;width: 125px;border-radius: 100px;margin-bottom: 10px;height: 40px;">FIND BOOKS</button>
                </div>
                <div class="col-md-4" style="width: 50%;height: 400px;"><img src="{{ asset('img/header.jpg') }}" style="height: 100%;"></div>
            </div>
        </div>
    </section>
    <div style="margin-left: 200px;">
        <h1 style="font-size: 36px;text-align: left;font-weight: bold;">Most Popular Books</h1>
        <div style="text-align: center;">
            <div class="container-fluid">
                <div class="row" style="height: 450px;margin: 0px;">
                    <div class="col-md-4 text-start competencesboxes" style="margin: 80px;width: 224px;margin-right: 50px;margin-top: 10px;height: 400px;box-shadow: 20px 30px rgba(0, 0, 0, 0.1);border-radius: 12px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;padding-right: 0px;padding-left: 0px;">
                        <figure class="figure"><img class="img-fluid figure-img" src="{{ asset('img/action.jpg') }}" style="border-radius: 12px;margin-bottom: 0px;"></figure>
                        <h1 class="competencestitles"><strong>Book #1</strong></h1>
                        <div style="margin-left: 20px;">
                            <p class="text-start competencesparagraph">Action<br>Adventure<br>Treasure<br>Comradery</p>
                        </div><button class="btn btn-primary text-center" type="button" style="margin: 14px;background: #087f5b;color: #fff;width: 125px;border-radius: 100px;margin-bottom: 10px;height: 40px;padding: 0px;">Checkout</button>
                    </div>
                    <div class="col-md-4 text-start competencesboxes" style="width: 224px;margin: 80px;margin-right: 50px;margin-top: 10px;height: 400px;box-shadow: 20px 30px rgba(0, 0, 0, 0.1);border-radius: 12px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;padding-left: 0px;padding-right: 0px;margin-left: 30px;">
                        <figure class="figure"><img class="img-fluid figure-img" src="{{ asset('img/comedy.jpg') }}" style="border-radius: 12px;margin-bottom: 0px;"></figure>
                        <h1 class="competencestitles"><strong>Book #2</strong></h1>
                        <div style="margin-left: 20px;">
                            <p class="text-start competencesparagraph">Comedy<br>Awkwardness<br>Coming of Age<br>Misunderstanding</p>
                        </div><button class="btn btn-primary text-center" type="button" style="margin: 14px;background: #087f5b;color: #fff;width: 125px;border-radius: 100px;margin-bottom: 10px;height: 40px;padding: 0px;">Checkout</button>
                    </div>
                    <div class="col-md-4 text-start competencesboxes" style="width: 224px;margin-right: 50px;margin-top: 10px;height: 400px;box-shadow: 20px 30px rgba(0, 0, 0, 0.1);border-radius: 12px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;padding-right: 0;padding-left: 0;margin-left: 30px;">
                        <figure class="figure"><img class="img-fluid figure-img" src="{{ asset('img/romance.jpg') }}" style="border-radius: 12px;margin-bottom: 0px;"></figure>
                        <h1 class="competencestitles"><strong>Book #3</strong></h1>
                        <div style="margin-left: 20px;">
                            <p class="text-start competencesparagraph">Romance<br>Betrayel<br>Murder<br>Tradition</p>
                        </div><button class="btn btn-primary text-center" type="button" style="margin: 14px;background: #087f5b;color: #fff;width: 125px;border-radius: 100px;margin-bottom: 10px;height: 40px;padding: 0px;">Checkout</button>
                    </div>
                </div>
            </div>
    </div>
@stop
