@extends('welcome')

@section('content')

    <div class="bg-center " id="scrollbar">
        <!-- product section starts  -->

        <section class="product " id="product">

            <!-- <h1 class="heading">latest <span>products</span></h1> -->

            <div class="box-container box-profile-team">

                <div class="box">
                    <img class="team-contact" src="{{ asset('image/member1.jpg') }}" alt="">
                    <h3 style="font-size: 4vmin; !important">Mr.<br>Tithipon Laikitpanit</h3>
                    <a href="https://github.com/Tithipon10" class="btn">Back-End</a>
                </div>
                <br>
                <br>
                <div class="box">
                    <img class="team-contact" src="{{ asset('image/member2.png') }}" alt="">
                    <h3 style="font-size: 4vmin; !important">Mr.<br>Wachirawit Prongthura</h3>
                    <a href="https://github.com/Wachirawti0924761113" class="btn">Front-End</a>
                </div>
                <br>
                <br>
                <div class="box">
                    <img class="team-contact" src="{{ asset('image/member3.png') }}" alt="">
                    <h3 style="font-size: 4vmin; !important">Mr.<br>Watcharakorn Choosriying</h3>
                    <a href="https://github.com/JJackeyy" class="btn">Tester</a>
                </div>

            </div>

        </section>

        <!-- product section ends -->
    </div>

@endsection
