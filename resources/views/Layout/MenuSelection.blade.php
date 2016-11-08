<?php


/*
foreach ($menudata as $md1) {


$q=$_POST['quantity'];
$p=$md1->price_per;



$total=$q*$p;
    }*/

?>



@extends('Layout/MainLayout')

@section('content')


            {!! Form::open(['method'=>'POST'])  !!}

            <div class="container">
                <table class="table-responsive ">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Price per </th>
                        <th></th>
                        <th></th>
                        <th>Total</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menudata as  $key =>$md)
                <tr class="txtMult">
                 <td>  <input class="menu" type="checkbox"   name="menuselect[{{$md->menu_item_id}}]" value="{{$md->menu_item_id}}"></td>
                 <td><input class="item" type="hidden"   name="item_name[{{$md->menu_item_id}}]" value="{{$md->item_name}}">{{$md->item_name}} </td>
                 <td><input id="<?php echo ('quantity_'.$key)?>" class="form-control quantity"  type="text"  name="quantity[{{$md->menu_item_id}}]" ></td>
                    <td></td>
                    <td>  X  </td>
                    <td></td>
                    <td><input class="price" type="hidden"   name="price_per[{{$md->menu_item_id}}]" value="{{$md->price_per}}">{{$md->price_per}} </td>

                      <td></td>
                  <td> = </td>

                    <td><input  id="<?php echo ('total_'.$key)?>" class="form-control total" type="number"  name="total[{{$md->menu_item_id}}]"></td>

                </tr>

                @endforeach
                    <tr class="row">
                        <td colspan="10" align="right">
                            Grand Total: <input type="text" id="grandTotal" name="grand_total" style="border-style: none;width: 80px;">
                        </td>
                    </tr>

                     {{--<tr class="row">
                        <td colspan="10" align="right">
                            Grand Total:Rs.<span id="grandTotal" name="grand_total">0.00</span>
                        </td>
                    </tr>--}}
                    <tr> <td colspan="1" > <input type="submit" class="btn btn-primary btn-block" value="Next"> </td></tr>
                    </tbody>
                </table>

            </div>

            {!! Form::close() !!}
    </div>
    @endsection
@section('script')
    <script>
        $(document).ready(function () {
            $(".txtMult input").keyup(multInputs);

            function multInputs() {
                var mult = 0;
                // for each row:
                $("tr.txtMult").each(function () {
                    // get the values from this row:
                    var $val1 = $('.quantity', this).val();
                    var $val2 = $('.price', this).val();
                    var $total = ($val1 * 1) * ($val2 * 1)
                    $('.total',this).val($total);
                    mult += $total;

                });
                $("#grandTotal").val(mult);
            }
        });
    </script>
{{--
    <script type="text/javascript">
        $(document).ready(function () {

                $("#quantity_0, #price_0").keyup(function () {
                    var a = $("#quantity_0").val();
                    /*alert(a);*/
                    var b = $("#price_0").val();
                    /*alert(b);
                     */
                    var c = a * b;

                    $("#total_0").val(c);
                });
        });
    </script>--}}
   {{-- <script type="text/javascript">
        $(document).ready(function () {
            var i = 0;
            while (i < 5) {
                var p = 'price_'+i;
                var q = 'quantity_'+i;
                var t = 'total_'+i;
                var p1='#'+p;
                var q1='#'+q;
                var t1='#'+t;
                /*alert(p)*/;

                $(q1,"#"+p).keyup(function () {
                    var a = $('#'+q).val();
                    /*alert(a);*/
                     var b = $('#'+p).val();
                    /*alert(b);
                     */
                    var c = a * b;

                    $('#'+t).val(c);
                });
                i++;
            }
        }); --}}

    @endsection

