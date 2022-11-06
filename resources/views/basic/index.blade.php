@extends('master')

@section('title')
    Home Page
@endsection

@section('body')
   <section>
       <div class="container-fluid row mx-0 px-0">
           <div class="row mx-0 px-0">
               <div class="col row mx-0 px-0">
                   <img src="{{ asset('/') }}images/wbd.jpg" class="mx-0 px-0" style="width: 100%; height: 500px;"  alt="">
               </div>
           </div>
       </div>
   </section>

   <section>
       <div class="container">
           <div class="row">
               <h2 class="text-center py-3">About Us </h2>
               <div class="col-md-6">
                   <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque dicta fugiat ipsum iusto, neque numquam perferendis quidem reprehenderit. Assumenda!</p>
                   <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque dicta fugiat ipsum iusto, neque numquam perferendis quidem reprehenderit. Assumenda!</p>
                   <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque dicta fugiat ipsum iusto, neque numquam perferendis quidem reprehenderit. Assumenda!</p>
                   <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque dicta fugiat ipsum iusto, neque numquam perferendis quidem reprehenderit. Assumenda!</p>
               </div>
               <div class="col-md-6">
                   <img src="{{ asset('/') }}images/who.jpg" alt="">
               </div>
           </div>
       </div>

   </section>
@endsection
