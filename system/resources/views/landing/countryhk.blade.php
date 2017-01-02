@extends('master')


@section('sale')

<div id="whatsit" class="padding">
	<div class="container">
		<div class="row">

        <div class="col-md-13 col-md-offset-0">

			<div class="panel panel-warning pull-left" style="width: 20%">
                <div class="panel-body">
                    <form action="{{URL::current()}}">
                        <div>
                            <label for="">Price Range</label><br>
                            RM <input type="text" onkeypress="return isNumberKey(event,id)" id="min_price" name="min_price" value="{{Input::get('min_price')}}" style="width:50px; height: 25px">
                            - RM <input type="text" onkeypress="return isNumberKey(event,id)" id="max_price" name="max_price" value="{{Input::get('max_price')}}" style="width:50px; height: 25px" ><br><br>
                            <button style="float: right">GO!</button><br><br>

                        </div>
                        <div>
                            <?php $order_by = Input::has('order_by') ? Input::get('order_by') : null; ?>
                            <label for="">Order by</label>
                            <br>

                            <input type="radio" name="order_by" value="item_name" checked="checked"
                                onclick="submit();" {{$order_by=="item_name"?'checked':''}}> Item<br>
                            <input type="radio" name="order_by" value="selling_price" 
                                onclick="submit();" {{$order_by=="selling_price"?'checked':''}}> Price<br>
                            <input type="radio" name="order_by" value="category"
                                onclick="submit();" {{$order_by=="category"?'checked':''}}> Category<br>
                        </div>
                        <div>                            
                           <!--  <?php $category = Input::has('category') ? Input::get('category') : []; ?>
                            <br>
                            <label for="">Category</label> 
                            <br>
                            @foreach($category as $category)
                            <input type="checkbox"  name="categorys[]" value="{{$category->category}}" onclick="submit();"{{in_array($category->category,$categorys)?'checked':''}}> {{$category->category}}
                            <br>
                            @endforeach      -->                       
                        </div>                        
                    </form>
                </div>
            </div>

            <div class="panel panel-warning pull-right" style="width: 80%">
                <div class="panel-body">
                    @forelse($items as $item)
                        
                        <table cellpadding="6" style="float:left; margin-left:13px;position: relative;">                            
                            <tr>                              
                              <td>

                              <!-- <form action="{{ url('landing.countryhk/'.$item->avatar) }}" method="POST"> -->
                                
                                <a href="{{ url('/'.$item->item_name) }}" target="_blank">
                                <img style="border:#ffdab3 1px solid; position: relative" src="http://localhost/Sales/system/public/images/items/{{$item->avatar}}" width="200" height="230" /></a>
                                    
                                 <!--    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    
                                </form> -->
                              </td>
                            </tr>
                             <tr>
                              <td>                                  
                                <b><div style="color: brown; white-space: nowrap; width: 200px; 
                                    overflow: hidden; text-overflow: ellipsis; margin-bottom: -20px">RM {{$item->selling_price}}</div></b><br>
                                {{$item->item_name}}<br>
                                {{$item->description}}<br></td>                           
                            </tr>      
                                           
                          </table>
                          
                    @empty 
                        <p>There is no such item</p>
                    @endforelse
                </div>
            </div>
            </div>
            </div>
            </div>
		</div>

@endsection





