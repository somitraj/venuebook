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

            <div class="container" style="margin-left: 370px">
                <table class="table-responsive ">
                    <h4>Dinner</h4>
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

                    @foreach($dinner as  $key =>$md)
                        <tr class="txtMult1">
                            <td>  <input class="menu" type="checkbox"   name="menuselect[{{$md->menu_item_id}}]" value="{{$md->menu_item_id}}"></td>
                            <td><input class="item" type="hidden"   name="item_name[{{$md->menu_item_id}}]" value="{{$md->item_name}}">{{$md->item_name}} </td>
                            <td><input id="<?php echo ('quantity_'.$key)?>" class="form-control quantity1"  type="text"  name="quantity[{{$md->menu_item_id}}]" ></td>
                            <td></td>
                            <td>  X  </td>
                            <td></td>
                            <td><input class="price1" type="hidden"   name="price_per[{{$md->menu_item_id}}]" value="{{$md->price_per}}">{{$md->price_per}} </td>

                            <td></td>
                            <td> = </td>

                            <td><input  id="<?php echo ('total_'.$key)?>" class="form-control total1" type="number"  name="total[{{$md->menu_item_id}}]"></td>


                        </tr>
                        <br>

                    @endforeach


                    <tr class="row">
                        <td colspan="10" align="right">
                            Total:Rs <input type="text" id="grandTotal1" name="grand_total1" style="border-style: none;width: 80px;">
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>

            <div class="container" style="margin-left: 370px">
                <table class="table-responsive ">
                    <h4>Snacks</h4>
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

                    @foreach($snacks as  $key =>$md)
                        <tr class="txtMult2">
                            <td>  <input class="menu" type="checkbox"   name="menuselect[{{$md->menu_item_id}}]" value="{{$md->menu_item_id}}"></td>
                            <td><input class="item" type="hidden"   name="item_name[{{$md->menu_item_id}}]" value="{{$md->item_name}}">{{$md->item_name}} </td>
                            <td><input id="<?php echo ('quantity_'.$key)?>" class="form-control quantity2"  type="text"  name="quantity[{{$md->menu_item_id}}]" ></td>
                            <td></td>
                            <td>  X  </td>
                            <td></td>
                            <td><input class="price2" type="hidden"   name="price_per[{{$md->menu_item_id}}]" value="{{$md->price_per}}">{{$md->price_per}} </td>

                            <td></td>
                            <td> = </td>

                            <td><input  id="<?php echo ('total_'.$key)?>" class="form-control total2" type="number"  name="total[{{$md->menu_item_id}}]"></td>



                        </tr>
                        <br>

                    @endforeach


                    <tr class="row">
                        <td colspan="10" align="right">
                            Total: <input type="text" id="grandTotal2" name="grand_total2" style="border-style: none;width: 80px;">
                        </td>
                    </tr>

                    {{--<tr class="row">
                       <td colspan="10" align="right">
                           Grand Total:Rs.<span id="grandTotal" name="grand_total">0.00</span>
                       </td>
                   </tr>--}}
                    </tbody>
                </table>

            </div>

            <div class="container" style="margin-left: 370px">
                <table class="table-responsive ">
                    <h4>Drinks</h4>
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

                    @foreach($drinks as  $key =>$md)
                        <tr class="txtMult3">
                            <td>  <input class="menu" type="checkbox"   name="menuselect[{{$md->menu_item_id}}]" value="{{$md->menu_item_id}}"></td>
                            <td><input class="item" type="hidden"   name="item_name[{{$md->menu_item_id}}]" value="{{$md->item_name}}">{{$md->item_name}} </td>
                            <td><input id="<?php echo ('quantity_'.$key)?>" class="form-control quantity3"  type="text"  name="quantity[{{$md->menu_item_id}}]" ></td>
                            <td></td>
                            <td>  X  </td>
                            <td></td>
                            <td><input class="price3" type="hidden"   name="price_per[{{$md->menu_item_id}}]" value="{{$md->price_per}}">{{$md->price_per}} </td>

                            <td></td>
                            <td> = </td>

                            <td><input  id="<?php echo ('total_'.$key)?>" class="form-control total3" type="number"  name="total[{{$md->menu_item_id}}]"></td>


                        </tr>
                        <br>

                    @endforeach


                    <tr class="row">
                        <td colspan="10" align="right">
                            Total: <input type="text" id="grandTotal3" name="grand_total3" style="border-style: none;width: 80px;">
                        </td>
                    </tr>

                    {{--<tr class="row">
                       <td colspan="10" align="right">
                           Grand Total:Rs.<span id="grandTotal" name="grand_total">0.00</span>
                       </td>
                   </tr>--}}
                    </tbody>
                </table>

            </div>

            <div class="container" style="margin-left: 370px">
                <table class="table-responsive ">
                    <h4>Dessert</h4>
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

                    @foreach($dessert as  $key =>$md)
                        <tr class="txtMult4">
                            <td>  <input class="menu" type="checkbox"   name="menuselect[{{$md->menu_item_id}}]" value="{{$md->menu_item_id}}"></td>
                            <td><input class="item" type="hidden"   name="item_name[{{$md->menu_item_id}}]" value="{{$md->item_name}}">{{$md->item_name}} </td>
                            <td><input id="<?php echo ('quantity_'.$key)?>" class="form-control quantity4"  type="text"  name="quantity[{{$md->menu_item_id}}]" ></td>
                            <td></td>
                            <td>  X  </td>
                            <td></td>
                            <td><input class="price4" type="hidden"   name="price_per[{{$md->menu_item_id}}]" value="{{$md->price_per}}">{{$md->price_per}} </td>

                            <td></td>
                            <td> = </td>

                            <td><input  id="<?php echo ('total_'.$key)?>" class="form-control total4" type="number"  name="total[{{$md->menu_item_id}}]"></td>


                        </tr>
                        <br>

                    @endforeach


                    <tr class="row">
                        <td colspan="10" align="right">
                            Total: <input type="text" id="grandTotal4" name="grand_total4" style="border-style: none;width: 80px;">
                        </td>
                    </tr>

                    {{--<tr class="row">
                       <td colspan="10" align="right">
                           Grand Total:Rs.<span id="grandTotal" name="grand_total">0.00</span>
                       </td>
                   </tr>--}}
                    </tbody>
                </table>

            </div>
            <div class="container" style="margin-left: 370px">
                <table class="table-responsive ">
                    <h4>Extra</h4>
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

                    @foreach($extra as  $key =>$md)
                        <tr class="txtMult5">
                            <td>  <input class="menu" type="checkbox"   name="menuselect[{{$md->menu_item_id}}]" value="{{$md->menu_item_id}}"></td>
                            <td><input class="item" type="hidden"   name="item_name[{{$md->menu_item_id}}]" value="{{$md->item_name}}">{{$md->item_name}} </td>
                            <td><input id="<?php echo ('quantity_'.$key)?>" class="form-control quantity5"  type="text"  name="quantity[{{$md->menu_item_id}}]" ></td>
                            <td></td>
                            <td>  X  </td>
                            <td></td>
                            <td><input class="price5" type="hidden"   name="price_per[{{$md->menu_item_id}}]" value="{{$md->price_per}}">{{$md->price_per}} </td>

                            <td></td>
                            <td> = </td>

                            <td><input  id="<?php echo ('total_'.$key)?>" class="form-control total5" type="number"  name="total[{{$md->menu_item_id}}]"></td>


                        </tr>
                        <br>

                    @endforeach


                    <tr class="row">
                        <td colspan="10" align="right">
                            Total: <input type="text" id="grandTotal5" name="grand_total5" style="border-style: none;width: 80px;">
                        </td>
                    </tr>

                    {{--<tr class="row">
                       <td colspan="10" align="right">
                           Grand Total:Rs.<span id="grandTotal" name="grand_total">0.00</span>
                       </td>
                   </tr>--}}
                    <tr> <td> <input type="submit" class="btn btn-primary btn-block" value="Next"> </td></tr>
                    </tbody>
                </table>

            </div>

            {!! Form::close() !!}
    </div>
            <br><br>
    @endsection
@section('script')
   {{-- <script>
        $(document).ready(function () {
            $(".txtMult input").keyup(multInputs);

            function multInputs() {
                var mult = 0;
                // for each row:
                $("tr.txtMult").each(function () {
                    // get the values from this row:
                    var $val1 = $('.quantity1', this).val();
                    var $val2 = $('.price1', this).val();

                    var $val3 = $('.quantity2', this).val();
                    var $val4 = $('.price2', this).val();

                    var $val5 = $('.quantity3', this).val();
                    var $val6 = $('.price3', this).val();

                    var $val7 = $('.quantity4', this).val();
                    var $val8 = $('.price4', this).val();

                    var $val9 = $('.quantity5', this).val();
                    var $val0 = $('.price5', this).val();

                    var $total1 = ($val1 * 1) * ($val2 * 1)
                    $('.total1',this).val($total1);
                    mult1 += $total1;

                    var $total2 = ($val3 * 1) * ($val4 * 1)
                    $('.total2',this).val($total2);
                    mult2 += $total2;

                    var $total3 = ($val5 * 1) * ($val6 * 1)
                    $('.total3',this).val($total3);
                    mult3 += $total3;

                    var $total4 = ($val7 * 1) * ($val8 * 1)
                    $('.total4',this).val($total4);
                    mult4 += $total4;

                    var $total5 = ($val9 * 1) * ($val0 * 1)
                    $('.total5',this).val($total5);
                    mult5 += $total5;

                });
                $("#grandTotal1").val(mult1);
                $("#grandTotal2").val(mult2);
                $("#grandTotal3").val(mult3);
                $("#grandTotal4").val(mult4);
                $("#grandTotal5").val(mult5);

            }
        });
    </script>--}}

    <script>
        $(document).ready(function () {
            $(".txtMult1 input").keyup(multInputs);

            function multInputs() {
                var mult1 = 0;
                // for each row:
                $("tr.txtMult1").each(function () {
                    // get the values from this row:
                    var $val1 = $('.quantity1', this).val();
                    var $val2 = $('.price1', this).val();
                    var $total1 = ($val1 * 1) * ($val2 * 1)
                    $('.total1',this).val($total1);
                    mult1 += $total1;
                });
                $("#grandTotal1").val(mult1);
            }
        });

        $(document).ready(function () {
            $(".txtMult2 input").keyup(multInputs);

            function multInputs() {
                var mult2 = 0;
                // for each row:
                $("tr.txtMult2").each(function () {
                    // get the values from this row:
                    var $val1 = $('.quantity2', this).val();
                    var $val2 = $('.price2', this).val();
                    var $total2 = ($val1 * 1) * ($val2 * 1)
                    $('.total2',this).val($total2);
                    mult2 += $total2;
                });
                $("#grandTotal2").val(mult2);
            }
        });
        $(document).ready(function () {
            $(".txtMult3 input").keyup(multInputs);

            function multInputs() {
                var mult3 = 0;
                // for each row:
                $("tr.txtMult3").each(function () {
                    // get the values from this row:
                    var $val1 = $('.quantity3', this).val();
                    var $val2 = $('.price3', this).val();
                    var $total3 = ($val1 * 1) * ($val2 * 1)
                    $('.total3',this).val($total3);
                    mult3 += $total3;
                });
                $("#grandTotal3").val(mult3);
            }
        });

        $(document).ready(function () {
            $(".txtMult4 input").keyup(multInputs);

            function multInputs() {
                var mult4 = 0;
                // for each row:
                $("tr.txtMult4").each(function () {
                    // get the values from this row:
                    var $val1 = $('.quantity4', this).val();
                    var $val2 = $('.price4', this).val();
                    var $total4 = ($val1 * 1) * ($val2 * 1)
                    $('.total4',this).val($total4);
                    mult4 += $total4;
                });
                $("#grandTotal4").val(mult4);
            }
        });

        $(document).ready(function () {
            $(".txtMult5 input").keyup(multInputs);

            function multInputs() {
                var mult5 = 0;
                // for each row:
                $("tr.txtMult5").each(function () {
                    // get the values from this row:
                    var $val1 = $('.quantity5', this).val();
                    var $val2 = $('.price5', this).val();
                    var $total5 = ($val1 * 1) * ($val2 * 1)
                    $('.total5',this).val($total5);
                    mult5 += $total5;
                });
                $("#grandTotal5").val(mult5);
            }
        });
    </script>


    @endsection

