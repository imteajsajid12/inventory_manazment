
@extends('layouts.app')
@section('content')
{{-- menu --}}
@include('fontend.manu.manu')
    @include('fontend.manu.nav')
    <div class="continer">
        <div class="row">


            <div class="col-lg-8">
                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                <div class="table-responsive table--no-card m-b-40">
                                    <!--MESSEGE-->
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('danger'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
                    <table id="customers" class="table table-borderless table-striped ">
@php
    $total=0
@endphp
                        <thead>
                            <tr>
                                <th>Item name</th>
                                 <th>Price</th>
                                <th> Quantity</th>
                                <th> Discount</th>
                                <th> Total</th>
                                <th class="text-right">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($save as  $pro)
                            @php
                                $total += $pro->total
                            @endphp
                            <tr>
                                <td>{{ $pro->name }}</td>
                                <td>{{ $pro->price }}Tk</td>
                                <td>{{ $pro->quantity }}</td>
                                <td>{{ $pro->discount }}%</td>
                                <td>{{ $pro->total }}TK</td>
                                <td class="text-right"><a href="Delete/sell/{{ $pro->product_id}}/{{ $pro->quantity }}"class="btn btn-danger btn-sm"><i class="fa fa-times"style="font-size:15px;">
                                </i></a></td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4">Total</td>
                                <td>{{ $total }}TK</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
         </div>


         <div class="col-lg-4">
            <h2 class="title-1 m-b-25">Earnings By Items</h2>
            <div class="table-responsive table--no-card m-b-40">
           <form action="{{ route('save') }}" method="POST">
            @csrf
                    <div class="form-grup">
                    <label for="">Item Id</label>
                    <input type="text" class="form-control " id="country" name="id" required="" autofocus >
                    </div>
                    <div class="form-grup">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control " id="qty" name="qty" required="" autofocus >
                        </div>
                    <div class="form-grup">
                        <label for="">Item Name</label>
                        <input type="text" class="form-control " id="name" name="name" required="" autofocus >
                        </div>

                            <div class="form-grup">
                                <label for="">Discount</label>
                                <input type="number" class="form-control " value="0" id="discount" name="discount" required="" autofocus >
                                </div>
                                <div class="form-grup">
                                    <label for="">Price</label>
                                    <input type="number" class="form-control " id="price" name="price" required="" autofocus >
                                    </div>
                                    <div class="form-grup">
                                        <label for="">Total_Price</label>
                                        <input type="text" class="form-control " id="tprice" name="total" required="" autofocus >
                                        <input type="number" class="form-control " id="tprice1" name="bid" hidden >
                                        <input type="number" class="form-control " id="qty1" hidden  >
                                        <input type="number" class="form-control " id="qty2" name="quantity1" hidden  >

                                        </div>
                                        <br>
                                        <div class="form-grup">
                                        <button type="submit"  class="btn btn-primary  float-right"><i class="fa fa-plus"style="font-size:15px;"> </i>Add Item</button>

                                        </div>

            </form>
            <form action="{{ url('/sell/history') }}" method="GET">
                <input type="number" value="{{ $total }}" class="form-control " name="total" hidden  >
                <div class="form-grup">
                    <button type="submit"onclick="makepdf()" type="submit"  class="btn btn-danger"  style="float-left"><i class="fa fa-print"style="font-size:15px;"> </i> Print</button>

                    </div>
            </form>
            </div>
     </div>
        </div>
    </div>


    <script>

        $(function(){
        $( "#country" ).autocomplete({
                source:function(request,response) {
        $.getJSON('{{ url('/auto') }}',function(data){
        var array=$.map(data,function(row){

            return{
                value:row.product_name,
                label:row.product_name,
                quantity:row.quantity,
                name:row.name,
                product_name:row.name,
                product_price:row.product_price,


            }
        })
        response($.ui.autocomplete.filter(array,request.term));
        })
                },

                delay:500,
        select:function(event,ui){
            console.log(ui.item)
                        $('#name').val(ui.item.product_name);

                        $('#price').val(ui.item.product_price);
                        $('#tprice').val(ui.item.product_price);
                        $('#qty1').val(ui.item.quantity);



            }
        });

            });
            </script>

{{-- print --}}
<script>
    function makepdf(){
        var printme = document.getElementById('customers');
        var wme = window.open("","","width:700,height:900");
        wme.document.write(printme.outerHTML);
        wme.document.close();
        wme.print();
        wme.close();
    }
</script>



                <!--sum-->

<script>

    $(document).on("change keyup blur", "#qty", function() {
               var main = $('#price').val();
               var disc = $('#qty').val();

              var mult = main * disc;
              $('#tprice').val(mult);
               $('#tprice1').val(mult);
               $('#qty2').val(mult);
           });
           $(document).on("change keyup blur", "#qty", function() {
            var main = $('#qty1').val();
            var disc = $('#qty').val();
            // var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
            var mult = main - disc; // gives the value for subtract from main value

            $('#qty2').val(mult);

        });

        $(document).on("change keyup blur", "#discount", function() {
            var main = $('#tprice1').val();
            var disc = $('#discount').val();
            var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
            var mult = main * dec; // gives the value for subtract from main value
            var discont = main - mult;
            $('#tprice').val(discont);

        });
   </script>


@endsection
