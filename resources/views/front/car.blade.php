@extends('front.master')

@section('title', 'Cars')

@section('hero')
    {{-- Start Section Hero --}}
    <x-hero-section title="Cars"></x-hero-section>
    {{-- End Section Hero --}}
@endsection()

@section('content')
    {{-- Start Section Cars --}}
    <section id="section-cars">
        <div class="container">
            <div class="row">
                {{-- Start  Left Component--}}
                <div class="col-lg-3">
                    <div class="item_filter_group">
                        <h4>Vehicle Type</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="vehicle_type_1" name="vehicle_type_1" type="checkbox" value="vehicle_type_1">
                                <label for="vehicle_type_1">Car</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="vehicle_type_2" name="vehicle_type_2" type="checkbox" value="vehicle_type_2">
                                <label for="vehicle_type_2">Van</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="vehicle_type_3" name="vehicle_type_3" type="checkbox" value="vehicle_type_3">
                                <label for="vehicle_type_3">Minibus</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="vehicle_type_4" name="vehicle_type_4" type="checkbox" value="vehicle_type_4">
                                <label for="vehicle_type_4">Prestige</label>
                            </div>

                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Car Body Type</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="car_body_type_1" name="car_body_type_1" type="checkbox" value="car_body_type_1">
                                <label for="car_body_type_1">Convertible</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_2" name="car_body_type_2" type="checkbox" value="car_body_type_2">
                                <label for="car_body_type_2">Coupe</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_3" name="car_body_type_3" type="checkbox" value="car_body_type_3">
                                <label for="car_body_type_3">Exotic Cars</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_4" name="car_body_type_4" type="checkbox" value="car_body_type_4">
                                <label for="car_body_type_4">Hatchback</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_5" name="car_body_type_5" type="checkbox" value="car_body_type_5">
                                <label for="car_body_type_5">Minivan</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_6" name="car_body_type_6" type="checkbox" value="car_body_type_6">
                                <label for="car_body_type_6">Truck</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_7" name="car_body_type_7" type="checkbox" value="car_body_type_7">
                                <label for="car_body_type_7">Sedan</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_8" name="car_body_type_8" type="checkbox" value="car_body_type_8">
                                <label for="car_body_type_8">Sports Car</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_9" name="car_body_type_9" type="checkbox" value="car_body_type_9">
                                <label for="car_body_type_9">Station Wagon</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_body_type_10" name="car_body_type_10" type="checkbox" value="car_body_type_10">
                                <label for="car_body_type_10">SUV</label>
                            </div>

                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Car Seats</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="car_seat_1" name="car_seat_1" type="checkbox" value="car_seat_1">
                                <label for="car_seat_1">2 seats</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_seat_2" name="car_seat_2" type="checkbox" value="car_seat_2">
                                <label for="car_seat_2">4 seats</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_seat_3" name="car_seat_3" type="checkbox" value="car_seat_3">
                                <label for="car_seat_3">6 seats</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_seat_4" name="car_seat_4" type="checkbox" value="car_seat_4">
                                <label for="car_seat_4">6+ seats</label>
                            </div>

                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Car Engine Capacity (cc)</h4>
                        <div class="de_form">
                            <div class="de_checkbox">
                                <input id="car_engine_1" name="car_engine_1" type="checkbox" value="car_engine_1">
                                <label for="car_engine_1">1000 - 2000</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_engine_2" name="car_engine_2" type="checkbox" value="car_engine_2">
                                <label for="car_engine_2">2000 - 4000</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_engine_3" name="car_engine_3" type="checkbox" value="car_engine_3">
                                <label for="car_engine_3">4000 - 6000</label>
                            </div>

                            <div class="de_checkbox">
                                <input id="car_engine_4" name="car_engine_4" type="checkbox" value="car_engine_4">
                                <label for="car_engine_4">6000+</label>
                            </div>

                        </div>
                    </div>

                    <div class="item_filter_group">
                        <h4>Price ($)</h4>
                        <div class="price-input">
                            <div class="field">
                            <span>Min</span>
                            <input type="number" class="input-min" value="0">
                            </div>
                            <div class="field">
                            <span>Max</span>
                            <input type="number" class="input-max" value="2000">
                            </div>
                        </div>
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="2000" value="0" step="1">
                            <input type="range" class="range-max" min="0" max="2000" value="2000" step="1">
                        </div>
                    </div>
                </div>
                {{-- End Left Component --}}

                {{-- Start  Right Component --}}
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/jeep-renegade.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Jeep Renegade</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$265</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/bmw-m5.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Mini Cooper</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$244</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/ferrari-enzo.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ferarri Enzo</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$167</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/ford-raptor.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ford Raptor</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$147</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/mini-cooper.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Mini Cooper</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$238</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/vw-polo.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>VW Polo</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$106</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/chevrolet-camaro.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Chevrolet Camaro</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$245</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/hyundai-staria.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Hyundai Staria</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$191</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/toyota-rav.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Toyota Rav 4</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$114</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/bentley.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Bentley</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$299</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/lexus.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Lexus</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$131</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('assets-front') }}/images/cars/range-rover.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Range Rover</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$228</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>



                    </div>
                </div>
                {{-- End  Right Component --}}

            </div>
        </div>
    </section>
    {{-- End Section Cars --}}
@endsection()
